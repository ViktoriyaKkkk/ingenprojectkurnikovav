
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
$connect = pg_connect("host=ec2-54-75-246-118.eu-west-1.compute.amazonaws.com port=5432 dbname=d68b22k04uajp user=yvaybjpfqsdvdn password=46ede82150eaabebd555780bdfb738f30cbac10f6a3a116d18511c2492abca6e");
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