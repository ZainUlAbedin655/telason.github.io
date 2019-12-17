<?php
exit;
$servername = "localhost";
$username = "telaso5_nexus";
$password = "cAT9@7#&M";
$dbname = "telaso5_nexus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ps_product_attribute";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo 'count '.$result->num_rows.'<br>';
    $diff = 0;
    while($row = $result->fetch_assoc()) {
        $sqlX = 'SELECT * FROM ps_product_attribute_shop WHERE id_product_attribute = '.$row['id_product_attribute'];
        $resultX = $conn->query($sqlX);
        if ($resultX->num_rows > 0) {
            while($rowX = $resultX->fetch_assoc()) {
                if($row['id_product'] != $rowX['id_product']){
                    $diff++;
                    echo 'id_product / id_product_attribute  '. $row['id_product'].'/'.$row['id_product_attribute'].' - '. $rowX['id_product'].'/'.$rowX['id_product_attribute'].'<br>';
                    $sqlY = 'UPDATE ps_product_attribute_shop
                            SET id_product = '.$row['id_product'].'
                            WHERE id_product_attribute = '.$row['id_product_attribute'].';';
                    $resultY = $conn->query($sqlY);
                }
            }
        }
    }
    echo 'Found various products :'.$diff;
} else {
    echo "0 results";
}
$sql = "SELECT * FROM ps_product_attribute_shop pas WHERE  NOT EXISTS (SELECT *
                   FROM   ps_product_attribute pa
                   WHERE  pas.id_product_attribute = pa.id_product_attribute) ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo 'count '.$result->num_rows.'<br>';
    $diff = 0;
    while($row = $result->fetch_assoc()) {
        echo "id_product: " . $row["id_product"]. " - id_p_a: " . $row["id_product_attribute"]."<br>";
        $sqlX = "DELETE FROM ps_product_attribute_shop WHERE id_product=$row[id_product] AND id_product_attribute=$row[id_product_attribute];";
        $resultX = $conn->query($sqlX);
    }
    echo 'Found various products :'.$diff;
} else {
    echo "0 results";
}
$conn->close();
?>