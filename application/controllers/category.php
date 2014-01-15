<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {
        function __construct() {
        parent::__construct();
        $this->load->model('beranda_model');
        }
    
	public function index()
	{
                $data['getCategory']= $this->beranda_model->getCategory();
                $data['get_name_category']= $this->beranda_model->get_name_category();
                $data['getRandomProductsLimit']= $this->beranda_model->getProductCategory();
                $data['get_ym_live_support']= $this->beranda_model->get_ym_live_support();
                $data['get_shop_contact']= $this->beranda_model->get_shop_contact();
		$this->load->view('front/category_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */