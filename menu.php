<?php 
 session_start(); 
 include_once('functions.php'); 
 include_once('configdb.php'); 
 open_page('index'); 
?>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">

    <div class="brand">Toko Keren</div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a>
                    </li>
                    <li><a href="toko.php">Toko</a>
                    </li>
                    <li><a href="jasa_kirim.php">Jasa Kirim</a>
                    </li>
                    <li><a href="promo.php">Promo</a>
                    </li>
                    <li><a href="index.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Selamat datang di Toko Keren</strong></h2>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>