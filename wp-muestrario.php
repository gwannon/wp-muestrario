<?php

/**
 * Plugin Name: WP Muestrario
 * Plugin URI:  https://github.com/gwannon/wp-muestrario
 * Description: Plugin de WordPress para generar una muestrario de materiales
 * Version:     1.0
 * Author:      Gwannon
 * Author URI:  https://github.com/gwannon/
 * License:     GNU General Public License v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-muestrario
 *
 * PHP 7.3
 * WordPress 6.1.1
 */

 //Cargamos el multi-idioma
function wp_muestrario_plugins_loaded() {
  load_plugin_textdomain('wp-muestrario', false, dirname( plugin_basename( __FILE__ ) ) . '/langs/' );
}
add_action('plugins_loaded', 'wp_muestrario_plugins_loaded', 0 );

/* ----------- Includes ------------ */
include_once(plugin_dir_path(__FILE__).'lib/shortcode-madera.php');
include_once(plugin_dir_path(__FILE__).'lib/shortcode-materiales.php');

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99 );
add_filter( 'the_content', 'shortcode_unautop', 100 );

//Llamada para hacer rotar las imágenes de las laminas de madera
add_action( 'wp_ajax_muestrario_rotar', 'wp_muestrario_rotar' );
function wp_muestrario_rotar() {
  // File and rotation
  $urlparts = wp_parse_url(home_url());
  $domain = $urlparts['scheme']."://".$urlparts['host'];
  $filename = $domain.str_replace($domain, "", $_REQUEST['image']);
  $degrees = 90;
  header('Content-type: image/jpeg');
  $source = imagecreatefromjpeg($filename);
  $rotate = imagerotate($source, $degrees, 0);
  imagedestroy($source);
  imagejpeg($rotate);
  imagedestroy($rotate);
}
