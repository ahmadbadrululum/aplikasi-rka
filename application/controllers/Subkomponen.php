<?php 
/**
*  
*/ 
class Subkomponen extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Model_komponen','Model_subkomponen','Model_divisi','Model_detail'));
	}
	
	function index()
	{
		$data['record']	  = $this->Model_subkomponen->tampil();
		$data['judul']    = 'Subkomponen';
		$data['subjudul'] = 'Data Subkomponen';
		$this->template->load('template','subkomponen/v_data',$data);
	}

	function post(){
		if (isset($_POST['submit'])){
			$nama 		= $this->input->post('nama');
			$komponen 	= $this->input->post('komponen');
			$data       = array(
				'nama_subkomponen' => $nama,
				'id_komponen' => $komponen);
			$this->Model_subkomponen->post($data);
			redirect('subkomponen');			
		}
		else{
			$data['judul'] 	  = 'Subkomponen';
			$data['subjudul'] = 'Input';
			// $this->load->model('Model_divisi');
			$this->load->model('Model_komponen');
			$data['komponen'] = $this->Model_komponen->tampilkan_komponen()->result();
			$this->template->load('template','subkomponen/f_input',$data);
		}
	}

	function edit(){
		if (isset($_POST['submit'])){
			$id 		= $this->input->post('id');
			$nama		= $this->input->post('nama');
			$komponen 	= $this->input->post('komponen');
			$data       = array('nama_subkomponen' => $nama,
				'id_komponen' => $komponen);
			$this->Model_subkomponen->edit($data,$id);
			redirect('subkomponen');			
		}
		else{
			$data['judul'] 	  = 'Subkomponen';
			$data['subjudul'] = 'Edit';
			$id 			  = $this->uri->segment(3);
			$this->load->model('Model_komponen');
			$data['komponen'] = $this->Model_komponen->tampilkan_komponen()->result();
			$data['record']   = $this->Model_subkomponen->get_one($id)->row_array();
			$this->template->load('template','subkomponen/f_edit',$data);
		}
	}


	function delete()
	{
		$id=  $this->uri->segment(3);
		$this->Model_subkomponen->delete($id);
		redirect('subkomponen');
	}

	function detail(){
		if (isset($_POST['submit'])){
			$subkomponen = $this->input->post('subkomponen');
			$detail 	 = $this->input->post('detail');
			$data        = array(
				'nama_detail' => $detail,
				'id_subkomponen' => $subkomponen
				);
			$this->Model_detail->post($data);
			// echo "sukses";
			// print_r();
			// die;
			redirect('subkomponen/detail');			
		}
		else{
			$data['judul']    = 'Detail';
			$data['subjudul'] = 'Data Detail';
			$this->load->model('Model_subkomponen');
			$this->load->model('Model_detail');
			$data['subkomponen'] = $this->Model_subkomponen->tampil()->result();
			$data['detail']		= $this->Model_detail->tampilkan_detail()->result();
			$this->template->load('template','detail/v_detail',$data);
		}
	}

	function edit_detail(){
		if (isset($_POST['submit'])){
			$id 		 = $this->input->post('id');
			$nama		 = $this->input->post('nama');
			$subkomponen = $this->input->post('subkomponen');
			$data        = array('nama_detail' => $nama,
				'id_subkomponen' => $subkomponen);
			// print_r($data);
			// die;
			$this->Model_detail->edit_detail($data,$id);
			redirect('subkomponen/detail');
			
		}
		else{
			$data['judul'] = 'Detail';
			$data['subjudul'] = 'Edit Detail ';
			$id             =  $this->uri->segment(3);
			$this->load->model('Model_subkomponen');
			$data['subkomponen'] = $this->Model_subkomponen->tampil()->result();
			$data['record'] = $this->Model_detail->get_one($id)->row_array();
			$this->template->load('template','detail/f_edit',$data);
		}
	}

	function delete_detail()
	{
		$id=  $this->uri->segment(3);
		$this->Model_detail->deletedetail($id);
		redirect('subkomponen/detail');
	}



}

?>