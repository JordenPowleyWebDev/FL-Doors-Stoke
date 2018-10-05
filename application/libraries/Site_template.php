<?php

/**
 * ------------------------------------------------
 * Site Template
 * ------------------------------------------------
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Site_template{

    /**
     * Class Variables
     */
    private $CI;

    /**
     * __construct()
     * @desc - Constructor method for the class
     */
    public function __construct(){
        // Load in the Codigniter Instance
        $this->CI =& get_instance();
    }

    /**
     * index()
     * @desc - Default method for the class
     */
	public function index(){
		
	}
}
