<?php 
/**
* 
*/
class Model_komponen extends CI_Model
{
	function Tampilkan_komponen()
	{
		// return $this->db->get('komponen');
		$query = "SELECT * from komponen INNER join suboutput on komponen.id_suboutput = suboutput.id_suboutput INNER JOIN divisi ON suboutput.id_divisi = divisi.id_divisi";
		return $this->db->query($query);
	}

	function getby_idsuboutput($idsuboutput)
	{
		$this->db->where('id_suboutput',$idsuboutput);
		return $this->db->get('komponen')->result();
	}	

	function Tampilkan_data($idsuboutput)
	{
		$query = "SELECT * from komponen INNER join suboutput on komponen.id_suboutput = suboutput.id_suboutput WHERE suboutput.id_suboutput=$idsuboutput";
		return $this->db->query($query);
	}

	function post($data)
	{
		$this->db->insert('komponen',$data);
	}

	function get_one($id){
		$param = array('id_komponen' =>$id);
		return $this->db->get_where('komponen',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_komponen',$id);
		$this->db->update('komponen',$data);
	}

	function delete($id)
    {
        $this->db->where('id_komponen',$id);
        $this->db->delete('komponen');
    }

}
 ?>