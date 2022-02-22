<?php ob_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= get_title(); ?></title>
	<meta name="description" content="CSS Framework">
	<link rel="icon" href="./favicon.ico">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" >
	<link rel="stylesheet" href="cs-framework.css">
	<link rel="stylesheet" href="app.css">
</head>
<body class="background">
	<script>
		if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
			document.body.classList.add("dark");
		}
		window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
			if (event.matches) {
				document.body.classList.add("dark");
			} else {
				document.body.classList.remove("dark");
			}
		});
	</script>

	<div class="test-float">
		<a href="grid.php" class="button button-s ripple">
			<span>Grid</span>
		</a>

		<button class="button button-s ripple" data-drawer="toggle">
			<span>Toggle Drawer</span>
		</button>
	</div>

	<div id="app" class="nav-drawer-standard">
		<div class="topbar">
			<div class="card surface elevation-3  r-0">
				<div class="d-flex ml-24 align-center height-64">
					<button class="button button-square ripple mb-0 d-md-none" data-drawer="open">
						<span class="icon-menu"></span>
					</button>

					<a class="pb-8" href="index.php">
						<svg class="logo-framework" width="48" height="48" viewBox="0 0 200 160">
							<path
								class="fill-primary"
								d="M63.92,171l35.46-75.3,19.23-38.59L106.49,33a7.27,7.27,0,0,0-13,0L42,135.54A24.5,24.5,0,0,0,63.92,171Z"
							/>
							<path
								class="fill-neutral"
								d="M136.08,171h0A24.5,24.5,0,0,0,158,135.54L118.61,57.13,107.06,80.3a34.07,34.07,0,0,0-.2,30Z"
							/>
							<path
								class="fill-neutral"
								d="M99.56,123.47l.5,38.37h0A11.79,11.79,0,0,1,89.4,145Z"
							/>
							<path 
								class="fill-primary"
								d="M100.06,161.84h0l-.5-38.37,10.67,22.19A11.28,11.28,0,0,1,100.06,161.84Z"
							/>
						</svg>
					</a>

					<div class="white-space-nowrap d-none d-md-flex align-center">
						<a href="<?php the_template_path(); ?>index.php">
							<p class="ml-8 mr-8 mb-0"><span class="text-title-l bold">AZURA</span></p>
						</a>
						<span class="text-label-s color-error">Pre-alpha</span>
					</div>

					<div class="spacer"></div>

					<button id="toggle-mode" class="button button-square ripple mb-0 mr-24">
						<span class="icon-dark-mode"></span>
					</button>
				</div>

			</div>
		</div>

		<div class="nav-drawer overflow-hidden pr-8 top-0 top-md-64">
			<div class="scroll pr-16">
				<div class="d-flex align-center">
					<h3 class="text-title-l white-space-nowrap">Main Menu</h3>
					<div class="spacer"></div>
					<button class="button button-square ripple m-0 d-md-none" data-drawer="close">
						<span class="icon-close"></span>
					</button>
				</div>

				<div class="nav-drawer-list mt-40">
					<ul>
						<li>
							<a href="<?php the_template_path(); ?>index.php" data-drawer="close">
								<span>Get Started</span>
							</a>
						</li>
						<li>
							<a href="<?php the_template_path(); ?>breakpoints.php" data-drawer="close">
								<span>Breakpoints</span>
							</a>
						</li>
						<li>
							<a href="<?php the_template_path(); ?>changelog.php" data-drawer="close">
								<span>Changelog</span>
							</a>
						</li>
						<li>
							<h3 class="text-title-s mb-16 mt-16">Framework Style</h3>
						</li>
						<li>
							<button class="toggle-sublist">
								<span>Basic</span>
							</button>
							<ul>
								<li>
									<a href="<?php the_template_path(); ?>grid.php" data-drawer="close" class="ripple">
										<span>Grid</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>flex.php" data-drawer="close" class="ripple">
										<span>Flex</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>colors.php" data-drawer="close">
										<span>Colors</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>typography.php" data-drawer="close">
										<span>Typography</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>round.php" data-drawer="close">
										<span>Round</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>elevation.php" data-drawer="close">
										<span>Elevation</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<button class="toggle-sublist">
								<span>UI Components</span>
							</button>
							<ul>
								<li>
									<a href="<?php the_template_path(); ?>icons.php" data-drawer="close">
										<span>Icons</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>images.php" data-drawer="close">
										<span>Images</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>buttons.php" data-drawer="close">
										<span>Buttons</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>cards.php" data-drawer="close">
										<span>Cards</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>dialogs.php" data-drawer="close">
										<span>Dialogs</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>checkboxes.php" data-drawer="close">
										<span>Input controls</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>lists.php" data-drawer="close">
										<span>Lists</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>textfields.php" data-drawer="close">
										<span>Text fields</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>textareas.php" data-drawer="close">
										<span>Textareas</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>forms.php" data-drawer="close">
										<span>Forms</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>fileinputs.php" data-drawer="close">
										<span>File Inputs</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>ajax.php" data-drawer="close">
										<span>Ajax</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>noajax.php" data-drawer="close">
										<span>No Ajax Destination</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>viewport.php" data-drawer="close">
										<span>Viewport</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>select.php" data-drawer="close">
										<span>Select</span>
									</a>
								</li>
								<li>
									<a href="<?php the_template_path(); ?>scrollbar.php" data-drawer="close">
										<span>Scrollbar</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div id="content">