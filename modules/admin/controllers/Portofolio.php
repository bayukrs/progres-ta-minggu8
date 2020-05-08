<?php
class Portofolio extends CI_Controller {
 
 	public function __construct(){
		parent::__construct();
		$this->login_admin->cek_login();
		$this->load->helper(array('url','form'));
		$this->load->model('m_admin');
	}
	
	public function index(){
 	// load view admin/overview.php
		$data['produk'] = $this->m_admin->portofolio();
 		$this->load->view("portofolio",$data);
	}

	function hapus($id_produk){
		$where = array('id_produk' => $id_produk);
		$this->m_admin->hapus_data($where,'tbl_portofolio');
		redirect(base_url('admin'));
	}
}