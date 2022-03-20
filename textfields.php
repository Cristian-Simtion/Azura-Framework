<?php include './functions.php'; ?>
<?php include './header.php'; ?>

<div class="scene">
	<div class="scene-content">

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l">Text Fields</h1>
					<p class="text-body-m">Text fields components are used for collecting user provided information.</p>
				</div>
			</div>
		</div>

		<div class="container mb-80">
			<div class="row mb-0">
				<div class="col">
					<h1 class="text-headline-s mb-8">Regular</h1>
				</div>

				<div class="col xs-4 sm-4 md-6 mb-0">
					<div class="text-field">
						<div class="input-slot">
							<input type="text" name="regular-empty">
							<label>Regular Empty</label>
						</div>
					</div>

					<pre class="code example mb-40 overflow-x-scroll" data-lllanguage="htmlphp" data-llstyle="dark">
&lt;div class=&quot;text-field&quot;&gt;
	&lt;div class=&quot;input-slot&quot;&gt;
		&lt;input type=&quot;text&quot; name=&quot;regular-empty&quot;&gt;
		&lt;label&gt;Regular Empty&lt;/label&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>

					<div class="text-field">
						<div class="input-slot">
							<input type="text" name="regular-value" value="This field has value">
							<label>Regular with Value</label>
						</div>
					</div>

					<pre class="code example mb-40 overflow-x-scroll" data-lllanguage="htmlphp" data-llstyle="dark">
&lt;div class=&quot;text-field&quot;&gt;
	&lt;div class=&quot;input-slot&quot;&gt;
		&lt;input type=&quot;text&quot; name=&quot;regular-value&quot; value=&quot;This field has value&quot;&gt;
		&lt;label&gt;Regular with Value&lt;/label&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>

					<div class="text-field">
						<div class="input-slot">
							<input type="text" placeholder="Placeholder" name="regular-placeholder">
							<label>Regular with Placeholder</label>
						</div>
					</div>

					<pre class="code example mb-40 overflow-x-scroll" data-lllanguage="htmlphp" data-llstyle="dark">
&lt;div class=&quot;text-field&quot;&gt;
	&lt;div class=&quot;input-slot&quot;&gt;
		&lt;input type=&quot;text&quot; placeholder=&quot;Placeholder&quot; name=&quot;regular-placeholder&quot;&gt;
		&lt;label&gt;Regular with Placeholder&lt;/label&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>
				</div>

				<div class="col xs-4 sm-4 md-6 mb-0">
					<div class="text-field field-error">
						<div class="input-slot">
							<input type="text" name="regular-placeholder" required>
							<label>Regular with Error</label>
						</div>
					</div>

					<pre class="code example mb-40 overflow-x-scroll" data-lllanguage="htmlphp" data-llstyle="dark">
&lt;div class=&quot;text-field field-error&quot;&gt;
	&lt;div class=&quot;input-slot&quot;&gt;
		&lt;input type=&quot;text&quot; name=&quot;regular-placeholder&quot; required&gt;
		&lt;label&gt;Regular with Error&lt;/label&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>

					<div class="text-field">
						<div class="input-slot">
							<input type="text" placeholder="Placeholder" name="regular-placeholder" value="This is the value" readonly>
							<label>Read Only</label>
						</div>
					</div>

					<pre class="code example mb-40 overflow-x-scroll" data-lllanguage="htmlphp" data-llstyle="dark">
&lt;div class=&quot;text-field&quot;&gt;
	&lt;div class=&quot;input-slot&quot;&gt;
		&lt;input type=&quot;text&quot; placeholder=&quot;Placeholder&quot; name=&quot;regular-placeholder&quot; value=&quot;This is the value&quot; readonly&gt;
		&lt;label&gt;Read Only&lt;/label&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>


					<div class="text-field disabled">
						<div class="input-slot">
							<input type="text" placeholder="Placeholder" name="regular-placeholder" disabled>
							<label>Regular Disabled</label>
						</div>
					</div>

					<pre class="code example mb-40 overflow-x-scroll" data-lllanguage="htmlphp" data-llstyle="dark">
&lt;div class=&quot;text-field disabled&quot;&gt;
	&lt;div class=&quot;input-slot&quot;&gt;
		&lt;input type=&quot;text&quot; placeholder=&quot;Placeholder&quot; name=&quot;regular-placeholder&quot; disabled&gt;
		&lt;label&gt;Regular Disabled&lt;/label&gt;
	&lt;/div&gt;
