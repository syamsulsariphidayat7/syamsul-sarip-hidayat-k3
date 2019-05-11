<?php 
	
	function cetak_gambar()
	{
		$string = ['P','R','O','G','R','A','M','M','E','R'];	
		$jumlah=count($string);

		for ($i=0; $i < $jumlah; $i++) { 
			for ($j=0; $j < $jumlah ; $j++) {				
					if ($j == $i) {
						echo $string[$i];
					}elseif ($jumlah-$i == $j+1) {
						echo $string[$i];												
					}
					else{
						echo ' = ';					
					}																						
			}				
			echo "<br/>";			
		}
	}

	print_r(cetak_gambar());
?>