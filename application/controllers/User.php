<?php
Class User extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Model_user','Model_divisi'));
		// chek_session(); 
		// chek_session();
	}
 
	function index(){
		$data['judul'] = 'User';
		$data['subjudul'] = 'Data User';
		$data['record'] = $this->Model_user->vuser();
		$this->template->load('template','user/v_data',$data);
	}

	function post(){
		if (isset($_POST['submit'])){
			$nama	   = $this->input->post('nama');
			$username  = $this->input->post('username');
			$password  = $this->input->post('password');
			$divisi    = $this->input->post('divisi');
			$data 	   = array(
				'id_divisi'	=>	$divisi,
				'nama_lengkap'	=> $nama,
				'username'  => $username,
				'password'  => md5($password)
				);
			$this->Model_user->post($data);
			redirect('user');	
		}
		else{
			$data['judul'] = 'User';
			$data['subjudul'] = 'Input';
			$this->load->model('Model_user');
			$data['divisi'] = $this->Model_divisi->tampilkan_data();
			$data['user'] 	= $this->Model_user->tampilkan_data()->result();
			$this->template->load('template','user/f_input',$data);
		}
	}

	function edit()
	{
		if(isset($_POST['submit'])){
			$id	  	  = $this->input->post('id',true);
			$divisi   = $this->input->post('divisi');
			$nama	  = $this->input->post('nama',true);
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			if (empty($password)) {
				$data = array(
					'nama_lengkap' => $nama,
					'username' => $username
					);	 
			}
			else{
				$data = array(
					'id_divisi'	=>$divisi,
					'nama_lengkap' => $nama,
					'username' => $username,
					'password' => md5($password));	
			}
			
			$this->db->where('id_user',$id);
			$this->db->update('users',$data);
			redirect('user');
		}
		else{
			$data['judul'] = 'User';
			$data['subjudul'] = 'Edit';
			$id 			=  $this->uri->segment(3);
			$data['divisi'] = $this->Model_divisi->tampilkan_data();	
			$data['record'] =  $this->Model_user->get_one($id)->row_array();
			$this->template->load('template','user/f_edit',$data);
		}
	}

	function delete()
	{
		$id  =  $this->uri->segment(3);
		$this->Model_user->delete($id);
		redirect('user');
	}
}


?> 
