<?php
/**
* 
*/
class Suboutput extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_suboutput');
		
	}
	
	function index()
	{
		$data['record'] = $this->Model_suboutput->tampilkan_suboutput();
		$data['judul'] = 'Suboutput';
		$data['subjudul'] = 'Data Suboutput';
		$this->template->load('template','suboutput/v_data',$data);
	}

	function post(){
		if (isset($_POST['submit'])){
			$nama		= $this->input->post('nama');
			$divisi 	= $this->input->post('divisi');
			$data       = array('nama_suboutput' => $nama,
				'id_divisi' => $divisi);
			// print_r($data);
			// die;
			$this->Model_suboutput->post($data);
			redirect('suboutput');
			// echo "proses divisi";			
		}
		else{
			$data['judul'] = 'Suboutput';
			$data['subjudul'] = 'Input';
			$this->load->model('Model_divisi');
			$data['divisi'] = $this->Model_divisi->tampilkan_data();
			$this->template->load('template','suboutput/f_input',$data);
		}
	}
	
	function edit(){
		if (isset($_POST['submit'])){
			$id 		= $this->input->post('id');
			$nama		= $this->input->post('nama');
			$divisi 	= $this->input->post('divisi');
			$data       = array('nama_suboutput' => $nama,
				'id_divisi' => $divisi);
			// print_r($data);
			// die;
			$this->Model_suboutput->edit($data,$id);
			redirect('suboutput');
			// echo "proses divisi";			
		}
		else{
			$data['judul']    = 'Suboutput';
			$data['subjudul'] = 'Edit';
			$id               =  $this->uri->segment(3);
			$this->load->model('Model_divisi');
			$data['divisi']   = $this->Model_divisi->tampilkan_data();
			$data['record']   = $this->Model_suboutput->get_one($id)->row_array();
			$this->template->load('template','suboutput/f_edit',$data);
		}
	}
	
	function delete()
	{
		$id=  $this->uri->segment(3);
		$this->Model_suboutput->delete($id);
		redirect('suboutput');
	}

}

?>