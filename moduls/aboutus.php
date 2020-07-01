
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="mebel shop by Kurnikova Viktoria">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
            $('.button').hover(function () {
                $('.button').addClass('animate__animated animate__jello');  // Добавляем класс bounce
            }, function () {
                $('.button').removeClass('animate__animated animate__jello');  // Убираем класс bounce
            }
            )
        });
        $(document).ready(function () {
            $('.button2').hover(function () {
                $('.button2').addClass('animate__animated animate__jello');  // Добавляем класс bounce
            }, function () {
                $('.button2').removeClass('animate__animated animate__jello');  // Убираем класс bounce
            }
            )
        });</script>
</head>

<body>
     <header class="head-container head-container_aboutus">
        <div class="head-container_item">mébel</div>
        <div class="head-container_item menu-container">
            <a href="/?site=home" class="menu-container_item ">Home</a>
            <a href="/?site=aboutus" class="menu-container_item selected">About Us</a>
            <a href="/?site=howworks" class="menu-container_item">How it works</a>
            <a href="/?site=categories" class="menu-container_item">Categories</a>
        </div>
        <a href="/?site=home" class="button">
            <div class="head-container_item">SIGN UP</div>
        </a>
    </header>

    <main>
    <div class="second-screen">
                <h2 class="second-screen_h2">Who we are</h2>
                <hr class="second-screen_line">
                <h1><a href="#" class="second-screen_h1">ABOUT US</a></h1>
            </div>
        <div class="main_providers">
<h2>Our online store cooperates with such suppliers as:</h2>
<?php 
$connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
$query_read=pg_query($connect, 'SELECT * FROM furniture_store.provider');
$ret='<table><tr><th>Company</th><th>Address</th><th>Phone</th></tr>';
while ($row = pg_fetch_array($query_read, null, PGSQL_ASSOC)) { // пока роу не 0
                 $ret.='<tr>
 <td>'.$row['provider_name'].'</td>
 <td>'.$row['provider_address'].'</td>
 <td>'.$row['provider_phone'].'</td></tr>';
             }
             $ret.='</table>';
             echo $ret;
?></div>
<div class="main_providers">
<h2>Also we have a large base of regular customers. More than
    <?php 
$connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
$query_read=pg_query($connect, 'SELECT count(*) FROM furniture_store.customer');
$row=pg_fetch_row($query_read);
$ret=$row[0].' ';
echo $ret;
?>
 clients work with us:</h2>
<?php 
$connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
$query_read=pg_query($connect, 'SELECT * FROM furniture_store.customer');
$ret='<table><tr><th>Customer</th><th>Address</th><th>Phone</th></tr>';
while ($row = pg_fetch_array($query_read, null, PGSQL_ASSOC)) { // пока роу не 0
                 $ret.='<tr>
 <td>'.$row['customer_name'].'</td>
 <td>'.$row['address'].'</td>
 <td>'.$row['phone'].'</td></tr>';
             }
             $ret.='</table>';
             echo $ret;
?></div>
    </main>

     <footer>
        <div class="footer_container">
            <div class="footer_container_item">
                <p class="column-head">mébel</p>
                <p class="column-item">(012) 8967453</p>
                <p class="column-item">mébel@gmail.com</p>
                <p class="column-item">Moscow, Russia</p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Product</p>
                <p class="column-item"><a href="/?site=categories">Furnitures</a> </p>
                <p class="column-item"><a href="/?site=categories#delivery_form">Delivery</a></p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Resources</p>
                <p class="column-item"><a href="/?site=home">Blog</a></p>
                <p class="column-item"><a href="/?site=home">News</a></p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Company</p>
                <p class="column-item"><a href="/?site=aboutus">About Us</a></p>
                <p class="column-item"><a href="/?site=aboutus">Our Team</a></p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Follow Us</p>
                <p class="column-item"><a href="https://www.instagram.com/">Instagram</a></p>
                <p class="column-item"><a href="https://twitter.com/explore">Twitter</a></p>
            </div>
        </div>
    </footer>
</body>

</html>