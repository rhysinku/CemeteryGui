
<html>
 <head>
  <title>Webslesson Tutorial | Facebook Style Header Notification using PHP Ajax Bootstrap</title>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="#">Webslesson Tutorial</a>
     </div>
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <span class="label label-pill label-danger count" style="border-radius:10px;">
        </span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>
     </ul>
    </div>
   </nav>
  </div>

   <div>
<form method="POST" action="imgupload.php" enctype="multipart/form-data">
<input type="file" name="img" required accept="image/png, image/gif, image/jpeg" >
<button type="submit" name="imgpass" > Submit</button>
</form>
   </div>

   </div>

   <div>
     <?php 
$conn = mysqli_connect("localhost","root", "", "cemetery2");
$sql = "SELECT * FROM imgup";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
  while ($imgs = mysqli_fetch_assoc($result))
  { ?>
    <h1> <?php echo $imgs['id'];?></h1>
    <h2> <?php echo $imgs['img'];?></h2>
    <img style="width: 100%;
			          height: 100%;"
        src="./assets/<?php echo $imgs['img'];?>">


<?php
  }
}
     ?>
  </body> 
</html>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"ajax.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 //load_unseen_notification();
 
//  $(document).on('click', '.dropdown-toggle', function(){
//   $('.count').html('');
//   load_unseen_notification('yes');
//  });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 1000);
 
});
</script>



<!-- <script>
$(document).ready(function(){
 
 setInterval(function(){//setInterval() method execute on every interval until called clearInterval()
  $('#load_posts').load("ajax.php").fadeIn("slow");
  //load() method fetch data from fetch.php page
 }, 1000);
 
});
</script> -->
