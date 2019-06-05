<?php
/**
 * View: List View Nav Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/list/nav/prev.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @var string $link The URL to the next page, if any, or an empty string.
 *
 * @version TBD
 *
 */
?>
<li class="tribe-common-c-nav__list-item">
	<?php if ( empty( $link ) ) : ?>
		<button class="tribe-common-c-nav__next" disabled>
	<?php else : ?>
		<a
			href="<?php echo esc_url( $link ); ?>"
			rel="next"
			class="tribe-common-c-nav__next"
			data-js="tribe-events-view-link"
		>
	<?php endif; ?>
		<?php echo esc_html( sprintf( __( 'Next %s', 'the-events-calendar' ), tribe_get_event_label_plural() ) ); ?>
	<?php if ( empty( $link ) ) : ?>
		</button>
	<?php else : ?>
		</a>
	<?php endif; ?>
</li>
