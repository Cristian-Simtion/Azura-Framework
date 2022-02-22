<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col">
					<h1 class="text-headline-l mt-24 mb-16">Breakpoints</h1>
					<p class="text-body-l">Azura Framework contains 5 types of media breakpoints that are used for targeting specific screen sizes or orientations, <code>xs</code>, <code>sm</code>, <code>md</code>, <code>lg</code> and <code>xl</code>.</p>

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

			
		</div>

	</div>
</div>

<div class="layer">
</div>

<?php include './footer.php'; ?>