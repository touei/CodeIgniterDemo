<?php
/**
 * Created by PhpStorm.
 * User: touei
 * Date: 2018/1/7
 * Time: 21:50
 */
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

/**
 * 后台基类
 * Class Backend_Controller
 */
class Backend_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

/**
 * 前台基类
 * Class Frontend_Controller
 */
class Frontend_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}