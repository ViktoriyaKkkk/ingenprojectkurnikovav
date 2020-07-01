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
            <a href="/?site=home" class="menu-container_item">Home</a>
            <a href="/?site=aboutus" class="menu-container_item">About Us</a>
            <a href="/?site=howworks" class="menu-container_item">How it works</a>
            <a href="/?site=categories" class="menu-container_item selected">Categories</a>
        </div>
        <a href="/?site=home" class="button">
            <div class="head-container_item">SIGN UP</div>
        </a>
    </header>
<main><div class="second-screen">
                <h2 class="second-screen_h2">What we have</h2>
                <hr class="second-screen_line-three">
                <h1><a href="#" class="second-screen_h1">CATEGORIES</a></h1>
            </div>
            <div class="categories">
                <div class="categories_item cat_table">
                    <p class="categories_item_name">Table</p>
                    <img src="img/desk.png" alt="brown desk" class="categories_item_table">
                    <a href="/?site=categories&category=Стол#categor">
                        <div class="categories_item_but">Show Now</div>
                    </a>
                </div>
                <div class="categories_item cat_chair">
                    <p class="categories_item_name">Chair</p>
                    <img src="img/chair.png" alt="brown desk" class="categories_item_chair">
                    <a href="/?site=categories&category=Стул#categor">
                        <div class="categories_item_but">Show Now</div>
                    </a>
                </div>
                <div class="categories_item cat_bedtable">
                    <p class="categories_item_name">Bedside table</p>
                    <img src="img/bedside_table.png" alt="brown desk" class="categories_item_bedtable">
                    <a href="/?site=categories&category=Тумбочка#categor">
                        <div class="categories_item_but">Show Now</div>
                    </a>
                </div>
                <div class="categories_item cat_closet">
                    <p class="categories_item_name">Closet</p>
                    <img src="img/closet.png" alt="brown desk" class="categories_item_closet">
                    <a href="/?site=categories&category=Шкаф#categor">
                        <div class="categories_item_but">Show Now</div>
                    </a>
                </div>
                <div class="categories_item cat_bed">
                    <p class="categories_item_name">Bed</p>
                    <img src="img/bed.png" alt="brown desk" class="categories_item_bed">
                    <a href="/?site=categories&category=Кровать#categor">
                        <div class="categories_item_but">Show Now</div>
                    </a>
                </div>
            </div>
            <div class="main_providers">
            <?php 
            if (isset($_GET['category'])) {
$connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
$query_read=pg_query($connect, "SELECT * FROM furniture_store.furniture WHERE furniture_name='".$_GET['category']."'");
$ret='<h3 class="howitworks_h3">Data for the selected category:</h3><table id="categor"><tr><th>Model</th><th>Category</th><th>Characteristic</th><th>Price</th><th>Quantity</th></tr>';
while ($row = pg_fetch_array($query_read, null, PGSQL_ASSOC)) { // пока роу не 0
                 $ret.='<tr>
 <td>'.$row['furniture_model'].'</td>
 <td>'.$row['furniture_name'].'</td>
 <td>'.$row['characteristic'].'</td>
 <td>'.$row['price'].'</td>
 <td>'.$row['quantity_available'].'</td>
 </tr>';
             }
             $ret.='</table>';
             echo $ret;
            }
?>
<h3 class="howitworks_h3">Before you place an order, check out our delivery methods.</h3>
<?php 
$connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
$query_read=pg_query($connect, "SELECT * FROM furniture_store.delivery");
$ret='<table id="delivery_form"><tr><th>Deliveri ID</th><th>Location</th><th>Duration</th><th>Price</th></tr>';
while ($row = pg_fetch_array($query_read, null, PGSQL_ASSOC)) { // пока роу не 0
                 $ret.='<tr>
 <td>'.$row['delivery_id'].'</td>
 <td>'.$row['delivery_location'].'</td>
 <td>'.$row['delivery_duration'].'</td>
 <td>'.$row['delivery_price'].'</td>
 </tr>';
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