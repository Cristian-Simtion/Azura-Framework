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

	$("#app").ajaxTransitions({
		scrollOffset: 64,
		onSuccess: function($html, $scene, $layer) {
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

			$(".nav-drawer-list").find("a").each(function() {
				$(this).parent().removeClass("active");
				console.log($(this).attr('href'), window.location.href)
				if ($(this).attr('href') === window.location.href) {

					$(this).parent().addClass("active");
				}
			});

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