<?php 
/**
* 
*/
class Model_divisi extends CI_Model
{
	function tampilkan_data()
	{
		return $this->db->get('divisi');
	}

	function max_id()
	{
		$this->db->select('max(id_divisi) as max');
		return $this->db->get('divisi')->row();
	}

	function post($data){
		$this->db->insert('divisi',$data);
	}

	function get_one($id){
		$param = array('id_divisi' => $id);
		return $this->db->get_where('divisi',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_divisi',$id);
		$this->db->update('divisi',$data);
	}

	function delete($id)
    {
        $this->db->where('id_divisi',$id);
        $this->db->delete('divisi');
    }

}
 ?>