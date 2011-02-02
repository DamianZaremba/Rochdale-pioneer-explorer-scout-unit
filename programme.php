<?php
include("includes/templating.class.php");
$page = new page('Programme');

$page->add_data('
<!--<p>We currently do not have a programme for 2010. It should appear shortly, sorry for any inconvenience.</p>-->
<table width="100%">
	<tr>
		<td><b><u>Event</u></b></td>
		<td><b><u>Contact</u></b></td>
		<td><b><u>Date</u></b></td>
		<td><b><u>Time</u></b></td>
		<td><b><u>Location</u></b></td>
		<td><b><u>Cost</u></b></td>
		<td><b><u>Description</u></b></td>
	</tr>
	
	<tr>
		<td>Example</td>
		<td><a href="mailto:unit@pioneerexplorerscouts.org.uk?subject=Infomation on explorer event">Mike</a></td>
		<td>01/01/10</td>
		<td>00:00</td>
		<td>Planet Mars</td>
		<td>&pound;0.00</td>
		<td>This is an example event</td>
	</tr>
	
	<tr>
		<td>Another Example</td>
		<td><a href="mailto:wardle@pioneerexplorerscouts.org.uk?subject=Infomation on explorer event">Susan</a></td>
		<td>01/02/10</td>
		<td>00:00</td>
		<td>The Sun</td>
		<td>&pound;0.00</td>
		<td>This is another example event</td>
	</tr>
</table>

<p>For detailed contact infomation please refer to our <a href="%httppath%/contact.php">contact page</a>.</p>
');

$page->dump_page();
?>