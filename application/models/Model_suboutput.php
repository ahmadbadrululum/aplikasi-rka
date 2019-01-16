<?php 
/**
* 
*/
class Model_suboutput extends CI_Model
{
	function tampilkan_suboutput()
	{
		$query = "SELECT * FROM suboutput INNER JOIN divisi ON suboutput.id_divisi = divisi.id_divisi ORDER BY divisi.deskripsi ASC";
		return $this->db->query($query);
	}

	function tampilkan_data($iddivisi)
	{
		$query = "SELECT * FROM suboutput INNER JOIN divisi ON suboutput.id_divisi = divisi.id_divisi WHERE divisi.id_divisi=$iddivisi ORDER BY divisi.nama ASC";
		return $this->db->query($query);
	}

	function getby_iddivisi($iddivisi)
	{
		$this->db->where('id_divisi',$iddivisi);
		return $this->db->get('suboutput')->result();
	}

	function post($data){
		$this->db->insert('suboutput',$data);
	}

	function get_one($id){
		$param = array('id_suboutput' => $id);
		return $this->db->get_where('suboutput',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_suboutput',$id);
		$this->db->update('suboutput',$data);
	}
 
	function delete($id)
    {
        $this->db->where('id_suboutput',$id);
        $this->db->delete('suboutput');
    }

}
 ?>