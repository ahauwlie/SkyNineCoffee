<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 9/26/2018
 * Time: 10:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_admin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_product');
    }

    public function index() {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login2');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $id_ug = $session['id_ug'];
                if($id_ug == 1){
                    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                    $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
                    $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
                    $data['product'] = $this->model_product->getAll();
                    $this->load->view('admin/barang/index', $data);
                }
            }
        }
    }

    public function addProduct()
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login2');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $id_ug = $session['id_ug'];
                if($id_ug == 1){
                    if ($_SERVER['REQUEST_METHOD'] == "POST")
                    {
                        $data = Array (
                            'nama_pr' => $this->input->post('nama'),
                            'tipe_pr' => $this->input->post('tipe'),
                            'harga_pr' => $this->input->post('harga'),
                            'stock_pr' => $this->input->post('stock'),
                            'tag_pr' => $this->input->post('tag'),
                            'decs_pr' => $this->input->post('decs'),
                            'img_pr' => $this->input->post('img')
                        );

                        $this->model_product->insert(html_escape($data), false);
                        redirect(site_url("Barang_admin/index"));
                    }
                    else
                    {
                        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                        $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
                        $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);

                        $this->load->view('admin/barang/add_barang', $data);
                    }
                }
            }
        }
    }

    public function delete($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login2');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $id_ug = $session['id_ug'];
                if($id_ug == 1){
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $this->model_product->delete($id);
                    }
                    redirect(site_url('Barang_admin/index'));
                }
            }
        }
    }

    public function edit($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login2');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $id_ug = $session['id_ug'];
                if($id_ug == 1){
                    if ($_SERVER['REQUEST_METHOD'] == "POST")
                    {
                        $data = Array (
                            'id_pr' => $id,
                            'nama_pr' => $this->input->post('nama'),
                            'tipe_pr' => $this->input->post('tipe'),
                            'harga_pr' => $this->input->post('harga'),
                            'stock_pr' => $this->input->post('stock'),
                            'tag_pr' => $this->input->post('tag'),
                            'decs_pr' => $this->input->post('decs'),
                            'img_pr' => $this->input->post('img')
                        );

                        $this->model_product->update(html_escape($data), $id, false);
                        redirect(site_url("Barang_admin/index"));
                    }
                    else
                    {
                        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                        $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
                        $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
                        $data['product'] = $this->model_product->getSpecified($id);
                        $this->load->view('admin/barang/edit_barang', $data);
                    }
                }
            }
        }
    }

    public function detail($id)
    {
        $this->load->library('session');
        $this->load->helper('url');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            $this->load->helper('form');
            $this->load->view('auth/login2');
        }else{
            if($this->session->userdata('login')) {
                $session = $this->session->userdata('login');
                $id_ug = $session['id_ug'];
                if($id_ug == 1){
                    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
                    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
                    $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
                    $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);

                    $data['product'] = $this->model_product->getSpecified($id);
                    $this->load->view('admin/barang/detail_barang', $data);
                }
            }
        }
    }

}