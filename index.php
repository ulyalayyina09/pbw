<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter Fanbase</title>
    <link rel="shortcut icon" href="assets/img/icon.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
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
<body id="body" class="dark-mode">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Harry Potter Fanbase</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#wizarding-world">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#characters">Characters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#houses">Houses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#schedule">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#quotes">Quotes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#article">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#me">Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php" target="_blank">Login</a>
                  </li>
                <li class="nav-item">
                    <button class="btn btn-dark mx-2" onclick="setTheme('dark')">🌙 Dark</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-light" onclick="setTheme('light')">☀️ Light</button>
                </li>
            </ul>
        </div>
    </nav>

    <header class="header"></header>

    <div style="text-align: center; margin: 10px;">
        <h1><b>HARRY POTTER FANBASE</b></h1>
        <p><b>Welcome to the magical world of Harry Potter!</b></p>
    </div>

    <div class="container mt-5">
        <section id="wizarding-world" class="text-center mb-5">
            <h2 class="mb-4">About the Wizarding World</h2>
            <p>The magical world of Harry Potter is filled with wonders, from Hogwarts to the Ministry of Magic. The wizarding world, also referred to as the magical community, was the society in which wizards and witches lived and interacted, separate from non-wizarding society. The two communities were kept separate through the use of charms, spells, and secrecy. Wizards were forbidden to reveal anything about magic to Muggle society due to the International Statute of Wizarding Secrecy. Join us in reliving the magic!</p>
        </section>

        <section id="characters" class="mb-5">
            <h2 class="text-center mb-4">Character Profiles</h2>
            <div id="characterCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-3 character-card">
                                <img src="assets/img/harry.jpeg" alt="Harry" class="rounded-circle mb-2">
                                <h5>Harry Potter</h5>
                            </div>
                            <div class="col-md-3 character-card">
                                <img src="assets/img/hermione.jpeg" alt="Hermione" class="rounded-circle mb-2">
                                <h5>Hermione Granger</h5>
                            </div>
                            <div class="col-md-3 character-card">
                                <img src="assets/img/ron.jpeg" alt="Ron" class="rounded-circle mb-2">
                                <h5>Ron Weasley</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-3 character-card">
                                <img src="assets/img/draco.jpeg" alt="Draco" class="rounded-circle mb-2">
                                <h5>Draco Malfoy</h5>
                            </div>
                            <div class="col-md-3 character-card">
                                <img src="assets/img/ginny.jpeg" alt="Ginny" class="rounded-circle mb-2">
                                <h5>Ginny Weasley</h5>
                            </div>
                            <div class="col-md-3 character-card">
                                <img src="assets/img/neville.jpeg" alt="Neville" class="rounded-circle mb-2">
                                <h5>Neville Longbottom</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-3 character-card">
                                <img src="assets/img/cho chang.jpeg" alt="Cho" class="rounded-circle mb-2">
                                <h5>Cho Chang</h5>
                            </div>
                            <div class="col-md-3 character-card">
                                <img src="assets/img/cedric.jpeg" alt="Cedric" class="rounded-circle mb-2">
                                <h5>Cedric Diggory</h5>
                            </div>
                            <div class="col-md-3 character-card">
                                <img src="assets/img/tom.jpeg" alt="Tom" class="rounded-circle mb-2">
                                <h5>Lord Voldemort</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#characterCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#characterCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="houses" class="mb-5">
            <h2 class="text-center mb-4">Hogwarts Houses</h2>
            <div class="row house-cards text-center">
                <div class="col-md-3">
                    <img src="assets/img/gryffindor.svg" alt="Gryffindor">
                    <h5>Gryffindor</h5>
                    <p>Bravery, Courage, and Chivalry.</p>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/slytherin.svg" alt="Slytherin">
                    <h5>Slytherin</h5>
                    <p>Ambition, Cunning, and Resourcefulness.</p>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/ravenclaw.svg" alt="Ravenclaw">
                    <h5>Ravenclaw</h5>
                    <p>Wisdom, Wit, and Learning.</p>
                </div>
                <div class="col-md-3">
                    <img src="assets/img/hufflepuf.svg" alt="Hufflepuff">
                    <h5>Hufflepuff</h5>
                    <p>Hard Work, Patience, Loyalty, and Fair Play.</p>
                </div>
            </div>
        </section>

        <section id="schedule" class="mb-5">
            <h2 class="text-center mb-4">Schedule</h2>
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Monday</th>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Herbology</td>
                                <td>09.30 - 12.00</td>
                            </tr>
                            <tr>
                                <td>Potions</td>
                                <td>15.30 - 18.00</td>
                            </tr>
                            <tr>
                                <td>Astronomy</td>
                                <td>19.30 - 21.00</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>

                    <div class="col-md-4 col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Tuesday</th>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>History</td>
                                <td>09.30 - 12.00</td>
                            </tr>
                            <tr>
                                <td>Transfiguration</td>
                                <td>15.30 - 18.00</td>
                            </tr>
                            <tr>
                                <td>Arithmancy</td>
                                <td>19.30 - 21.00</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>

                    <div class="col-md-4 col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Wednesday</th>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Divination</td>
                                <td>09.30 - 12.00</td>
                            </tr>
                            <tr>
                                <td>Alchemy</td>
                                <td>15.30 - 18.00</td>
                            </tr>
                            <tr>
                                <td>Astronomy</td>
                                <td>19.30 - 21.00</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>

                    <div class="col-md-4 col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Thursday</th>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Herbology</td>
                                <td>09.30 - 12.00</td>
                            </tr>
                            <tr>
                                <td>Art</td>
                                <td>15.30 - 18.00</td>
                            </tr>
                            <tr>
                                <td>Music</td>
                                <td>19.30 - 21.00</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>

                    <div class="col-md-4 col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Friday</th>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Muggle Art</td>
                                <td>09.30 - 12.00</td>
                            </tr>
                            <tr>
                                <td>Potions</td>
                                <td>15.30 - 18.00</td>
                            </tr>
                            <tr>
                                <td>Astronomy</td>
                                <td>19.30 - 21.00</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>

                    <div class="col-md-4 col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Saturday</th>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Flying</td>
                                <td>09.30 - 12.00</td>
                            </tr>
                            <tr>
                                <td>Potions</td>
                                <td>15.30 - 18.00</td>
                            </tr>
                            <tr>
                                <td>Dark Arts</td>
                                <td>19.30 - 21.00</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </section>

        <section id="quotes" class="quote-carousel text-center mb-5">
            <h2 class="mb-4">Iconic Quotes</h2>
            <p>(if you know you know)</p>
            <div id="quoteCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p>"Yer a wizard, Harry" -Rubeus Hagrid</p>
                    </div>
                    <div class="carousel-item">
                        <p>"Turn to page 394" -Severus Snape</p>
                    </div>
                    <div class="carousel-item">
                        <p>"Harry DID U PUT UR NAME IN THE GOBLET OF FIRE?!" -Albus Dumbledore</p>
                    </div>
                    <div class="carousel-item">
                        <p>"Not me, not Hermione, YOU!" -Ron Weasley</p>
                    </div>
                    <div class="carousel-item">
                        <p>"My father will hear about this" -Draco Malfoy</p>
                    </div>
                    <div class="carousel-item">
                        <p>"It's Levi-O-sa not Levi-o-saaa" -Hermione Granger</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#quoteCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#quoteCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    </div>

    <section id="me" class="my-5" style="background-color: lightblue; color: #000;">
        <h2 class="text-center mb-4">About Me</h2>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-12 mb-4">
                    <img src="assets/img/lily.jpeg" class="img-fluid rounded-circle mx-auto d-block" alt="Profile Photo">
                </div>
                <div class="col-md-8 col-12" style=color:#000;>
                    <p>A11.2023.14946</p>
                    <h2>ULYA LAYYINA</h2>
                    <p>Program Studi Teknik Informatika</p>
                    <a href="https://dinus.ac.id/" style="color:black; ">Universitas Dian Nuswantoro</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4">
        <a href="https://wa.me/088225291454"><img src="assets/img/wa.png" alt="WhatsApp" style="height: 50px; width: auto;"></a>
        <a href="https://www.instagram.com/lilytinggi/"><img src="assets/img/ig.png" alt="Instagram" style="height: 50px; width: auto;"></a>
        <p>&copy; 2024 Harry Potter Fanbase | Made with 💖 for Potterheads (to be exact aku sendiri sih)</p>
        <p>
            <a href="https://www.wizardingworld.com/" target="_blank" rel="noopener noreferrer">Official Harry Potter Website</a>
        </p>
    </footer>

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
