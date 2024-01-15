<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="judul">
                <h1>Login SMK N 1 BANTUL</h1>
            </div>
        </div>
    </header>

    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='container'>"; 
            echo "<div class='alert show'>Username dan Password tidak sesuai !</div>"; // Tambah class 'show' di sini
            echo "</div>"; 
        }
    }
    ?>

    <video autoplay muted loop id="bgVideo">
        <source src="5 Minutes of Genshin Impact's Loading Screen (Morning).mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

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
</body>
</html>
