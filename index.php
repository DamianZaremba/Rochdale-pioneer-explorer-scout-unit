<?php
include("includes/templating.class.php");
$page = new page('Home');

function buildAlertData($group){
	global $groups_array;
	
	if(is_string($group) && isset($groups_array[$group])){
		$group_data = $groups_array[$group];
		$data = 'Group Name: '.$group_data['group_name'].'\r\n';
		$data .= 'Group Website: '.$group_data['group_website'].'\r\n';
		$data .= 'Group Contact: '.$group_data['group_contact'].'\r\n';
		$data .= 'Group Phone Number: '.$group_data['group_phone_number'].'\r\n';
		$data .= 'Group Email: '.$group_data['group_email'].'\r\n';
		$data .= 'Group Address: '.$group_data['group_address'].'\r\n';
	}else{
		$data = 'Group Name: Unknown\r\n';
		$data .= 'Group Website: Unknown\r\n';
		$data .= 'Group Contact: Unknown\r\n';
		$data .= 'Group Phone Number: Unknown\r\n';
		$data .= 'Group Email: Unknown\r\n';
		$data .= 'Group Address: Unknown\r\n';
	}
	
	return $data;
}
			
$page->add_js('
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAArKyS_yRXmMvmOZ3CeYtMhSGsTQve4q9e2831a6t9yQhtGZhwRTDDKnRHfTl_U1dkJXD7Yc_xtmzew" type="text/javascript"></script>
<script type="text/javascript">
	<!--
	var group_data = '.json_encode($groups_array).';
	
    function mapLoad() {
        if (GBrowserIsCompatible()) {
            var map = new GMap2(document.getElementById("map_canvas"));
            map.setMapType(G_NORMAL_MAP);
            map.setCenter(new GLatLng(53.625095, -2.141647), 12);

            function createMarker(point, html) {
                var marker = new GMarker(point, {icon: mapIcon});
                GEvent.addListener(marker, "click", function () {
                    marker.openInfoWindowHtml(html);
                });
                return marker;
            }

            // Controls
            map.addControl(new GMapTypeControl());
            map.addControl(new GLargeMapControl());

            // Icon
            var mapIcon = new GIcon();
            mapIcon.image = "%httppath%/style/images/map/icon.png";
            mapIcon.iconSize = new GSize(40, 40);
            mapIcon.iconAnchor = new GPoint(0, 20);
            mapIcon.infoWindowAnchor = new GPoint(5, 1);
			
			function buildMarkerHtml(group){	
				html = \'<div style="width: 300px;">\';
				html += \'<h1>\'+group.group_name+\'</h1>\';
				if(group.group_website != undefined && group.group_website != \'\'){
					html += \'<p>Website: <a href="\'+group.group_website+\'" title="\'+group.group_name+\' website">\'+group.group_name+\'</a></p>\';
				}else{
					html += \'<p>Site: Unknown</p>\';
				}
				
				if(group.group_contact != undefined && group.group_contact != \'\'){
					html += \'<p>Contact:<br />\'+group.group_contact+\'</p>\';
				}else{
					html += \'<p>Contact: Unknown</p>\';
				}
				
				if(group.group_email != undefined && group.group_email != \'\'){
					html += \'<p>Email: <a href="mailto:\'+group.group_email+\'" title="\'+group.group_name+\' group email">\'+group.group_email+\'</a></p>\';
				}else{
					html += \'<p>Email: Unknown</p>\';
				}
				
				if(group.group_phone_number != undefined && group.group_phone_number != \'\'){
					html += \'<p>Contact Number: \'+group.group_phone_number+\'</p>\';
				}else{
					html += \'<p>Contact Number: Unknown</p>\';
				}

				if(group.group_address != undefined && group.group_address != \'\'){
					html += \'<p>Address:<br />\'+group.group_address+\'</p>\';
				}else{
					html += \'<p>Address: Unknown</p>\';
				}

				html += \'<p>Directions:</p>\';
				if(group.group_address != undefined && group.group_address != \'\'){
					html += \'<input id="\'+group.group_name+\'_from" onKeyDown="if(event.keyCode==13) openDirections(this.id, \\\'\'+group.lat+\',\'+group.lon+\'\\\');" onBlur="if(this.value==\\\'Your Address\\\') this.value=\\\'\\\'; if(this.value==\\\'\\\') this.value=\\\'Your Address\\\'" value="Your Address" />\';
					html += \'&nbsp;<a href="#" onclick="javascript:openDirections(\\\'\'+group.group_name+\'_from\\\', \\\'\'+group.lat+\',\'+group.lon+\'\\\');" title="\'+group.group_name+\' directions">&raquo;</a>\';
					html += \'<p class="smallinfo">Please note the directions will open in a new window, you may need to allow popups for this.<\/p>\';
				}else{
					html += \'<p class="smallinfo">Sorry directions are not avaible for this group as the address is unknown<\/p>\';
				}
				
				html += \'</div>\';
				return html;
			}
			
			for (group in group_data) {
				group = group_data[group];
				if(group.group_name == undefined) continue;
				if(group.lat == undefined) continue;
				if(group.lon == undefined) continue;
				marker = createMarker(new GLatLng(group.lat, group.lon), buildMarkerHtml(group));
				//alert(buildMarkerHtml(group));
				map.addOverlay(marker);
			}
			
			/*
			// old shiz
			            // Wardle
            var marker = createMarker(new GLatLng(53.647182, -2.134953), \'<div style="width: 300px"><h1>Wardle</h1><p>Site: <a href="http://www.wardlescouts.org.uk/" title="">wardlescouts.org.uk</a></p><p>Email: <a href="mailto:wardle@pioneerexplorerscouts.org.uk" title="">wardle@pioneerexplorerscouts.org.uk</a></p><p>Contact Number: 01706 352659</p><p>Address: Unknown</p><\/div>\');
            map.addOverlay(marker);

            // Dernly
            var marker = createMarker(new GLatLng(53.639346, -2.117357), \'<div style="width: 300px"><h1>Dernly</h1><p>Site: <a href="#" title="">Unknown</a></p><p>Email: <a href="mailto:dearnley@pioneerexplorerscouts.org.uk" title="">dearnley@pioneerexplorerscouts.org.uk</a></p><p>Contact Number: 01706 521430</p><p>Address: Unknown</p><\/div>\');
            map.addOverlay(marker);

            // Norden
            var marker = createMarker(new GLatLng(53.625808, -2.216921), \'<div style="width: 300px"><h1>Norden</h1><p>Site: <a href="#" title="">Unknown</a></p><p>Email: <a href="mailto:norden@pioneerexplorerscouts.org.uk" title="">norden@pioneerexplorerscouts.org.uk</a></p><p>Contact Number: Unknown</p><p>Address: Unknown</p><\/div>\');
            map.addOverlay(marker);

            // District
            var marker = createMarker(new GLatLng(53.627182, -2.153835), \'<div style="width: 300px"><h1>District HQ</h1><p>Site: <a href="#" title="">Unknown</a></p><p>Email: <a href="#" title="">Unknown</a></p><p>Contact Number: Unknown</p><p>Address: Unknown</p><\/div>\');
            map.addOverlay(marker);

            // Spotland
            var marker = createMarker(new GLatLng(53.6208, -2.172520), \'<div style="width: 300px"><h1>Spotland</h1><p>Site: <a href="#" title="http://www.7tharochdale.org.uk/">7tharochdale.org.uk</a></p><p>Email: <a href="mailto:unit@pioneerexplorerscouts.org.uk" title="">unit@pioneerexplorerscouts.org.uk</a></p><p>Contact Number: Unknown</p><p>Address: Unknown</p><\/div>\');
            map.addOverlay(marker);

            // Balderstone Sudden
            var marker = createMarker(new GLatLng(53.601037, -2.176752), \'<div style="width: 300px"><h1>Balderstone Sudden</h1><p>Site: <a href="#" title="">Unknown</a></p><p>Email: <a href="mailto:sudden@pioneerexplorerscouts.org.uk  " title="">sudden@pioneerexplorerscouts.org.uk</a></p><p>Contact Number: Unknown</p><p>Address: Unknown</p><\/div>\');
            map.addOverlay(marker);
			*/
        }
    }
	
	function openDirections(fromid, toAddress){
		fromAddress = $("#"+fromid).val();
		if(fromAddress){
			window.open(\'http://maps.google.co.uk/maps?f=d&source=s_d&saddr=\'+fromAddress+\'&daddr=\'+toAddress);
		}else{
			alert(\'Sorry, the address seems to be missing for this group. Please contact the webmaster.\');
		}
	}

	$(function() {
		$("#map_canvas").resizable({
            maxHeight: 1500,
            maxWidth: 600,
            minHeight: 300,
            minWidth: 500
		});
	});
	//-->
</script>');

$page->add_bodydata('onload="mapLoad()" onunload="GUnload()"');

$page->add_data('
		<p>The Pioneer Explorer Scouts was launched in June 2003, following the Scout Associations "PRI" initiative. Catering for boys &amp; girls from Rochdale District\'s Scout Troops, The Pioneer Unit will accept any older Scout between the ages of 14 &amp; 18. We will also happily accept recruits from outside the movement.</p>
        <p>Our first meeting was held at the HQ of 1<em>st</em> Rochdale Scout Group, the third oldest Scout Group in the world. At first meetings were held once a month on the last Friday. Our second meeting was held at Ashworth Valley, our local campsite. Where we did various activities on site.</p>
        <p>Currently we meet at 29<em>th</em>A Rochdale (Dernly), 10<em>th</em> Rochdale (Norden), 17<em>th</em> Rochdale (Wardle) &amp; 37<em>th</em> Rochdale (Balderstone/Sudden). For meeting times, please contact the Unit, for infomation refer to the <a href="%httppath%/contact.php">contact page</a>.</p>
        <h3>Map of groups</h3>
        <div id="map_canvas"><img src="style/images/main/map.gif" alt="" width="500px" height="300px" style="border: none;" usemap="#Map" />
<map name="Map" id="Map">
  <area shape="rect" coords="307,5,341,31" href="#" onclick="javascript:alert(\''.buildAlertData('wardle').'\');" alt="Wardle" />
  <area shape="rect" coords="69,109,103,135" href="#" onclick="javascript:alert(\''.buildAlertData('norden').'\');" alt="Norden" />
  <area shape="rect" coords="359,44,393,70" href="#" onclick="javascript:alert(\''.buildAlertData('dernly').'\');" alt="Dernly" />
  <area shape="rect" coords="253,103,287,130" href="#" onclick="javascript:alert(\''.buildAlertData('hq').'\');" alt="District HQ" />
  <area shape="rect" coords="198,134,233,161" href="#" onclick="javascript:alert(\''.buildAlertData('spotland').'\');" alt="Spotland" />
<area shape="rect" coords="185,229,220,258" href="#" onclick="javascript:alert(\''.buildAlertData('balderstonesudden').'\');" alt="Balderstone Sudden" /></map>></div><p class="smallinfo">Clicking on the location will provide the groups details</p');

$page->dump_page();
?>
