<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l">Cards</h1>
				</div>
			</div>
		</div>

		<div class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Type of cards</h1>
					<p class="text-body-m">The card component is a versatile component that can be used for anything from a panel to a static image.</p>

					<code>card bg-surface outlined height-256</code><br>
					<code>card bg-surface elevation-1 height-256</code><br>
					<code>card bg-surface-variant height-256</code><br>
					<code>card bg-primary height-256</code><br>
				</div>

				<div class="col xs-4 md-2">
					<div class="card bg-surface outlined height-256">
					</div>
				</div>

				<div class="col xs-4 md-2">
					<div class="card bg-surface elevation-1 height-256">
					</div>
				</div>

				<div class="col xs-4 md-2">
					<div class="card bg-surface-variant height-256">
					</div>
				</div>

				<div class="col xs-4 md-2">
					<div class="card bg-primary height-256">
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="layer">
</div>

<?php include './footer.php'; ?>