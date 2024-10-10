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
 * @subpackage         	: General and US English Language file
 * @source             	: /[BLOCKS PATH]/phpclasses_latest/languages/en.php
 * @fileNo             	: 
 * @version            	: 1.0.0
 * @created            	: 2024-10-10 07:00:00 UTC+3
 * @updated            	: 
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @translator         	: 
 * @translatorSite 		: 
 * @translateDate     	: 
 */


defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

class TBlock_phpclasses_latest_Language extends TObject
{
	public $blockname = "Latest classes from PHPClasses.org";

	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "DROGIDIS CHRISTOS";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT SOFTWARE";
	public $APL_translator = "";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "Displays a box with a list of the last classes from the PHPClasses.org.";

	public $APL_paramgroup_general_label = "▼ &nbsp; General Configuration Options";
	public $APL_paramgroup_general_label_info = "<strong>GENERAL OPTIONS PARAMETERS</strong><br />--------------------------------------<br /><br />In this context you can choose from several general parameters and dynamically configure the block";
	public $APL_count_label = "Number of classes";
	public $APL_count_desc = "<strong>NUMBER OF CLASSES</strong><br />--------------------------------------<br /><br />Here you must select the number of classes that will appear";
	public $APL_username_label = "Username";
	public $APL_username_desc = "<strong>USERNAME</strong><br />--------------------------------------<br /><br />Here you need to provide the ID username you log in to phpclasses.org";
	public $APL_show_days_label = "Show Days";
	public $APL_show_days_desc = "<strong>SHOW DAYS</strong><br />--------------------------------------<br /><br />Do you want to display a column with the days that have passed since the class was posted?";
	public $APL_theme_label = "Theme of appearance of Block";
	public $APL_theme_placeholder = "Select theme of appearance of block";
	public $APL_theme_desc = "<strong>THEME OF APPEARANCE OF BLOCK</strong><br />--------------------------------------<br /><br />Select the theme that will be implemented block &laquo;%s&raquo;.<br /><br />Each block has at least a predetermined theme, called &laquo;Default&raquo;";
}
?>