&lt;/div&gt;
</pre>


					<div class="text-field boxed">
						<div class="input-slot">
							<input type="text" name="regular-empty">
							<label>Regular Empty</label>
						</div>
					</div>

					<div class="text-field boxed">
						<div class="input-slot">
							<input type="text" name="regular-value" value="This field has value">
							<label>Regular with Value</label>
						</div>
					</div>

					<div class="text-field boxed">
						<div class="input-slot">
							<input type="text" placeholder="Placeholder" name="regular-placeholder">
							<label>Regular with Placeholder</label>
						</div>
					</div>
				</div>

				<div class="col xs-4 sm-4 md-4 mb-0">
					<div class="text-field solo">
						<div class="input-slot">
							<input type="text" name="regular-empty">
							<label>Regular Empty</label>
						</div>
					</div>

					<div class="text-field solo solo-s">
						<div class="input-slot">
							<input type="text" name="regular-empty">
							<label>Regular Empty</label>
						</div>
					</div>

					<div class="text-field solo solo-m">
						<div class="input-slot">
							<input type="text" name="regular-empty">
							<label>Regular Empty</label>
						</div>
					</div>

					<div class="text-field solo solo-l solo-pill">
						<div class="input-slot">
							<input type="text" name="regular-empty">
							<label>Regular Empty</label>
						</div>
					</div>

					<div class="text-field solo">
						<div class="input-slot">
							<input type="text" name="regular-value" value="This field has value">
							<label>Regular with Value</label>
						</div>
					</div>

					<div class="text-field solo">
						<div class="input-slot">
							<input type="text" placeholder="Placeholder" name="regular-placeholder">
							<label>Regular with Placeholder</label>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container pt-64">
			<div class="row">
				<div class="col pt-80">
					<h1 class="text-headline-l mb-16">Text Fields</h1>
					<p>Text fields components are used for collecting user provided information.</p>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<div class="card surface elevation-1 p-16 mb-24">
						<h4 class="text-title-m mt-0">Regular text fields</h4>
						<div class="row mb-0">
							<div class="col xs-4 sm-4 md-6 mb-0">
								<div class="text-field">
									<div class="input-slot">
										<input type="text" name="regular-empty">
										<label>Regular Empty</label>
									</div>
								</div>

								<div class="text-field">
									<div class="input-slot">
										<input type="text" name="regular-value" value="This field has value">
										<label>Regular with Value</label>
									</div>
								</div>

								<div class="text-field">
									<div class="input-slot">
										<input type="text" placeholder="Placeholder" name="regular-placeholder">
										<label>Regular with Placeholder</label>
									</div>
								</div>
							</div>
							<div class="col xs-4 sm-4 md-6">
								<div class="text-field field-error">
									<div class="input-slot">
										<input type="text" name="regular-placeholder" required>
										<label>Regular with Error</label>
									</div>
								</div>

								<div class="text-field">
									<div class="input-slot">
										<input type="text" placeholder="Placeholder" name="regular-placeholder" value="This is the value" readonly>
										<label>Read Only</label>
									</div>
								</div>

								<div class="text-field disabled">
									<div class="input-slot">
										<input type="text" placeholder="Placeholder" name="regular-placeholder" disabled>
										<label>Regular Disabled</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card surface elevation-1 p-16 mb-24">
						<h4 class="text-title-m mt-0">Regular text fields with counter</h4>
						<div class="row mb-0">
							<div class="col xs-4 sm-4 md-6 mb-0">
								<div class="text-field">
									<div class="input-slot">
										<input type="text" name="regular-counter">
										<label>Regular with Character Counter</label>
									</div>
									<div class="details">
										<div class="message"></div>
										<div class="counter">0</div>
									</div>
								</div>

								<div class="text-field">
									<div class="input-slot">
										<input type="text" maxlength="20" name="regular-max-length">
										<label>Regular Max Length</label>
									</div>
									<div class="details">
										<div class="message">Max 20 characters</div>
										<div class="counter"></div>
									</div>
								</div>

								<div class="text-field word-counter">
									<div class="input-slot">
										<input type="text" name="regular-counter">
										<label>Regular with Word Counter</label>
									</div>
									<div class="details">
										<div class="message">This field counts word instead of characters</div>
										<div class="counter">0</div>
									</div>
								</div>
							</div>
							<div class="col xs-4 sm-4 md-6 mb-0">
								<div class="text-field field-error">
									<div class="input-slot">
										<input type="text" name="regular-placeholder" required>
										<label>Regular with Error</label>
									</div>
									<div class="details">
										<div class="message">This field is required</div>
										<div class="counter">0</div>
									</div>
								</div>

								<div class="text-field persistent-message">
									<div class="input-slot">
										<input type="text" placeholder="Placeholder" name="regular-placeholder" value="This is the value" readonly>
										<label>Read Only</label>
									</div>
									<div class="details">
										<div class="message">You cannot change this field</div>
										<div class="counter">0</div>
									</div>
								</div>

								<div class="text-field persistent-message disabled">
									<div class="input-slot">
										<input type="text" placeholder="Placeholder" name="regular-placeholder" value="This is the value" disabled>
										<label>Regular Disabled</label>
									</div>
									<div class="details">
										<div class="message">This field is disabled</div>
										<div class="counter">0</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card surface elevation-1 p-16 mb-24">
						<h4 class="text-title-m mt-0">Regular text fields with message</h4>
						<div class="row mb-0">
							<div class="col xs-4 sm-4 md-6 mb-0">
								<div class="text-field">
									<div class="input-slot">
										<input type="text" name="regular-message">
										<label>Regular with hint</label>
									</div>
									<div class="details">
										<div class="message">This field has hint</div>
									</div>
								</div>
							</div>

							<div class="col xs-4 sm-4 md-6 mb-0">
								<div class="text-field persistent-message">
									<div class="input-slot">
										<input type="text" name="persistent-mesage">
										<label>Persistent Mesage</label>
									</div>
									<div class="details">
										<div class="message">This is a persistent mesage</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card surface elevation-1 p-16 mb-24">
						<h4 class="text-title-m mt-0">Required text fields</h4>
						<div class="row mb-0">
							<div class="col xs-4 sm-4 md-6 mb-0">
								<div class="text-field">
									<div class="input-slot">
										<input type="text" name="required-field" required>
										<label>Required Text field</label>
									</div>
									<div class="details">
										<div class="message">This field is required</div>
									</div>
								</div>
							</div>

							<div class="col xs-4 sm-4 md-6 mb-0">
								<div class="text-field persistent-message">
									<div class="input-slot">
										<input type="text" name="required-field" required>
										<label>Required Text field</label>
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
		</div>

	</div>
</div>

<div class="layer">
</div>

<div class="sidebar">
</div>

<?php include './footer.php'; ?>