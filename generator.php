<?php
/**
 * @author  Sylvain Gogel <sgogel@ecedi.fr>
 * @package Wordpress
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GPL v3.0
 *
 * Plugin Name: generator
 * Description: Remove Generator Meta to reduce Information disclosure security issues
 * Version: 1.0.0
 * Author: Sylvain Gogel <sgogel@ecedi.fr>
 * Author URI: http://ecedi.fr
 */

/**
 * remove the generator meta
 * @since 1.0
 */
remove_action('wp_head', 'wp_generator');
