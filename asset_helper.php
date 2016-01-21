<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @author Christian Leo-Pernold mazedlx@gmail.com
 * @link https://github.com/mazedlx/asset_helper
 */

/**
 * link_css()
 *
 * Generating the link tag for a css file from the assets directory
 *
 * @access	public
 * @param	string $filename
 * @param	string $media
 * @return	string
 */
if (! function_exists('link_css')) {
    function link_css($filename, $media = null)
    {
        $filename = $filename.'.css';
        if (isset($media)) {
            $media = 'media="'.$media.'"';
        }
        $string = '<link rel="stylesheet" type="text/css" '.$media.' href="assets/css/'.$filename.'" />';
        return $string;
    }
}

/**
 * link_js
 *
 * Generating the link tag for a local JavaScript File
 *
 * @access	public
 * @param	string $filename
 * @param   string $additional
 * @return	string
 */
if (! function_exists('link_js')) {
    function link_js($filename, $additional = null)
    {
        $filename = $filename.'.js';
        $string = '<script type="text/javascript" src="assets/js/'.$filename.'" '.$additional.'></script>';
        return $string;
    }
}
