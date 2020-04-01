<?php

namespace Tribe\Events\Views\V2\Partials\Past_Events_View\Top_Bar\Nav;

use Tribe\Test\Products\WPBrowser\Views\V2\HtmlPartialTestCase;

class Next_DisabledTest extends HtmlPartialTestCase
{

	protected $partial_path = 'past-events/top-bar/nav/next-disabled';

	/**
	 * Test render
	 */
	public function test_render() {
		$this->assertMatchesSnapshot( $this->get_partial_html() );
	}
}
