<?php
/**
 * hooks_install.php
 *
 * @package ForceCurl
 * @link https://github.com/Darknico/SMF-ForceCurl
 * @author Darknico <info@darknico.com>
 * @copyright Darknico  Copyright (c) 2026
 * @license https://spdx.org/licenses/GPL-3.0-or-later.html GPL-3.0-or-later
 *
 * @version 1.0
 */

if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF'))
	exit('<strong>Error:</strong> Cannot install - please verify you put this in the same place as SMF\'s index.php.');
	
$FUHooks = array(
	'integrate_general_settings' => 'fuGeneralSettings',	
	'integrate_credits' => 'fuCredits',
	'integrate_pre_include' => '$sourcedir/ForceCurl/hooks.php'
);

foreach ($FUHooks as $hook => $function)
    add_integration_function($hook, $function);
?>