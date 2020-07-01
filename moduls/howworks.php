

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
            <a href="/?site=howworks" class="menu-container_item selected">How it works</a>
            <a href="/?site=categories" class="menu-container_item">Categories</a>
        </div>
        <a href="/?site=home" class="button">
            <div class="head-container_item">SIGN UP</div>
        </a>
    </header>
    <main>
        <div class="howitworks">
            <h1 class="howitworks_h1"> How to order on our website? It's simple.</h1><br>
            <h1 class="howitworks_count">1</h1>
            <h3 class="howitworks_h3">Decide on the model, color and number of products to order. You can read more
                about this information
                <a href="/?site=categories">here</a>.</h3><br>
            <h1 class="howitworks_count">2</h1>
            <h3 class="howitworks_h3">Leave a request in the form below and we will contact you soon to discuss the
                details of the order.</h3><br>

            <form action="/?site=howworks#form_add" method="POST" id="form_add">
                <h2 class="leave-req">Leave a request</h2>
                <label for="lname">Company name:
                    <input type="text" id="lname" name="lname" class="form_inp">
                </label>
                <label for="laddress">Company address:
                    <input type="text" id="laddress" name="laddress" class="form_inp">
                </label>
                <label for="lphone">Company phone:
                    <input type="text" id="lphone" name="lphone" class="form_inp">
                </label>
                <input type="submit" name="button" value="Leave request" class="form_but">
            </form>
<?php 
if( isset($_POST['button']) && $_POST['button']== 'Leave request')
 {
$connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
// формируем и выполняем SQL-запрос для добавления записи
 $query_add=pg_query($connect, "INSERT INTO furniture_store.customer (customer_name, address, phone) VALUES ('".
 htmlspecialchars($_POST['lname'])."', '".
 htmlspecialchars($_POST['laddress'])."', '".
 htmlspecialchars($_POST['lphone'])."') RETURNING customer_id ");
$row=pg_fetch_row($query_add);
if(!$query_add)
 echo '<h3 class="howitworks_h3 form_h3">Error</h3>';
 else // если все прошло нормально – выводим сообщение
echo '<h3 class="howitworks_h3 form_h3">Request number: '.$row[0].'</h3><br>';
}
?>
            <h1 class="howitworks_count">3</h1>
            <h3 class="howitworks_h3">If you want to edit your request, fill out the form below.</h3>
            
            <form action="/?site=howworks#form_edit" method="POST" id="form_edit">
                <h2 class="leave-req">Edit request</h2>
                <label for="enumber">Request number:
                    <input type="text" id="enumber" name="enumber" class="form_inp">
                </label>
                <label for="ename">Company name:
                    <input type="text" id="ename" name="ename" class="form_inp">
                </label>
                <label for="eaddress">Company address:
                    <input type="text" id="eaddress" name="eaddress" class="form_inp">
                </label>
                <label for="ephone">Company phone:
                    <input type="text" id="ephone" name="ephone" class="form_inp">
                </label>
                <input type="submit" name="button" value="Edit request" class="form_but">
            </form>
            <?php 
if( isset($_POST['button']) && $_POST['button']== 'Edit request')
 {
$connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
// формируем и выполняем SQL-запрос для добавления записи
 $query_edit=pg_query($connect, "UPDATE furniture_store.customer SET customer_name='".
 htmlspecialchars($_POST['ename'])."',address='".
 htmlspecialchars($_POST['eaddress'])."', phone='".
 htmlspecialchars($_POST['ephone']).
 "' WHERE customer_id=".$_POST['enumber']);
if(!$query_edit)
 echo '<h3 class="howitworks_h3 form_h3">Error</h3>';
 else // если все прошло нормально – выводим сообщение
 echo '<h3 class="howitworks_h3 form_h3">Request is changed</h3>';
}
?>
            <h1 class="howitworks_count">4</h1>
            <h3 class="howitworks_h3">If you want to delete a request, use the following form.</h3>
            
            <form action="/?site=howworks#form_delete" class="edit_req" method="POST" id="form_delete">
                <h2 class="leave-req">Delete request</h2>
                <label for="dnumber">Request number:
                    <input type="text" id="dnumber" name="dnumber" class="form_inp">
                </label>
                <input type="submit" name="button" value="Delete request" class="form_but">
            </form>
            <?php 
if (isset($_POST['button']) && $_POST['button']== 'Delete request') {
    $connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
    // формируем и выполняем SQL-запрос для добавления записи
    $query_delete=pg_query($connect, "DELETE FROM furniture_store.customer WHERE customer_id=".$_POST['dnumber']);
    if(!$query_delete)
 echo '<h3 class="howitworks_h3 form_h3">Error</h3>';
 else // если все прошло нормально – выводим сообщение
    echo '<h3 class="howitworks_h3 form_h3">Request with number '.$_POST['dnumber'].' has been deleted</h3>';
}
?>
<h1 class="howitworks_count">5</h1>
            <h3 class="howitworks_h3">If you have already placed an order, you can view your contract and sales details below.</h3>
                <h3 class="howitworks_h3"> Just enter your order number into following form.</h3>
                <form action="/?site=howworks#form_view" class="edit_req" method="POST" id="form_view">
                <h2 class="leave-req">View order details</h2>
                <label for="vnumber">Order number:
                    <input type="text" id="vnumber" name="vnumber" class="form_inp">
                </label>
                <input type="submit" name="button" value="View details" class="form_but">
            </form>
            <?php 
if (isset($_POST['button']) && $_POST['button']== 'View details') {
    $connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
    // формируем и выполняем SQL-запрос для добавления записи
    $query_view=pg_query($connect, "SELECT * FROM furniture_store.contract WHERE order_no=".$_POST['vnumber']);
$ret='<table><tr><th>Order No</th><th>Customer Id</th><th>Delivery Id</th><th>Date of registration</th><th>Date of execute</th><th>Total amount</th></tr>';
while ($row = pg_fetch_array($query_view, null, PGSQL_ASSOC)) { // пока роу не 0
                 $ret.='<tr>
 <td>'.$row['order_no'].'</td>
 <td>'.$row['customer_id'].'</td>
 <td>'.$row['delivery_id'].'</td>
 <td>'.$row['date_registrate'].'</td>
 <td>'.$row['date_execute'].'</td>
 <td>'.$row['total_amount'].'</td></tr>';
             }
             $ret.='</table>';
             echo $ret;
             $query_view=pg_query($connect, "SELECT selling_id, furniture_model, quantity, amount FROM furniture_store.selling WHERE order_no=".$_POST['vnumber']);
$ret='<table><tr><th>Selling Id</th><th>Furniture_model</th><th>Quantity</th><th>Amount</th></tr>';
while ($row = pg_fetch_array($query_view, null, PGSQL_ASSOC)) { // пока роу не 0
                 $ret.='<tr>
 <td>'.$row['selling_id'].'</td>
 <td>'.$row['furniture_model'].'</td>
 <td>'.$row['quantity'].'</td>
 <td>'.$row['amount'].'</td></tr>';
             }
             $ret.='</table>';
             echo $ret;
}
?>
        </div>
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