<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.wowperations.com.br/plugins/wowperations-genesis-loops/
 * @since      1.0.0
 *
 * @package    Wowperations_Genesis_Loops
 * @subpackage Wowperations_Genesis_Loops/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wowperations_Genesis_Loops
 * @subpackage Wowperations_Genesis_Loops/includes
 * @author     Celso Bessa <celso.bessa@wowperations.com.br>
 */
class Wowperations_Genesis_Loops_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wowperations-genesis-loops',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
