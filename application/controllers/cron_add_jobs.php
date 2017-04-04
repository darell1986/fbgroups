<?php

class Cron_Add_Jobs extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        include('_construct_cron.php');
    }

    public function index()
    {
        $this->core->add_jobs();
    }

}

?>