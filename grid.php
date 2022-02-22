<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col">
					<h1 class="text-headline-l mt-24 mb-16">Grid system</h1>
					<p class="text-body-l">The grid is used to create specific layouts within an application’s content. It contains 5 types of media breakpoints that are used for targeting specific screen sizes or orientations, <code>xs</code>, <code>sm</code>, <code>md</code>, <code>lg</code> and <code>xl</code>.</p>

					<div class="table mt-40 mb-40">
						<table>
							<caption class="text-title-m">Material Design Breakpoints</caption>
							<thead>
								<tr>
									<th>Device</th>
									<th>Code</th>
									<th>Type</th>
									<th>Range</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Extra small</td>
									<td><strong>xs</strong></td>
									<td>Small to large phone</td>
									<td>&lt; 600px</td>
								</tr>
								<tr>
									<td>Small</td>
									<td><strong>sm</strong></td>
									<td>Small to medium tablet</td>
									<td>600px &gt; &lt; 960px</td>
								</tr>
								<tr>
									<td>Medium</td>
									<td><strong>md</strong></td>
									<td>Large tablet to laptop</td>
									<td>960px &gt; &lt; 1264px*</td>
								</tr>
								<tr>
									<td>Large</td>
									<td><strong>lg</strong></td>
									<td>Desktop</td>
									<td>1264px &gt; &lt; 1904px*</td>
								</tr>
								<tr>
									<td>Extra large</td>
									<td><strong>xl</strong></td>
									<td>4k and ultra-wide</td>
									<td>&gt; 1904px*</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="4"><div class="text-center">* -16px  on desktop for browser scrollbar</div></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<h1 class="text-headline-s mb-8">Simple column</h1>
					<p class="text-body-m">From 0px to infinite</p>

					<code>col</code>
				</div>

				<div class="col">
					<div class="card surface elevation-1 height-80 p-16 mt-16">
						<code>col</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<h1 class="text-headline-s mb-8">Extra small (xs)</h1>
					<p class="text-body-m">From 0px to infinite</p>

					<code>col xs-1</code><br>
					<code>col xs-2</code><br>
					<code>col xs-3</code><br>
					<code>col xs-4</code><br>
				</div>
				
				<div class="col">
					<div class="card surface elevation-1 height-80 p-16 mt-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xs-2</code>
					</div>
				</div>

				<div class="col xs-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xs-2</code>
					</div>
				</div>

				<div class="col xs-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xs-3</code>
					</div>
				</div>

				<div class="col xs-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xs-1</code>
					</div>
				</div>

				<div class="col xs-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xs-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xs-4">
					<h1 class="text-headline-s">Small (sm)</h1>
					<p class="text-body-m">From 600px to infinite</p>
				</div>
			</div>

			<div class="row">
				<div class="col sm-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-2</code>
					</div>
				</div>
				<div class="col sm-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-2</code>
					</div>
				</div>
				<div class="col sm-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-2</code>
					</div>
				</div>
				<div class="col sm-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-3</code>
					</div>
				</div>
				<div class="col sm-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-3</code>
					</div>
				</div>
				<div class="col sm-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-4</code>
					</div>
				</div>
				<div class="col sm-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-5">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-5</code>
					</div>
				</div>
				<div class="col sm-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-6">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-6</code>
					</div>
				</div>
				<div class="col sm-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-7">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-7</code>
					</div>
				</div>
				<div class="col sm-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col sm-8">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col sm-8</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xs-4">
					<h1 class="text-headline-s">Medium (md)</h1>
					<p class="text-body-m">From 960px to infinite</p>
				</div>
			</div>

			<div class="row">
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-3</code>
					</div>
				</div>
				<div class="col md-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-3</code>
					</div>
				</div>
				<div class="col md-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-3</code>
					</div>
				</div>
				<div class="col md-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-4</code>
					</div>
				</div>
				<div class="col md-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-4</code>
					</div>
				</div>
				<div class="col md-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-5">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-5</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
				<div class="col md-5">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-6">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-6</code>
					</div>
				</div>
				<div class="col md-6">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-6</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-7">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-7</code>
					</div>
				</div>
				<div class="col md-5">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-8">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-8</code>
					</div>
				</div>
				<div class="col md-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-9">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-9</code>
					</div>
				</div>
				<div class="col md-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-10">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-10</code>
					</div>
				</div>
				<div class="col md-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-11">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-11</code>
					</div>
				</div>
				<div class="col md-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col md-12">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col md-12</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xs-4">
					<h1 class="text-headline-s">Large (lg)</h1>
					<p class="text-body-m">From 1264px to infinite</p>
				</div>
			</div>

			<div class="row">
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-3</code>
					</div>
				</div>
				<div class="col lg-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-3</code>
					</div>
				</div>
				<div class="col lg-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-3</code>
					</div>
				</div>
				<div class="col lg-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-4</code>
					</div>
				</div>
				<div class="col lg-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-4</code>
					</div>
				</div>
				<div class="col lg-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-5">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-5</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
				<div class="col lg-5">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-6">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-6</code>
					</div>
				</div>
				<div class="col lg-6">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-6</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-7">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-7</code>
					</div>
				</div>
				<div class="col lg-5">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-8">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-8</code>
					</div>
				</div>
				<div class="col lg-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-9">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-9</code>
					</div>
				</div>
				<div class="col lg-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-10">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-10</code>
					</div>
				</div>
				<div class="col lg-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-11">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-11</code>
					</div>
				</div>
				<div class="col lg-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col lg-12">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col lg-12</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xs-4">
					<h1 class="text-headline-s">Extra large (xl)</h1>
					<p class="text-body-m">From 1904px to infinite</p>
				</div>
			</div>

			<div class="row">
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-3</code>
					</div>
				</div>
				<div class="col xl-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-3</code>
					</div>
				</div>
				<div class="col xl-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-3</code>
					</div>
				</div>
				<div class="col xl-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-4</code>
					</div>
				</div>
				<div class="col xl-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-4</code>
					</div>
				</div>
				<div class="col xl-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-5">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-5</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
				<div class="col xl-5">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-6">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-6</code>
					</div>
				</div>
				<div class="col xl-6">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-6</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-7">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-7</code>
					</div>
				</div>
				<div class="col xl-5">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-5</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-8">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-8</code>
					</div>
				</div>
				<div class="col xl-4">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-4</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-9">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-9</code>
					</div>
				</div>
				<div class="col xl-3">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-3</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-10">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-10</code>
					</div>
				</div>
				<div class="col xl-2">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-2</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-11">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-11</code>
					</div>
				</div>
				<div class="col xl-1">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-1</code>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xl-12">
					<div class="card surface elevation-1 height-80 p-16">
						<code>col xl-12</code>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="layer">
</div>

<?php include './footer.php'; ?>