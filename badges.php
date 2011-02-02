<?php
include("includes/templating.class.php");
$page = new page('Badges');

$badges = array(
	'activity'	=> array(
		'Air Activities'	=> '%httppath%/style/images/badges/activity/ex-al-aiac.gif',
		'Athlete'	=> '%httppath%/style/images/badges/activity/ex-al-at.gif',
		'Advanced Aviation Skills'	=> '%httppath%/style/images/badges/activity/ex-al-avsk-ad.gif',
		'Aviation Skills '	=> '%httppath%/style/images/badges/activity/ex-al-avsk.gif',
		'Canoeing'	=> '%httppath%/style/images/badges/activity/ex-al-cano.gif',
		'Caving'	=> '%httppath%/style/images/badges/activity/ex-al-cave.gif',
		'Climbing'	=> '%httppath%/style/images/badges/activity/ex-al-cl.gif',
		'Community'	=> '%httppath%/style/images/badges/activity/ex-al-co.gif',
		'Creative (discontinued)'	=> '%httppath%/style/images/badges/activity/ex-al-cr.gif',
		'Creative Arts'	=> '%httppath%/style/images/badges/activity/ex-al-crar.gif',
		'Emergency Aid'	=> '%httppath%/style/images/badges/activity/ex-al-emai.gif',
		'Hill Walker'	=> '%httppath%/style/images/badges/activity/ex-al-hiwa.gif',
		'Lifesaver'	=> '%httppath%/style/images/badges/activity/ex-al-lisa.gif',
		'Mountain Activities'	=> '%httppath%/style/images/badges/activity/ex-al-moac.gif',
		'Mountain Biking'	=> '%httppath%/style/images/badges/activity/ex-al-mobi.gif',
		'Motor Sports'	=> '%httppath%/style/images/badges/activity/ex-al-mosp.gif',
		'Advanced Nautical Skills'	=> '%httppath%/style/images/badges/activity/ex-al-nask-ad.gif',
		'Nautical Skills'	=> '%httppath%/style/images/badges/activity/ex-al-nask.gif',
		'Navigator'	=> '%httppath%/style/images/badges/activity/ex-al-navi.gif',
		'Performance Arts'	=> '%httppath%/style/images/badges/activity/ex-al-pear.gif',
		'Physical Recreation'	=> '%httppath%/style/images/badges/activity/ex-al-phre.gif',
		'Public Relations'	=> '%httppath%/style/images/badges/activity/ex-al-pure.gif',
		'Quartermaster'	=> '%httppath%/style/images/badges/activity/ex-al-qu.gif',
		'Racquet Sports'	=> '%httppath%/style/images/badges/activity/ex-al-rasp.gif',
		'Recreation'	=> '%httppath%/style/images/badges/activity/ex-al-re.gif',
		'Scouting Skills'	=> '%httppath%/style/images/badges/activity/ex-al-scsk.gif',
		'Science and Technology'	=> '%httppath%/style/images/badges/activity/ex-al-scte.gif',
		'Skiing'	=> '%httppath%/style/images/badges/activity/ex-al-sk.gif',
		'Snow Boarding'	=> '%httppath%/style/images/badges/activity/ex-al-snsp.gif',
		'Street Sports'	=> '%httppath%/style/images/badges/activity/ex-al-stsp.gif',
		'Water Activities'	=> '%httppath%/style/images/badges/activity/ex-al-waac.gif',
		'Activity Centre Service'	=> '%httppath%/style/images/badges/activity/ex-as-case.gif',
	),
	
	'staged'	=> array(
		'Emergency Aid Stage 1'	=> '%httppath%/style/images/badges/staged/st-al-emai1.gif',
		'Emergency Aid Stage 2'	=> '%httppath%/style/images/badges/staged/st-al-emai2.gif',
		'Emergency Aid Stage 3'	=> '%httppath%/style/images/badges/staged/st-al-emai3.gif',
		'Emergency Aid Stage 4'	=> '%httppath%/style/images/badges/staged/st-al-emai4.gif',
		'Emergency Aid Stage 5'	=> '%httppath%/style/images/badges/staged/st-al-emai5.gif',
		'Hikes Away 1'	=> '%httppath%/style/images/badges/staged/st-as-hiaw1.gif',
		'Hikes Away 5'	=> '%httppath%/style/images/badges/staged/st-as-hiaw5.gif',
		'Hikes Away 10'	=> '%httppath%/style/images/badges/staged/st-as-hiaw10.gif',
		'Hikes Away 20'	=> '%httppath%/style/images/badges/staged/st-as-hiaw20.gif',
		'Hikes Away 35'	=> '%httppath%/style/images/badges/staged/st-as-hiaw35.gif',
		'Hikes Away 50'	=> '%httppath%/style/images/badges/staged/st-as-hiaw50.gif',
		'Information Technology Stage 1'	=> '%httppath%/style/images/badges/staged/st-as-it1.gif',
		'Information Technology Stage 2'	=> '%httppath%/style/images/badges/staged/st-as-it2.gif',
		'Information Technology Stage 3'	=> '%httppath%/style/images/badges/staged/st-as-it3.gif',
		'Information Technology Stage 4'	=> '%httppath%/style/images/badges/staged/st-as-it4.gif',
		'Information Technology Stage 5'	=> '%httppath%/style/images/badges/staged/st-as-it5.gif',
		'Musician Stage 1'	=> '%httppath%/style/images/badges/staged/st-as-mu1.gif',
		'Musician Stage 2'	=> '%httppath%/style/images/badges/staged/st-as-mu2.gif',
		'Musician Stage 3'	=> '%httppath%/style/images/badges/staged/st-as-mu3.gif',
		'Musician Stage 4'	=> '%httppath%/style/images/badges/staged/st-as-mu4.gif',
		'Musician Stage 5'	=> '%httppath%/style/images/badges/staged/st-as-mu5.gif',
		'Nights Away 1'	=> '%httppath%/style/images/badges/staged/st-as-niaw1.gif',
		'Nights Away 5'	=> '%httppath%/style/images/badges/staged/st-as-niaw5.gif',
		'Nights Away 10'	=> '%httppath%/style/images/badges/staged/st-as-niaw10.gif',
		'Nights Away 20'	=> '%httppath%/style/images/badges/staged/st-as-niaw20.gif',
		'Nights Away 35'	=> '%httppath%/style/images/badges/staged/st-as-niaw35.gif',
		'Nights Away 50'	=> '%httppath%/style/images/badges/staged/st-as-niaw50.gif',
		'Nights Away 75'	=> '%httppath%/style/images/badges/staged/st-as-niaw75.gif',
		'Nights Away 100'	=> '%httppath%/style/images/badges/staged/st-as-niaw100.gif',
		'Nights Away 125'	=> '%httppath%/style/images/badges/staged/st-as-niaw125.gif',
		'Nights Away 150'	=> '%httppath%/style/images/badges/staged/st-as-niaw150.gif',
		'Nights Away 175'	=> '%httppath%/style/images/badges/staged/st-as-niaw175.gif',
		'Nights Away 200'	=> '%httppath%/style/images/badges/staged/st-as-niaw200.gif',
		'Swimmer Stage 1'	=> '%httppath%/style/images/badges/staged/st-as-sw1.gif',
		'Swimmer Stage 2'	=> '%httppath%/style/images/badges/staged/st-as-sw2.gif',
		'Swimmer Stage 3'	=> '%httppath%/style/images/badges/staged/st-as-sw3.gif',
		'Swimmer Stage 4'	=> '%httppath%/style/images/badges/staged/st-as-sw4.gif',
		'Swimmer Stage 5'	=> '%httppath%/style/images/badges/staged/st-as-sw5.gif',
	),
);

