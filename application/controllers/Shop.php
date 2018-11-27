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
        $this->load->library('pagination');
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/shop/index";
        $config["total_rows"] = $this->model_product->record_count();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->model_product->fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $data['product'] = $this->model_product->all_products();
        $data['starts'] = $this->model_product->dis_products();
        $data['starts1'] = $this->model_product->dis_products1();
        $data['hasil'] = $this->model_product->countRow(); 
        $this->load->view('shop/shop-grid', $data);
       
        // if ($_SERVER['REQUEST_METHOD'] == "POST")
        // {
        //     $data = Array (
        //         'id_pr' => $this->input->post('id_pr')
        //     );

        //     $this->model_product->addcart(html_escape($data), false);
        //     redirect(site_url("shop/cart"));
        // }

    }

    public function max_pro()
    {        
        $data['hasil'] = $this->model_product->countRow(); 
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $data['starts'] = $this->model_product->dis_products();
        $data['starts1'] = $this->model_product->dis_products1();
        $data['max'] = $this->model_product->maxprice();
        $this->load->view('shop/max-shop',$data);
    }

    public function max_pro2()
    {        
        $data['hasil'] = $this->model_product->countRow(); 
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $data['starts'] = $this->model_product->dis_products();
        $data['starts1'] = $this->model_product->dis_products1();
        $data['max'] = $this->model_product->maxprice();
        $this->load->view('shop/max-shop1',$data);
    }

    public function min_pro()
    {        
        $data['hasil'] = $this->model_product->countRow(); 
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $data['starts'] = $this->model_product->dis_products();
        $data['starts1'] = $this->model_product->dis_products1();
        $data['min'] = $this->model_product->minprice();
        $this->load->view('shop/min-shop',$data);
    }

    public function min_pro2()
    {        
        $data['hasil'] = $this->model_product->countRow(); 
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $data['starts'] = $this->model_product->dis_products();
        $data['starts1'] = $this->model_product->dis_products1();
        $data['min'] = $this->model_product->minprice();
        $this->load->view('shop/min-shop1',$data);
    }

    public function showme($tipe_pr)
    {        
        $data['hasil'] = $this->model_product->countRow(); 
        $data['starts'] = $this->model_product->dis_products();
        $data['starts1'] = $this->model_product->dis_products1();
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $data['comes'] = $this->model_product->showme($tipe_pr);
        $this->load->view('shop/shop-grid-filter-tipe',$data);
    }

    public function showme1($tag_pr)
    {        
        $data['hasil'] = $this->model_product->countRow(); 
        $data['starts1'] = $this->model_product->dis_products1();
        $data['starts'] = $this->model_product->dis_products();
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $data['comes'] = $this->model_product->showme1($tag_pr);
        $this->load->view('shop/shop-grid-filter-tag',$data);
    }

    public function list()
    {
        $config = array();
        $config["base_url"] = base_url() . "index.php/shop/list";
        $config["total_rows"] = $this->model_product->record_count();
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->model_product->fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data['hasil'] = $this->model_product->countRow(); 
        $data['starts'] = $this->model_product->dis_products();
        $data['starts1'] = $this->model_product->dis_products1();
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