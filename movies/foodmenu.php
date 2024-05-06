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
    <section class="food1">
        <div class="container">
            <div class="CARD-container">
                <div class="card">
                    <img src="upload/FOOD/CB CHICKEN BURGER(1)(1).png" alt="">
                    <div class="card-content">
                        <h2>HOT_FOOD</h2>
                        <div class="card-body">
                            <H3>CB CLASSIC CHICKEN BURGER</H3>
                            <H4>95.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/CHEESYHOTDOG.jpg" alt="">
                    <div class="card-content">
                        <h2>HOT_FOOD</h2>

                        <div class="card-body">
                            <H3>CHEESYHOTDOG</H3>
                            <H4>95.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/HOT CHOCOLATE.jpg" alt="">
                    <div class="card-content">
                        <h2>JUICE</h2>

                        <div class="card-body">
                            <H3>HOT CHOCOLATE</H3>
                            <H4>25.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/JUICE.jpg" alt="">
                    <div class="card-content">
                        <h2>JUICE</h2>

                        <div class="card-body">
                            <H3>MANGO JUICE</H3>
                            <H4>15.00 EGP</H4>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="upload/FOOD/MILKSHAKE.jpg" alt="">
                    <div class="card-content">
                        <h2>JUICE</h2>

                        <div class="card-body">
                            <H3>MILKSHAKE</H3>
                            <H4>25.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/AMRICANO.jpg" alt="">
                    <div class="card-content">
                        <h2>JUICE</h2>

                        <div class="card-body">
                            <H3>AMRICANO</H3>
                            <H4>15.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/CARAMEL POPCORN.png" alt="">
                    <div class="card-content">
                        <h2>Snacks</h2>

                        <div class="card-body">
                            <H3>CARAMEL POPCORN</H3>
                            <H4>25.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/NACHOS.jpg" alt="">
                    <div class="card-content">
                        <h2>Snacks</h2>

                        <div class="card-body">
                            <H3>NACHOS</H3>
                            <H4>20.00 EGP</H4>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="upload/FOOD/cutton candy.jpg" alt="">
                    <div class="card-content">
                        <h2>Snacks</h2>

                        <div class="card-body">
                            <H3>cutton candy</H3>
                            <H4>20.00 EGP</H4>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="upload/FOOD/CRUNCHY CHEETOS.jpg" alt="">
                    <div class="card-title">
                        <h2>Snacks</h2>

                        <div class="card-body">
                            <H3>CRUNCHY CHEETOS</H3>
                            <H4>20.00 EGP</H4>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </section>





    <section class="food2">

        <div class="FOOD-form-container form">
            <form action="verify.php" method="POST">
                <select name="theatre" required>
                    <option value="" disabled selected>THEATRE</option>
                    <option value="">City Centre Alexandria</option>
                    <option value="">City Centre Almaza</option>
                    <option value="">Mall of Egypt</option>
                </select>
                <select name="HOT_FOOD">
                    <option value="" disabled selected>HOT_FOOD</option>
                    <option value="CB CHICKEN BURGER">CB CHICKEN BURGER</option>
                    <option value="CHEESYHOTDOG">CHEESYHOTDOG</option>
                </select>

                <select name="DRINK">
                    <option value="" disabled selected>DRINK</option>
                    <option value="MILK SHAKE">MILK SHAKE</option>
                    <option value="AMRICANO">AMRICANO</option>
                    <option value="HOT CHOCOLATE">HOT CHOCOLATE</option>
                    <option value="JUICE">JUICE</option>
                </select>
                <select name="Snacks">
                    <option value="" disabled selected>Snacks</option>
                    <option value="CARAMEL POPCORN">CARAMEL POPCORN</option>
                    <option value="CRUNCHY CHEETOS">CRUNCHY CHEETOS</option>
                    <option value="NACHOS">NACHOS</option>
                    <option value="cutton candy">cutton candy</option>
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
    </section>

</body>

</html>