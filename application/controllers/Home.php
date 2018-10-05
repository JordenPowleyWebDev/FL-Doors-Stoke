<?php

/**
 * ------------------------------------------------
 * Home Controller
 * ------------------------------------------------
 * Default Controller For The Site
 * ------------------------------------------------
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
     * @routes      - /
     *              - /home
     */
	public function index(){
		echo 'Home';
	}
}
