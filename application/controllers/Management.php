<?php

/**
 * ------------------------------------------------
 * Management Controller
 * ------------------------------------------------
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {

    /**
     * __construct()
     * @desc - Constructor method for the class
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * index()
     * @desc - Default method for the class
     * @routes      - /management/login
     */
	public function index(){
		echo 'admin';
	}
}
