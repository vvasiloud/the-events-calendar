<?php return '<div class="tribe-events-c-top-bar tribe-events-header__top-bar">

	<nav class="tribe-events-c-top-bar__nav tribe-common-a11y-hidden">
	<ul class="tribe-events-c-top-bar__nav-list">
		<li class="tribe-events-c-top-bar__nav-list-item">
	<button
		class="tribe-common-c-btn-icon tribe-common-c-btn-icon--caret-left tribe-events-c-top-bar__nav-link tribe-events-c-top-bar__nav-link--prev"
		aria-label="Prev"
		title="Prev"
		disabled
	>
	</button>
</li>

		<li class="tribe-events-c-top-bar__nav-list-item">
	<button
		class="tribe-common-c-btn-icon tribe-common-c-btn-icon--caret-right tribe-events-c-top-bar__nav-link tribe-events-c-top-bar__nav-link--next"
		aria-label="Next"
		title="Next"
		disabled
	>
	</button>
</li>
	</ul>
</nav>

	<a
	href="http://test.tri.be"
	class="tribe-common-c-btn-border tribe-events-c-top-bar__today-button tribe-common-a11y-hidden"
	data-js="tribe-events-view-link"
>
	Today</a>

	
	<div class="tribe-events-c-top-bar__datepicker">
		<button
			class="tribe-common-h3 tribe-common-h--alt tribe-events-c-top-bar__datepicker-button"
			data-js="tribe-events-top-bar-datepicker-button"
			type="button"
		>
			<time
				datetime="2018-01-01"
				class="tribe-events-c-top-bar__datepicker-time"
			>
									<span class="tribe-events-c-top-bar__datepicker-mobile">
						Now					</span>
					<span class="tribe-events-c-top-bar__datepicker-desktop tribe-common-a11y-hidden">
						Now					</span>
							</time>
							<span class="tribe-events-c-top-bar__datepicker-separator"> - </span>
				<time
					datetime="2018-01-01"
					class="tribe-events-c-top-bar__datepicker-time"
				>
					<span class="tribe-events-c-top-bar__datepicker-mobile">
						2018-01-01					</span>
					<span class="tribe-events-c-top-bar__datepicker-desktop tribe-common-a11y-hidden">
						January 1					</span>
				</time>
					</button>
		<label
			class="tribe-events-c-top-bar__datepicker-label tribe-common-a11y-visual-hide"
			for="tribe-events-top-bar-date"
		>
			Select date.		</label>
		<input
			type="text"
			class="tribe-events-c-top-bar__datepicker-input tribe-common-a11y-visual-hide"
			data-js="tribe-events-top-bar-date"
			id="tribe-events-top-bar-date"
			name="tribe-events-views[tribe-bar-date]"
			value="2018-01-01"
			tabindex="-1"
			autocomplete="off"
		/>
		<div class="tribe-events-c-top-bar__datepicker-container" data-js="tribe-events-top-bar-datepicker-container"></div>
	</div>


	<div class="tribe-events-c-top-bar__actions tribe-common-a11y-hidden">
	</div>

</div>
';
