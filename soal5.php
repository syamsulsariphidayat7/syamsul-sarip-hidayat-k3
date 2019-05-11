<?php 

	function data($value1='',$value2='')
	{
		sort($value1);
		sort($value2);
		$hasil =array(			
			end($value1),
			end($value2),
		);
		return $hasil;		
	}
?>
Data 1: <?= print_r($data1= ['b','a','c']) ?>
 <?= "<br>" ?>
Data 2: <?= print_r($data2= ['g','z','s']) ?>
<hr>
<pre>Hasil : <?php print_r(data($data1,$data2)); ?></pre>