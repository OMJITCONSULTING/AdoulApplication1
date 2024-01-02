<?php
/**
 * @package AdoulApplication
 * @version 1.0.0
 */
/*
Plugin Name: Test
Plugin URI: https://omjit.com/adoul
Description: just test
Author: Matt Mullenweg
Version: 1.0.0
Author URI: https://omjit.com/adoul
*/


add_action ('get_header','say_hello2');

function say_hello2 ()
{
    echo ('<p> Githuub tessssssssst 2 Fichier TEST <p>');
    
}

?>