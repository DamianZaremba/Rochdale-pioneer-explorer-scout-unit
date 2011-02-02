<?php
include("includes/templating.class.php");
$page = new page('Gallery');
$page->add_data('
		<p>Here are some random pictures I found on the current site. Click on the images to increase there size</p>
        <table id="gallery_table">
        <tr>
        <td><a href="%httppath%/gallery_images/image002.jpg" class="gallery" title="Example Image"><img src="gallery_images/image002.jpg" alt="Example Image" /></a><br />Example Picture 1</td>
        <td><a href="%httppath%/gallery_images/image003.jpg" class="gallery" title="Another Example Image"><img src="gallery_images/image003.jpg" alt="Another Example Image"/></a><br />Example Picture 2</td>
        </tr>
        <tr>
        <td><a href="%httppath%/gallery_images/image003.jpg" class="gallery" title="Another Example Image"><img src="gallery_images/image003.jpg" alt="Another Example Image"/></a><br />Example Picture 2</td>
        <td><a href="%httppath%/gallery_images/image002.jpg" class="gallery" title="Example Image"><img src="gallery_images/image002.jpg" alt="Example Image" /></a><br />Example Picture 1</td>
        </tr>
        </table>
');

$page->dump_page();
?>