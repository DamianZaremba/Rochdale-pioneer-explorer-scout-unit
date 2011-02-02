<?php
include("includes/templating.class.php");
$page = new page('Links');
$page->add_data('
        <h4>Scouting Recourses</h4>
        <p><a href="http://www.scouts.org.uk/" title="The Scout Association">The official Scout Association website</a></p>
        <p><a href="http://www.scoutbase.org.uk/" title="Scout Base">Scout Base</a></p>
		
        <h4>Local Scout Districts</h4>
        <p><a href="http://www.rochdalescouts.org.uk/" title="Rochdale Scout District">Rochdale Scout District</a></p>
        <p><a href="http://www.gmnscouts.org.uk/" title="Greater Manchester North Scout District">Greater Manchester North Scout District</a></p>
        
        <h4>Local Scout Groups</h4>
        <p><a href="http://www.7tharochdale.org.uk/">7<em>th</em>A Rochdale</a></p>

        <p><a href="http://www.wardlescouts.org.uk/">17<em>th</em> Rochdale</a></p>
        <p><a href="http://www.29tharochdalescouts.com/">29<em>th</em>A Rochdale</a></p>

');

$page->dump_page();
?>