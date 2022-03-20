<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l">Buttons</h1>
					<p class="mt-0 text-body-l">When choosing the right button for an action, consider the level of emphasis inherent to a button type.</p>
				</div>
			</div>
		</div>

		<div id="primary-buttons" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Primary Buttons</h1>
					<p class="text-body-m">Each screen should contain a single prominent button for the primary action. This high-emphasis button commands the most attention. The arrangement of on-screen elements should clearly communicate that other buttons are less important.</p>

					<code>button button-s ripple</code><br>
					<code>button button-s ripple disabled</code><br><br>

					<code>button button-m ripple</code><br>
					<code>button button-m ripple disabled</code><br><br>

					<code>button button-l ripple</code><br>
					<code>button button-l ripple disabled</code><br><br>

					<div class="card bg-surface elevation-1 p-16">
						<div class="text-title-s mb-8 mt-8">Small</div>
						<button class="button button-s ripple">
							<span>Button</span>
						</button>
						<button class="button button-s ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-s button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-s button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>

						<div class="text-title-s mb-8 mt-8">Medium</div>
						<button class="button button-m ripple">
							<span>Button</span>
						</button>
						<button class="button button-m ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-m button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-m button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>

						<div class="text-title-s mb-8 mt-8">Large</div>
						<button class="button button-l ripple">
							<span>Button</span>
						</button>
						<button class="button button-l ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-l button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-l button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div id="outlined-buttons" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Outlined Buttons</h1>
					<p class="text-body-m">Use an outlined button for actions that need attention but aren’t the primary action, such as See all or Add to cart. This is also the button to use for giving someone the opportunity to change their mind or escape a flow.</p>

					<code>button button-s outlined ripple</code><br>
					<code>button button-s outlined ripple disabled</code><br><br>

					<code>button button-m outlined ripple</code><br>
					<code>button button-m outlined ripple disabled</code><br><br>

					<code>button button-l outlined ripple</code><br>
					<code>button button-l outlined ripple disabled</code><br><br>

					<div class="card bg-surface elevation-1 p-16">
						<div class="text-title-s mb-8 mt-8">Small</div>
						<button class="button button-s outlined ripple">
							<span>Button</span>
						</button>
						<button class="button button-s outlined ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-s outlined button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-s outlined button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>

						<div class="text-title-s mb-8 mt-8">Medium</div>
						<button class="button button-m outlined ripple">
							<span>Button</span>
						</button>
						<button class="button button-m outlined ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-m outlined button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-m outlined button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>

						<div class="text-title-s mb-8 mt-8">Large</div>
						<button class="button button-l outlined ripple">
							<span>Button</span>
						</button>
						<button class="button button-l outlined ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-l outlined button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-l outlined button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div id="text-buttons" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Text Buttons</h1>
					<p class="text-body-m">Text buttons have less visual prominence, so should be used for low emphasis actions, such as an alternative option.</p>

					<code>button button-s text ripple</code><br>
					<code>button button-s text ripple disabled</code><br><br>

					<code>button button-m text ripple</code><br>
					<code>button button-m text ripple disabled</code><br><br>

					<code>button button-l text ripple</code><br>
					<code>button button-l text ripple disabled</code><br><br>

					<div class="card bg-surface elevation-1 p-16">
						<div class="text-title-s mb-8 mt-8">Small</div>
						<button class="button button-s text ripple">
							<span>Button</span>
						</button>
						<button class="button button-s text ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-s text button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-s text button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>

						<div class="text-title-s mb-8 mt-8">Medium</div>
						<button class="button button-m text ripple">
							<span>Button</span>
						</button>
						<button class="button button-m text ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-m text button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-m text button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>

						<div class="text-title-s mb-8 mt-8">Large</div>
						<button class="button button-l text ripple">
							<span>Button</span>
						</button>
						<button class="button button-l text ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-l text button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-l text button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div id="elevated-buttons" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Elevated Buttons</h1>
					<p class="text-body-m">Filled tonal buttons have a lighter background color and darker label color, making them less visually prominent than a regular, filled button. They’re still used for final or unblocking actions in a flow, but do so with less emphasis.</p>

					<code>button button-s elevated ripple</code><br>
					<code>button button-s elevated ripple disabled</code><br><br>

					<code>button button-m elevated ripple</code><br>
					<code>button button-m elevated ripple disabled</code><br><br>

					<code>button button-l elevated ripple</code><br>
					<code>button button-l elevated ripple disabled</code><br><br>

					<div class="card bg-surface elevation-1 p-16">
						<div class="text-title-s mb-8 mt-8">Small</div>
						<button class="button button-s elevated ripple">
							<span>Button</span>
						</button>
						<button class="button button-s elevated ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-s elevated button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-s elevated button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>

						<div class="text-title-s mb-8 mt-8">Medium</div>
						<button class="button button-m elevated ripple">
							<span>Button</span>
						</button>
						<button class="button button-m elevated ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-m elevated button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-m elevated button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>

						<div class="text-title-s mb-8 mt-8">Large</div>
						<button class="button button-l elevated ripple">
							<span>Button</span>
						</button>
						<button class="button button-l elevated ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-l elevated button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-l elevated button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div id="tonal-buttons" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Tonal Buttons</h1>
					<p class="text-body-m">Elevated buttons are essentially filled buttons with a lighter background color and a shadow. To prevent shadow creep, only use them when absolutely necessary, such as when the button requires visual separation from a patterned background.</p>

					<code>button button-s tonal ripple</code><br>
					<code>button button-s tonal ripple disabled</code><br><br>

					<code>button button-m tonal ripple</code><br>
					<code>button button-m tonal ripple disabled</code><br><br>

					<code>button button-l tonal ripple</code><br>
					<code>button button-l tonal ripple disabled</code><br><br>

					<div class="card bg-surface elevation-1 p-16">
						<div class="text-title-s mb-8 mt-8">Small</div>
						<button class="button button-s tonal ripple">
							<span>Button</span>
						</button>
						<button class="button button-s tonal ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-s tonal button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-s tonal button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>

						<div class="text-title-s mb-8 mt-8">Medium</div>
						<button class="button button-m tonal ripple">
							<span>Button</span>
						</button>
						<button class="button button-m tonal ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-m tonal button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-m tonal button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>

						<div class="text-title-s mb-8 mt-8">Large</div>
						<button class="button button-l tonal ripple">
							<span>Button</span>
						</button>
						<button class="button button-l tonal ripple" disabled>
							<span>Disabled</span>
						</button>
						<br>
						<button class="button button-l tonal button-icon ripple">
							<span class="icon-create"></span>
							<span>Button</span>
						</button>
						<button class="button button-l tonal button-icon ripple disabled" tabindex="-1">
							<span class="icon-create"></span>
							<span>Disabled</span>
						</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="layer">
</div>

<div class="sidebar top-64 p-16">
	<div class="p-fixed right-16 width-248">
		<h3 class="text-headline-s mb-8 mt-80">Contents</h3>
		<div class="list dense">
			<ul>
				<li><a href="#primary-buttons" class="ripple ripple-x-center">Primary buttons</a></li>
				<li><a href="#outlined-buttons" class="ripple ripple-x-center">Outlined buttons</a></li>
				<li><a href="#text-buttons" class="ripple ripple-x-center">Text buttons</a></li>
				<li><a href="#elevated-buttons" class="ripple ripple-x-center">Elevated buttons</a></li>
				<li><a href="#tonal-buttons" class="ripple ripple-x-center">Tonal buttons</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include './footer.php'; ?>