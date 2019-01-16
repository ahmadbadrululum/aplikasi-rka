<?php  
/**
* 
*/
class Model_rencana extends CI_Model
{

	
	// function tampilkan_divisi($iddivisi)
	// {
	// 	$query = "SELECT rancangan_bulan.id_bulanan, rancangan_bulan.kode, rancangan_bulan.tgl_realisasi, rancangan_bulan.qty, rancangan_bulan.satuan, rancangan_bulan.frq, rancangan_bulan.anggaran,divisi.id_divisi, divisi.nama, divisi.deskripsi, suboutput.id_suboutput, suboutput.nama_suboutput, komponen.id_komponen, komponen.nama_komponen, subkomponen.id_subkomponen, subkomponen.nama_subkomponen, detail_subkomponen.id_detail, detail_subkomponen.nama_detail FROM rancangan_bulan inner join divisi ON rancangan_bulan.id_divisi = divisi.id_divisi inner JOIN suboutput ON rancangan_bulan.id_suboutput = suboutput.id_suboutput INNER JOIN komponen ON rancangan_bulan.id_komponen = komponen.id_komponen INNER JOIN subkomponen ON rancangan_bulan.id_subkomponen = subkomponen.id_subkomponen INNER JOIN detail_subkomponen on rancangan_bulan.id_detailsubkomponen = detail_subkomponen.id_detail WHERE divisi.id_divisi = $iddivisi";
	// 	return $this->db->query($query);

	// }
	function tampilkan_divisi($iddivisi)
	{
		$query = "SELECT rancangan_bulan.id_bulanan, rancangan_bulan.kode, rancangan_bulan.tgl_realisasi, rancangan_bulan.qty, rancangan_bulan.satuan, rancangan_bulan.frq, rancangan_bulan.anggaran,divisi.id_divisi, divisi.nama, divisi.deskripsi, suboutput.id_suboutput, suboutput.nama_suboutput, komponen.id_komponen, komponen.nama_komponen, subkomponen.id_subkomponen, subkomponen.nama_subkomponen FROM rancangan_bulan inner join divisi ON rancangan_bulan.id_divisi = divisi.id_divisi inner JOIN suboutput ON rancangan_bulan.id_suboutput = suboutput.id_suboutput INNER JOIN komponen ON rancangan_bulan.id_komponen = komponen.id_komponen INNER JOIN subkomponen ON rancangan_bulan.id_subkomponen = subkomponen.id_subkomponen WHERE divisi.id_divisi = $iddivisi";
		return $this->db->query($query);

	}

	function simpan()
	{
		$kode				= $this->input->post('kode');
		$nama_suboutput		= $this->input->post('suboutput');
		$nama_komponen		= $this->input->post('komponen');
		$nama_subkomponen	= $this->input->post('subkomponen');
		$tgl_realisasi		= $this->input->post('tgl_realisasi');
		$qty				= $this->input->post('qty');
		$satuan				= $this->input->post('satuan');
		$frq				= $this->input->post('frq');
		$anggaran			= $this->input->post('anggaran');
		$iddivisi 			= $this->db->get_where('divisi',array('nama'=>$divisi))->row_array();
		$idsuboutput		= $this->db->get_where('suboutput',array('nama_suboutput'=>$nama_suboutput))->row_array();
		$idkomponen			= $this->db->get_where('komponen',array('nama_komponen'=>$nama_komponen))->row_array();
		$idsubkomponen		= $this->db->get_where('subkomponen',array('nama_subkomponen'=>$nama_subkomponen))->row_array();
		$data				= array(	
			'id_divisi'=>$iddivisi['id_divisi'],
			'id_suboutput'=>$idsuboutput['id_suboutput'],
			'id_komponen'=>$idkomponen['id_komponen'],
			'id_subkomponen'=>$idsubkomponen['id_subkomponen'],
			'kode'=>$kode,
			'tgl_realisasi'=>$tgl_realisasi,
			'qty'=>$qty, 
			'satuan'=>$satuan,
			'frq'=>$frq,
			'anggaran'=>$anggaran,
			'keterangan'=>'0');	
		$this->db->insert('rancangan_bulan',$data);
	}

	function bulan_total() {
		$query = "SELECT MONTH(tgl_realisasi) as bulan_total,tgl_realisasi  FROM `rancangan_bulan` GROUP BY MONTH(tgl_realisasi)";
		return $this->db->query($query);
	}

	function delete($id){
		$this->db->where('id_bulanan',$id);
		$this->db->delete('rancangan_bulan');
	}
}