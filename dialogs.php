<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l">Dialogs</h1>
				</div>
			</div>

			<div class="row">
				<div class="col xs-4 md-4">
					<button class="button button-m ripple dialog-action" data-open-dialog="dialog-1">
						<span>Open Dialog</span>
					</button>
				</div>
			</div>

			<div class="row">
				<div class="col xs-4 md-4">
					<button class="button button-m ripple dialog-action" data-open-dialog="dialog-2">
						<span>Open Dialog 2</span>
					</button>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="layer">
	<div id="dialog-1" class="dialog">
		<div class="dialog-inner width-320">
			<div class="text-title-m">Do you also want to save changes?</div>
			<p class="text-body-m">Let Google help apps determine location. This means sending anonymous location data to Google, even when no apps are running.</p>
			<button class="button button-m outlined ripple dialog-action" data-close-dialog="dialog-1">
				<span>Cancel</span>
			</button>
			<button class="button button-m ripple">
				<span>Save</span>
			</button>
		</div>
	</div>

	<div id="dialog-2" class="dialog persistent">
		<div class="dialog-inner width-480">
			<div class="text-title-m">Do you also want to save changes?</div>
			<p class="text-body-m">Let Google help apps determine location. This means sending anonymous location data to Google, even when no apps are running.</p>
			<button class="button button-m text ripple dialog-action" data-close-dialog="dialog-2">
				<span>No</span>
			</button>
			<button class="button button-m text ripple dialog-action" data-close-dialog="dialog-2"  data-open-dialog="dialog-1">
				<span>Next</span>
			</button>
		</div>
	</div>
</div>

<?php include './footer.php'; ?>