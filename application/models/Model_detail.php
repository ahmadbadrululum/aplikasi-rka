
<?php 
/**
* 
*/
class Model_detail extends CI_Model
{
	

	function tampilkan_detail()
	{
		$query = "SELECT *,detail_subkomponen.qty as detail_qty,detail_subkomponen.frq as detail_frq, detail_subkomponen.satuan as detail_satuan ,detail_subkomponen.anggaran as detail_anggaran from detail_subkomponen left join subkomponen on detail_subkomponen.id_subkomponen = subkomponen.id_subkomponen left join komponen on subkomponen.id_komponen = komponen.id_komponen ORDER BY komponen.nama_komponen ASC";
		return $this->db->query($query);
	}

	function tampilkan_data($idsubkomponen)
	{
		$query = "SELECT * from detail_subkomponen inner join subkomponen on detail_subkomponen.id_subkomponen = subkomponen.id_subkomponen where subkomponen.id_subkomponen=$idsubkomponen";
		return $this->db->query($query);
	}

	function cekdetail($idsubkomponen)
	{
		$this->db->where('id_subkomponen',$idsubkomponen);
		return $this->db->get('detail_subkomponen')->num_rows();	
	}

	function post($data)
	{
		$this->db->insert('detail_subkomponen',$data);
	}

	function update($data,$id)
	{
		$this->db->where('id_detail',$id);
		$this->db->update('detail_subkomponen',$data);
	}
	
	function getby_idsubkomponen($idsubkomponen)
	{
		$this->db->where('id_subkomponen',$idsubkomponen);
		return $this->db->get('detail_subkomponen')->result();
	}

	function get_one($id){
		$param = array('id_detail' =>$id);
		return $this->db->get_where('detail_subkomponen',$param);
	}

	function edit_detail($data,$id)
	{
		$this->db->where('id_detail',$id);
		$this->db->update('detail_subkomponen',$data);
	}


	function deletedetail($id)
	{
		$this->db->where('id_detail',$id);
		$this->db->delete('detail_subkomponen');
	}
}

?>