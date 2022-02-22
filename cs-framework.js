(function() {

function selectionControls() {
	const $radios = $(".radio, .checkbox");
	const $input = $radios.children("input");
	const $label = $radios.children("label");

	$radios.each(function() {
		const $selectionControl = $("<span class='selection-control ripple ripple-center'></span>");
		$(this).append($selectionControl);
	});
	
	$input.on("focus", function() {
		$(this).siblings(".selection-control").addClass("focus");
	});

	$input.on("blur", function() {
		$(this).siblings(".selection-control").removeClass("focus");
	});

	$label.on("click", function(e) {
		e.preventDefault();
		$(this).siblings("input").click();
	});

	$radios.on("mouseenter", ".selection-control", function() {
		$(this).addClass("hover");
	});

	$radios.on("mouseout", ".selection-control", function() {
		$(this).removeClass("hover");
	});

	$radios.on("click", ".selection-control", function() {
		$(this).siblings("input").click();
	});
}


$(window).ready(function() {
	selectionControls();

	$(document).on("click", "a", function(e) {
		if ($(this).attr("href") === "#") {
			e.preventDefault();
		}
	});

});

})();








(function($) {

$.fn.lazy = function() {
	return this.each(function() {
		const $this   = $(this);
		const dataSrc = $this.data("src");
		console.log(dataSrc);

		this.loadImage = () => {
			let newImg = new Image();
			newImg.onload = function() {
				console.log("done loading");
				$this.attr("src", dataSrc);
				$this.addClass("done");
			}
			newImg.src = dataSrc;
		}

		this.loadImage();
	});
};

/** 
  * @component Drawer
  * @author Cristian Simtion www.simtion.eu
*/

$.fn.drawer = function() {
	return this.each(function() {
		const $this   = $(this);
		const $drawer = $(".nav-drawer");

		this.openOverlay = () => {
			if ($("#overlay-drawer").length != 0) {return;}
			$overlay = $('<div id="overlay-drawer" class="overlay for-drawer"></div>');
			$overlay.insertAfter($drawer);
			$overlay.on("click", this.closeDrawer);
		};

		this.closeOverlay = () => {
			const $overlay = $("#overlay-drawer");
			$overlay.addClass("out");
			$overlay.one('animationend', function() {
				$overlay.remove();
			});
		};

		this.openDrawer = () => {
			$drawer.addClass("opened");
			this.openOverlay();
		};

		this.closeDrawer = () => {
			$drawer.removeClass("opened");
			this.closeOverlay();
		};

		this.toggleDrawer = () => {
			$drawer.toggleClass("opened");
			if ($drawer.hasClass("opened")) {
				this.openOverlay();
			} else {
				this.closeOverlay();
			}
		};

		this.drawerAction = () => {
			const dataDrawer =  $this.data("drawer");

			if (dataDrawer === "open") {
				this.openDrawer();
			}

			if (dataDrawer === "close") {
				this.closeDrawer();
			}

			if (dataDrawer === "toggle") {
				this.toggleDrawer();
			}
		};

		$this.on("click", this.drawerAction);
	});
}

/** 
  * @component Text fields
  * @author Cristian Simtion www.simtion.eu
*/

$.fn.textFields = function() {
	return this.each(function() {
		const $this    = $(this);
		const $input   = $this.find("input");
		const $details = $this.find(".details");
		const $counter = $details.find(".counter");
		const required = $input.prop('required');

		this.init = () => {
			const classes = [];
			classes[0] = "loaded";
			classes[1] = $input.val() ? "value" : "";
			classes[2] = $details.length ? "field-details" : "";
			$this.addClass(classes.join(" "));
		};

		this.focused = () => {
			$this.removeClass("field-error");
			$this.addClass("focus");
		};

		this.blurred = () => {
			const classes = [];
			const removeClasses = [];
			removeClasses[0] = "focus";
			removeClasses[1] = ! $input.val() ? "value" : "";
			classes[0] = $input.val() ? "value" : "";
			classes[1] = !$input.val() && required ? "field-error" : "";
			$this.addClass(classes.join(" "));
			$this.removeClass(removeClasses.join(" "));
		};

		this.counter = () => {
			const value = $input.val();
			const max   = $input.prop("maxlength");
			if ($this.hasClass("word-counter")) {
				let split = value.split(" ");
				let words = value.length ? value.replace(/\s\s+/g, ' ').trim().split(" ").length : 0;
				$counter.text(words);
			} else {
				$counter.text(value.length + (max !== -1 ? ` / ${max}` : ""));
			}
		};

		this.init();

		$input.on("focus", this.focused);

		$input.on("blur", this.blurred);

		if ($counter.length) {
			this.counter();
			$input.on("keyup change paste click input", this.counter);
		}
		
	});
};

/** 
  * @component File input
  * @author Cristian Simtion www.simtion.eu
*/

$.fn.fileInputs = function() {
	return this.each(function() {
		const $this    = $(this);
		const $input   = $this.find("input");
		const $details = $this.find(".details");
		const $counter = $details.find(".counter");
		const required = $input.prop('required');

		this.init = () => {
			const classes = [];
			classes[0] = "loaded";
			classes[1] = $input.val() ? "value" : "";
			classes[2] = $details.length ? "field-details" : "";
			$this.addClass(classes.join(" "));
		};

		this.focused = () => {
			$this.removeClass("field-error");
			$this.addClass("focus");
		};

		this.blurred = () => {
			const classes = [];
			const removeClasses = [];
			removeClasses[0] = "focus";
			removeClasses[1] = ! $input.val() ? "value" : "";
			classes[0] = $input.val() ? "value" : "";
			classes[1] = !$input.val() && required ? "field-error" : "";
			$this.addClass(classes.join(" "));
			$this.removeClass(removeClasses.join(" "));
		};

		this.counter = () => {
			const value = $input.val();
			const max   = $input.prop("maxlength");
			if ($this.hasClass("word-counter")) {
				let split = value.split(" ");
				let words = value.length ? value.replace(/\s\s+/g, ' ').trim().split(" ").length : 0;
				$counter.text(words);
			} else {
				$counter.text(value.length + (max !== -1 ? ` / ${max}` : ""));
			}
		};

		this.displayValue = () => {
			$this.find(".display-input-text").text($input.val().replace(/C:\\fakepath\\/i, ''));
		};

		this.init();

		$input.on("focus", this.focused);

		$input.on("blur", this.blurred);

		if ($counter.length) {
			this.counter();
			$input.on("keyup change paste click input", this.counter);
		}
		
		$input.on("change", this.displayValue);
	});
};

/** 
  * @component Textarea
  * @author Cristian Simtion www.simtion.eu
*/

$.fn.textareaFields = function() {
	return this.each(function() {
		const $this     = $(this);
		const $textarea = $this.find("textarea");
		const $details  = $this.find(".details");
		const $counter  = $details.find(".counter");
		const required  = $textarea.prop('required');

		this.init = () => {
			const classes = [];
			classes[0] = "loaded";
			classes[1] = $textarea.val() ? "value" : "";
			classes[2] = $details.length ? "field-details" : "";
			$this.addClass(classes.join(" "));
		};

		this.focused = () => {
			$this.removeClass("field-error");
			$this.addClass("focus");
		};

		this.blurred = () => {
			const classes = [];
			const removeClasses = [];
			removeClasses[0] = "focus";
			removeClasses[1] = ! $textarea.val() ? "value" : "";
			classes[0] = $textarea.val() ? "value" : "";
			classes[1] = !$textarea.val() && required ? "field-error" : "";
			$this.addClass(classes.join(" "));
			$this.removeClass(removeClasses.join(" "));
		};

		this.counter = () => {
			const value = $textarea.val();
			const max   = $textarea.prop("maxlength");
			if ($this.hasClass("word-counter")) {
				let split = value.split(" ");
				let words = value.length ? value.replace(/\s\s+/g, ' ').trim().split(" ").length : 0;
				$counter.text(words);
			} else {
				$counter.text(value.length + (max !== -1 ? ` / ${max}` : ""));
			}
		};

		this.init();

		$textarea.on("focus", this.focused);

		$textarea.on("blur", this.blurred);

		if ($counter.length) {
			this.counter();
			$textarea.on("keyup change paste click input", this.counter);
		}
		
	});
};

/** 
  * @component Ripples
  * @author Cristian Simtion www.simtion.eu
*/

$.fn.ripple = function() {
	return this.each(function() {
		const $this = $(this);

		$this.on("mousedown", function(e) {
			if ($(this).hasClass("disabled")) { return; }

			const offset = this.getBoundingClientRect();
			const localX = e.clientX - offset.left;
			const localY = e.clientY - offset.top;
			const $rippleItem = $("<span class='ripple-item'></span>");

			$rippleItem.css('top', `${localY}px`);
			$rippleItem.css('left', `${localX}px`);

			this.appendChild($rippleItem[0]);

			let animEnded = false;

			$rippleItem.on("animationend", function() {
				animEnded = true;
			});

			$(document).on("mouseup", function() {
				if (animEnded) {
					$rippleItem.addClass("remove");
				} else {
					$rippleItem.addClass("hide");
				}
				$rippleItem.addClass("out");

				$rippleItem.on("transitionend", function() {
					$(this).remove();
				});
			});
		});

	});
};

/** 
  * @component Visible
  * @author Cristian Simtion www.simtion.eu
*/

$.fn.visible = function() {
	return this.each(function() {
		const $this = $(this);
		const $window = $(window);

		this.toggleCls = (condition, className) => {
			if (condition) {
				$this.addClass(className);
			} else {
				$this.removeClass(className);
			}
		};

		this.addCls = (condition, className) => {
			if (condition) {
				$this.addClass(className);
			}
		};

		this.isVisible = () => {
			const rec     = this.getBoundingClientRect();
			const top     = rec.top >= 0 && rec.top < $window.outerHeight();
			const bottom  = rec.bottom > 0 && rec.bottom <= $window.outerHeight();
			const right   = rec.right > 0 && rec.right <= $window.outerWidth();
			const left    = rec.left >= 0 && rec.left < $window.outerWidth();

			const isUp    = rec.top < 0;
			const isDown  = rec.top + rec.height > $window.outerHeight();
			const isLeft  = false;
			const isRight = false;

			const all     = top && bottom && right && left;

			this.addCls(all, "was-visible");
			this.addCls(top, "was-visible-top");
			this.addCls(right, "was-visible-right");
			this.addCls(bottom, "was-visible-bottom");
			this.addCls(left, "was-visible-left");

			this.toggleCls(all, "visible");
			this.toggleCls(top, "visible-top");
			this.toggleCls(right, "visible-right");
			this.toggleCls(bottom, "visible-bottom");
			this.toggleCls(left, "visible-left");

			this.toggleCls(isUp, "is-up");
			this.toggleCls(isDown, "is-down");
		};

		this.isVisible();
		$(window).on("scroll resize", this.isVisible);
	});
};

/** 
  * @component Dialogs
  * @author Cristian Simtion www.simtion.eu
*/

$.fn.dialog = function() {
	return this.each(function() {
		const $this      = $(this);

		var $openDialog  = false;
		var $closeDialog = false;
		var $overlay     = false;
		var dataOpen     = false;
		var dataClose    = false;

		this.getDataDialog = () => {
			dataOpen  = $this.data("open-dialog");
			dataClose = $this.data("close-dialog");

			if (dataOpen) {
				$openDialog = $(`#${dataOpen}`);
			}
			if (dataClose) {
				$closeDialog = $(`#${dataClose}`);
			}
		};

		this.animPersistent = () => {
			$openDialog.addClass("anim");
			$openDialog.one('animationend', function() {
				$openDialog.removeClass("anim");
			});
		};

		this.overlayBehaviour = () => {
			if($openDialog.hasClass("persistent")) {
				this.animPersistent();
			} else {
				this.closeDialog($openDialog, dataOpen);
			}
		};

		this.openOverlay = () => {
			if ($(`#overlay-for-${dataOpen}`).length != 0) {return;}

			$overlay = $(`<div id="overlay-for-${dataOpen}" class="overlay for-dialog"></div>`);
			$overlay.insertAfter($openDialog);
			$overlay.on("click", this.overlayBehaviour);
		};

		this.closeOverlay = (id) => {
			const $closeOverlay = $(`#overlay-for-${id}`);
			$closeOverlay.addClass("out");
			$closeOverlay.one('animationend', function() {
				$closeOverlay.remove();
			});
		};

		this.closeDialog = ($dom, id) => {
			$dom.addClass("closed");
			$dom.one('animationend', () => {
				$dom.removeClass("opened closed");
				this.closeOverlay(id);
			});
		}

		this.openDialog = () => {
			$openDialog.addClass("opening");
			$openDialog.one('animationend', () => {
				$openDialog.addClass("opened").removeClass("opening");
			});
			this.openOverlay();
		};

		this.getDataDialog();

		if ($openDialog) {
			$this.on("click", this.openDialog);
		}

		if ($closeDialog) {
			$this.on("click", () => {
				this.closeDialog($closeDialog, dataClose);
			});
		}

	});
};

/** 
  * @component Ajax transitions
  * @author Cristian Simtion www.simtion.eu
*/

$.fn.ajaxTransitions = function(options) {
	const $this = $(this);

	var defaults = {
		scrollOffset: 0,
		onSuccess: function() {}
	};

	this.datas = {
		settings: $.extend({}, defaults, options),
		oldHref: window.location.href,
		firstLoad: true
	};

	this.isEmptyHref = href => {
		return href.getAttribute("href") === '';
	};

	this.isExternalLink = href => {
		return href.host !== window.location.host;
	};

	this.isHash = href => {
		return href.getAttribute("href").charAt(0) === '#';
	};

	this.isSamePage = href => {
		return this.hrefWithoutHash(href) === this.hrefWithoutHash(window.location.href);
	};

	this.hrefWithoutHash = href => {
		const string = href.toString();
		if (string.indexOf("#") !== -1) {
			return string.substr(0, string.indexOf("#"));
		} else {
			return string;
		}
	};

	this.scrollToId = (hash, anim) => {
		if (hash === '#') {return;}
		const $hash = $(hash);
		if (!$hash.length) {return;}

		if (anim) {
			console.log(hash)
			$("html, body").animate({
				scrollTop: $hash.offset().top - this.datas.settings.scrollOffset
			}, 400, "swing");
		} else {
			$("html, body").scrollTop($hash.offset().top - this.datas.settings.scrollOffset);
		}
	};

	this.historyPushState = href => {
		window.history.pushState({path: href}, '', href);
	};

	this.loadNewContentXhr = () => {
		var xhr = new window.XMLHttpRequest();
		const $progress = $("<div class='progress'></div>");
		const $waiting = $("<div class='waiting'></div>");

		$("#app").prepend($waiting);
		var first = true;

		xhr.addEventListener("progress", function(evt) {
			if (evt.lengthComputable) {
				if (first) {
					$waiting.remove();
					$("#app").prepend($progress);
					$progress.css("width", "25%");
					first = false;
				}
				var percentComplete = (evt.loaded / evt.total) * 100;
				$progress.css("width", percentComplete < 26 ? "25%" : percentComplete + "%");
				if (percentComplete === 100) {
					$progress.addClass("completed");
					$progress.one('animationend', () => {
						$progress.remove();
					});
				}
			}
		}, false);

		xhr.addEventListener("loadend", function(evt) {
			$waiting.remove();
		});

		return xhr;
	};

	this.loadNewContentSuccess = (data, xhr, link, href) => {
		const $content = $("#content");
		const $html    = $( '<div>' ).html( data );
		const $scene   = $html.find("#content").children(".scene");
		const $layer   = $html.find("#content").children(".layer");

		if ($scene.length) {
			$content.children(".scene").first().remove();
			$content.append($scene);
			$(window).scrollTop(0);

			if (link) {
				this.historyPushState(href);
			}
			if ( $layer.length ) {
				$content.find(".layer").remove();
				$content.append($layer);
			}

			document.title = $html.find('title').text();

			this.datas.oldHref = window.location.href;
			this.datas.settings.onSuccess($html, $scene, $layer);
		} else {
			window.location.href = href;
		}
	};

	this.loadNewContent = (href, link) => {
		$.ajax( {
			type: 'POST',
			url: href,
			dataType : 'html',
			cache: false,
			xhr: this.loadNewContentXhr,
			success: (data, xhr) => {
				this.loadNewContentSuccess(data, xhr, link, href);
			}
		});
	};

	$this.on("click", "a", e => {
		const target = e.currentTarget;
		const $this  = $(target);
		const href   = $this.attr("href");

		if (this.isEmptyHref(target)) {
			e.preventDefault();
			// console.log("isEmptyHref");
			return;
		}

		if (this.isExternalLink(target)) {
			e.preventDefault();
			// console.log("isExternalLink");
			return;
		}

		if (this.isHash(target)) {
			e.preventDefault();
			this.scrollToId(href, true);
			this.historyPushState(href);
			// console.log("isHash");
			return;
		}

		if (this.isSamePage(target)) {
			e.preventDefault();
			// console.log("isSamePage");
			return;
		}

		if ($(".scene").length === 0) {
			window.location.href = href;
			return;
		}

		e.preventDefault();
		this.loadNewContent(href, true);
	});

	$(window).on("popstate", e => {
		if (!this.datas.firstLoad) {
			this.loadNewContent(window.location, false);
			this.datas.firstLoad = false;
		}
	});

	$("html, body").on("wheel DOMMouseScroll mousewheel keyup touchmove", function() {
		$(this).stop();
	});

	setTimeout(() => {
		this.datas.firstLoad = false;
	}, 300);
};

$.fn.toggleSublist = function() {
	return this.each(function() {
		const $this = $(this);

		this.toggleSublist = () => {
			$this.parent().addClass("active");
			$this.siblings("ul").slideToggle(175);
			$this.parent().children(".toggle-sublist").toggleClass("expanded");
		};

		$this.on("click", this.toggleSublist)
	});
};

$.fn.drawerList = function() {
	return this.each(function() {
		const $this = $(this);
		const $li   = $this.find("li");

		$li.on("click", "> a",function() {
			$li.removeClass("active");
			$(this).parent().addClass("active");
		});
	});
};

}(jQuery));