<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l">Images</h1>
				</div>
			</div>
		</div>

		<div id="image-cover" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Cover</h1>
					<p class="text-body-m">The image keeps its aspect ratio and fills the given dimension. The image will be clipped to fit</p>

					<code>image cover</code><br>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image cover height-256">
							<img src="" data-src="./app/img/1-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image cover height-256">
							<img src="" data-src="./app/img/2-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image cover height-256">
							<img src="" data-src="./app/img/3-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image cover height-256">
							<img src="" data-src="./app/img/4-min.jpg">
						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="image-contain" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Contain</h1>
					<p class="text-body-m">The image keeps its aspect ratio, but is resized to fit within the given dimension.</p>

					<code>image contain</code><br>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image contain height-256">
							<img src="" data-src="./app/img/1-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image contain height-256">
							<img src="" data-src="./app/img/2-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image contain height-256">
							<img src="" data-src="./app/img/3-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image contain height-256">
							<img src="" data-src="./app/img/4-min.jpg">
						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="image-fill" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Fill</h1>
					<p class="text-body-m">This is default. The image is resized to fill the given dimension. If necessary, the image will be stretched or squished to fit.</p>

					<code>image fill</code><br>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image fill height-256">
							<img src="" data-src="./app/img/1-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image fill height-256">
							<img src="" data-src="./app/img/2-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image fill height-256">
							<img src="" data-src="./app/img/3-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image fill height-256">
							<img src="" data-src="./app/img/4-min.jpg">
						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="image-no-resize" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">No resize</h1>
					<p class="text-body-m">The image is not resized</p>

					<code>image no-resize</code><br>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image no-resize height-256">
							<img src="" data-src="./app/img/1-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image no-resize height-256">
							<img src="" data-src="./app/img/2-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image no-resize height-256">
							<img src="" data-src="./app/img/3-min.jpg">
						</div>
					</div>
				</div>

				<div class="col xs-4 md-3">
					<div class="card surface outlined overflow-hidden">
						<div class="image no-resize height-256">
							<img src="" data-src="./app/img/4-min.jpg">
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
				<li><a href="#image-cover" class="ripple ripple-x-center">Cover</a></li>
				<li><a href="#image-contain" class="ripple ripple-x-center">Contain</a></li>
				<li><a href="#image-fill" class="ripple ripple-x-center">Fill</a></li>
				<li><a href="#image-no-resize" class="ripple ripple-x-center">No resize</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include './footer.php'; ?>