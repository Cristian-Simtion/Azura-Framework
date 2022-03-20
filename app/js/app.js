(function($) {

$(window).ready(function() {
	$(".text-field").textFields();
	$(".textarea-field").textareaFields();
	$(".file-input").fileInputs();
	$(".ripple").ripple();
	$(".visibility").visible();
	$(".dialog-action").dialog();
	$("[data-drawer]").drawer();
	$("[data-src]").lazy();
	$(".toggle-sublist").toggleSublist();
	$(".nav-drawer-list").drawerList();
	$(".validation-form").validForm({
		onValidSubmit: $form => {
			console.log($form);
		}
	});

	$('pre').litelighter();

	var deferredPrompt;

	const $installApp = $('#install-app');

	var beforeinstallprompt = false;
	window.addEventListener('beforeinstallprompt', e => {
		$installApp.removeClass("disabled");
		deferredPrompt = e;
		beforeinstallprompt = true;
	});

	$installApp.on('click', async () => {
		if (deferredPrompt !== null) {
			deferredPrompt.prompt();
			const { outcome } = await deferredPrompt.userChoice;
			if (outcome === 'accepted') {
				deferredPrompt = null;
			}
		}
	});

	$("#app").ajaxTransitions({
		scrollOffset: 64,
		onSuccess: function($html, $scene, $layer, $sidebar) {
			$scene.find(".text-field").textFields();
			$scene.find(".textarea-field").textareaFields();
			$scene.find(".file-input").fileInputs();
			$scene.find(".ripple").ripple();
			$scene.find(".visibility").visible();
			$scene.find(".dialog-action").dialog();
			$scene.find("[data-drawer]").drawer();
			$scene.find("[data-src]").lazy();
			$scene.find(".toggle-sublist").toggleSublist();
			$scene.find(".nav-drawer-list").drawerList();
			$scene.find(".validation-form").validForm();
			$scene.find('pre').litelighter();

			$layer.find(".text-field").textFields();
			$layer.find(".textarea-field").textareaFields();
			$layer.find(".file-input").fileInputs();
			$layer.find(".ripple").ripple();
			$layer.find(".visibility").visible();
			$layer.find(".dialog-action").dialog();
			$layer.find("[data-drawer]").drawer();
			$layer.find("[data-src]").lazy();
			$layer.find(".toggle-sublist").toggleSublist();
			$layer.find(".nav-drawer-list").drawerList();
			$layer.find(".validation-form").validForm();
			$layer.find('pre').litelighter();

			$sidebar.find(".text-field").textFields();
			$sidebar.find(".textarea-field").textareaFields();
			$sidebar.find(".file-input").fileInputs();
			$sidebar.find(".ripple").ripple();
			$sidebar.find(".visibility").visible();
			$sidebar.find(".dialog-action").dialog();
			$sidebar.find("[data-drawer]").drawer();
			$sidebar.find("[data-src]").lazy();
			$sidebar.find(".toggle-sublist").toggleSublist();
			$sidebar.find(".nav-drawer-list").drawerList();
			$sidebar.find(".validation-form").validForm();
			$sidebar.find('pre').litelighter();

			$(".nav-drawer-list").find("a").each(function() {
				$(this).parent().removeClass("active");
				if ($(this).attr('href') === window.location.href) {

					$(this).parent().addClass("active");
				}
			});

			if ($sidebar.length > 0) {
				$("#app").addClass("sidebar-280");
			} else {
				$("#app").removeClass("sidebar-280");
			}

			if (beforeinstallprompt) {
				$('#install-app').removeClass("disabled");
				$('#install-app').on('click', async () => {
					if (deferredPrompt !== null) {
						deferredPrompt.prompt();
						const { outcome } = await deferredPrompt.userChoice;
						if (outcome === 'accepted') {
							deferredPrompt = null;
						}
					}
				});
			}
		}
	});

// 	let lastUrl = location.href; 
// new MutationObserver(() => {
//   const url = location.href;
//   if (url !== lastUrl) {
//     lastUrl = url;
//     onUrlChange(url);
//   }
// }).observe(document, {subtree: true, childList: true});
 
 
// function onUrlChange(url) {
// 	let start = url.lastIndexOf("/")
// 	let relativePath = url.substring(start + 1);

//   console.log(relativePath);
// }
});

$(window).ready(function() {
	if ($("body").hasClass("dark")) {
		$("#toggle-mode").children(".icon-dark-mode").addClass("icon-light-mode").removeClass("icon-dark-mode");
	} else {
		$("#toggle-mode").children(".icon-light-mode").removeClass("icon-light-mode").addClass("icon-dark-mode");
	}
	$("#toggle-mode").on("click", function() {
		if ($("body").hasClass("dark")) {
			$("body").removeClass("dark");
			$(this).children(".icon-light-mode").removeClass("icon-light-mode").addClass("icon-dark-mode");
		} else {
			$("body").addClass("dark");
			$(this).children(".icon-dark-mode").addClass("icon-light-mode").removeClass("icon-dark-mode");
		}
	});


	

});

}(jQuery));