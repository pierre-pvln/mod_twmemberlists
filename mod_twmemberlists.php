<?php 

defined('_JEXEC') or die;

/* Include dependencies; include helper.php */
	require_once __DIR__ . '/helper.php';

/**
 * Retrieve Community Builder database data in $list
 *
 * @params	An object containing the module parameters as set in the back-end for the module;
 * 			Not used in this one yet (for future use).
 *
 */
	$list = ModTWMemberListsHelper::getItems($params);
 	
/**
 * Get layout values from back-end setting tab advanced in $params 
 * This retrieves the 'layout' parameter. Note the second part
 * which states to use a default value of 'default' if the parameter 'layout' cannot be
 * retrieved for some reason
 * 
 */
	$layout = $params->get('layout','default');

	
/**
 * This method returns the path to the layout file for the module.
 * Output depends if the layout has not been overridden or not. 
 * 
 */
	require JModuleHelper::getLayoutpath('mod_twmemberlists', $layout);
	
?>
