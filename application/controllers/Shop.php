<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller
{
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('model_product');
        $this->load->model('model_settings');
    }

    public function index() {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $data['product'] = $this->model_product->all_products();
        // $data['products'] = $this->model_products->all_products();
        $this->load->view('shop/shop-grid', $data);
    }

    public function list()
    {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $this->load->view('shop/shop-list', $data);
    }

    public function cart()
    {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $this->load->view('shop/shop-cart', $data);
    }
}