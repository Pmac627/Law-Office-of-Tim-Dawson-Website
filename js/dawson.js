// UTILS

// This gives us simple dollar function and event binding
//var $ = document.querySelectorAll.bind(document);
//Element.prototype.on = Element.prototype.addEventListener;
// findId, takes one param: id name
function findId(id) {
	return document.getElementById(id);
}
// hasClass, takes two params: element and class name
function hasClass(el, cls) {
	if ("classList" in document.documentElement) {
		el.classList.contains(cls);
	} else {
		return el.className && new RegExp("(\\s|^)" + cls + "(\\s|$)").test(el.className);
	}
}
// removeClass, takes two params: element and class name
function removeClass(el, cls) {
	if ("classList" in document.documentElement) {
		el.classList.remove(cls);
	} else {
		var reg = new RegExp("(\\s|^)" + cls + "(\\s|$)");
		el.className = el.className.replace(reg, " ").replace(/(^\s*)|(\s*$)/g,"");
	}
}
// addClass, takes two params: element and class name
function addClass(el, cls) {
	if ("classList" in document.documentElement) {
		el.classList.add(cls);
	} else {
		el.className += " " + cls;
	}
}

// TASKS
switch (location.pathname.substring(1)) {
	case '':
	case 'home':
		addClass(findId('navHome'),'header-a-current');
		break;
	case 'practices':
		addClass(findId('navPractices'),'header-a-current');
		break;
	case 'contact':
		addClass(findId('navContact'),'header-a-current');
		break;
	default:
		addClass(findId('navHome'),'header-a-current');
		break;
}

function confirmBox() { return confirm('Are you sure you want to RESET the form?'); }

function areYouSure(x) {
	var y = confirmBox();
	if (y === true) {
		var r = findId('reset');
		r.click();
	}
}
var p = findId('phone');
if(p) {
	p.maxLength = 12;
	p.onkeyup = function(e) {
		e = e || window.event;
		if (e.keyCode >= 65 && e.keyCode <= 90) {
			this.value = this.value.substr(0, this.value.length - 1);
			return false;
		} else if (e.keyCode >= 37 && e.keyCode <= 40) {
			return true;
		}
		var v = (this.value.replace(/[^\d]/g, ''));
		if (v.length==10) {
			this.value = (v.substring(0,3) + "-" + v.substring(3,6) + "-" + v.substring(6,10));
		};
	}
}
var show = Math.floor(Math.random() * 5);
var blurb = findId('blurb' + show);
if(blurb) {
	removeClass(blurb,'nix');
}