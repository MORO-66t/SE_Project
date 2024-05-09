<?php
include('include/header.php');
if (!isset($_SESSION['client']['status'])) {
    header('location:login.php');
}

extract($_POST);
$conn = mysqli_connect("localhost", "root", "", "movie");
$_SESSION['movie'] = $mid;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $theatre = $_POST["theatre"];
    $HOT_FOOD = $_POST["HOT_FOOD"];
    $DRINK = $_POST["DRINK"];
    $Snacks = $_POST["Snacks"];
}
$bk = mysqli_query($conn, "SELECT * from register where r_id='" . $_SESSION['client']['uid'] . "' ");
while ($bkg = mysqli_fetch_array($bk)) {
    $m = mysqli_query($conn, "select m_id from movies where m_id=(select show_m from shows where show_id='" . $bkg['b_show'] . "')");
    $mov = mysqli_fetch_array($m);

    $userid = mysqli_query($conn, "select r_id from register where r_id='" . $_SESSION['uid'] . "'");
    $userid = mysqli_fetch_array($FOPRI);
}

$sql = "INSERT INTO recipt (user_id, movie_id, full_price) VALUES ($bk, $m, $full_price)";
$stmt = $conn->prepare($sql);

// Assuming $user_id, $movie_id, and $full_price are the variables holding the values you want to insert
$stmt->bind_param("iis", $user_id, $movie_id, $full_price);

// Execute the prepared statement
$stmt->execute();

// Check for success or error
if ($stmt->affected_rows > 0) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $stmt->error;
}



$foodarr = mysqli_query($conn, "select PRICE from food where FOODNAME = '$HOT_FOOD'OR '$DRINK'OR'$Snacks'");

// $FOODNAME = mysqli_query($conn,"SELECT PRICE FROM food WHERE FOODNAME = '$HOT_FOOD'OR '$DRINKS'OR'$Snacks'");
// $F= mysqli_fetch_array($FOODNAME);

// $price= mysqli_query($conn,"SELECT PRICE FROM food WHERE FOODNAME = '$HOT_FOOD'OR '$DRINKS'OR'$Snacks'");
// $price  =mysqli_fetch_array($price , MYSQLI_ASSOC);

while ($F = mysqli_fetch_array($foodarr, MYSQLI_ASSOC)) {
    echo $F["PRICE"] . "<br>";
}




include("include/footer.php");

?>