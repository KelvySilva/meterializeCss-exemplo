
	<script src="<?=$url?>js/jquery-3.2.1.min.js"></script>
    <!--
    <script src="<?=$url?>js/bootstrap.min.js"></script>    
	<script src="<?=$url?>js/tether.min.js"></script>  
-->


    <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
  
<script>
 

  // Or with jQuery

	
  
   $(document).ready(function(){
    $('#default').carousel();
  });
  
 $('#full').carousel({
    fullWidth: true,
	indicators: true
  });
  $('#next').click(function(e){
	  e.preventDefault();
	  e.stopPropagation();
	  $('#full').carousel('next');
   });
   
    $('#prev').click(function(e){
	  e.preventDefault();
	  e.stopPropagation();
	  $('#full').carousel('prev');
   });
        
		$(document).ready(function(){
    $('#default2').carousel();
  });
  
 $('#full2').carousel({
    fullWidth: true
  });
  $(document).ready(function(){
    $('#default3').carousel();
  });
  
 $('#full3').carousel({
    fullWidth: true
  });

</script>	

<script>
 $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  

</script>
<script>
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  
  $('.dropdown-trigger').dropdown();
  
   $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
        
		 $(document).ready(function(){
    $('.tabs').tabs();
  });
   $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });
</script>


</body>
</html>