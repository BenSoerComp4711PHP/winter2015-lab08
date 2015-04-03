<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 01/04/15
 * Time: 10:34 AM
 */

class Users extends MY_Model {

    public function __construct(){
        parent::__construct('users', 'id');
    }
}