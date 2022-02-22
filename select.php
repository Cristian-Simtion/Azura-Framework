<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l">Fields</h1>
				</div>
			</div>

			<div class="row">
				<div class="col xs-4 sm-4 md-6">
					<div class="field select-field">
						<div class="text-slot">
							<input id="regular" readonly="readonly" type="text" aria-readonly="false" autocomplete="off">
							<label for="regular">Regular Empty</label>
						</div>
						<div class="options">
							<div class="list dense">
								<ul>
									<li><a href="#" class="ripple ripple-x-center" data-value="item-1">Item 1</a></li>
									<li><a href="#" class="ripple ripple-x-center" data-value="item-2">Item 2</a></li>
									<li><a href="#" class="ripple ripple-x-center" data-value="item-3"><span class="icon icon-pencil"></span>Item 3</a></li>
									<li><a href="#" class="ripple ripple-x-center" data-value="item-4">Item 4</a></li>
									<li><a href="#" class="ripple ripple-x-center" data-value="item-5">Item 5</a></li>
									<li><a href="#" class="ripple ripple-x-center" data-value="item-6">Item 6</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="field">
						<div class="text-slot">
							<input type="text" id="text-field-regular-2" name="text-field-regular-2" value="Value">
							<label for="text-field-regular-2">Regular with Value</label>
						</div>
					</div>

					<div class="field">
						<div class="text-slot">
							<input type="text" placeholder="Placeholder" id="text-field-regular-3" name="text-field-regular-3">
							<label for="text-field-regular-3">Regular with Placeholder</label>
						</div>
					</div>

					<div class="field">
						<div class="text-slot">
							<input type="text" id="text-field-regular-4" name="text-field-regular-4">
							<label for="text-field-regular-4">Regular with Counter</label>
						</div>
						<div class="details">
							<div class="message"></div>
							<div class="counter">0</div>
						</div>
					</div>

					<div class="field">
						<div class="text-slot">
							<input type="text" maxlength="20" id="text-field-regular-5" name="text-field-regular-5">
							<label for="text-field-regular-5">Regular with Counter</label>
						</div>
						<div class="details">
							<div class="message">Max 20 characters</div>
							<div class="counter"></div>
						</div>
					</div>

					<div class="field">
						<div class="text-slot">
							<input type="text" id="text-field-regular-5" name="text-field-regular-5">
							<label for="text-field-regular-5">Regular with Counter</label>
						</div>
						<div class="details">
							<div class="message">Max 20 characters</div>
							<div class="counter"></div>
						</div>
					</div>

					<div class="field">
						<div class="text-slot">
							<input type="text" id="text-field-regular-5" name="text-field-regular-5" required>
							<label for="text-field-regular-5">Required Persistent</label>
						</div>
						<div class="details">
							<div class="message persistent">This field is required</div>
						</div>
					</div>

					<div class="field">
						<div class="text-slot">
							<input type="text" id="text-field-regular-5" name="text-field-regular-5" required>
							<label for="text-field-regular-5">Required</label>
						</div>
						<div class="details">
							<div class="message">This field is required</div>
						</div>
					</div>
				</div>

				<div class="col xs-4 sm-4 md-6">
					<div class="field">
						<div class="text-slot">
							<textarea type="text" id="text-field-regular-1" name="text-field-regular-1"></textarea>
							<label for="text-field-regular-1">Regular Empty</label>
						</div>
					</div>

					<div class="field">
						<div class="text-slot">
							<textarea type="text" placeholder="Placeholder" id="text-field-regular-1" name="text-field-regular-1"></textarea>
							<label for="text-field-regular-1">Regular Empty</label>
						</div>
					</div>

					<div class="field">
						<div class="text-slot">
							<textarea type="text" id="text-field-regular-1" name="text-field-regular-1" required></textarea>
							<label for="text-field-regular-1">Regular Empty</label>
						</div>
						<div class="details">
							<div class="message">This field is required</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="layer">
</div>

<?php include './footer.php'; ?>