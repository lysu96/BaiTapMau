<?php
   
$conn = mysqli_connect('localhost', 'root', '','ds');
mysqli_set_charset($conn, 'utf8');
$sql="SELECT * FROM thongtin";

$result = $conn->query($sql);

$output =[];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $output[]=$row;
    }
    echo json_encode($output);
} else {
    echo "0 results";
}

mysqli_close($conn);
?>