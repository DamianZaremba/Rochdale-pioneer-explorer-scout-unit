<?php
$groups_array = array(
	"wardle" => array(
		"lat"	=> "53.647182",
		"lon"	=> "-1.134953",
		"group_name"	=> "Wardle",
		"group_website"	=> "",
		"group_phone_number"	=> "",
		"group_email"	=> "wardle@pioneerexplorerscouts.org.uk",
		"group_address"	=> "",
		"group_contact"	=> "Susan",
	),
	
	"dernly" => array(
		"lat"	=> "53.639346",
		"lon"	=> "-2.117357",
		"group_name"	=> "Dernly",
		"group_website"	=> "",
		"group_phone_number"	=> "",
		"group_email"	=> "dernly@pioneerexplorerscouts.org.uk",
		"group_address"	=> "",
		"group_contact"	=> "Simon",
	),
	
	"norden" => array(
		"lat"	=> "53.625808",
		"lon"	=> "-2.216921",
		"group_name"	=> "Norden",
		"group_website"	=> "",
		"group_phone_number"	=> "",
		"group_email"	=> "norden@pioneerexplorerscouts.org.uk",
		"group_address"	=> "",
		"group_contact"	=> "Graham",
	),
	
	"district" => array(
		"lat"	=> "53.627182",
		"lon"	=> "-2.153835",
		"group_name"	=> "District HQ",
		"group_website"	=> "http://www.rochdalescouts.org.uk",
		"group_phone_number"	=> "",
		"group_email"	=> "",
		"group_address"	=> "",
		"group_contact"	=> "",
	),
	
	"spotland" => array(
		"lat"	=> "53.6208",
		"lon"	=> "-2.172520",
		"group_name"	=> "Spotland",
		"group_website"	=> "http://www.7tharochdale.org.uk/",
		"group_phone_number"	=> "01706 352659",
		"group_email"	=> "unit@pioneerexplorerscouts.org.uk",
		"group_address"	=> "",
		"group_contact"	=> "Mike",
	),
	
	"balderstoneSudden" => array(
		"lat"	=> "53.601037",
		"lon"	=> "-2.176752",
		"group_name"	=> "Balderstone Sudden",
		"group_website"	=> "",
		"group_phone_number"	=> "",
		"group_email"	=> "sudden@pioneerexplorerscouts.org.uk",
		"group_address"	=> "",
		"group_contact"	=> "Mac",
	),
);

class page{
	function __construct($pagetitle){
		$this->data = '';
		$this->css = '';
		$this->js = '';
		$this->bodydata = '';
		$this->page_title = $pagetitle;
		$this->http_path = 'http://pioneerexplorerscouts.org.uk.archives.nodehost.co.uk/';
	}
	
	public function add_css($css){
		$this->css .= $css;
	}
	
	public function add_bodydata($data){
		$this->bodydata .= $data;
	}
	
	public function add_js($js){
		$this->js .= $js;
	}
	
	private function add_header($page_title = 'Unknown'){
		$header = ('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Rochdale Pioneer Explorer Scout Unit &bull; Home</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="description" content="Rochdale Pioneer Explorer Scout Unit" />
<meta name="keywords" content="Scout, Explorer, Pioneer Explorer, Pioneer, Rochdale, Manchester, Greater Manchester, Greater Manchester North, North Manchester, Spotland Bridge, Nordon, Wardle, Dernley, Balderstone, Sudden" />
<meta name="copyright" content=">Copyright &copy; 2010 Pioneer Explorer Scout Unit" />
<meta name="author" content="Damian Zaremba" />

<meta name="robots" content="INDEX" />
<meta name="robots" content="FOLLOW" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="revisit" content="7 days" />

<meta name="classification" content="GENERAL" />
<meta name="distribution" content="GLOBAL" />

<meta name="audience" content="all" />
<meta name="MSSmartTagsPreventParsing" content="TRUE" />

<link href="%httppath%/style/css/main.css" rel="stylesheet" type="text/css" />
<link href="%httppath%/style/css/lightbox.css" rel="stylesheet" type="text/css" />
<link href="%httppath%/style/css/tooltip.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="%httppath%/style/js/jquery.js"></script>
<script type="text/javascript" src="%httppath%/style/js/lightbox.js"></script>
<script type="text/javascript" src="%httppath%/style/js/tooltip.js"></script>
<script type="text/javascript" src="%httppath%/style/js/jquery-ui.js"></script>
<script type="text/javascript" src="%httppath%/style/js/main.js"></script>

<link rel="shortcut icon" href="%httppath%/style/images/main/favicon.ico" />

<!-- Google Analytics -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11817192-2");
pageTracker._trackPageview();
} catch(err) {}</script>
<!-- End -->

<!-- Extra CSS -->%extracss%<!-- End -->
<!-- Extra JS -->%extrajs%<!-- End -->
</head>
<body %bodydata%>
<div id="header"></div>
<div id="nav">
	<ul>
		<li><a href="%httppath%/" title="Rochdale Pioneer Explorer Scout Unit Home">Home</a></li>
		<li><a href="%httppath%/parents.php" title="Rochdale Pioneer Explorer Scout Unit Parents Section">Parents</a></li>
		<li><a href="%httppath%/gallery.php" title="Rochdale Pioneer Explorer Scout Unit Gallery">Gallery</a></li>
		<li><a href="%httppath%/badges.php" title="Rochdale Pioneer Explorer Scout Unit Badges">Badges</a></li>
		<li><a href="%httppath%/programme.php" title="Rochdale Pioneer Explorer Scout Unit Programme">Programme</a></li>
				<li><a href="%httppath%/links.php" title="Rochdale Pioneer Explorer Scout Unit Links">Links</a></li>
				<li><a href="%httppath%/contact.php" title="Rochdale Pioneer Explorer Scout Unit Contact">Contact</a></li>
		<li><a href="http://www.gmnscouts.org.uk/" title="Greater Manchester North Scout District">GMN District</a></li>
	</ul>

</div>
<div id="main">
	<div id="content">
		<h2>%pagetitle%</h2>');
		
		$this->data = $header.$this->data;
	}
	
	private function add_footer(){
		$footer = ('
	</div>
</div>
<div id="footer"><p id="footer_copyright">Copyright &copy; 2010 Pioneer Explorer Scout Unit | Clipart used under license from <a href="http://www.scoutbase.org.uk/library/clipart/">ScoutBase</a></p><p id="footer_necker"><img src="%httppath%/style/images/main/explorer_necker.gif" alt="Pioneer Explorer Scout Unit Necker" /></p></div>
</body>
</html>');
		
		$this->data = $this->data.$footer;
	}
	
	public function add_data($data){
		$this->data .= $data;
	}
	
	private function parse_varibles(){
		$this->replace_vars = array(
			'%extracss%'	=> $this->css,
			'%extrajs%'	=> $this->js,
			'%bodydata%'	=> $this->bodydata,
		);
		foreach($this->replace_vars as $replace => $data){
			$this->data = str_replace($replace, $data, $this->data);
		}
		
		// Do this after the exta vars so there source gets parsed for these vars too :-)
		$this->replace_vars = array(
			'%httppath%'	=> $this->http_path,
			'%pagetitle%'	=> $this->page_title,
		);
		foreach($this->replace_vars as $replace => $data){
			$this->data = str_replace($replace, $data, $this->data);
		}
	}
	
	public function dump_page(){
		$this->add_header();
		$this->add_footer();
		$this->parse_varibles();
		echo $this->data;
		exit;
	}

}
?>
