<?php
/**
* 
*/
class Komponen extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_komponen');
		// chek_session();
		// chek_session();
	}
	
	function index()
	{
		$data['record'] = $this->Model_komponen->tampilkan_komponen();
		$data['judul'] = 'Komponen';
		$data['subjudul'] = 'Data Komponen';
		$this->template->load('template','komponen/v_data',$data);
	}

	function post(){
		if (isset($_POST['submit'])){
			$nama		= $this->input->post('nama');
			$suboutput 	= $this->input->post('suboutput');
			$data       = array('nama_komponen' => $nama,
						'id_suboutput' => $suboutput);
			// print_r($data);
			// die;
			$this->Model_komponen->post($data);
			redirect('komponen');
			// echo "proses divisi";			
		}
		else{
			$data['judul'] = 'Komponen';
			$data['subjudul'] = 'Input';
			$this->load->model('Model_suboutput');
			$data['suboutput'] = $this->Model_suboutput->tampilkan_suboutput()->result();
			$this->template->load('template','komponen/f_input',$data);
		}
	}
  	
  	function edit(){
		if (isset($_POST['submit'])){
			$id 		= $this->input->post('id');
			$nama		= $this->input->post('nama');
			$suboutput 	= $this->input->post('suboutput');
			$data       = array('nama_komponen' => $nama,
						'id_suboutput' => $suboutput);
			// print_r($data);
			// die;
			$this->Model_komponen->edit($data,$id);
			redirect('komponen');
			// echo "proses divisi";			
		}
		else{
			$data['judul'] = 'Komponen';
			$data['subjudul'] = 'Edit';
			$id             =  $this->uri->segment(3);
			$this->load->model('Model_suboutput');
			$data['suboutput'] = $this->Model_suboutput->tampilkan_suboutput()->result();
			$data['record'] = $this->Model_komponen->get_one($id)->row_array();
			$this->template->load('template','komponen/f_edit',$data);
		}
	}
	
	function delete()
    {
        $id=  $this->uri->segment(3);
        $this->Model_komponen->delete($id);
        redirect('komponen');
    }

}

  ?>