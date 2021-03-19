/**
 * External dependencies
 */
import { compose } from 'redux';
import { connect } from 'react-redux';
import { uniq } from 'lodash';

/**
 * Internal dependencies
 */
import {
	actions as organizersActions,
	selectors as organizersSelectors,
} from '@moderntribe/events/data/blocks/organizers';
import { actions as detailsActions } from '@moderntribe/events/data/details';
import { withStore } from '@moderntribe/common/hoc';
import EventDetailsOrganizers from './template';

import { actions as requestActions } from '@moderntribe/common/store/middlewares/request';
import { getPostType, getDetails } from '@moderntribe/events/data/details/selectors';

/**
 * Module Code
 */

const mapStateToProps = ( state ) => ( {
	organizers: organizersSelectors.getMappedOrganizers( state ),
	state,
} );

const mergeProps = ( stateProps, dispatchProps, ownProps ) => {
	const { state, ...restStateProps } = stateProps;
	const { dispatch, ...restDispatchProps } = dispatchProps;

	return {
		...ownProps,
		...restStateProps,
		...restDispatchProps,
		addOrganizer: ( id, details ) => {
			const organizers = organizersSelectors.getOrganizersInClassic( state );

			ownProps.setAttributes( { organizer: id } );
			ownProps.setAttributes( { organizers: uniq( [ ...organizers, id ] ) } );
			dispatch( detailsActions.setDetails( id, details ) );
			dispatch( organizersActions.addOrganizerInClassic( id ) );
		},
		removeOrganizer: ( id, details ) => () => {
			const { status } = details;
			const type = getPostType( state, { name: id } );
			const path = `${ type }/${ id }`;
			
			if ( 'draft' === status ) {
				const options = {
					path,
					params: {
						method: 'DELETE',
					},
				};
				dispatch( requestActions.wpRequest( options ) );
			}
			
			const organizers = organizersSelectors.getOrganizersInClassic( state );
			const newOrganizers = organizers.filter( organizerId => organizerId !== id );

			ownProps.setAttributes( { organizers: newOrganizers } );
			dispatch( organizersActions.removeOrganizerInClassic( id ) );
		},
	};
};

export default compose(
	withStore(),
	connect( mapStateToProps, null, mergeProps ),
)( EventDetailsOrganizers );
