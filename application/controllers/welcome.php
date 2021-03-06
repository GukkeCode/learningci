<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['header']['page_title'] = 'Welcome to Cleanplate with CI, Bootstrap'; // title for the page
		$data['content']['view_name'] = 'dummy_content'; // name of the partial view to load
		$data['content']['view_data'] = array(); // data coming inside the view

		$this->load->view('main_page_view',$data);
	}

  public function area51()
  {
    auth_user();
    $data['header']['page_title'] = 'Welcome to Area 51'; // title for the page
    $data['content']['view_name'] = 'area51'; // name of the partial view to load
    $data['content']['view_data'] = array(); // data coming inside the view

    $this->load->view('main_page_view',$data);
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */