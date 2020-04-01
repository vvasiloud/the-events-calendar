<?php

namespace Tribe\Events\Views\V2\Partials\Past_Events_View\Top_Bar\Nav;

use Tribe\Test\Products\WPBrowser\Views\V2\HtmlPartialTestCase;

class NextTest extends HtmlPartialTestCase
{

	protected $partial_path = 'past-events/top-bar/nav/next';

	/**
	 * Test render with context
	 */
	public function test_render_with_context() {
		$this->assertMatchesSnapshot( $this->get_partial_html( [
			'next_url' => 'http://test.tri.be',
		] ) );
	}
}
