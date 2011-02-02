$(function(){
	$(".switch, .switch_hide").hide();
	$(".switch_unhide").show();
	$('.gallery').lightBox({fixedNavigation:true});
});

function switcher(show_id) {
	var show = $("#" + show_id);
	/*$(".switch").fadeOut("slow", function(){
		show.fadeIn("slow");
	});*/
	if (show.length) {
		$(".switch").fadeOut("slow");

		if (show.is(":visible")){
			return true;
		} else {
			show.fadeIn("slow");
			return true;
		}
	} else {
		return false;
	}
}