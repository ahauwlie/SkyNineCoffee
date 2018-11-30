<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_manage_admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    
    $this->load->model('user_manage');
  }
  
  public function index(){
    $data['user'] = $this->user_manage->getAll();
    $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
    $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
    $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
    $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
    $this->load->view('admin/user/view_user', $data);
  }

  public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $data = Array (
              'ig_ug' => $this->input->post('idug'),
              'username_us' => $this->input->post('uname'),
              'password_us' => $this->input->post('pass'),
              'full_name_us' => $this->input->post('fnama'),
              'email_us' => $this->input->post('email'),
              'phone_num_us' => $this->input->post('hp'),
              'img_us' => $this->input->post('foto'),
              'date_birth_us' => $this->input->post('ultah'),
              'address_us' => $this->input->post('alamat'),
              'active' => $this->input->post('active')
            );

            $this->user_manage->insert(html_escape($data), false);
            redirect(site_url("User_manage_admin/index"));
        }
        else
        {
            $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
            $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
            $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
            $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);

            $this->load->view('admin/user/view_user', $data);
        }
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->user_manage->delete($id);
        }
        redirect(site_url('User_manage_admin/index'));
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $data = Array (
              'id_us' => $id,
              'ig_ug' => $this->input->post('idug'),
              'username_us' => $this->input->post('uname'),
              'password_us' => $this->input->post('pass'),
              'full_name_us' => $this->input->post('fnama'),
              'email_us' => $this->input->post('email'),
              'phone_num_us' => $this->input->post('hp'),
              'img_us' => $this->input->post('foto'),
              'date_birth_us' => $this->input->post('ultah'),
              'address_us' => $this->input->post('alamat'),
              'active' => $this->input->post('active')
            );

            $this->user_manage->update(html_escape($data), $id, false);
            redirect(site_url("User_manage_admin/index"));
        }
        else
        {
            $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
            $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
            $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
            $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);
            $data['user'] = $this->user_manage->getSpecified($id);
            $this->load->view('admin/user/edit_user', $data);
        }
    }

    public function detail($id)
    {
        $data['css'] = $this->load->view('include/style1.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script1.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);

        $data['user'] = $this->user_manage->getSpecified($id);
        $this->load->view('admin/user/detail_user', $data);
    }
}