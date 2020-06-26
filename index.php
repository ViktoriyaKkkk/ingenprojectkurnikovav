
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
$connect = pg_connect("host=ec2-54-247-78-30.eu-west-1.compute.amazonaws.com port=5432 dbname=d76crm6i0vfs8d user=ilbsowxasvmyej password=9c4bab3fc5f1ef35c940e9e50c078b4b9fa80acb1f65a6fbb14f9c2c87473204");
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