<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ***********************************************************************************
 * @ASCOOS-NAME        : ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     : 24.0.0                                                    *
 * @ASCOOS-CATEGORY    : Block (Frontend and Administrator Side)                   *
 * @ASCOOS-CREATOR     : Drogidis Christos                                         *
 * @ASCOOS-SITE        : www.ascoos.com                                            *
 * @ASCOOS-LICENSE     : [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ***********************************************************************************
 *
 * @package            : Block Manager - Latest classes from PHPClasses.org
 * @subpackage         : installation file
 * @source             : /[BLOCKS PATH]/phpclasses_latest/install.php
 * @fileNo             : 
 * @version            : 1.0.1
 * @created            : 2024-10-10 07:00:00 UTC+3
 * @updated            : 2024-10-14 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
*/


defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

global $objInstaller;

// Adjust the installer to work at BLOCK and give the block that will handle
$objInstaller->setExtension('phpclasses_latest');

// We adjust the installer so that after installation, to take us or not part of the Block configuration.
$objInstaller->afterSetParams(false);

// If the block is not installed then run the installation.
if (!$objInstaller->isInstalled()) {
	// We create the path of the Block.
	$objInstaller->createPath();
	
	// If the installation files on the Server is successful
	if ( $objInstaller->extractPackage() )
	{
		// We export themes in internal path "fronts". !!!! Not Change for Blocks. !!!!
		$objInstaller->extractThemes('fronts');
		
		// We take the position id, show called "NOTHING".
		$block_pos = $objInstaller->getPosition('NOTHING');

		// We take the sort that will apply to the position.
		$block_order = $objInstaller->getOrderPosition('NOTHING');
	
		// Place the Block in the database.
		$objInstaller->addSQL("INSERT INTO #__blocks VALUES(NULL, '".$objInstaller->name."', '".$objInstaller->name."', '0', '0', '{\"en\":\"Latest classes from PHPClasses\",\"el\":\"Πρόσφατες κλάσεις από το PHPClasses\"}', '', '', '', '', ".$block_pos.", ".$block_order.", '', '0', '0', '0', '0', '{\"method\":\"xml\",\"count\":5,\"username\":\"bigfriend\",\"show_summary\":0,\"show_days\":0,\"theme\":\"default\"}');");
		
		// pour the settings from the installer.
		$objInstaller->clear();
		
	} else {
		// else otherwise cancel the installation and pour the settings from the installer.
		$objInstaller->cancelInstallation();
	}
} else { // else pour the settings from the installer.
	$objInstaller->clear();
}
?>