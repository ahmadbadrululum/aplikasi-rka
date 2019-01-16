	<?php 
/**
*  
*/
class Model_subkomponen extends CI_Model
{
	
	function tampil_data()
	{
		return $this->db->get('subkomponen')->result();
	}

	function tampil(){
		 $query = "SELECT *FROM subkomponen left join komponen on subkomponen.id_komponen = komponen.id_komponen left join suboutput ON komponen.id_suboutput = suboutput.id_suboutput left join divisi on suboutput.id_divisi = divisi.id_divisi ORDER BY divisi.deskripsi,suboutput.nama_suboutput, komponen.nama_komponen, subkomponen.nama_subkomponen ASC";
			return $this->db->query($query);
	}
	
	function Tampilkan_data($idkomponen)
	{
		$query = "SELECT * FROM subkomponen INNER join komponen on subkomponen.id_komponen = komponen.id_komponen  where komponen.id_komponen=$idkomponen";
		return $this->db->query($query);
	}

	function update($data,$id)
	{
		$this->db->where('id_subkomponen',$id);
		$this->db->update('subkomponen',$data);
	}

	function getby_idkomponen($idkomponen)
	{
		$this->db->where('id_komponen',$idkomponen);
		return $this->db->get('subkomponen')->result();
	}
	
	function post($data)
	{
		$this->db->insert('subkomponen',$data);
	}

	function get_one($id){
		$param = array('id_subkomponen' =>$id);
		return $this->db->get_where('subkomponen',$param);
	}

	function edit($data,$id)
	{
		$this->db->where('id_subkomponen',$id);
		$this->db->update('subkomponen',$data);
	}

	function delete($id)
    {
        $this->db->where('id_subkomponen',$id);
        $this->db->delete('subkomponen');
    }
}

 ?>