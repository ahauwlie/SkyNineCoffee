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
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('model_product');
        $this->load->model('model_settings');
        $this->load->library('pagination');
        $this->load->library('cart');
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
        $data['tanggal'] = date_format(date_create(date('Y/m/d H:i:s')), "d M Y H:i:s");
        $this->load->view('shop/shop-grid', $data);
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
        $data['tanggal'] = date_format(date_create(date('Y/m/d H:i:s')), "d M Y H:i:s");
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
        $data['tanggal'] = date_format(date_create(date('Y/m/d H:i:s')), "d M Y H:i:s");
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
        $data['tanggal'] = date_format(date_create(date('Y/m/d H:i:s')), "d M Y H:i:s");
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
        $data['tanggal'] = date_format(date_create(date('Y/m/d H:i:s')), "d M Y H:i:s");
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
        $data['tanggal'] = date_format(date_create(date('Y/m/d H:i:s')), "d M Y H:i:s");
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
        $data['tanggal'] = date_format(date_create(date('Y/m/d H:i:s')), "d M Y H:i:s");
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
        $data['tanggal'] = date_format(date_create(date('Y/m/d H:i:s')), "d M Y H:i:s");
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

    function tambah()
    {
        $data_produk= array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('nama'),
            'price' => $this->input->post('harga'),
            'gambar' => $this->input->post('gambar'),
            'qty' =>$this->input->post('qty')
        );
        $this->cart->insert($data_produk);
        redirect('Shop');
    }

    function hapus($rowid) 
    {
        if ($rowid=="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array('rowid' => $rowid,
                              'qty' =>0);
                $this->cart->update($data);
            }
        redirect('Shop/cart');
    }

    function ubah_cart()
    {
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $gambar = $cart['gambar'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];
            $data = array('rowid' => $rowid,
                            'price' => $price,
                            'gambar' => $gambar,
                            'amount' => $amount,
                            'qty' => $qty);
            $this->cart->update($data);
        }
        redirect('Shop/cart');
    }

    public function proses_order()
    {
        $total = 0;
        $g_tot = 0;
        if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item):
                    $total = $item['price'] * $item['qty'];
                    $g_tot = $g_tot + $total;
                endforeach;
            }
        $data_order = array(
            'id_us' => $this->session->userdata['login']['id_us'],
            'id_disc' => '5',
            'date_tr' => date('Y-m-d H:i:s'),
            'total_tr' => $g_tot
        );
        $id_order = $this->model_product->tambah_order($data_order);
        $email = $this->session->userdata('login', 'email_us');
        // $encrypted_id = md5($id);
        
        $this->load->library('email');
        $config = array();
        $config['charset'] = 'utf-8';
        $config['useragent'] = 'Codeigniter';
        $config['protocol']= "smtp";
        $config['mailtype']= "html";
        $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
        $config['smtp_port']= "465";
        $config['smtp_timeout']= "400";
        $config['smtp_user']= "skynine.coffee.id@gmail.com"; // isi dengan email kamu
        $config['smtp_pass']= "skynine123"; // isi dengan password kamu
        $config['crlf']="\r\n"; 
        $config['newline']="\r\n"; 
        $config['wordwrap'] = TRUE;
        //memanggil library email dan set konfigurasi untuk pengiriman email
            
        $this->email->initialize($config);
        //konfigurasi pengiriman
        $this->email->from($config['smtp_user']);
        $this->email->to($email);
        $this->email->subject("test123");
        $this->email->message(
            "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>"
        );
        //-------------------------Input data detail order-----------------------       
        if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item)
                    {
                        $data_detail = array(
                            'id_tr' =>$id_order,
                            'id_pr' => $item['id'],
                            'qty' => $item['qty'],
                            'nama_pr' => $item['name'],
                            'harga_td' => $item['price'] * $item['qty']
                        );         
                        $proses = $this->model_product->tambah_detail_order($data_detail);
                    }
            }
        //-------------------------Hapus shopping cart--------------------------        
        $this->cart->destroy();
        $data['css'] = $this->load->view('include/style.php', NULL, TRUE);
        $data['js'] = $this->load->view('include/script.php', NULL, TRUE);
        $data['footer'] = $this->load->view('layout/footer.php', NULL, TRUE);
        $data['preloader'] = $this->load->view('layout/preloader.php', NULL, TRUE);
        $this->load->view('shop/sukses', $data);    
    }
}