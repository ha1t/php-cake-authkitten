<?php
/**
 *
 *
 */

/**
 * AuthKittenHelper
 *
 */
class AuthKittenHelper extends Helper
{
    public function display()
    {
        $libs_dir  = dirname(dirname(dirname(__FILE__)));
        require_once $libs_dir . '/vendors/Auth/Kitten.php';

        $kitten = new Auth_Kitten();
        $html = $kitten->buildHtml(
            dirname($_SERVER['SCRIPT_NAME']) . '/authkitten/akImages/draw?f='
        );
        echo $html;
    }
}