$page->add_js('
<script type="text/javascript">
	function print_image(imagepath){
		var printIMG = window.open("","printIMG","status=0,toolbar=0,menubar=0,resizable0,scrollbars=0,height=1,width=1");
		printIMG.document.open();
		printIMG.document.write(\'<img src="\'+imagepath+\'" />\');
		printIMG.print();
		printIMG.close();
	}
</script>
');

$page->add_data('
		<p>The National programme for training awards links into both the Scout Network &amp; the Duke of Edinburgh\'s Award scheme.</p>
		<p class="smallinfo">Please note clicking on any image will enlarge it.</p>
		<a name="badge-locations" />
		<h4>Badge Locations</h4>
         <p><a href="%httppath%/style/images/badges/locations.gif" class="gallery" title="Badge Locations"><img src="%httppath%/style/images/badges/locations.gif" alt="Badge Locations" width="120px" /></a><p><a href="" onclick="javascript:print_image(\'%httppath%/style/images/badges/locations.gif\');">Print positions</a></p></p>
		 
		<a name="membership" />
		<h4>Membership Award</h4>
        <p>Any new recruit, whether one of our older Scouts, or a direct entry to the Unit, will have to complete this award before they can become Explorer Scouts. The recruit must Describe the various options available locally to become an Explorer Scout, Show an understanding of the Scout Promise and Law, Demonstrate an understanding of local, national and international Scouting, Describe the Unit management and support available to you, &amp; Make the Scout Promise and accept the Scout Law.</p>
        
         <p><a href="%httppath%/style/images/badges/membership.gif" class="gallery" title="Membership Award"><img src="%httppath%/style/images/badges/membership.gif" alt="Membership Award" width="120px" /></a></p>
        
		<a name="progressive" />
		<h4>Progressive Awards</h4>

        <p>The three progressive awards follow on from the Scout Section awards, with the Chief Scouts Platinum Award, &amp; the Chief Scouts Diamond Award. The Queens Scout award follows these, which is the highest award available to our youth members. Holders of this award are invited to attend the National Scout St Georges day, at Windsor Castle. A privilege first started by our founder, after an invitation from King Edward VII in October 1909, whilst B-P was spending a weekend at Balmoral with the Royal Family.</p>
        
        <p>The three awards all link closely with the DofE award. Scouts completing the appropriate Bronze, Silver or Gold Awards do not have to complete some of the project activities, as they will already have completed similar things with the DofE. The Unit leadership team are able to assess our Scouts for the first two DofE awards, &amp; County personnel are able to assess to the Gold Award level. Of course, our Leaders will assess up to &amp; including the Queens Scout Award.</p>
        
        <p><a href="%httppath%/style/images/badges/qsa.gif" class="gallery" title="Queen Scout Award"><img src="style/images/badges/qsa.gif" alt="Queen Scout Award" width="120px" /></a> <a href="%httppath%/style/images/badges/qssa.gif" class="gallery" title="Chief Scout Diamond Award"><img src="style/images/badges/qssa.gif" alt="Chief Scout Diamond Award"" width="120px" /></a> <a href="%httppath%/style/images/badges/qsga.gif" class="gallery" title="Chief Scout Platinum Award"><img src="style/images/badges/qsga.gif" alt="Chief Scout Platinum Award" width="120px" /></a></p>
        
		<a name="activity" />
		 <h4>Activity Badges</h4>

        <p id="award_activity">Explorer Scouts are the last section to be able to earn activity badges, as Network Scouts are over 18, they work towards more vocational, nationally recognised awards, such as First Aid training with the St John\'s Ambulance.</p>
        
        <p>The range of badges, twenty-eight in all, cover a wide range of areas.</p>
        
        <p>The full list of badges can be found on "<a href="http://scoutbase.org.uk/">Scoutbase</a>".</p>
        
        <p>');
		$rand_keys = array_rand($badges['activity'], 3);
		foreach($rand_keys as $key){
			$page->add_data('<a href="'.$badges['activity'][$key].'" class="gallery" title="Activity Badge - '.$key.'"><img src="'.$badges['activity'][$key].'" alt="Activity Badge - '.$key.'" width="120px" /></a>');
		}
$page->add_data('<a href="#activity" onclick="javascript:switcher(\'activity_full\');">view all</a></p>	
		<div id="activity_full" class="switch">');
		$i = 0;
		foreach($badges['activity'] as $badge => $image){
			if($i == 0) $page->add_data('<p>');
			$page->add_data('<a href="'.$image.'" class="gallery" title="Activity Badge - '.$badge.'"><img src="'.$image.'" alt="Activity Badge - '.$badge.'" width="120px" /></a>');
			if($i == 5){
				$i = 0;
				$page->add_data('</p>');
			}else{
				$i++;
			}
		}
$page->add_data('<p><a href="#activity" onclick="javascript:switcher(\'activity_full\');">view summary</a></p></div>

		<a name="yl" />
		 <h4>Young Leaders</h4>
        <p>The Young Leader Scheme is in addition to the normal training scheme. It allows the Explorer Scout to develop themselves working with our younger sections. They can choose to work with their own Scout Group, or with another Group. The YL does not have to be an active member of any Unit, likewise a Unit member does not have to be a YL.</p>

        
        <p>The YL will undertake leadership training, to prepare them for their role in the movement. Any training completed will count towards the training they must do if they choose to become an adult leader when they reach 18.</p>
        
        <p><a href="%httppath%/style/images/badges/yl.gif" class="gallery" title="Young Leader Award"><img src="style/images/badges/yl.gif" alt="Young Leader Award" width="120px" /></a></p>
        
		<a name="certificates" />
		 <h4>Certificate of Achievement</h4>
        <p>All Explorer, &amp; Network, Scouts are awarded the Certificates once a year. In special circumstances they can be awarded for special activities. The Certificate records what the Scout has done in the last year, &amp; what they hope to achieve in the next year. The Certificate can be included in the individuals C.V, National Record of Achievement, or University Application.</p>
       
		<a name="staged" />
		 <h4>Staged Awards</h4>

        <p>The Explorer Scout can also complete, or progress in any of the Staged Badges open to the younger sections. These include Musician, Swimming, Nights Away, Emergency Aid, Hikes Away &amp; IT Badges. Please check on <a href="http://scoutbase.org.uk/">Scoutbase</a> for details.</p>
        
        <p>');
		$rand_keys = array_rand($badges['staged'], 3);
		foreach($rand_keys as $key){
			$page->add_data('<a href="'.$badges['staged'][$key].'" class="gallery" title="Staged Award - '.$key.'"><img src="'.$badges['staged'][$key].'" alt="Staged Award - '.$key.'" width="120px" /></a> ');
		}
$page->add_data('<a href="#staged" id="viewsummarystagedswitch" onclick="javascript:switcher(\'staged_full\');">view all</a></p>
		<div id="staged_full" class="switch">');
		$i = 0;
		foreach($badges['staged'] as $badge => $image){
			if($i == 0) $page->add_data('<p>');
			$page->add_data('<a href="'.$image.'" class="gallery" title="Activity Badge - '.$badge.'"><img src="'.$image.'" alt="Activity Badge - '.$badge.'" width="120px" /></a>');
			if($i == 5){
				$i = 0;
				$page->add_data('</p>');
			}else{
				$i++;
			}
		}
$page->add_data('<p><a href="#staged" onclick="javascript:switcher(\'staged_full\');">view summary</a></p></div>
        
		<a name="belt" />
		 <h4>Explorer Belt</h4>
        <p>Open to all Scouts over 16, giving the chance of a lifetime to explore a foreign country over a ten day expedition, &amp; carry out challenges in that country. More details on Scoutbase.</p>

		<a name="group" />
		<h4>Group Awards</h4>
        <p>Any member of the Unit can choose to work with other Groups to gain one of these awards. The Unit as a whole can choose to work with other Groups as well. More details can be found on "Scoutbase" or the Scout Association portal.</p>
        
        <p><a href="%httppath%/style/images/badges/gafaith.gif" class="gallery" title="Group Award - Faith Group Award"><img src="style/images/badges/gafaith.gif" alt="Faith Group Award" width="120px" /></a> <a href="%httppath%/style/images/badges/gaenv.gif" class="gallery" title="Group Award - Enviroment Group Award"><img src="style/images/badges/gaenv.gif" alt="Enviroment Group Award" width="120px" /></a> <a href="%httppath%/style/images/badges/gainter.gif" class="gallery" title="Group Award - International Group Award"><img src="style/images/badges/gainter.gif" alt="International Group Award" width="120px" /></a></p>
        
		<a name="movingon" />
		<h4>Moving On</h4>
        <p>At the age of 18, our older Explorers then have the opportunity to join the next section, the Scout Network. Whilst they are making this move, &amp; perhaps developing an adult role within the movement, they are able to complete the Moving On Award. The Scout will attend a number of meetings, talking with both members &amp; Leaders about the Network locally, &amp; again make the Scout Promise.</p>

        <p><a href="%httppath%/style/images/badges/movingon.gif" class="gallery" title="Moving On Award"><img src="style/images/badges/movingon.gif" alt="Moving On Award" width="120px" /></a></p>
');

$page->dump_page();
?>