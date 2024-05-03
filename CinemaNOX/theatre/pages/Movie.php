<?php
// Assume you have a Movie class defined elsewhere

 class Movie {
    private $movieId ;
    private $MOvie_title;
    private $MOvie_show;
    private $Discription;
    private $Language;
    private $NumberOfSeats;
    private $mon = 0;


     public function __construct($mon=1){
        $this->$mon=$mon;
     }
     public function getmon(){
        return 1;
     }
    
    public function deleteMovie($movieId) {
        session_start();
        include('../../config.php');

        // $mid=$_GET['mid'];
        mysqli_query($con,"delete  from tbl_movie where movie_id='$movieId'");
        $_SESSION['success']="Movie deleted  successfully";
        header("location:index.php");
        // // Delete movie from the database
        // $this->db->query("DELETE FROM tbl_movie WHERE movie_id = :mid", ['mid' => $movieId]);
        // // Set a success message (you can handle this differently)
        // $_SESSION['success'] = "Movie Deleted";
    }
    public function viewMovies() {
        $mo_del = new Movie();
        include('../../config.php');
        $qry7=mysqli_query($con,"select * from tbl_movie");
        if(mysqli_num_rows($qry7))
        {
        while($c=mysqli_fetch_array($qry7))
        {
        ?>
        <li>
        <!-- drag handle -->
            <span class="handle">
                <i class="fa fa-film"></i>
                
            </span>
        <!-- checkbox -->
        <!-- todo text -->
        <span class="text"><?php echo $c['movie_name'];?></span>
        <!-- Emphasis label -->
        
        <!-- General tools such as edit or delete-->
        <div class="tools">
            
            <button class="fa fa-trash-o" onclick="del(<?php echo $c['movie_id'];?>)"></button>
        </div>
        </li>
        <?php
            }}
            
    }
    public function AddMovie() {
        session_start();
        include('../../config.php');
        extract($_POST);
        
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        
        $flname="images/".basename($_FILES["image"]["name"]);
        
        mysqli_query($con,"insert into  tbl_movie values(NULL,'".$_SESSION['theatre']."','$name','$cast','$desc','$rdate','$flname','$video','0')");
        
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        
        $_SESSION['success']="Movie Added";
        header('location:add_movie.php');
    }

}
$mov = new Movie(1);
if (isset($_GET['mid'])){
$mov->deleteMovie($mid);
}
else{
if ($mov->getmon()== 0)
$mov->AddMovie();
else header("location:process_add_movie.php");
}

// Usage example
// include('../../config.php'); // Assuming this sets up your database connection

// Create an instance of the Movie class
// $movieHandler = new Movie($con);

// // Get the movie ID from the URL parameter
// $movieId = $_GET['mid'];

// // Delete the movie
// $movieHandler->deleteMovie($movieId);

// // Redirect to the movie list page
// header("location:view_movie.php");

?>
