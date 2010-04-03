<?php
/**
 *
 *
 */

/**
 * AkImagesController
 *
 */
class AkImagesController extends AppController
{
    public $uses = null;

    /**
     * draw
     *
     */
    public function draw()
    {
        require_once dirname(dirname(__FILE__)) . '/vendors/Auth/Kitten.php';

        $auth = new Auth_Kitten();
        $html = $auth->drawImage(basename($_GET['f']));

        print($html);

        return false;
    }
}
