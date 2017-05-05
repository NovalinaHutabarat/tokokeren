<?php
session_start();
include_once('functions.php');
include_once('configdb.php');
open_page('Menu Makanan');
$result = $database->query("SELECT is_admin from account where username='".$_SESSION['username']."'");
$row = $result->fetch_assoc();
$isadmin = $row['is_admin'];
echo($isadmin);
?>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- Add custom CSS here -->
<link href="css/business-casual.css" rel="stylesheet">

<div class="brand">Pak Koper's Canteen</div>
<div class="address-bar">See Your Menu Here</div>

<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="menu.php">Menu</a>
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
                <h2 class="intro-text text-center"><strong>Menu Makanan</strong></h2>
                <hr>
            </div>
            
                <h2 class="intro-text text-center"><strong>Breakfast</strong></h2>
                <?php
                $query = "SELECT * FROM tabel_jadwal where sesi='Breakfast' and tanggal ='".$_GET['day']." 07:00:00' "; 
                $result_set = $database->query($query); 
                
                echo('<table border="1">');
                echo('<tr>');
                echo('<td>Lauk </td>');
                echo('<td>Sayur </td>');
                echo('<td>Minuman </td>');
                echo('<td>Alternatif I </td>');
                echo('<td>Alternatif II </td>');
                echo('<td colspan="2">Action</td>');
                echo('</tr>');

                while ($row = $result_set->fetch_assoc()) {
                    echo('<tr>');
                    echo('<td>' . $row['lauk'] . '</td>');
                    echo('<td>' . $row['sayur'] . '</td>');
                    echo('<td>' . $row['minuman'] . '</td>');
                    echo('<td>' . $row['alternatif_1'] . '</td>');
                    echo('<td>' . $row['alternatif_2'] . '</td>');
                    $date = $_GET['day'];
                    $jam =' 07:00:00';
                    //echo "lala".$date;
                    if($isadmin == '1')
                        echo('<td><a href="edit_admin.php?day='.$date.'&jam='.$jam.'&sesi=Breakfast">Update</a><br></td>');
//                    echo('<td><a href="edit.php?id='.$row['id'].'">Edit</a><br></td>');
                    else
                        echo('<td><a href="edit_user.php?day='.$date.'&jam='.$jam.'&sesi=Breakfast">Update</a><br></td>');
                    echo('</tr>');
                }
                echo('</table>');
                ?>               
                
                <h2 class="intro-text text-center"><strong>Lunch</strong></h2>
                <?php
                $query1 = "SELECT * FROM tabel_jadwal where sesi='Lunch' and tanggal = '".$_GET['day']." 12:00:00' "; 
                $result_set1 = $database->query($query1); 
                
                echo('<table border="1">');
                echo('<tr>');
                echo('<td>Lauk </td>');
                echo('<td>Sayur </td>');
                echo('<td>Minuman </td>');
                echo('<td>Alternatif I </td>');
                echo('<td>Alternatif II </td>');
                echo('<td colspan="2">Action</td>');
                echo('</tr>');

                while ($row1 = $result_set1->fetch_assoc()) {
                    echo('<tr>');
                    echo('<td>' . $row1['lauk'] . '</td>');
                    echo('<td>' . $row1['sayur'] . '</td>');
                    echo('<td>' . $row1['minuman'] . '</td>');
                    echo('<td>' . $row1['alternatif_1'] . '</td>');
                    echo('<td>' . $row1['alternatif_2'] . '</td>');
                    $date = $_GET['day'];
                    $jam =' 12:00:00';
                    if($isadmin == '1')
                        echo('<td><a href="edit_admin.php?day='.$date.'&jam='.$jam.'&sesi=Lunch">Update</a><br></td>');
//                    echo('<td><a href="edit.php?id='.$row['id'].'">Edit</a><br></td>');
                    else
                        echo('<td><a href="edit_user.php?day='.$date.'&jam='.$jam.'&sesi=Lunch">Update</a><br></td>');
                    echo('</tr>');
                }
                echo('</table>');
                ?>
                
                <h2 class="intro-text text-center"><strong>Dinner</strong></h2>
                <?php
                $query = "SELECT * FROM tabel_jadwal where sesi='Dinner' and tanggal = '".$_GET['day']." 19:00:00' "; 
                $result_set = $database->query($query); 
                
                echo('<table border="1">');
                echo('<tr>');
                echo('<td>Lauk </td>');
                echo('<td>Sayur </td>');
                echo('<td>Minuman </td>');
                echo('<td>Alternatif I </td>');
                echo('<td>Alternatif II </td>');
                echo('<td colspan="2">Action</td>');
                echo('</tr>');

                while ($row = $result_set->fetch_assoc()) {
                    echo('<tr>');
                    echo('<td>' . $row['lauk'] . '</td>');
                    echo('<td>' . $row['sayur'] . '</td>');
                    echo('<td>' . $row['minuman'] . '</td>');
                    echo('<td>' . $row['alternatif_1'] . '</td>');
                    echo('<td>' . $row['alternatif_2'] . '</td>');
                    $date = $_GET['day'];
                    $jam =' 19:00:00';
                    if($isadmin == '1')
                        echo('<td><a href="edit_admin.php?day='.$date.'&jam='.$jam.'&sesi=Dinner">Update</a><br></td>');
//                    echo('<td><a href="edit.php?id='.$row['id'].'">Edit</a><br></td>');
                    else
                        echo('<td><a href="edit_user.php?day='.$date.'&jam='.$jam.'&sesi=Dinner">Update</a><br></td>');
                    echo('</tr>');
                }
                echo('</table>');
                ?>
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