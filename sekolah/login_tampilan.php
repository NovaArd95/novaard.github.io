<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
 <div class="judul">
	<h1>Login SMK N 1 BANTUL</h1>
	</div>
	</header>
	
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			
		</form>
		
	</div>
	 <div class="dashboard-box">
        <center><h2>Info Level:</h2></center>
        <p style="text-align:center" :<br>Admin: <br> Username: novaard<br> Password: 12345678<br> User:<br> Username: usernya<br> Password: 12345678 </p>
        <!-- Isi konten siswa di sini -->
   </div>
 
 
</body>
</html>