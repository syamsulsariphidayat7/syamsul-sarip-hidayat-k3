<?php 

	function acak($jumlah)
	{	    	
		for ($j=0; $j < $jumlah ; $j++) { 			
			$karakter = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789";
			$string = '';
			for ($i = 0; $i < 32; $i++) {
				$pos = rand(0, strlen($karakter)-1);
				$string .= $karakter{$pos};
			}
			echo $hasil[]=$string;
			echo "<br>";
		}
	}

	echo(acak(2));	

?>