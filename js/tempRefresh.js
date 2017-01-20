function tempRefresh(t,p) {
	var scripts = document.getElementsByTagName('script');
	var links = document.getElementsByTagName('link');
	var date = new Date();
	for(var i = 0; i < scripts.length; ++i) {
		if(scripts[i].className !== 'jsIgnore' && scripts[i].src !== 'undefined' && scripts[i].src !== '') {
			scripts[i].src = scripts[i].src + "?d=" + date.getTime();
		}
	}
	for(var i = 0; i < links.length; ++i) {
		if(links[i].href !== 'undefined' && links[i].className !== 'jsIgnore' && links[i].href !== '') {
			links[i].href = links[i].href + "?d=" + date.getTime();
		}
	}
	if(typeof t === 'undefined') t = 15000;
	if(typeof p === 'undefined') p = 0;
	if(p == 0) setTimeout("location.reload(true);",t);
}