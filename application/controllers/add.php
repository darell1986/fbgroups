<?php

class Add extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        include('_construct_cron.php');
    }

    public function index()
    {
        echo "Hello";
    }

}

?>