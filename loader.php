<?php
/**
 * Plugin Name: plugin name
 * Plugin URI: https://www.gcubed.gm
 * Description: Site Plugin for additional functionality
 * Version: 1.0
 * Author: Gcubed
 * Author URI: http://www.gcubed.gm
 */

if (!defined('ABSPATH'))
	die();

/**
 * Abort plugin loading if WordPress is upgrading
 */
if (defined('WP_INSTALLING') && WP_INSTALLING)
	return;

define('PREFIX', 'XX_');
define('XX_FILE', __FILE__);
define('XX_DIR', dirname(__FILE__));
define('XX_INC_DIR', dirname(__FILE__) . '/inc');

require_once (XX_INC_DIR . '/posttypes.php');
require_once (XX_INC_DIR . '/taxonomies.php');
require_once (XX_INC_DIR . '/functions.php');