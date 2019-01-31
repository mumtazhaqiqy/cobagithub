<?php defined("BASEPATH") or exit("No direct script access allowed");

/**
 * Test Controller.
 */
class Test extends MY_Controller
{
    private $title;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "yes modules is working";
    }


}
