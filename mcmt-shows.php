<?php

/**
 * MCMT Shows
 *
 * @package WordPress
 * @author Matt Redmond
 * @copyright 2020 Marie Clark Musical Theatre
 * @license GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: MCMT Shows
 * Plugin URI: https://mcmt.github.io/mcmt-shows/
 * Author: Matt Redmond
 * Author URI: https://mattredmond.com
 * Version: 0.1
 * Text domain: mcmt_shows
 * License: GPL v2 or later
 */

if(!defined('ABSPATH')) { exit; }

require_once(get_plugin_directory() . '/includes/cmb2/init.php');
require_once(get_plugin_directory() . '/includes/mcmt-shows-post-type.php' );


