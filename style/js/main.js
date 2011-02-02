$(function(){
	$(".switch, .switch_hide").hide();
	$(".switch_unhide").show();
	$('.gallery').lightBox({fixedNavigation:false});
});

function visibility_switcher(id){
	id = $('#'+id);
	if(!id){ return true; }
	
	if(id.is(':visible')) {
		id.fadeOut("medium");
		return false;
	}else{
		id.fadeIn("medium");
		return false;
	}
	/*
	$('#'+id+':hidden').fadeIn("slow");
	$('#'+id+':visible').fadeOut("slow");
	return false;
	*/
}

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

function changeSize(id, new_height, new_width){
	var id = $("#" + id);

	if (id.length && IsNumeric(new_height) && IsNumeric(new_width)) {
		id.css("height",new_height);
		id.css("width",new_width);
		return true;
	} else {
		return false;
	}
}
