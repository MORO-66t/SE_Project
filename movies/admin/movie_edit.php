<?php
	include("include/header.php");
	include("../include/config.php");
	include("../Models/Movie.php");
	$id=$_GET['id'];
	$movie_ed=new Movie($id);

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Movies</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
	<div class="card-header py-3">
	  <h6 class="m-0 font-weight-bold text-primary">Edit Movie</h6>
	</div>
	<div class="card-body">
		<form action="../Models/Movie.php?ed=1&bd=<?php echo $movie_ed->getMovieId(); ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Movie Name </label>
				<input type="text" class="form-control" name="mnm" value="<?php echo  $movie_ed->getMovieName(); ?>" required>
			</div>
			<div class="form-group">
				<label>Release Date</label>
				<input type="date" class="form-control" name="rdate" value="<?php echo $movie_ed->getMovieDate(); ?>" required>
			</div>
			<div class="form-group">
				<label>Cast Name</label>
				<input type="text" class="form-control" name="cnm" value="<?php echo $movie_ed->getMovieCast(); ?>" required>
			</div>
			<div class="form-group">
				<label>Director Name</label>
				<input type="text" class="form-control" name="dnm" value="<?php echo $movie_ed->getMovieDirector(); ?>" required>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="des" required><?php echo $movie_ed->getMovieDescription(); ?>    </textarea>
			</div>

			<div class="form-group">
				<label>Movie Banner</label>
				<img src="../upload/<?php echo $movie_ed->getMovieBanner(); ?>" width="90px" height="90px">
				<input type="file" class="form-control" name="banner" value="<?php echo $movie_ed->getMovieBanner(); ?>" required>
				
			</div>
			    <input type="hidden" name="bd" value ="<?php $movie_ed->getMovieId(); ?>" >
				<input type="hidden" name="ed" value ="1" >
			
			<input type="submit" class="btn btn-success btn-sm" value="Submit">
			<!-- <a href="movie_disable.php?id=<php echo $movie_ed->getMovieId(); ?>" class="btn btn-danger btn-sm">Disable</a> -->
		</form>
	</div>
  </div>

</div>
<!-- /.container-fluid -->
<?php
	include("include/footer.php");
?>