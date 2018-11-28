<?php
/**
 * Created by PhpStorm.
 * User: Hauw_yeah
 * Date: 5/26/2018
 * Time: 2:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'controllers'.DIRECTORY_SEPARATOR.'MY_Controller.php');

class Dashboard extends MY_Controller
{
    public function index() {
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['layout'] = $this->load->view('layout/layout1.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer1.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader1.php', NULL, TRUE);

        // if($this->acl->allow('lihat_total_laba_bersih') == 'ALLOWED')
        //     $data['total_profit'] = $this->db->query("SELECT SUM(total_profit) AS total_revenue FROM transaction WHERE MONTH(CURRENT_DATE) = MONTH(date_transaction)")->row()->total_revenue;
        // else $data['total_profit'] = '';

        // if($this->acl->allow('lihat_jumlah_transaksi_penjualan') == 'ALLOWED')
        //     $data['transaction_count'] = $this->db->query("SELECT COUNT(*) AS transaction_count FROM transaction WHERE MONTH(CURRENT_DATE) = MONTH(date_transaction)")->row()->transaction_count;
        // else $data['transaction_count'] = '';

        // if($this->acl->allow('lihat_jumlah_po') == 'ALLOWED')
        //     $data['po_count'] = $this->db->query("SELECT COUNT(DISTINCT po) AS po_count FROM addstock WHERE MONTH(CURRENT_DATE) = MONTH(po_date)")->row()->po_count;
        // else $data['po_count'] = '';
        
        $this->load->view('dashboard/dashboard', $data);
    }
}