<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l">Backdrop effects</h1>
					<p class="text-body-l">The <code>backdrop-filter</code> CSS property lets you apply graphical effects such as blurring or color shifting to the area behind an element.</p>
				</div>
			</div>
		</div>

		<div id="blur" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Blur</h1>

					<code>bg-primary-64 backdrop-blur-0</code><br>
					<code>bg-primary-64 backdrop-blur-2</code><br>
					<code>bg-primary-64 backdrop-blur-4</code><br>
					<code>bg-primary-64 backdrop-blur-8</code><br>
					<code>bg-primary-64 backdrop-blur-16</code><br>
				</div>

				<div class="col">
					<div class="card surface outlined overflow-hidden">
						<div class="image cover height-320 relative">
							<img src="" data-src="./app/img/5-min.jpg">
							<div class="absolute height-full width-full top-0 left-0 d-flex align-center justify-center r-12">
								<div class="width-256 height-128 bg-primary-64 backdrop-blur-0 r-12 d-flex align-center justify-center">
									<div class="text-title-l color-on-primary">Backdrop filter blur 0</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card surface outlined overflow-hidden">
						<div class="image cover height-320 relative">
							<img src="" data-src="./app/img/5-min.jpg">
							<div class="absolute height-full width-full top-0 left-0 d-flex align-center justify-center r-12">
								<div class="width-256 height-128 bg-primary-64 backdrop-blur-2 r-12 d-flex align-center justify-center">
									<div class="text-title-l color-on-primary">Backdrop filter blur 2</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card surface outlined overflow-hidden">
						<div class="image cover height-320 relative">
							<img src="" data-src="./app/img/5-min.jpg">
							<div class="absolute height-full width-full top-0 left-0 d-flex align-center justify-center r-12">
								<div class="width-256 height-128 bg-primary-64 backdrop-blur-4 r-12 d-flex align-center justify-center">
									<div class="text-title-l color-on-primary">Backdrop filter blur 4</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card surface outlined overflow-hidden">
						<div class="image cover height-320 relative">
							<img src="" data-src="./app/img/5-min.jpg">
							<div class="absolute height-full width-full top-0 left-0 d-flex align-center justify-center r-12">
								<div class="width-256 height-128 bg-primary-64 backdrop-blur-8 r-12 d-flex align-center justify-center">
									<div class="text-title-l color-on-primary">Backdrop filter blur 8</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card surface outlined overflow-hidden">
						<div class="image cover height-320 relative">
							<img src="" data-src="./app/img/5-min.jpg">
							<div class="absolute height-full width-full top-0 left-0 d-flex align-center justify-center r-12">
								<div class="width-256 height-128 bg-primary-64 backdrop-blur-16 r-12 d-flex align-center justify-center">
									<div class="text-title-l color-on-primary">Backdrop filter blur 16</div>
								</div>
							</div>
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
				<li><a href="#blur" class="ripple ripple-x-center">Blur</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include './footer.php'; ?>