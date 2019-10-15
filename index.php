<?php
$server = "localhost";
$un ="id10202494_rootuser";
$pw = "user123";
$db = "id10202494_vit";
$conn = new mysqli($server,$un,$pw,$db);
if(!$conn){
    die("Couldnt connect to server :" + mysqli_connect_error());
}
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$r = mysqli_query($conn, $sql);
if ($r) {
    $result = mysqli_num_rows($r);
    echo($result);
} else {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
}

mysqli_close($conn);
?>
