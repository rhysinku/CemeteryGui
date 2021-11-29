<footer></footer>



<script>

$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"adminphp/fetchnofitication.inc.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.counter').html(data.unseen_notification);
    }
   }
  });
 }
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 1000);
 
});

</script>

    
</body>
</html>