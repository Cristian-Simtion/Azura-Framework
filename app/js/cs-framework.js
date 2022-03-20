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

		this.loadImage = () => {
			let newImg = new Image();
			newImg.onload = function() {
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

$.fn.visible = function(options) {

	var defaults = {
		onPartialVisible: $element => {},
		offPartialVisible: $element => {}
	};

	const $window  = $(window);
	const settings = $.extend({}, defaults, options);

	return this.each(function() {
		const $this   = $(this);

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

			const isUp    = rec.top + rec.height - 56 < 0;
			const isDown  = rec.top > $window.outerHeight();
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

			this.toggleCls(isUp, "is-up", "IsUp");
			this.toggleCls(isDown, "is-down", "IsDown");
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
		const $sidebar = $html.find("#content").children(".sidebar");

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

			if ( $layer.length ) {
				$content.find(".sidebar").remove();
				$content.append($sidebar);
			}

			document.title = $html.find('title').text();

			this.datas.oldHref = window.location.href;
			this.datas.settings.onSuccess($html, $scene, $layer, $sidebar);
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
			return;
		}

		if (this.isExternalLink(target)) {
			return;
		}

		if (this.isHash(target)) {
			e.preventDefault();
			this.scrollToId(href, true);
			this.historyPushState(href);
			return;
		}

		if (this.isSamePage(target)) {
			e.preventDefault();
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
	const button = this;
	return button.each(function() {
		const $this = $(this);

		this.toggleSublist = () => {
			button.each(function() {
				$(this).parent().removeClass("active");
				$(this).siblings("ul").slideUp(175);
				$(this).parent().children(".toggle-sublist").removeClass("expanded");
			});
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

$.fn.validForm = function(options) {

	var defaults = {
		onValidSubmit: function() {},
		onInvalidSubmit: function() {}
	};

	const settings = $.extend({}, defaults, options);

	const emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	const is = {
		email: email => emailReg.test(email.toLowerCase()),
		required: required => required !== "",
		empty: empty => empty === ""
	};

	return this.each(function() {
		var $form = $(this);
		var $formControls = $form.find(".form-control");

		this.getValueByType = ($this) => {
			if ($this.hasClass("text-field")) {
				return $this.find("input").val();
			}

			if ($this.hasClass("textarea-field")) {
				return $this.find("textarea").val();
			}
		};

		this.validateForm = () => {
			$form.validationPassed = [];
			$formControls.each((index, elem) => {
				const $this = $(elem);
				const data  = $this.data("valid");

				if (!data) {return;}

				$this.validationPassed = false;
				
				const val      = this.getValueByType($this);
				const validArr = [];

				const isValid = () => {
					if (data) {
						const rules = JSON.parse(JSON.stringify(data)).rules;
						for (let rule of rules) {
							validArr.push(is[rule.valid](val));
						}
						return !validArr.includes(false);
					}
				}

				if (!isValid()) {
					$this.addClass("field-error");
					$this.validationPassed = false;
				} else {
					$this.validationPassed = true;
				}

				$form.validationPassed.push($this.validationPassed);
				
			});
		}

		$form.on("submit", e => {
			e.preventDefault();
			this.validateForm();

			if (!$form.validationPassed.includes(false)) {
				settings.onInvalidSubmit($form);
			} else {
				settings.onValidSubmit($form);
			}
		});
	});
};

$.litelighter = function($this, options){
	this.settings = $.extend({},{ clone: false, style: 'light', language: 'generic', tab: '&Tab;' },options);
	this.code = $this;
	this.enable();
};

$.extend($.litelighter.prototype, {
	enable: function() {
		this.codelite = this.code.data('llcode', this.code.text());
		
		if (this.settings.clone == true) {
			this.codelite = $('<pre />').text(this.code.text()).addClass('litelighter').insertAfter(this.code.css('display','none'));
		}
		if (this.code.data('lllanguage')) {
			this.settings.language = this.code.data('lllanguage');
		}
		if (this.code.data('llstyle')) {
			this.settings.style = this.code.data('llstyle');
		}

		var style = $.litelighter.styles[this.settings.style];
		var lang  = $.litelighter.languages[this.settings.language];
		var txt   = $.litelighter.highlight(this.codelite.html(), style, lang).replace(/\t/g, this.settings.tab);

		this.codelite.attr('style', style.code).html(txt);
		return this.code;
	},
	disable: function() {
		if (this.settings.clone) {
			this.codelite.remove();
			return this.code.css('display','block');
		}
		return this.code.html('').text(this.code.data('llcode'));
	},
	destroy: function() {
		this.disable();
		return this.code.removeData('litelighter');
	},
	option: function(key, val) {
		if (val !== undefined) {
			this.code.data('ll'+key, val);
			this.settings[key] = val;
			this.disable();
			return this.enable();
		}
		return this[key];
	}
});

$.fn.extend({
	litelighter: function(o) {
		o = o || {};
		var tmp_args = Array.prototype.slice.call(arguments);

		if (typeof(o) == 'string') {
			return this.each(function() {
				var inst = $(this).data('litelighter');
				inst[o].apply(inst, tmp_args.slice(1));
			});
		} else {
			return this.each(function() {
				var $t = $(this);
				$t.data('litelighter', new $.litelighter($t, o) );
			});
		}
	}
});

$.litelighter.highlight = function(txt, style, lang){
	// recursively do any sub templating...
	var sublangsi = 0;
	var sublangs  = [];
	
	for (var i in lang) {
		if (lang.hasOwnProperty(i) && lang[i].language !== undefined && $.litelighter.languages[lang[i].language] !== undefined) {
			txt = txt.replace(lang[i].re, function($1, $2, $3) {
				sublangs[sublangsi++] = $.litelighter.highlight($2, style, $.litelighter.languages[lang[i].language]);
				return $1.replace($2, '___subtmpl'+ (sublangsi-1) +'___');
			});
		}
	}

	// do current level templating
	for (var i in lang) {
		if (lang.hasOwnProperty(i) && lang[i].language === undefined) {
			txt = txt.replace(lang[i].re, "___"+ i +"___$1___end"+ i +"___");
		}
	}
		
	var lvls = [];
		
	txt = txt.replace(/___(?!subtmpl)\w+?___/g, function($0) {
		var end     = ($0.substr(3,3)=='end')? true:false;
		var tag     = (!end? $0.substr(3):$0.substr(6)).replace(/_/g,'');
		var lastTag = lvls.length>0? lvls[lvls.length-1] : null;

		if (!end && (lastTag == null || tag == lastTag || (lastTag != null && lang[lastTag].embed != undefined && $.inArray(tag,lang[lastTag].embed)>=0 ))) {
			lvls.push(tag);
			return $0;
		} else if (end && tag == lastTag) {
			lvls.pop();
			return $0;
		}
		
		return "";
	});
	
	for (var i in lang) {
		if (lang.hasOwnProperty(i)) {
			txt = txt.replace(new RegExp("___end"+ i +"___","g"), "</span>").replace(new RegExp("___"+ i +"___","g"), `<span class='litelighterstyle ${style[lang[i].style]}'>`);
		}
	}

	// finally replace those sub templates
	for (var i in lang) {
		if (lang.hasOwnProperty(i) && lang[i].language !== undefined && $.litelighter.languages[lang[i].language] !== undefined) {
			txt = txt.replace(/___subtmpl\d+___/g, function($tmpl) { 
				var i = parseInt($tmpl.replace(/___subtmpl(\d+)___/, "$1"), 10);
				return sublangs[i];
			});
		}
	}
	return txt;
};

$.litelighter.styles = {
	light: {
		code: 'bg-surface',
		comment: 'color-neutral',
		string: 'color-primary',
		number: 'color-error',
		keyword: 'color-error',
		operators: 'color-tertiary'
	},
	dark: {
		code: 'bg-surface',
		comment: 'color-neutral',
		string: 'color-primary',
		number: 'color-error',
		keyword: 'color-secondary',
		operators: 'color-tertiary'
	}
};

$.litelighter.languages = {
	generic: {
		comment: { re: /(\/\/.*|\/\*([\s\S]*?)\*\/)/g, style: 'comment' },
		string: { re: /((\'.*?\')|(\".*?\"))/g, style: 'string' },
		numbers: { re: /(\-?(\d+|\d+\.\d+|\.\d+))/g, style: 'number' },
		regex: { re: /([^\/]\/[^\/].+\/(g|i|m)*)/g, style: 'number' },
		keywords: { re: /(?:\b)(function|for|foreach|while|if|else|elseif|switch|break|as|return|this|class|self|default|var|false|true|null|undefined)(?:\b)/gi, style: 'keyword' },
		operators: { re: /(\+|\-|\/|\*|\%|\=|\&lt;|\&gt;|\||\?|\.)/g, style: 'operators' }
	}
};

$.litelighter.languages.js = $.litelighter.languages.generic;

$.litelighter.languages.css = {
	comment: $.litelighter.languages.generic.comment,
	string: $.litelighter.languages.generic.string,
	numbers: { re: /((\-?(\d+|\d+\.\d+|\.\d+)(\%|px|em|pt|in)?)|\#[0-9a-fA-F]{3}[0-9a-fA-F]{3})/g, style: 'number' },
	keywords: { re: /(\@\w+|\:?\:\w+|[a-z\-]+\:)/g, style: 'keyword' }
};

$.litelighter.languages.html = {
	comment: { re: /(\&lt\;\!\-\-([\s\S]*?)\-\-\&gt\;)/g, style: 'comment' },
	tag: { re: /(\&lt\;\/?\w(.|\n)*?\/?\&gt\;)/g, style: 'keyword', embed: ['string'] },
	string: $.litelighter.languages.generic.string,
	css: { re: /(?:\&lt;style.*?\&gt;)([\s\S]+?)(?:\&lt;\/style\&gt;)/gi, language: 'css'},
	script: { re: /(?:\&lt;script.*?\&gt;)([\s\S]+?)(?:\&lt;\/script\&gt;)/gi, language: 'js'}
};

/* jQuery Litelighter syntax definition for SQL */
$.litelighter.languages.sql = {
	comment: { re: /(\-\-.*|\#.*)/g, style: 'comment' },
	string: $.litelighter.languages.generic.string,
	numbers: $.litelighter.languages.generic.numbers,
	keywords: { re: /(?:\b)(select|insert|update|delete|where|from|set|create|alter|drop|values|and|or|order|by|group|having|view|table|function|procedure|return|begin|end|with|as|into|false|true|null)(?:\b)/gi, style: 'keyword' },
	operators: $.litelighter.languages.generic.operators
};


/* jQuery Litelighter syntax definition for CFML */
$.litelighter.languages.cfml = {
	comment: { re: /(\&lt\;\!\-\-\-([\s\S]*?)\-\-\-\&gt\;)/g, style: 'comment' },
	cftag: { re: /(\&lt\;\/?cf\w(.|\n)*?\/?\&gt\;)/gi, style: 'number', embed: ['string','numbers','keywords'] },
	tag: { re: /(\&lt\;\/?(?!cf)\w(.|\n)*?\/?\&gt\;)/g, style: 'keyword', embed: ['string'] },
	string: $.litelighter.languages.generic.string,
	keywords: { re: /(?:\b)(false|true|null)(?:\b)/g, style: 'keyword' },
	css: $.litelighter.languages.html.css,
	script: $.litelighter.languages.html.script,
	cfscript: { re: /(?:\&lt;cfscript.*?\&gt;)([\s\S]+?)(?:\&lt;\/cfscript\&gt;)/gi, language: 'generic'},
	sql: { re: /(?:\&lt;cfquery.*?\&gt;)([\s\S]+?)(?:\&lt;\/cfquery\&gt;)/gi, language: 'cfsql'}
};

$.litelighter.languages.cfsql = {
	comment: { re: /(\-\-.*|\#.*|\&lt\;\!\-\-\-([\s\S]*?)\-\-\-\&gt\;)/g, style: 'comment' },
	cftag: { re: $.litelighter.languages.cfml.cftag.re, style: 'number', embed: ['string'] },
	string: $.litelighter.languages.generic.string,
	numbers: $.litelighter.languages.generic.numbers,
	keywords: $.litelighter.languages.sql.keywords,
	operators: $.litelighter.languages.generic.operators
};

/* jQuery Litelighter syntax definition for php */
$.litelighter.languages.php = $.extend({},$.litelighter.languages.generic);

/* jQuery Litelighter syntax definition for php embedded in html */
$.litelighter.languages.htmlphp = $.extend({},$.litelighter.languages.html, {
	php: { re: /(?:\&lt;\?php)([\s\S]+?)(?:\?\&gt;)/gi, language: 'php'}
});

}(jQuery));