<?php 
/**
* 
*/
class Libku
{
	
	function __construct()
	{
		parent::__construct();
		$CI =& get_instance();
	}

	function table_komponen()
	{
		$komp = $CI->db->get('komponen');
		
?>

	<ul>
	<?php foreach ($komp as $k) : ?>
		<li><?= $k['nama_komponen']; ?></li>
	<?php endforeach; ?>
	</ul>

<?php

	}
}


?>