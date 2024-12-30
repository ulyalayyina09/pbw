<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
	header("location:admin.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['user'];
  
  //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
  $password = md5($_POST['pass']);

	//prepared statement
  $stmt = $conn->prepare("SELECT username 
                          FROM user 
                          WHERE username=? AND password=?");

	//parameter binding 
  $stmt->bind_param("ss", $username, $password);//username string dan password string
  
  //database executes the statement
  $stmt->execute();
  
  //menampung hasil eksekusi
  $hasil = $stmt->get_result();
  
  //mengambil baris dari hasil sebagai array asosiatif
  $row = $hasil->fetch_array(MYSQLI_ASSOC);

  //check apakah ada baris hasil data user yang cocok
  if (!empty($row)) {
    //jika ada, simpan variable username pada session
    $_SESSION['username'] = $row['username'];

    //mengalihkan ke halaman admin
    header("location:admin.php");
  } else {
	  //jika tidak ada (gagal), alihkan kembali ke halaman login
    header("location:login.php");
  }

	//menutup koneksi database
  $stmt->close();
  $conn->close();
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter Fanbase</title>
    <link rel="shortcut icon" href="assets/img/icon.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"/>

    <style>
        body {
            background-color: #000;
            background-image: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                                radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                                radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 5px 5px, 10px 10px, 15px 15px;
            background-position: 0 0, 50px 50px, 100px 100px;
            background-color: #0c0f2c;
            color: #c9c9c9; 
            padding-top: 56px; 
        }

        .nav-item {
        padding-right: 20px;
        }

        .navbar-brand {
            margin-left: 15px; 
        }


        .header {
            background-image: url(assets/img/bannerharrypotter.jpg);
            background-size: contain;
            background-position: center;
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            height: 20vh;
        }
        .header h1 {
            font-family: 'Merienda', cursive;
        }
        img {
            width: 200px;
            height: 200px;
        }
        .house-cards img {
            width: 100%;
            border-radius: 5px;
        }
        .light-mode {
            background-color: #000;
            background-image: radial-gradient(circle, rgb(247, 255, 131) 1px, transparent 1px),
                                radial-gradient(circle, rgb(247, 255, 131) 1px, transparent 1px),
                                radial-gradient(circle, rgb(247, 255, 131) 1px, transparent 1px);
            background-size: 5px 5px, 10px 10px, 15px 15px;
            background-position: 0 0, 50px 50px, 100px 100px;
            background-color: #d7d7d7;
            color: #000000;
        }
        
        .character-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            transition: transform 0.3s;
        }
        .character-card:hover {
            transform: scale(1.05);
        }
        .character-carousel {
            overflow: hidden;
            white-space: nowrap;
        }
        .character-carousel .character-card {
            display: inline-block;
        }
        .table-bordered {
            color: black;
        }
        thead {
            text-align: center;
            background-color: lightpink;
        }
        tbody {
            background-color: white;
        }

    </style>
</head>
<body class="dark-mode">

<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 m-auto">
      <div class="card border-0 shadow rounded-5">
        <div class="card-body">
          <div class="text-center mb-3">
            <i class="bi bi-person-circle h1 display-4"></i>
            <p>Fanbase Login</p>
            <hr />
          </div>
          <form action="" method="post">
            <input
              type="text"
              name="user"
              class="form-control my-4 py-2 rounded-4"
              placeholder="Username"
            />
            <input
              type="password"
              name="pass"
              class="form-control my-4 py-2 rounded-4"
              placeholder="Password"
            />
            <div class="text-center my-3 d-grid">
              <button class="btn btn-danger rounded-4">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
//set variable username dan password dummy
$username = "admin";
$password = "123456";

//check apakah ada request dengan method POST yang dilakukan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //tampilkan isi dari variable array POST menggunakan perulangan
    foreach($_POST as $key => $val){
        echo $key . " : " . $val ."<br>";
    } 

    //check apakah username dan password yang di POST sama dengan data dummy
    if($_POST['user'] == $username AND $_POST['passw'] == $password){
        echo "Username dan Password Benar";
    }else{
        echo "Username dan Password Salah";
    }
};
?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function setTheme(theme) {
            const body = document.getElementById('body');
            if (theme === 'light') {
                body.classList.add('light-mode');
                body.classList.remove('dark-mode');
            } else {
                body.classList.add('dark-mode');
                body.classList.remove('light-mode');
            }
        }
    </script>
</body>
</html>
<?php
}
?>