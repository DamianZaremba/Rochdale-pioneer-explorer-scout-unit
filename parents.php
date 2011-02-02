<?php
include("includes/templating.class.php");
$page = new page('Parents');
$page->add_data('
		<h4><a href="#" onclick="javascript:switcher(\'info_organization_size\');">How big are the Scouts?</a></h4>
        <p class="switch" id="info_organization_size">The Scout Association is worldwide and has millions of members, in hundreds of countries. We are the biggest Co-educational youth movement in the Country.</p>
		<h4><a href="#" onclick="javascript:switcher(\'info_organization\');">How are we organised?</a></h4>
        <p class="switch" id="info_organization">England &amp; Wales are split into Counties, the Counties are divided into Districts and each Explorer Scout Unit is a member of a District.</p>
		<h4><a href="#" onclick="javascript:switcher(\'info_regulation\');">How are we regulated?</a></h4>

        <p class="switch" id="info_regulation">All activities that we provide for the young people must be provided in accordance with the Association Rules published in Policy, Organisation and Rules (POR). All adult leaders and helpers must have undergone a confidential enquiry before working with the young people. Instructors must be qualified in accordance with POR.</p>
		<h4><a href="#" onclick="javascript:switcher(\'info_leader_training\');">Are leaders trained?</a></h4>
        <p class="switch" id="info_leader_training">Yes all warranted leaders must undergo training, which covers all aspects of scouting. The Helpers however, do not have to complete formal training, but work under the supervision of the Leaders.</p>
		<h4><a href="#" onclick="javascript:switcher(\'info_joining\');">How does my child join?</a></h4>
        <p class="switch" id="info_joining">Simple really come along to a meeting &amp; looking for a leader, we are the grown up ones!</p>

		<h4><a href="#" onclick="javascript:switcher(\'info_uniform\');">Do they need a uniform?</a></h4>
        <p class="switch" id="info_uniform">Not initially, we do not expect uniform to be worn until they are invested. This usually takes about 5 weeks whilst they work on their membership award. The Explorers then choose when they need to wear their uniform, mainly on the more formal occasions.</p>
		<h4><a href="#" onclick="javascript:switcher(\'info_activities\');">What activities do the scouts run?</a></h4>
        <p class="switch" id="info_activities">We run many different activities both as a Unit and with Groups around the District. To give a flavour of the activities on offer camping, hiking, canoeing, climbing, abseiling, football, swimming, sailing, conservation, etc.... This is a huge subject and not one that can be answered fully here; if you wish to discuss this further please e-mail the Unit.</p>
		<h4><a href="#" onclick="javascript:switcher(\'info_offerin\');">What can the scouts offer your child?</a></h4>
        <p class="switch" id="info_offering">We can offer your child the chance to take part in the many activities we run, the chance to visit local community facilities and talk to the people who run them. They will also gain the chance to make a worthwhile change in our community. We will teach them how to enjoy the outdoors safely. We can offer your child the chance to develop as a person amongst a group of like-minded friends, to take responsibility and learn respect themselves and others.</p>

		<h4><a href="#" onclick="javascript:switcher(\'info_price_membership\');">How much does this all cost?</a></h4>
        <p class="switch" id="info_price_membership">There are some fixed costs, membership, and uniform, after that it is up to you really. We provide most of the equipment an Explorer Scout will need to take part in activities except items of personal kit. Membership currently cost �12-00 for a quarter. The uniform will cost extra, but can be bought through the Unit.</p>
		<h4><a href="#" onclick="javascript:switcher(\'info_price_activites\');">What do the activities cost?</a></h4>
        <p class="switch" id="info_price_activites">The cost of activities varies depending on what the activity is, some are free others require a small charge usually less than �5, a weekend camp will be about �15 a week camp about �90.</p>
		<h4><a href="#" onclick="javascript:switcher(\'info_helping\');">Can I help?</a></h4>
        <p class="switch" id="info_helping">Yes, anything you can do to support our Unit will be appreciated. It does not mean you have to get involved as a leader although that would be a great help! We need assistance with administration and a host of other things. If you think you can help ask!!</p>
');

$page->dump_page();
?>