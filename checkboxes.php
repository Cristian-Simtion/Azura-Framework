<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l">Input controls</h1>
				</div>
			</div>

			<div class="row">
				<div class="col xs-4">
					<h2 class="text-headline-m">Checkboxes</h2>
					<div class="checkbox">
						<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked>
						<label for="vehicle1"> I have a bike</label>
					</div>

					<div class="checkbox">
						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
						<label for="vehicle2"> I have a car</label>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col xs-4">
					<h2 class="text-headline-m">Radio</h2>
					<div class="radio">
						<input type="radio" id="vehicle3" name="vehicle" value="Bike" checked>
						<label for="vehicle3"> I have a bike</label>
					</div>

					<div class="radio">
						<input type="radio" id="vehicle4" name="vehicle" value="Car">
						<label for="vehicle4"> I have a car</label>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="layer">
</div>

<?php include './footer.php'; ?>