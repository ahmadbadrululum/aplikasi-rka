<?php 
/**
* 
*/
class Model_user extends CI_Model
{
	function login($username,$password){
		$chek = $this->db->get_where('users', array('username'=>$username, 'password'=> md5($password)));
		if ($chek->num_rows()>0) {
			return 1;
		}
		else{
			return 0;
		}
	}


	function Tampilkan_data()
	{
		return $this->db->get('users');
	}
	
	function vuser(){
		$query = "SELECT users.id_user, users.nama_lengkap, users.username, divisi.nama, divisi.deskripsi FROM users INNER join divisi on users.id_divisi = divisi.id_divisi";
		return $this->db->query($query);

	}

	function tampil(){
		$query = "SELECT groups.id_group, users.nama_lengkap, users.username,divisi.nama, divisi.deskripsi FROM groups INNER join users on groups.id_user = users.id_user INNER JOIN divisi on groups.id_divisi = divisi.id_divisi";
		return $this->db->query($query);
	}

	function post($data){
		$this->db->insert('users',$data);
	}

	function get_one($id){
		$param = array('id_user' => $id);
		return $this->db->get_where('users',$param);
	}

	function delete($id)
    {
        $this->db->where('id_user',$id);
        $this->db->delete('users');
    }

}
