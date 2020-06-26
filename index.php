
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php 
$connect = pg_connect("host=ec2-54-247-78-30.eu-west-1.compute.amazonaws.com port=5432 dbname=dcvr3u8bthpq82 user=oxcivbuslhfnsb password=39ee04bd496cb03d7d1d38eba4f06a8372c1c7d1be69e70a0c5768a51e965c2b");
$query_read=pg_query($connect, 'SELECT * FROM furniture_store.customer');
$ret='<table>';
while ($row = pg_fetch_array($query_read, null, PGSQL_ASSOC)) { // пока роу не 0
                 $ret.='<tr><td>'.$row['one'].'</td>
<td>'.$row['customer_id'].'</td>
 <td>'.$row['customer_name'].'</td>
 <td>'.$row['address'].'</td>
 <td>'.$row['phone'].'</td></tr>';
             }
             $ret.='</table>';
             echo $ret;
?>
</body>
</html>