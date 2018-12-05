<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
     public function __construct ()
    {
        parent::__construct();
        $this->load->model('model_artikel');
        $this->load->library('pagination');
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/Blog/index";
        $config["total_rows"] = $this->model_artikel->record_count();
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $data["links"] = $this->pagination->create_links();
        $data['hasil'] = $this->model_artikel->countRow(); 
        $data['starts1'] = $this->model_artikel->dis_products1();
        $data['ar_side'] = $this->model_artikel->side();
        $data['artikel'] =  $this->model_artikel->getAr($config["per_page"], $page);
        $this->load->view('blog/classic', $data);
    }

    public function single($id) {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $data['lol'] = $this->model_artikel->nyoba($id);
        $this->load->view('blog/single', $data);
    }
}