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
 * @subpackage         	: Main Libraries file
 * @source             	: /[BLOCKS PATH]/phpclasses_latest/libs.php
 * @fileNo             	: 
 * @version            	: 1.0.1
 * @created            	: 2024-10-14 07:00:00 UTC+3
 * @updated            	: 
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 8.2.0
 */

 defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");


 function diff_days($from, $to = "now")
 {
     // Ημερομηνία στόχος π.χ. "Fri, 11 Oct 2024 17:49:23 GMT"
     $targetDate = new DateTime($from);
 
     // Τρέχουσα ημερομηνία και ώρα
     $currentDate = new DateTime("now", new DateTimeZone("GMT"));
 
     // Υπολογισμός διαφοράς
     $interval = $currentDate->diff($targetDate);
 
     // Εμφάνιση διαφοράς σε μέρες
     return $interval->days;
 }
 
 
 function getSummary($description) {
     // Φόρτωσε το περιεχόμενο του description σε DOMDocument
     $dom = new DOMDocument;
     $dom->loadHTML($description);
 
     // Βρες το span με το συγκεκριμένο όνομα
     $spans = $dom->getElementsByTagName('span');
     foreach ($spans as $span) {
         if ($span->getAttribute('name') === 'description') {
             return (string) $span->nodeValue;
         }
     }
 }

 ?>