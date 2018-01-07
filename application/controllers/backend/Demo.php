<?php
/**
 * Created by PhpStorm.
 * User: touei
 * Date: 2018/1/7
 * Time: 21:51
 */
class Demo extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        echo 'backend';
    }
}