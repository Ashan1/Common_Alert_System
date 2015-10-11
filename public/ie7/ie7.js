/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'disasters\'">' + entity + '</span>' + html;
	}
	var icons = {
		'dis-cracked2': '&#xe800;',
		'dis-erupting': '&#xe801;',
		'dis-fire14': '&#xe802;',
		'dis-hurricane': '&#xe803;',
		'dis-snowslide': '&#xe804;',
		'dis-tsunami1': '&#xe805;',
		'dis-waves8': '&#xe806;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/dis-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
