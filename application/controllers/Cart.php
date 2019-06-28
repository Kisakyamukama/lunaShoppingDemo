<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Cart extends CI_Controller {

        function __construct() {
            parent::__construct();

            // load cart library
            $this->load->library('cart');

            // load product model
            $this->load->model('product');
        }

        function index() {
            $data = array();

            // Retrieve cart data from the session
            $data['cartItems'] = $this->cart->contents();
            // load the cart view
            $this->load->view('cart/index', $data);
        }

        function updateItemQty() {
            $update = 0;

            // Get cart item info
            $rowid = $this->input->get('rowid');
            $qty = $this->input->get('qty');

            // Update item i the cart
            if(!empty($rowid) && !empty($qty)) {
                $data = array(
                    'rowid' => $rowid,
                    'qty' => $qty
                );                
            }
            // return response
            echo $update? 'ok':'err';
        }

        function removeItem($rowid) {
            // remove item from cart
            $remove = $this->cart->remove($rowid);

            // redirect to the cart page
            redirect('cart/');
        }
    }























?>