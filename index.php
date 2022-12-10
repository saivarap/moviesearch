<!doctype html>
<html lang="en">
<style>

.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
.carousel .item {
  height: 300px;
}


img {
  display: block;
  max-width: 100%;
  height: 10%;
}
</style>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques{
            min-height: 433px;
        }
    </style>
    <title>welcome to online Movie Library</title>
</head>

<body>
    <?php include 'dbconnect.php';?>
    <?php include 'navbar.php';?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" carousel-control-width:15%;>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100  h-10" src="banner.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      <div class="w3-display-top w3-center">
    <span class="w3-text-white" style="font-size:60px">welcome to online Movie Library</span>
  </div>
    
    <p>search with Movie name</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-10" src="banner.jpg" alt="Second slide">
       <div class="carousel-caption d-none d-md-block">
       <div class="w3-display-top w3-center">
    <span class="w3-text-white" style="font-size:60px">welcome to online Movie Library</span>
  </div>
   
    <p>search with Movie name</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-10" src="banner.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
       <div class="w3-display-top w3-center">
    <span class="w3-text-white" style="font-size:60px">welcome to online Movie Library</span>
  </div>
    
    <p>search with Movie name</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <!-- Category container starts here -->
 <div class="container my-4">
 <form class="d-flex"name="formcontact1" action="#">
<input
class="form-control me-2"
type='text'
name='email'
id='email'
size="36"
placeholder="Your search with Movie name"/>
<input
class="btn btn-outline-success"
   type="button"
   name="submit"
   value="SUBMIT"
   onclick="ValidateEmail()"
/>
</form>

 <div>
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title;?></h1>
            <p class="lead">  <?php echo $desc;?></p>
            <hr class="my-4">
            <div id="result"><div>
           
        </div>
    </div>

     <?php 
    //if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
   
    echo '<div class="container">
        <h1 class="py-2">Post a Comment</h1> 
        <form action= "'. $_SERVER['REQUEST_URI'] . '" method="post"> 
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Type your comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                <input type="hidden" name="sno" value="'. $_SESSION["sno"]. '">
            </div>
            <button type="submit" class="btn btn-success">Post Comment</button>
        </form> 
    </div>';
   
?>
    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
var apikey="b0202a42"
    function ValidateEmail(){
        
        var result=""
        var movie=document.getElementById("email").value;  
        var url= "https://www.omdbapi.com/?apikey="+apikey
        $.ajax({
            method:'GET',
            url:url+"&t="+movie,
            success:function(data){ 
                console.log(data)
                console.log(movie)
                console.log(data.Poster.toLowerCase())
                var pos=data.Poster
                result=`
                
<img style="float:left" class="img-thumnail" width= "200" height="200" src="${data.Poster}"/>
<br></br><br></br><br></br>
<div class="popup" onclick="myFunction()">
<button class="btn btn-outline-success" type="submit">Add to watchlist</button>
  <span class="popuptext" id="myPopup">A Simple Popup!</span>
</div>

<br></br>
<br></br><br></br><br></br>
<h2 class="w3-center w3-padding-5">${data.Title}</h2>
<h2 class="w3-center w3-padding-6">${data.Year}</h2>
<h2 class="w3-center w3-padding-6">${data.Rated}</h2>
<h2 class="w3-center w3-padding-6">${data.Released}</h2>
<h2 class="w3-center w3-padding-6">${data.Runtime}</h2>
<h2 class="w3-center w3-padding-6">${data.Genre}</h2>
<h2 class="w3-center w3-padding-6">${data.Director}</h2>
<h2 class="w3-center w3-padding-6">${data.Writer}</h2>
<h2 class="w3-center w3-padding-6">${data.Actors}</h2>
<h2 class="w3-center w3-padding-6">${data.Plot}</h2>



                `;
                $("#result").html(result)
                }
            })
        }

   
function myFunction() {
  alert("added");
}
function smyFunction() {
  alert("logged in");
}
function pmyFunction() {
  alert("Registered");
}
</script>
</script>

</html>
