<?php
/**
 * add_validation_rule_behavior.php
 *
 */

/**
 * AddValidationRuleBehavior
 *
 */
class AddValidationRuleBehavior extends ModelBehavior
{
    /**
     * authKitten
     *
     * ぬこ認証用のvalidate function
     */
    public function authKitten(&$model, $data)
    {
        $libs_dir  = dirname(dirname(dirname(__FILE__)));
        require_once $libs_dir . '/vendors/Auth/Kitten.php';

        $kitten = new Auth_Kitten();
        $result = $kitten->verify($_POST['kitten']);
        return $result;
    }
}

