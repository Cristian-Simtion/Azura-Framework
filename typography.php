<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l mt-24">Typography</h1>
				</div>
			</div>
		</div>

		<div id="typography-display" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Display</h1>
					<p class="text-body-m">There are three display styles in the default type scale: large, medium, and small. As the largest text on the screen, display styles are reserved for short, important text or numerals. They work best on large screens.</p>

					<code>text-display-l</code><br>
					<code>text-display-m</code><br>
					<code>text-display-s</code><br>

					<div class="card bg-surface elevation-1 p-16 mt-16">
						<div class="text-display-l">Display Large</div>
						<div class="text-display-m">Display Medium</div>
						<div class="text-display-s">Display Small</div>
					</div>
				</div>

			</div>
		</div>

		<div id="typography-headline" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Headline</h1>
					<p class="text-body-m">Headline styles are smaller than display styles. They're best-suited for short, high-emphasis text on smaller screens. These styles can be good for marking primary passages of text or important regions of content.</p>

					<code>text-headline-l</code><br>
					<code>text-headline-m</code><br>
					<code>text-headline-s</code><br>

					<div class="card bg-surface elevation-1 p-16 mt-16">
						<div class="text-headline-l">Headline Large</div>
						<div class="text-headline-m">Headline Medium</div>
						<div class="text-headline-s">Headline Small</div>
					</div>
				</div>

			</div>
		</div>

		<div id="typography-title" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Title</h1>
					<p class="text-body-m">Titles are smaller than headline styles and should be used for shorter, medium-emphasis text. For example, consider using title styles to divide secondary passages of text or secondary regions of content.</p>

					<code>text-title-l</code><br>
					<code>text-title-m</code><br>
					<code>text-title-s</code><br>

					<div class="card bg-surface elevation-1 p-16 mt-16">
						<div class="text-title-l">Title Large</div>
						<div class="text-title-m">Title Medium</div>
						<div class="text-title-s">Title Small</div>
					</div>
				</div>

			</div>
		</div>

		<div id="typography-label" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Label</h1>
					<p class="text-body-m">Label styles are smaller, utilitarian styles, used for areas of the UI such as text inside of components or very small supporting text in the content body, like captions.</p>

					<code>text-label-l</code><br>
					<code>text-label-m</code><br>
					<code>text-label-s</code><br>

					<div class="card bg-surface elevation-1 p-16 mt-16">
						<div class="text-label-l">Label Large</div>
						<div class="text-label-m">Label Medium</div>
						<div class="text-label-s">Label Small</div>
					</div>
				</div>

			</div>
		</div>

		<div id="typography-body" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Body</h1>
					<p class="text-body-m">Body styles are used for longer passages of text. </p>

					<code>text-body-l</code><br>
					<code>text-body-m</code><br>
					<code>text-body-s</code><br>

					<div class="card bg-surface elevation-1 p-16 mt-16">
						<div class="text-body-l">Body Large</div>
						<div class="text-body-m">Body Medium</div>
						<div class="text-body-s">Body Small</div>
					</div>
				</div>

			</div>
		</div>

		<div id="typography-code" class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Code, Pre, Kbd and Samp</h1>

					<code>code</code><br>
					<code>pre</code><br>
					<code>kbd</code><br>
					<code>samp</code><br>

					<div class="card bg-surface elevation-1 p-16 mt-16">
						<code>Lorem ipsum dolor</code>
						<pre>Lorem ipsum dolor</pre>
						<kbd>Lorem ipsum dolor</kbd>
						<samp>Lorem ipsum dolor</samp>
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
				<li><a href="#typography-display" class="ripple ripple-x-center">Dislpay</a></li>
				<li><a href="#typography-headline" class="ripple ripple-x-center">Headline</a></li>
				<li><a href="#typography-title" class="ripple ripple-x-center">Title</a></li>
				<li><a href="#typography-label" class="ripple ripple-x-center">Label</a></li>
				<li><a href="#typography-body" class="ripple ripple-x-center">Body</a></li>
				<li><a href="#typography-code" class="ripple ripple-x-center">Code</a></li>
			</ul>
		</div>
	</div>
</div>

<?php include './footer.php'; ?>