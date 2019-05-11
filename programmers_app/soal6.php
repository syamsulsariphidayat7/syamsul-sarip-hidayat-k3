<?php 
	error_reporting();
	Class Programmers{
		public $conn;

		public function __construct()
		{
			$this->conn = new mysqli('localhost','root','','programmers');
		}		

		public function showUser()
		{
			$result = $this->conn->query("SELECT * from users");
			return $result;
		}

		public function showSkill($id=null)
		{
			$result = $this->conn->query("SELECT * from skills where id_user='$id'");
			return $result;
		}

		public function addUser($nama=null)
		{			
			$insert = $this->conn->query("INSERT into users (id_user,nama) value('','$nama')");
			return $insert;
		}

		public function addSkill($id=null,$skill=null)
		{			
			$insert = $this->conn->query("INSERT into skills (id_skill,id_user,skill) value('','$id','$skill')");
			return $insert;
		}
	}
?>
<?php $programer = new Programmers(); ?>
<?php $skill = new Programmers(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Programmer</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">PROGRAMMERS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">SKILLS <span class="sr-only">(current)</span></a>
					</li>	      
				</ul>				
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="alert alert-warning my-3">
				<form action="" method="post" class="form-inline my-3 justify-content-center">
					<label class="mr-sm-2" for="">Tambah Programmer : </label>
					<input class="form-control mr-sm-2" name="nama" placeholder="Nama programer....">
					<button name="addUser" class="btn btn-success my-2" type="submit">Tambah</button>
				</form>
				</div>
				<div class="table-responsive my-3">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Profil</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; ?>						
							<?php $loop = $programer->showUser(); ?>							
							<?php while ($data = $loop->fetch_object()){ ?>
								<tr>
									<td rowspan="2"><?= $no++; ?></td>
									<td><strong><?= $data->nama; ?></strong></td>							
									<td rowspan="2" class="text-center">
										<form action="" method="post" class="form-inline my-2 my-lg-0">
											<input type="hidden" name="id" value="<?= $data->id_user; ?>">
											<input class="form-control mr-sm-2" name="skill">
											<button name="addSkill" class="btn btn-primary my-2 my-sm-0" type="submit">Tambah</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>
										<?php @$q = $skill->showSkill($data->id_user); ?>
										<?php while ($skills = $q->fetch_object()){ ?>
											<?= $skills->skill.','; ?>
										<?php } ?>
									</td>
								</tr>
							<?php } ?>
						</tbody>				
					</table>
				</div>	
			</div>
		</div>		
	</div>
	<?php

		@$add = $_POST['addUser'];
		if (isset($add)) {
			$tambahUser = new Programmers();
			$nama = $_POST['nama'];
			$insert = $tambahUser->addUser($nama);
			if ($insert > 0) {
				?>
					<script>
						alert('Berhasil tambah user');						
						window.location="soal6.php";
					</script>
				<?php				
			}
		}

		@$addSkill = $_POST['addSkill'];
		if (isset($addSkill)) {
			$tambahSkill = new Programmers();
			$id = $_POST['id'];
			$skill = $_POST['skill'];			
			$insert = $tambahSkill->addSkill($id,$skill);
			if ($insert > 0) {
				?>
					<script>
						alert('Berhasil tambah skill');						
						window.location="soal6.php";
					</script>
				<?php				
			}
		}

	?>
</body>
</html>