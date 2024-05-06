<?php
include("include/header.php");
if (!isset($_SESSION['client']['status'])) {
    header('location:login.php');
}
$qry2 = mysqli_query($con, "select * from movies where m_id='" . $_SESSION['movie'] . "'");
$movie = mysqli_fetch_array($qry2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/foodmenu.css">
    <title>Menu</title>
</head>

<body>
    <div class="FOOD-panel">
        <div class="FOOD-panel-section FOOD-panel-section1">
            <h1>RESERVE YOUR Food</h1>
        </div>


        <div class="FOOD-panel-section FOOD-panel-section4">
            <div class="FOOD-form-container">
                <form action="verify.php" method="POST">
                    <select name="theatre" required>
                        <option value="" disabled selected>THEATRE</option>
                        <option value="main-hall">Main Hall</option>
                        <option value="vip-hall">VIP Hall</option>
                        <option value="private-hall">Private Hall</option>
                    </select>
                    <select name="HOT_FOOD">
                        <option value="" disabled selected>HOT_FOOD</option>
                        <option value="main-hall">Main Hall</option>
                        <option value="vip-hall">VIP Hall</option>
                        <option value="private-hall">Private Hall</option>
                    </select>

                    <select name="DRINK">
                        <option value="" disabled selected>DRINK</option>
                        <option value="3d">3D</option>
                        <option value="2d">2D</option>
                        <option value="imax">IMAX</option>
                        <option value="7d">7D</option>
                    </select>
                    <select name="Snacks">
                        <option value="" disabled selected>Snacks</option>
                        <option value="main-hall">Main Hall</option>
                        <option value="vip-hall">VIP Hall</option>
                        <option value="private-hall">Private Hall</option>
                    </select>

                    <select name="date">
                        <option value="" disabled selected>DATE</option>
                        <option value="12-3">March 12,2019</option>
                        <option value="13-3">March 13,2019</option>
                        <option value="14-3">March 14,2019</option>
                        <option value="15-3">March 15,2019</option>
                        <option value="16-3">March 16,2019</option>
                    </select>

                    <select name="hour">
                        <option value="" disabled selected>TIME</option>
                        <option value="09-00">09:00 AM</option>
                        <option value="12-00">12:00 AM</option>
                        <option value="15-00">03:00 PM</option>
                        <option value="18-00">06:00 PM</option>
                        <option value="21-00">09:00 PM</option>
                        <option value="24-00">12:00 PM</option>
                    </select>
                    <input placeholder="First Name" type="text" name="fName" required>
                    <input placeholder="Last Name" type="text" name="lName">
                    <input placeholder="Phone Number" type="text" name="pNumber" required>
                    <input placeholder="email" type="email" name="email" required>
                    <input type="hidden" name="movie_id" value="<?php echo $id; ?>">



                    <button type="submit" value="save" name="submit" class="form-btn">Food Request</button>

                </form>
            </div>
        </div>
    </div>
    </div>
   
</body>

</html>