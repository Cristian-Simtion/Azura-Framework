<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l">Validation Form</h1>
				</div>
			</div>

			<div class="row">
				<form class="validation-form">
					<div class="form-control text-field" data-valid='{"rules":[{"valid": "required", "message": "Invalid email adress"}]}'>
						<div class="input-slot">
							<input type="text" name="email-validation">
							<label>Email validation</label>
						</div>
						<div class="details">
							<div class="message">Type a valid email</div>
						</div>
					</div>

					<button type="submit" class="button button-l ripple">
						<span>Validate form</span>
					</button>
				</form>

				<form class="validation-form">
					<div class="form-control text-field" data-valid='{"rules":[{"valid": "required"}]}'>
						<div class="input-slot">
							<input type="text" name="email-validation">
							<label>Email validation</label>
						</div>
						<div class="details">
							<div class="message">Type a valid email</div>
						</div>
					</div>

					<button type="submit" class="button button-l ripple">
						<span>Validate form</span>
					</button>
				</form>
			</div>
		</div>

	</div>
</div>

<div class="layer">
</div>

<?php include './footer.php'; ?>