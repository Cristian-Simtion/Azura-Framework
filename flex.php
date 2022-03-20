<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row pt-80">
				<div class="col md-8">
					<h1 class="text-headline-l">Flex</h1>
					<p class="text-body-l">Control the layout of flex containers with alignment, justification and more with responsive flexbox utilities.</p>
				</div>
			</div>

			<div id="flex-classes" class="row mb-80">
				<div class="col xs-4 pt-64">
					<h1 class="text-headline-s mb-8">Flex classes</h1>
					<p class="text-body-l">You can also customize flex utilities to apply based upon various breakpoints.</p>

					<code>d-flex</code><br>
					<code>d-inline-flex</code><br><br>
					<code>d-sm-flex</code><br>
					<code>d-sm-inline-flex</code><br><br>
					<code>d-md-flex</code><br>
					<code>d-md-inline-flex</code><br><br>
					<code>d-lg-flex</code><br>
					<code>d-lg-inline-flex</code><br><br>
					<code>d-xl-flex</code><br>
					<code>d-xl-inline-flex</code>

					<div class="card bg-surface elevation-1 height-80 mt-16 d-flex align-center p-16">
						<div>
							<code>d-flex</code>
						</div>
					</div>

					<div class="card bg-surface elevation-1 height-80 mt-16 d-inline-flex align-center p-16">
						<div>
							<code>d-inline-flex</code>
						</div>
					</div>

				</div>
			</div>

			<div id="flex-direction" class="row mb-80">
				<div class="col xs-4 pt-64">
					<h3 class="text-headline-s mb-8">Flex direction</h3>
					<p class="text-body-l">By default, <code>d-flex</code> applies <code>flex-direction: row</code> and can generally be omitted. However, there may be situations where you need to explicitly define it.</p>

					<code>flex-row</code><br>
					<code>flex-row-reverse</code><br>
					<code>flex-column</code><br>
					<code>flex-column-reverse</code><br><br>
					<code>flex-sm-row</code><br>
					<code>flex-sm-row-reverse</code><br>
					<code>flex-sm-column</code><br>
					<code>flex-sm-column-reverse</code><br><br>
					<code>flex-md-row</code><br>
					<code>flex-md-row-reverse</code><br>
					<code>flex-md-column</code><br>
					<code>flex-md-column-reverse</code><br><br>
					<code>flex-lg-row</code><br>
					<code>flex-lg-row-reverse</code><br>
					<code>flex-lg-column</code><br>
					<code>flex-lg-column-reverse</code><br><br>
					<code>flex-xl-row</code><br>
					<code>flex-xl-row-reverse</code><br>
					<code>flex-xl-column</code><br>
					<code>flex-xl-column-reverse</code>

					<h4 class="text-title-m mb-8">Flex row</h4>
					<p class="text-body-l"><code>flex-row</code> and <code>flex-row-reverse</code></p>
					<div class="card bg-surface elevation-1 height-80 mt-16 d-flex align-center p-16 gap-16">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<div class="card bg-surface elevation-1 height-80 mt-16 d-flex align-center p-16 gap-16 flex-row-reverse">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Flex column</h4>
					<p class="text-body-l"><code>flex-column</code> and <code>flex-column-reverse</code></p>
					<div class="card bg-surface elevation-1 mt-16 d-flex align-center p-16 gap-16 flex-column">
						<div class="card outline p-16 r-8 secondary width-full">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary width-full">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary width-full">
							Flex item 3
						</div>
					</div>

					<div class="card bg-surface elevation-1 mt-16 d-flex align-center p-16 gap-16 flex-column-reverse">
						<div class="card outline p-16 r-8 secondary width-full">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary width-full">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary width-full">
							Flex item 3
						</div>
					</div>

				</div>
			</div>

			<div id="flex-justify" class="row mb-80">
				<div class="col xs-4 pt-64">
					<h3 class="text-headline-s mb-8">Flex justify</h3>
					<p class="text-body-l">The justify content flex setting can be changed using the flex justify classes. This by default will modify the flexbox items on the x-axis but is reversed when using flex direction column, modifying the y-axis.</p>

					<code>justify-start</code><br>
					<code>justify-end</code><br>
					<code>justify-center</code><br>
					<code>justify-space-between</code><br>
					<code>justify-space-around</code><br><br>
					<code>justify-sm-start</code><br>
					<code>justify-sm-end</code><br>
					<code>justify-sm-center</code><br>
					<code>justify-sm-space-between</code><br>
					<code>justify-sm-space-around</code><br><br>
					<code>justify-md-start</code><br>
					<code>justify-md-end</code><br>
					<code>justify-md-center</code><br>
					<code>justify-md-space-between</code><br>
					<code>justify-md-space-around</code><br><br>
					<code>justify-lg-start</code><br>
					<code>justify-lg-end</code><br>
					<code>justify-lg-center</code><br>
					<code>justify-lg-space-between</code><br>
					<code>justify-lg-space-around</code><br><br>
					<code>justify-xl-start</code><br>
					<code>justify-xl-end</code><br>
					<code>justify-xl-center</code><br>
					<code>justify-xl-space-between</code><br>
					<code>justify-xl-space-around</code>

					<h4 class="text-title-m mb-8">Justify start</h4>
					<p class="text-body-l"><code>justify-start</code></p>

					<div class="card bg-surface elevation-1 height-80 mt-16 d-flex align-center p-16 gap-16 justify-start">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Justify center</h4>
					<p class="text-body-l"><code>justify-center</code></p>

					<div class="card bg-surface elevation-1 height-80 mt-16 d-flex align-center p-16 gap-16 justify-center">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Justify end</h4>
					<p class="text-body-l"><code>justify-end</code></p>

					<div class="card bg-surface elevation-1 height-80 mt-16 d-flex align-center p-16 gap-16 justify-end">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Justify space between</h4>
					<p class="text-body-l"><code>justify-space-between</code></p>

					<div class="card bg-surface elevation-1 height-80 mt-16 d-flex align-center p-16 gap-16 justify-space-between">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Justify space around</h4>
					<p class="text-body-l"><code>justify-space-around</code></p>

					<div class="card bg-surface elevation-1 height-80 mt-16 d-flex align-center p-16 gap-16 justify-space-around">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>
				</div>
			</div>

			<div id="flex-align" class="row mb-80">
				<div class="col xs-4 pt-64">
					<h3 class="text-headline-s mb-8">Flex Align</h3>
					<p class="text-body-l">The align-items flex setting can be changed using the flex align classes. This by default will modify the flexbox items on the y-axis but is reversed when using flex direction column, modifying the x-axis.</p>

					<code>align-start</code><br>
					<code>align-end</code><br>
					<code>align-center</code><br>
					<code>align-stretch</code><br><br>
					<code>align-sm-start</code><br>
					<code>align-sm-end</code><br>
					<code>align-sm-center</code><br>
					<code>align-sm-stretch</code><br><br>
					<code>align-md-start</code><br>
					<code>align-md-end</code><br>
					<code>align-md-center</code><br>
					<code>align-md-stretch</code><br><br>
					<code>align-lg-start</code><br>
					<code>align-lg-end</code><br>
					<code>align-lg-center</code><br>
					<code>align-lg-stretch</code><br><br>
					<code>align-xl-start</code><br>
					<code>align-xl-end</code><br>
					<code>align-xl-center</code><br>
					<code>align-xl-stretch</code><br>

					<h4 class="text-title-m mb-8">Align start</h4>
					<p class="text-body-l"><code>align-start</code></p>

					<div class="card bg-surface elevation-1 height-128 mt-16 d-flex p-16 gap-16 align-start">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Align center</h4>
					<p class="text-body-l"><code>align-center</code></p>

					<div class="card bg-surface elevation-1 height-128 mt-16 d-flex p-16 gap-16 align-center">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Align end</h4>
					<p class="text-body-l"><code>align-end</code></p>

					<div class="card bg-surface elevation-1 height-128 mt-16 d-flex p-16 gap-16 align-end">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Align stretch</h4>
					<p class="text-body-l"><code>align-stretch</code></p>

					<div class="card bg-surface elevation-1 height-128 mt-16 d-flex p-16 gap-16 align-stretch">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>
				</div>
			</div>

			<div id="flex-align-self" class="row mb-80">
				<div class="col xs-4 pt-64">
					<h3 class="text-headline-s mb-8">Flex align self</h3>
					<p class="text-body-l">The align self flex setting can be changed using the flex align-self classes. This by default will modify the flexbox items on the x-axis but is reversed when using flex direction column, modifying the y-axis.</p>

					<code>align-self-start</code><br>
					<code>align-self-end</code><br>
					<code>align-self-center</code><br>
					<code>align-self-auto</code><br>
					<code>align-self-stretch</code><br><br>
					<code>align-self-sm-start</code><br>
					<code>align-self-sm-end</code><br>
					<code>align-self-sm-center</code><br>
					<code>align-self-sm-auto</code><br>
					<code>align-self-sm-stretch</code><br><br>
					<code>align-self-md-start</code><br>
					<code>align-self-md-end</code><br>
					<code>align-self-md-center</code><br>
					<code>align-self-md-auto</code><br>
					<code>align-self-md-stretch</code><br><br>
					<code>align-self-lg-start</code><br>
					<code>align-self-lg-end</code><br>
					<code>align-self-lg-center</code><br>
					<code>align-self-lg-auto</code><br>
					<code>align-self-lg-stretch</code><br><br>
					<code>align-self-xl-start</code><br>
					<code>align-self-xl-end</code><br>
					<code>align-self-xl-center</code><br>
					<code>align-self-xl-auto</code><br>
					<code>align-self-xl-stretch</code><br>

					<h4 class="text-title-m mb-8">Align self start</h4>
					<p class="text-body-l"><code>align-self-start</code></p>

					<div class="card bg-surface elevation-1 height-128 mt-16 d-flex p-16 gap-16">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary height-64 align-self-start">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Align self center</h4>
					<p class="text-body-l"><code>align-self-center</code></p>

					<div class="card bg-surface elevation-1 height-128 mt-16 d-flex p-16 gap-16">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary height-64 align-self-center">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Align self end</h4>
					<p class="text-body-l"><code>align-self-end</code></p>

					<div class="card bg-surface elevation-1 height-128 mt-16 d-flex p-16 gap-16">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary height-64 align-self-end">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Align self stretch</h4>
					<p class="text-body-l"><code>align-self-stretch</code></p>

					<div class="card bg-surface elevation-1 height-128 mt-16 d-flex p-16 gap-16">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary align-self-stretch">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>

					<h4 class="text-title-m mb-8">Align self auto</h4>
					<p class="text-body-l"><code>align-self-auto</code></p>

					<div class="card bg-surface elevation-1 height-128 mt-16 d-flex p-16 gap-16">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary align-self-auto">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>
					</div>
				</div>
			</div>

			<div id="flex-wrap" class="row mb-80">
				<div class="col xs-4 pt-64">
					<h3 class="text-headline-s mb-8">Flex wrap</h3>
					<p class="text-body-l">By default .d-flex does not provide any wrapping (behaves similarly to <code>flex-wrap: nowrap</code>). This can be modified by applying flex-wrap helper classes in the format <code>flex(-{breakpoint})-{condition}</code> where condition can be <code>nowrap</code>, <code>wrap</code>, or <code>wrap-reverse</code>.</p>

					<code>flex-nowrap</code><br>
					<code>flex-wrap</code><br>
					<code>flex-wrap-reverse</code><br><br>
					<code>flex-sm-nowrap</code><br>
					<code>flex-sm-wrap</code><br>
					<code>flex-sm-wrap-reverse</code><br><br>
					<code>flex-md-nowrap</code><br>
					<code>flex-md-wrap</code><br>
					<code>flex-md-wrap-reverse</code><br><br>
					<code>flex-lg-nowrap</code><br>
					<code>flex-lg-wrap</code><br>
					<code>flex-lg-wrap-reverse</code><br><br>
					<code>flex-xl-nowrap</code><br>
					<code>flex-xl-wrap</code><br>
					<code>flex-xl-wrap-reverse</code><br>

					<h4 class="text-title-m mb-8">Flex nowrap</h4>
					<p class="text-body-l"><code>flex-nowrap</code></p>

					<div class="card bg-surface elevation-1 mt-16 d-flex p-16 gap-16 width-320 flex-nowrap">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary align-self-auto">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 4
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 5
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 6
						</div>
					</div>

					<h4 class="text-title-m mb-8">Flex wrap</h4>
					<p class="text-body-l"><code>flex-wrap</code></p>

					<div class="card bg-surface elevation-1 mt-16 d-flex p-16 gap-16 width-320 flex-wrap">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary align-self-auto">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 4
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 5
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 6
						</div>
					</div>

					<h4 class="text-title-m mb-8">Flex wrap reverse</h4>
					<p class="text-body-l"><code>flex-wrap-reverse</code></p>

					<div class="card bg-surface elevation-1 mt-16 d-flex p-16 gap-16 width-320 flex-wrap-reverse">
						<div class="card outline p-16 r-8 secondary">
							Flex item 1
						</div>

						<div class="card outline p-16 r-8 secondary align-self-auto">
							Flex item 2
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 3
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 4
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 5
						</div>

						<div class="card outline p-16 r-8 secondary">
							Flex item 6
						</div>
					</div>
				</div>
			</div>

			<div id="flex-order" class="row mb-80">
				<div class="col xs-4 pt-64">
					<h3 class="text-headline-s mb-8">Flex order</h3>
					<p class="text-body-l">You can change the visual order of flex items with the order utilities.</p>

					<code>order-first</code><br>
					<code>order-0</code><br>
					<code>order-1</code><br>
					<code>order-2</code><br>
					<code>order-3</code><br>
					<code>order-4</code><br>
					<code>order-5</code><br>
					<code>order-6</code><br>
					<code>order-7</code><br>
					<code>order-8</code><br>
					<code>order-9</code><br>
					<code>order-10</code><br>
					<code>order-11</code><br>
					<code>order-12</code><br>
					<code>order-last</code><br><br>
					<code>order-sm-first</code><br>
					<code>order-sm-0</code><br>
					<code>order-sm-1</code><br>
					<code>order-sm-2</code><br>
					<code>order-sm-3</code><br>
					<code>order-sm-4</code><br>
					<code>order-sm-5</code><br>
					<code>order-sm-6</code><br>
					<code>order-sm-7</code><br>
					<code>order-sm-8</code><br>
					<code>order-sm-9</code><br>
					<code>order-sm-10</code><br>
					<code>order-sm-11</code><br>
					<code>order-sm-12</code><br>
					<code>order-sm-last</code><br><br>
					<code>order-md-first</code><br>
					<code>order-md-0</code><br>
					<code>order-md-1</code><br>
					<code>order-md-2</code><br>
					<code>order-md-3</code><br>
					<code>order-md-4</code><br>
					<code>order-md-5</code><br>
					<code>order-md-6</code><br>
					<code>order-md-7</code><br>
					<code>order-md-8</code><br>
					<code>order-md-9</code><br>
					<code>order-md-10</code><br>
					<code>order-md-11</code><br>
					<code>order-md-12</code><br>
					<code>order-md-last</code><br><br>
					<code>order-lg-first</code><br>
					<code>order-lg-0</code><br>
					<code>order-lg-1</code><br>
					<code>order-lg-2</code><br>
					<code>order-lg-3</code><br>
					<code>order-lg-4</code><br>
					<code>order-lg-5</code><br>
					<code>order-lg-6</code><br>
					<code>order-lg-7</code><br>
					<code>order-lg-8</code><br>
					<code>order-lg-9</code><br>
					<code>order-lg-10</code><br>
					<code>order-lg-11</code><br>
					<code>order-lg-12</code><br>
					<code>order-lg-last</code><br><br>
					<code>order-lg-first</code><br>
					<code>order-xl-0</code><br>
					<code>order-xl-1</code><br>
					<code>order-xl-2</code><br>
					<code>order-xl-3</code><br>
					<code>order-xl-4</code><br>
					<code>order-xl-5</code><br>
					<code>order-xl-6</code><br>
					<code>order-xl-7</code><br>
					<code>order-xl-8</code><br>
					<code>order-xl-9</code><br>
					<code>order-xl-10</code><br>
					<code>order-xl-11</code><br>
					<code>order-xl-12</code><br>
					<code>order-xl-last</code><br>

					<h4 class="text-title-m mb-8">Flex order</h4>
					<p class="text-body-l"><code>order-first</code></p>

					<div class="card bg-surface elevation-1 mt-16 d-flex p-16 gap-16">
						<div class="card outline p-16 r-8 secondary">
							1
						</div>

						<div class="card outline p-16 r-8 secondary align-self-auto">
							2
						</div>

						<div class="card outline p-16 r-8 secondary">
							3
						</div>

						<div class="card outline p-16 r-8 secondary">
							4
						</div>

						<div class="card outline p-16 r-8 secondary order-first">
							5 (first)
						</div>

						<div class="card outline p-16 r-8 secondary">
							6
						</div>
					</div>
				</div>
			</div>

			<div id="flex-shrink-and-grow" class="row mb-80">
				<div class="col xs-4 pt-64">
					<h3 class="text-headline-s mb-8">Flex shrink and grou</h3>
					<p class="text-body-l">These can be applied by adding the helper class in the format <code>flex-{condition}-{value}</code>, where condition can be either grow or shrink and value can be either 0 or 1. The condition grow will permit an element to grow to fill available space, whereas shrink will permit an element to shrink down to only the space needs for its contents. However, this will only happen if the element must shrink to fit their container such as a container resize or being effected by a flex-grow-1. The value 0 will prevent the condition from occurring whereas 1 will permit the condition.</p>

					<code>flex-grow-0</code><br>
					<code>flex-grow-1</code><br>
					<code>flex-shrink-0</code><br>
					<code>flex-shrink-1</code><br><br>
					<code>flex-sm-grow-0</code><br>
					<code>flex-sm-grow-1</code><br>
					<code>flex-sm-shrink-0</code><br>
					<code>flex-sm-shrink-1</code><br><br>
					<code>flex-md-grow-0</code><br>
					<code>flex-md-grow-1</code><br>
					<code>flex-md-shrink-0</code><br>
					<code>flex-md-shrink-1</code><br><br>
					<code>flex-lg-grow-0</code><br>
					<code>flex-lg-grow-1</code><br>
					<code>flex-lg-shrink-0</code><br>
					<code>flex-lg-shrink-1</code><br><br>
					<code>flex-xl-grow-0</code><br>
					<code>flex-xl-grow-1</code><br>
					<code>flex-xl-shrink-0</code><br>
					<code>flex-xl-shrink-1</code><br>
				</div>
			</div>

			<div id="spacer" class="row mb-80">
				<div class="col xs-4 pt-64">
					<h3 class="text-headline-s mb-8">Spacer</h3>
					<code>spacer</code>

					<div class="card bg-surface elevation-1 mt-16 d-flex p-16 gap-16">
						<div class="card outline p-16 r-8 secondary">
							1
						</div>

						<div class="card outline p-16 r-8 secondary align-self-auto">
							2
						</div>

						<div class="card outline p-16 r-8 secondary">
							3
						</div>

						<div class="card outline p-16 r-8 secondary spacer">
							spacer
						</div>

						<div class="card outline p-16 r-8 secondary">
							4
						</div>

						<div class="card outline p-16 r-8 secondary">
							5
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
				<li><a href="#flex-classes" class="ripple ripple-x-center">Classes</a></li>
				<li><a href="#flex-direction" class="ripple ripple-x-center">Direction</a></li>
				<li><a href="#flex-justify" class="ripple ripple-x-center">Justify</a></li>
				<li><a href="#flex-align" class="ripple ripple-x-center">Align</a></li>
				<li><a href="#flex-align-self" class="ripple ripple-x-center">Align self</a></li>
				<li><a href="#flex-wrap" class="ripple ripple-x-center">Wrap</a></li>
				<li><a href="#flex-order" class="ripple ripple-x-center">Order</a></li>
				<li><a href="#flex-shrink-and-grow" class="ripple ripple-x-center">Shrink and Grow</a></li>
				<li><a href="#spacer" class="ripple ripple-x-center">Spacer</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include './footer.php'; ?>