<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Module Config
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application\Config
 * @copyright  2013 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

return array(
	// Custom modules
	// 'acme' => MODPATH.'acme',

	// Ushahidi modules
	'ushahidiui' => MODPATH.'UshahidiUI',

	// Submodules
	'migrations' => MODPATH.'migrations',
	'koauth'     => MODPATH.'koauth',
	'imagefly'   => MODPATH.'imagefly', // Dynamic image generation
	'ACL'        => MODPATH.'ACL', // Access control layer based on Zend_ACL
	'A1'         => MODPATH.'A1', // Auth library using bcrypt
	'A2'         => MODPATH.'A2', // Tying A1/Auth and ACL together
	'KO3-Event'  => MODPATH.'KO3-Event',
	'data-provider'  => MODPATH.'data-provider',
	'email'      => MODPATH.'email',

	// Vendor modules
	'media'      => VENPATH.'zeelot/kohana-media',

	// Kohana modules
	'cache'      => MODPATH.'cache',      // Caching with multiple backends
	'database'   => MODPATH.'database',   // Database access
	'image'      => MODPATH.'image',      // Image manipulation
	'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	'unittest'   => MODPATH.'unittest',   // Unit testing
	'minion'     => MODPATH.'minion',

);
