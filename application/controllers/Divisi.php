<?php 
/**
* 
*/
class Divisi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_divisi');
		// chek_session();
		
	}

	function index(){
		$data['record']   = $this->Model_divisi->tampilkan_data();
		$data['judul']    = 'Divisi';
		$data['subjudul'] = 'Data Divisi';
		$this->template->load('template','divisi/v_data',$data);
		
	}

	function post(){
		if (isset($_POST['submit'])){
			$nama	   = $this->input->post('nama');
			$deskripsi = $this->input->post('deskripsi');
			$data 	   = array(
 	
 						'nama' 		=> $nama,
						'deskripsi' => $deskripsi,
							 );
			$this->Model_divisi->post($data);
			redirect('divisi');			
		}
		else{
			$data['judul'] = 'Divisi';
			$data['subjudul'] = 'Input';
			$this->load->model('Model_divisi');
			$data['divisi'] 	= $this->Model_divisi->tampilkan_data();
			$this->template->load('template','divisi/f_input',$data);
		}
	}

	function edit()
    {
       	if(isset($_POST['submit'])){
            $id         =   $this->input->post('id');
            $nama       =   $this->input->post('nama');
            $deskripsi  =   $this->input->post('deskripsi');
            $data       = array(
            					'nama'=>$nama,
                                'deskripsi'=>$deskripsi,
                                );
            $this->Model_divisi->edit($data,$id);
            redirect('divisi');
        }

        else{
        	$data['judul'] = 'Divisi';
			$data['subjudul'] = 'Edit';
            $id 			=  $this->uri->segment(3);
            $data['record'] =  $this->Model_divisi->get_one($id)->row_array();
            $this->template->load('template','divisi/f_edit',$data);
        }
    }

    function delete()
    {
        $id  =  $this->uri->segment(3);
        $this->Model_divisi->delete($id);
        redirect('divisi');
        // echo "gagal";
    }
}


 ?> 
 