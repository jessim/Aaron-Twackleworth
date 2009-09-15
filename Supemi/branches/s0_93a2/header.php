<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title(); ?> &para; <?php bloginfo('name'); ?> </title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<div id="header_supemi">

<div id="subheader_supemi">

<div id="subheadernav_supemi">

<form action="../">
<select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
<option value="">Translate this page:</option>
<option value="">--------------------</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cafr&u=<?php echo curPageURL(); ?>">English to Afrikaans</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Calb&u=<?php echo curPageURL(); ?>">English to Albanian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cara&u=<?php echo curPageURL(); ?>">English to Arabic</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cbel&u=<?php echo curPageURL(); ?>">English to Belarusian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cbul&u=<?php echo curPageURL(); ?>">English to Bulgarian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Ccat&u=<?php echo curPageURL(); ?>">English to Catalan</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cchi&u=<?php echo curPageURL(); ?>">English to Chinese</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Chrv&u=<?php echo curPageURL(); ?>">English to Croatian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Ccze&u=<?php echo curPageURL(); ?>">English to Czech</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cdan&u=<?php echo curPageURL(); ?>">English to Danish</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cdut&u=<?php echo curPageURL(); ?>">English to Dutch</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cest&u=<?php echo curPageURL(); ?>">English to Estonian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cfil&u=<?php echo curPageURL(); ?>">English to Filipino</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cfin&u=<?php echo curPageURL(); ?>">English to Finnish</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cfr&u=<?php echo curPageURL(); ?>">English to French</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cglg&u=<?php echo curPageURL(); ?>">English to Galician</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cger&u=<?php echo curPageURL(); ?>">English to German</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cgre&u=<?php echo curPageURL(); ?>">English to Greek</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cheb&u=<?php echo curPageURL(); ?>">English to Hebrew</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Chin&u=<?php echo curPageURL(); ?>">English to Hindi</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Chun&u=<?php echo curPageURL(); ?>">English to Hungarian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cice&u=<?php echo curPageURL(); ?>">English to Icelandic</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cind&u=<?php echo curPageURL(); ?>">English to Indonesian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cgle&u=<?php echo curPageURL(); ?>">English to Irish</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cita&u=<?php echo curPageURL(); ?>">English to Italian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cjpn&u=<?php echo curPageURL(); ?>">English to Japanese</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Ckor&u=<?php echo curPageURL(); ?>">English to Korean</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Clav&u=<?php echo curPageURL(); ?>">English to Latvian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Clit&u=<?php echo curPageURL(); ?>">English to Lithuanian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cmac&u=<?php echo curPageURL(); ?>">English to Macedonian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cmay&u=<?php echo curPageURL(); ?>">English to Malay</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cmlt&u=<?php echo curPageURL(); ?>">English to Maltese</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cnno&u=<?php echo curPageURL(); ?>">English to Norwegian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cper&u=<?php echo curPageURL(); ?>">English to Persian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cpol&u=<?php echo curPageURL(); ?>">English to Polish</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cpor&u=<?php echo curPageURL(); ?>">English to Portuguese</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Crum&u=<?php echo curPageURL(); ?>">English to Romanian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Crus&u=<?php echo curPageURL(); ?>">English to Russian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Csrp&u=<?php echo curPageURL(); ?>">English to Serbian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cslo&u=<?php echo curPageURL(); ?>">English to Slovak</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cslv&u=<?php echo curPageURL(); ?>">English to Slovenian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cspa&u=<?php echo curPageURL(); ?>">English to Spanish</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cswa&u=<?php echo curPageURL(); ?>">English to Swahili</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cswe&u=<?php echo curPageURL(); ?>">English to Swedish</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Ctha&u=<?php echo curPageURL(); ?>">English to Thai</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Ctur&u=<?php echo curPageURL(); ?>">English to Turkish</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cukr&u=<?php echo curPageURL(); ?>">English to Ukrainian</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cvie&u=<?php echo curPageURL(); ?>">English to Vietnamese</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cwel&u=<?php echo curPageURL(); ?>">English to Welsh</option>
<option value="http://www.google.com/translate_c?hl=en&langpair=en%7Cyid&u=<?php echo curPageURL(); ?>">English to Yiddish</option>
</select>
</form>

</div>

<div id="subheaderforms_supemi">

<?php $search_text = "Search"; ?> 
<form method="get" id="searchform"  
action="<?php bloginfo('home'); ?>/"> 
<input type="text" value="<?php echo $search_text; ?>"  
name="s" id="s"  
onblur="if (this.value == '')  
{this.value = '<?php echo $search_text; ?>';}"  
onfocus="if (this.value == '<?php echo $search_text; ?>')  
{this.value = '';}" /> 
<input type="hidden" id="searchsubmit" /> 
</form>

</div>

</div>

<div id="breadcrumbcss">

<?php
if(function_exists('bcn_display'))
{
	bcn_display();
}
?>

</div>

<h1 id="blog_title_supemi"><a id="blog_title_text_supemi" href="<?php bloginfo('home') ?>/" rel="home"><?php bloginfo('name') ?></a></h1>

<div id="tagline_css"><?php bloginfo('description'); ?></div>

</div>