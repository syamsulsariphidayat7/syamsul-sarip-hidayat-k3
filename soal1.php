<?php 
	
	function biodatas()
	{
		$biodata = array(
			'name' => 'Syamsul Sarip Hidayat', 
			'address' => 'Desa Mekarbakti Kecamatan Bungbulang Kabupaten Garut', 
			'hobbies' => ['Programming','Main Musik','Sepak Bola'], 
			'is_married ' => false, 
			'school  ' => [
				'SD' => 'SDN Mekarbakti II',
				'SMP' => 'SMPN 4 Bungbulang',
				'SMA' => 'SMAN 7 Garut',
				'Kampus' => 'AMIK Garut',
			],	
			'skills' => [
				'WEB' => ['HTML','CSS','Java Script'],
				'FrameworkBackEnd' => ['Codeigniter'],
				'FrameworkFrontEnd' => ['JQuery','Bootstrap'],
				'Desktop' => ['Pascal','Delphi','VB'],
				'Mobile' => ['Pascal','Delphi'],
				'IOS' => ['Pascal','Delphi'],
			],
		);
		return json_encode($biodata);
	}

	print_r(biodatas());