<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     	: 24.0.0                                                    *
 * @ASCOOS-CATEGORY    	: Block (Frontend and Administrator Side)                   *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                         *
 * @ASCOOS-SITE        	: www.ascoos.com                                            *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ************************************************************************************
 *
 * @package            	: Block Manager - Latest classes from PHPClasses.org
 * @subpackage         	: Main Frontend file
 * @source             	: /[BLOCKS PATH]/phpclasses_latest/index.php
 * @fileNo             	: 
 * @version            	: 1.0.0
 * @created            	: 2024-10-10 07:00:00 UTC+3
 * @updated            	: 
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0
 */

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");


// Get Value Block Parameters
$count 		= $block->getParam('int', 'count', 10 );					// How many classes will be displayed.
$user		= $block->getParam('str', 'username', 'bigfriend' );	// PHPClasses User
//$show_days	= $block->getParam('bool', 'show_days', false );		// Show Days
$theme		= $block->getParam('lstr', 'theme', 'default' );		// The Block theme

// load Block Theme
$block->loadTheme($theme);

$xml = simplexml_load_file('https://'.$user.'.users.phpclasses.org/browse/latest/latest.xml');


$text = '';
$text .= '<div class="block-phpclasses-latest-'.$theme.'">';
if ($block->getVar('show_title')) { 
	$text .= '<div class="header"><h3>'.$block->getTitle().'</h3></div><div class="clear"></div>';
}
$text .= '<div class="text"><div class="table">';

$ci =1;

foreach ($xml->item as $feed) {
	if ($ci > $count) break;

	$parts = explode("#", $feed->link);
	$text .= '<div class="row">';
	$text .= '<div class="cell"><a target="_blank" href="'.$parts[0].'">'.$feed->title.'</a></div>';
	$text .= '</div>'; // row	
	
	$ci++;
	unset($parts);
}
unset($xml);

$text .= '</div></div>'; // table/text
$text .= '<div class="more"><a target="_blank" href="https://'.$user.'.users.phpclasses.org/browse/latest/latest.html"><strong>...'.$objLang->more.'</strong></a></div>';
$text .= '</div>'; // block
echo $text;
unset($text);

?>