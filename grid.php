<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64 pb-80">
			<div class="row pt-80">
				<div class="col">
					<h1 class="text-headline-l mb-16">Grid system</h1>
					<p class="text-body-l">The grid is used to create specific layouts within an application’s content. It contains 5 types of media breakpoints that are used for targeting specific screen sizes or orientations, <code>xs</code>, <code>sm</code>, <code>md</code>, <code>lg</code> and <code>xl</code>.</p>
				</div>
			</div>
		</div>

		<div id="grid-container" class="container">
			<div class="row">
				<div class="col">
					<h1 class="text-headline-s mb-8">Container</h1>
					<code>container</code>
				</div>
			</div>
		</div>

		<div class="container bg-surface elevation-1 height-80">
		</div>

		<div id="grid-container-full" class="container pt-80">
			<div class="row">
				<div class="col">
					<h1 class="text-headline-s mb-8">Container full width</h1>
					<code>container full-width</code>
				</div>
			</div>
		</div>

		<div class="container full-width bg-surface elevation-1 height-80">
		</div>

		<div id="grid-row" class="container pt-80">
			<div class="row">
				<div class="col">
					<h1 class="text-headline-s mb-8">Row</h1>
					<code>row</code>
				</div>
			</div>
		</div>

		<div class="container pb-80">
			<div class="row bg-surface elevation-1 height-80"></div>
		</div>

		<div id="grid-column" class="container mb-80">
			<div class="row">
				<div class="col">
					<h1 class="text-headline-s mb-8">Column</h1>
					<p class="text-body-m">From 0px to infinite</p>

					<code>col</code>
				</div>

				<div class="col">
					<div class="card bg-surface elevation-1 height-80 p-16 mt-16">
						<code>col</code>
					</div>
				</div>
			</div>
		</div>

		<div id="grid-column-xs" class="container pb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Extra small (xs)</h1>
					<p class="text-body-m">From 0px to infinite</p>

					<code>col xs-1</code><br>
					<code>col xs-2</code><br>
					<code>col xs-3</code><br>
					<code>col xs-4</code><br>
				</div>

				<div class="col">
					<div class="card bg-surface elevation-1 height-80 p-16 mt-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xs-2</code>
					</div>
				</div>

				<div class="col xs-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xs-2</code>
					</div>
				</div>

				<div class="col xs-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xs-3</code>
					</div>
				</div>

				<div class="col xs-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xs-4</code>
					</div>
				</div>
			</div>
		</div>

		<div id="grid-column-sm" class="container pb-80">
			<div class="row mb-0">
				<div class="col xs-4">
					<h1 class="text-headline-s">Small (sm)</h1>
					<p class="text-body-m">From 600px to infinite</p>
				</div>
			</div>

			<div class="row">
				<div class="col sm-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-2</code>
					</div>
				</div>
				<div class="col sm-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-2</code>
					</div>
				</div>
				<div class="col sm-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-2</code>
					</div>
				</div>
				<div class="col sm-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-3</code>
					</div>
				</div>
				<div class="col sm-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-3</code>
					</div>
				</div>
				<div class="col sm-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-4</code>
					</div>
				</div>
				<div class="col sm-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-5">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-5</code>
					</div>
				</div>
				<div class="col sm-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-6">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-6</code>
					</div>
				</div>
				<div class="col sm-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-7">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-7</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-8">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col sm-8</code>
					</div>
				</div>
			</div>
		</div>

		<div id="grid-column-md" class="container pb-80">
			<div class="row">
				<div class="col xs-4">
					<h1 class="text-headline-s">Medium (md)</h1>
					<p class="text-body-m">From 960px to infinite</p>
				</div>
			</div>

			<div class="row mb-0">
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-3</code>
					</div>
				</div>
				<div class="col md-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-3</code>
					</div>
				</div>
				<div class="col md-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-3</code>
					</div>
				</div>
				<div class="col md-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-4</code>
					</div>
				</div>
				<div class="col md-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-4</code>
					</div>
				</div>
				<div class="col md-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-5">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-5</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-5">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-6">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-6</code>
					</div>
				</div>
				<div class="col md-6">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-6</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-7">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-7</code>
					</div>
				</div>
				<div class="col md-5">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-8">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-8</code>
					</div>
				</div>
				<div class="col md-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-9">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-9</code>
					</div>
				</div>
				<div class="col md-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-10">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-10</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-11">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-11</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-12">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col md-12</code>
					</div>
				</div>
			</div>
		</div>

		<div id="grid-column-lg" class="container pb-80">
			<div class="row mb-0">
				<div class="col xs-4">
					<h1 class="text-headline-s">Large (lg)</h1>
					<p class="text-body-m">From 1264px to infinite</p>
				</div>
			</div>

			<div class="row">
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-3</code>
					</div>
				</div>
				<div class="col lg-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-3</code>
					</div>
				</div>
				<div class="col lg-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-3</code>
					</div>
				</div>
				<div class="col lg-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-4</code>
					</div>
				</div>
				<div class="col lg-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-4</code>
					</div>
				</div>
				<div class="col lg-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-5">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-5</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-5">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-6">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-6</code>
					</div>
				</div>
				<div class="col lg-6">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-6</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-7">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-7</code>
					</div>
				</div>
				<div class="col lg-5">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-8">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-8</code>
					</div>
				</div>
				<div class="col lg-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-9">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-9</code>
					</div>
				</div>
				<div class="col lg-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-10">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-10</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-11">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-11</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-12">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col lg-12</code>
					</div>
				</div>
			</div>
		</div>

		<div id="grid-column-xl" class="container pb-80">
			<div class="row mb-0">
				<div class="col xs-4">
					<h1 class="text-headline-s">Extra large (xl)</h1>
					<p class="text-body-m">From 1904px to infinite</p>
				</div>
			</div>

			<div class="row">
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-3</code>
					</div>
				</div>
				<div class="col xl-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-3</code>
					</div>
				</div>
				<div class="col xl-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-3</code>
					</div>
				</div>
				<div class="col xl-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-4</code>
					</div>
				</div>
				<div class="col xl-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-4</code>
					</div>
				</div>
				<div class="col xl-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-5">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-5</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-5">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-6">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-6</code>
					</div>
				</div>
				<div class="col xl-6">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-6</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-7">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-7</code>
					</div>
				</div>
				<div class="col xl-5">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-8">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-8</code>
					</div>
				</div>
				<div class="col xl-4">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-9">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-9</code>
					</div>
				</div>
				<div class="col xl-3">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-10">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-10</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-11">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-11</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-12">
					<div class="card bg-surface elevation-1 height-80 p-16">
						<code>col xl-12</code>
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
				<li><a href="#grid-container" class="ripple ripple-x-center r-pill">Container</a></li>
				<li><a href="#grid-container-full" class="ripple ripple-x-center r-pill">Container full</a></li>
				<li><a href="#grid-row" class="ripple ripple-x-center r-pill">Row</a></li>
				<li><a href="#grid-column" class="ripple ripple-x-center r-pill">Column</a></li>
				<li><a href="#grid-column-xs" class="ripple ripple-x-center r-pill">Column XS</a></li>
				<li><a href="#grid-column-sm" class="ripple ripple-x-center r-pill">Column SM</a></li>
				<li><a href="#grid-column-md" class="ripple ripple-x-center r-pill">Column MD</a></li>
				<li><a href="#grid-column-lg" class="ripple ripple-x-center r-pill">Column LG</a></li>
				<li><a href="#grid-column-xl" class="ripple ripple-x-center r-pill">Column XL</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include './footer.php'; ?>