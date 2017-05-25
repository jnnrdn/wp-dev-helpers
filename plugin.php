<?php
/**
 * Dev Helpers WordPress Plugin
 *
 * @package     DevHelpers
 * @author      webjen
 * @copyright   2016 Jenny Rydén
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Dev Helpers WordPress Plugin
 * Plugin URI:  https://jennyryden.com
 * Description: Dev Helpers WordPress plugin.
 * Version:     1.0.0
 * Author:      webjen
 * Author URI:  http://jennyryden.com
 * Text Domain: devhelpers
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace DevHelpers;

if( ! defined('ABSPATH') ) {
	exit( 'Cheatin&#8217; uh?' );
}

require_once( __DIR__ . '/assets/vendor/autoload.php' );

add_action( 'init', __NAMESPACE__ . '\launch' );
function launch() {

}