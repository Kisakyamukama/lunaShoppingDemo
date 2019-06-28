<?php
    // Luna product controller

    defined('BASEPATH') OR exit ('No direct script access allowed');

    class Products extends CI_Controller{

        function __construct(){
            parent::__construct();

            // load card library
            $this->load->library('cart');
            // load product model
            $this->load->model('product');      
        }

        function index() {
            $data = array();

            // get products from the database
            $data['products'] = $this->products->getRows();
            // load the product view
            $this->load->view('products/index', $data);
        }


        function addToCart($productID) {
            // get specific product by ID
            $product =  $this->product->getRows($productID);

            // Add product to the cart
            $data = array(
                'id' => $product['id'],
                'qty' => 1,
                'price' => $product['price'],
                'name' => $product['name'],
                'image' => $product['image']
            );

            $this->cart->insert($data);

            // Redirect to the cart page
            redirect('cart');
        }
    }






























?>