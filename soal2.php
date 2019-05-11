<?php 
	
	function validasiUser($username=null)
	{		
		if (!preg_match("/^[a-z || .]*$/", $username)) {					
			echo "username kombinasi huruf kecil atau symbol titik";die();
		}elseif (strlen($username) != 8) {
			echo "username harus 8 karakter";die();			
		}else{			
			echo 'Username Benar';
		}		
	}

	function validasiEmail($email=null)
	{					
		$akun =  explode('@', $email);
		$domain = explode('.', $akun[1]);
		
		if (!preg_match("/^[a-z || A-Z || 0-9 || .@]*$/", $email)) {
			echo "email kombinasi huruf kecil, besar, angka, dan titik";die();
		}elseif (strlen($akun[0]) < 4) {
			echo "email kurang dari 4 karakter";die();			
		}elseif (empty($domain[1])) {
			echo "format email salah";die();
		}
		else{			
			echo 'Email Benar';
		}		
	}

	print_r(validasiUser('syamsul.'));
	echo "<br>";
	print_r(validasiEmail('sY2.@gmail.com'));

?>