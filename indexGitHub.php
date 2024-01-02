<?php
/**
 
*Plugin Name: IndexGitHub
*Plugin URI: https://omjit.com/adoul
*Description: just test111111111
*Author: Mounia
*Version: 1.0.0
*Author URI: https://omjit.com/adoul
*/

add_action ('wp_footer','say_hello');

function say_hello ()
{
    echo ('<p> Githuub tessssssssst 1 Fichier index <p>');
    
}

?>