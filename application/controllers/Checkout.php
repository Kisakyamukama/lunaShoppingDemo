<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Checkout extends CI_Controller {

        function __construct() {
            parent:__construct();

            // load from library & helper
            $this->load->library('from_validation');
            $this->load->helper('from');

            // load cart library
            $this->load->library('cart');

            

        }
    }




?>