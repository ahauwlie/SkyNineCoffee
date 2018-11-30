<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Diskon_admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    
    $this->load->model('diskon_manage');
  }
  
  public function index(){
    $data['diskon'] = $this->diskon_manage->getAll();
    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
    $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
    $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
    $this->load->view('admin/user/view_diskon', $data);
  }

  public function addDiskon()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $data = Array (
              'jenis_disc' => $this->input->post('jenis_diskon'),
              'jum_disc' => $this->input->post('jumlah_diskon'),
            );

            $this->diskon_manage->insert(html_escape($data), false);
            redirect(site_url("Diskon_admin/index"));
        }
        else
        {
            $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
            $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
            $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
            $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);

            $this->load->view('admin/diskon/add_diskon', $data);
        }
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->diskon_manage->delete($id);
        }
        redirect(site_url('Diskon_admin/index'));
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $data = Array (
              'id_disc' => $id,
              'jenis_disc' => $this->input->post('jenis_diskon'),
              'jum_disc' => $this->input->post('jumlah_diskon')
            );

            $this->diskon_manage->update(html_escape($data), $id, false);
            redirect(site_url("Diskon_admin/index"));
        }
        else
        {
            $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
            $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
            $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
            $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
            $data['diskon'] = $this->diskon_manage->getSpecified($id);
            $this->load->view('admin/diskon/edit_diskon', $data);
        }
    }

    public function detail($id)
    {
        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
        $data['diskon'] = $this->diskon_manage->getSpecified($id);
        $this->load->view('admin/diskon/detail_diskon', $data);
    }
}