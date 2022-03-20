<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l">Colors</h1>
				</div>
			</div>
		</div>

		<div id="primary-key-colors" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Primary key colors</h1>
					<p class="text-body-m">The primary key color is used to derive roles for key components across the UI, such as the FAB, prominent buttons, active states, as well as the tint of elevated surfaces.</p>

					<code>bg-primary</code><br>
					<code>bg-on-primary</code><br>
				</div>

				<div class="col sm-4 md-4">
					<div class="d-flex align-center mb-16">
						<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary"></div> Primary key color
					</div>
				</div>

				<div class="col sm-4 md-4">
					<div class="d-flex align-center mb-16">
						<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-on-primary"></div> On primary key color
					</div>
				</div>
			</div>
		</div>

		<div id="secondary-key-colors" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Secondary key colors</h1>
					<p class="text-body-m">The secondary key color is used for less prominent components in the UI such as filter chips, while expanding the opportunity for color expression.</p>

					<code>bg-secondary</code><br>
					<code>bg-on-secondary</code><br>
				</div>

				<div class="col sm-4 md-4">
					<div class="d-flex align-center mb-16">
						<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary"></div> Secondary key color
					</div>
				</div>

				<div class="col sm-4 md-4">
					<div class="d-flex align-center mb-16">
						<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-on-secondary"></div> On secondary key color
					</div>
				</div>
			</div>
		</div>

		<div id="tertiary-key-colors" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Tertiary key colors</h1>
					<p class="text-body-m">The tertiary key color is used to derive the roles of contrasting accents that can be used to balance primary and secondary colors or bring heightened attention to an element. The tertiary color role is left for teams to use at their discretion and is intended to support broader color expression in products.</p>

					<code>bg-tertiary</code><br>
					<code>bg-on-tertiary</code><br>
				</div>

				<div class="col sm-4 md-4">
					<div class="d-flex align-center mb-16">
						<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary"></div> Tertiary key color
					</div>
				</div>

				<div class="col sm-4 md-4">
					<div class="d-flex align-center mb-16">
						<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-on-tertiary"></div> On tertiary key color
					</div>
				</div>
			</div>
		</div>

		<div id="error-key-colors" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Error key colors</h1>
					<p class="text-body-m">In addition to the accent and neutral key color, the color system includes a semantic color role for error, again in the form of the error role itself, plus an on-error, error container, and on-error container role.</p>

					<code>bg-error</code><br>
					<code>bg-on-error</code><br>
				</div>

				<div class="col sm-4 md-4">
					<div class="d-flex align-center mb-16">
						<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error"></div> Error key color
					</div>
				</div>

				<div class="col sm-4 md-4">
					<div class="d-flex align-center mb-16">
						<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-on-error"></div> On error key color
					</div>
				</div>
			</div>
		</div>

		<div id="neutral-key-colors" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Neutral key colors</h1>
					<p class="text-body-m">The neutral key color is used to derive the roles of surface and background, as well as high emphasis text and icons.</p>

					<p class="text-body-m">The neutral variant key color is used to derive medium emphasis text and icons, surface variants, and component outlines.</p>

					<code>bg-background</code> or <code>bg-surface</code><br>
					<code>bg-surface-variant</code><br>
				</div>

				<div class="col sm-4 md-4">
					<div class="d-flex align-center mb-16">
						<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-surface"></div> Neutral key color
					</div>
				</div>

				<div class="col sm-4 md-4">
					<div class="d-flex align-center mb-16">
						<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-surface-variant"></div> Neutral variant key color
					</div>
				</div>
			</div>
		</div>

		<div class="container mb-80">
			<div class="row">
				<div id="primary-palette" class="col sm-4 md-4">
					<h1 class="text-headline-s mb-8">Primary palette</h1>

					<code>bg-primary-10</code><br>
					<code>bg-primary-20</code><br>
					<code>bg-primary-30</code><br>
					<code>bg-primary-40</code><br>
					<code>bg-primary-50</code><br>
					<code>bg-primary-60</code><br>
					<code>bg-primary-70</code><br>
					<code>bg-primary-80</code><br>
					<code>bg-primary-90</code><br>
					<code>bg-primary-95</code><br>
					<code>bg-primary-99</code><br><br>

					<div class="card bg-surface elevation-1 p-16 mb-24">	

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-10"></div> Primary 10
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-20"></div> Primary 20
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-30"></div> Primary 30
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-40"></div> Primary 40
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-50"></div> Primary 50
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-60"></div> Primary 60
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-70"></div> Primary 70
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-80"></div> Primary 80
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-90"></div> Primary 90
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-95"></div> Primary 95
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-primary-99"></div> Primary 99
						</div>

					</div>
				</div>

				<div id="secondary-palette" class="col sm-4 md-4">
					<h1 class="text-headline-s mb-8">Secondary palette</h1>

					<code>bg-secondary-10</code><br>
					<code>bg-secondary-20</code><br>
					<code>bg-secondary-30</code><br>
					<code>bg-secondary-40</code><br>
					<code>bg-secondary-50</code><br>
					<code>bg-secondary-60</code><br>
					<code>bg-secondary-70</code><br>
					<code>bg-secondary-80</code><br>
					<code>bg-secondary-90</code><br>
					<code>bg-secondary-95</code><br>
					<code>bg-secondary-99</code><br><br>

					<div class="card bg-surface elevation-1 p-16 mb-24">	

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-10"></div> Secondary 10
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-20"></div> Secondary 20
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-30"></div> Secondary 30
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-40"></div> Secondary 40
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-50"></div> Secondary 50
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-60"></div> Secondary 60
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-70"></div> Secondary 70
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-80"></div> Secondary 80
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-90"></div> Secondary 90
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-95"></div> Secondary 95
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-secondary-99"></div> Secondary 99
						</div>

					</div>
				</div>

				<div id="tertiary-palette" class="col sm-4 md-4">
					<h1 class="text-headline-s mb-8">Tertiary palette</h1>

					<code>bg-tertiary-10</code><br>
					<code>bg-tertiary-20</code><br>
					<code>bg-tertiary-30</code><br>
					<code>bg-tertiary-40</code><br>
					<code>bg-tertiary-50</code><br>
					<code>bg-tertiary-60</code><br>
					<code>bg-tertiary-70</code><br>
					<code>bg-tertiary-80</code><br>
					<code>bg-tertiary-90</code><br>
					<code>bg-tertiary-95</code><br>
					<code>bg-tertiary-99</code><br><br>

					<div class="card bg-surface elevation-1 p-16 mb-24">	

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-10"></div> Tertiary 10
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-20"></div> Tertiary 20
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-30"></div> Tertiary 30
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-40"></div> Tertiary 40
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-50"></div> Tertiary 50
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-60"></div> Tertiary 60
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-70"></div> Tertiary 70
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-80"></div> Tertiary 80
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-90"></div> Tertiary 90
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-95"></div> Tertiary 95
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-tertiary-99"></div> Tertiary 99
						</div>

					</div>
				</div>

				<div id="error-palette" class="col sm-4 md-4">
					<h1 class="text-headline-s mb-8">Error palette</h1>

					<code>bg-error-10</code><br>
					<code>bg-error-20</code><br>
					<code>bg-error-30</code><br>
					<code>bg-error-40</code><br>
					<code>bg-error-50</code><br>
					<code>bg-error-60</code><br>
					<code>bg-error-70</code><br>
					<code>bg-error-80</code><br>
					<code>bg-error-90</code><br>
					<code>bg-error-95</code><br>
					<code>bg-error-99</code><br><br>

					<div class="card bg-surface elevation-1 p-16 mb-24">	

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-10"></div> Error 10
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-20"></div> Error 20
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-30"></div> Error 30
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-40"></div> Error 40
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-50"></div> Error 50
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-60"></div> Error 60
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-70"></div> Error 70
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-80"></div> Error 80
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-90"></div> Error 90
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-95"></div> Error 95
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-error-99"></div> Error 99
						</div>

					</div>
				</div>

				<div id="neutral-palette" class="col sm-4 md-4">
					<h1 class="text-headline-s mb-8">Neutral palette</h1>

					<code>bg-neutral-10</code><br>
					<code>bg-neutral-20</code><br>
					<code>bg-neutral-30</code><br>
					<code>bg-neutral-40</code><br>
					<code>bg-neutral-50</code><br>
					<code>bg-neutral-60</code><br>
					<code>bg-neutral-70</code><br>
					<code>bg-neutral-80</code><br>
					<code>bg-neutral-90</code><br>
					<code>bg-neutral-95</code><br>
					<code>bg-neutral-99</code><br><br>

					<div class="card bg-surface elevation-1 p-16 mb-24">	

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-10"></div> Neutral 10
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-20"></div> Neutral 20
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-30"></div> Neutral 30
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-40"></div> Neutral 40
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-50"></div> Neutral 50
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-60"></div> Neutral 60
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-70"></div> Neutral 70
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-80"></div> Neutral 80
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-90"></div> Neutral 90
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-95"></div> Neutral 95
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-99"></div> Neutral 99
						</div>

					</div>
				</div>

				<div id="neutral-v-palette" class="col sm-4 md-4">
					<h1 class="text-headline-s mb-8">Neutral Variant palette</h1>

					<code>bg-neutral-v-10</code><br>
					<code>bg-neutral-v-20</code><br>
					<code>bg-neutral-v-30</code><br>
					<code>bg-neutral-v-40</code><br>
					<code>bg-neutral-v-50</code><br>
					<code>bg-neutral-v-60</code><br>
					<code>bg-neutral-v-70</code><br>
					<code>bg-neutral-v-80</code><br>
					<code>bg-neutral-v-90</code><br>
					<code>bg-neutral-v-95</code><br>
					<code>bg-neutral-v-99</code><br><br>

					<div class="card bg-surface elevation-1 p-16 mb-24">	

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-10"></div> Neutral Variant 10
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-20"></div> Neutral Variant 20
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-30"></div> Neutral Variant 30
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-40"></div> Neutral Variant 40
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-50"></div> Neutral Variant 50
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-60"></div> Neutral Variant 60
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-70"></div> Neutral Variant 70
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-80"></div> Neutral Variant 80
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-90"></div> Neutral Variant 90
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-95"></div> Neutral Variant 95
						</div>

						<div class="d-flex align-center mb-16">
							<div class="flex-shrink-0 height-40 width-40 r-circle mr-16 outline bg-neutral-v-99"></div> Neutral Variant 99
						</div>

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
				<li><a href="#primary-key-colors" class="ripple ripple-x-center">Primary</a></li>
				<li><a href="#secondary-key-colors" class="ripple ripple-x-center">Secondary</a></li>
				<li><a href="#tertiary-key-colors" class="ripple ripple-x-center">Tertiary</a></li>
				<li><a href="#error-key-colors" class="ripple ripple-x-center">Error</a></li>
				<li><a href="#neutral-key-colors" class="ripple ripple-x-center">Neutral</a></li>
				<li><a href="#primary-palette" class="ripple ripple-x-center">Primary palette</a></li>
				<li><a href="#secondary-palette" class="ripple ripple-x-center">Secondary palette</a></li>
				<li><a href="#tertiary-palette" class="ripple ripple-x-center">Tertiary palette</a></li>
				<li><a href="#error-palette" class="ripple ripple-x-center">Error palette</a></li>
				<li><a href="#neutral-palette" class="ripple ripple-x-center">Neutral palette</a></li>
				<li><a href="#neutral-v-palette" class="ripple ripple-x-center">Neutral variant palette</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include './footer.php'; ?>