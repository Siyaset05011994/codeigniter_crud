<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Baku');

class Article extends CI_Controller {

	public function __construct()
	{
     	parent::__construct();
     	$this->load->model('Crud_model','crud');
     	$this->load->helper('url');
	}

	public function index()
	{
		$articles=$this->crud->getAll('articles');
		$data['articles']=$articles;
		$this->load->view('article/index',$data);
	}

	public function create(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('content','Content','required');

			if ($this->form_validation->run()===false){
				$this->load->view('article/add');
			}else{
				if ($_FILES['file']['tmp_name']){

					$upload_path = './uploads/article/';
					$filename    = md5(time()) . $_FILES['file']['name'];

					$config['upload_path']          = $upload_path;
					$config['allowed_types']        = 'gif|jpg|png';
					$config['max_size']             = 1000;
					$config['max_width']            = 960;
					$config['max_height']           = 1280;
					$config['file_name']           = $filename;

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('file')) {

						$now=date("Y-m-d h:i:sa");

						$data=array(
							'title'=>$this->input->post('title'),
							'content'=>$this->input->post('content'),
							'file'=>$filename,
							'created_at'=>$now,
							'updated_at'=>$now,
						);

                        $this->crud->insert('articles',$data);

                        return redirect('article/index');

					} else {
						$this->load->view('article/add',array('fileError'=>$this->upload->display_errors()));
					}

				}else{
					$this->load->view('article/add',array('fileError'=>'file not selected !'));
				}

			}

		}else {
			$this->load->view('article/add');
		}

	}

	public function update($id){
		if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {

		}else{
//			$data['article']=$
			$this->load->view('article/edit');
		}
	}


}
