$(document).ready(function() {
	var elementos = $('ul#subdom a li div.nameblock');
	for(var i = 0; i < elementos.length; i++){
		$(elementos[i]).children('div.flap').width($(elementos[i]).children('span').width()+8);
	}
});