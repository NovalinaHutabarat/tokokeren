<?php
session_start();
include_once('functions.php');
open_page('Toko Keren');

?>

<!-- Bootstrap core CSS -->
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/supersized.css">
<link rel="stylesheet" href="assets/css/style.css">

    <div class="page-container">
        <h1>Toko Keren</h1>
        <br>
        <form action="jasa_kirim_process.php" method="post">
            <input type="text" name="nama" class="username" placeholder="Nama">
            <input type="text" name="lama_kirim" class="password" placeholder="Lama Kirim">
            <input type="text" name="tarif" class="password" placeholder="Tarif">
            <button type="submit">Submit</button>
            <div class="error"><span>+</span></div>
        </form>
    </div>

    <!-- Javascript -->
    <script src="assets/js/jquery-1.8.2.min.js"></script>
    <script src="assets/js/supersized.3.2.7.min.js"></script>
    <script src="assets/js/supersized-init.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>

