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
    <title>ORDER FOOD</title>
</head>

<body>
    <section class="component">
        <h1>ORDER SNACKS AHEAD OF TIME</h1>
            <h2 class="highlight">Select Cinema</h2>
            <p>Select your cinema location and order your favourite food and drinks.</p>
            <label>
            <form action="foodmenu.php">    
                <select name="" required>
                    <option value="" disabled selected>Please select cinema * </option>.
                    <option value="">City Centre Alexandria</option>
                    <option value="">City Centre Almaza</option>
                    <option value="">Mall of Egypt</option>

                </select>
            </label>
            <button class="button" type="submit">Order Online</button>
            
        </form>

        </form>


    </section>


</body>

</html>