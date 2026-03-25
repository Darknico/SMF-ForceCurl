<?php
/**
 * Hooks.php
 *
 * @package ForceCurl
 * @link https://github.com/Darknico/SMF-ForceCurl
 * @author Darknico <info@darknico.com>
 * @copyright Darknico  Copyright (c) 2026
 * @license https://spdx.org/licenses/GPL-3.0-or-later.html GPL-3.0-or-later
 */

if (!defined('SMF'))
	die('Hacking attempt...');  

	defined('FORCECURL_VERSION') || define('FORCECURL_VERSION', '1.0.1');	


function fuGeneralSettings(&$actionArray)
{
	global $txt;
	loadLanguage('ForceCurl/ForceCurl');

	$actionArray['forceCurl'] = 
		array('forceCurl_enablesetting', $txt['ForceCurl_enableSetting'], 'db', 'check', null, 'forceCurl_enablesetting');
}	

function fuGeneralSettingsHelp()
{
	loadLanguage('ForceCurl/ForceCurl');
}	


function fuCredits()	
{
	global $context;

	$context['copyrights']['mods'][] = 
	'<a href="https://github.com/Darknico/SMF-ForceCurl" target="_blank" rel="noopener">ForceCurl</a> ' .FORCECURL_VERSION. ' | &copy; 2026, 
	<a href="https://www.darknico.com" target="_blank" rel="noopener">Darknico</a> 
	- <a href="https://www.italiansmf.net" target="_blank" rel="noopener">Italian SMF</a>
	| Licensed under <a href="https://github.com/Darknico/SMF-ForceCurl/blob/main/LICENSE" target="_blank" rel="noopener">GNU GPLv3</a>';
}	
    
?>
