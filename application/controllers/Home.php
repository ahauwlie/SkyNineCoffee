<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 21/09/2018
 * Time: 8:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function index() {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);

        $this->load->view('home/index1', $data);
    }
}