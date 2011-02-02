<?php
include("includes/templating.class.php");
$page = new page('Contact');
$page->add_data('
		<p>Here are the contact details of all groups in the explorer unit</p>
		<table width="100%">
			<tr>
				<td><b><u>Person</u></b></td>
				<td><b><u>Role</u></b></td>
				<td><b><u>Phone Number</u></b></td>
				<td><b><u>Email</u></b></td>
			</tr>
			
			<tr>
				<td>Mike</td>
				<td>Unit Coordinator</td>
				<td>01706 352659</td>
				<td><a href="mailto:unit@pioneerexplorerscouts.org.uk" title="Contact the Unit Coordinator via email">unit@pioneerexplorerscouts.org.uk</a></td>
			</tr>
			
			<tr>
				<td>Simon</td>
				<td>Dearnley Contact</td>
				<td>01706 521430</td>
				<td><a href="mailto:dearnley@pioneerexplorerscouts.org.uk" title="Contact the Dearnley group via email">dearnley@pioneerexplorerscouts.org.uk</a></td>
			</tr>
			
			<tr>
				<td>Mac</td>
				<td>Balderstone/sudden contact</td>
				<td>Unknown</td>
				<td><a href="mailto:sudden@pioneerexplorerscouts.org.uk" title="Contact the Balderstone/Sudden group via email">sudden@pioneerexplorerscouts.org.uk</a></td>
			</tr>
			
			<tr>
				<td>Susan</td>
				<td>Wardle Contact</td>
				<td>Unknown</td>
				<td><a href="mailto:wardle@pioneerexplorerscouts.org.uk" title="Contact the Wardle group via email">wardle@pioneerexplorerscouts.org.uk</a></td>
			</tr>
			
			<tr>
				<td>Graham</td>
				<td>Norden Contact</td>
				<td>Unknown</td>
				<td><a href="mailto:norden@pioneerexplorerscouts.org.uk" title="Contact the Norden group via email">norden@pioneerexplorerscouts.org.uk</a></td>
			</tr>
		</table>
');

$page->dump_page();
?>