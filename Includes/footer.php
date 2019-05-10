
		<!-- Footer -->
		<footer class="page-footer font-small special-color-dark pt-4">

		  <!-- Footer Elements -->
		  <div class="container">

		    <!-- Social buttons -->
		    <ul class="list-unstyled list-inline text-center">
		    	<!--Facebook-->
		      <li class="list-inline-item">
		        <a class="btn-floating btn-fb mx-1">
		          <i class="fab fa-facebook-f"> </i>
		        </a>
		      </li>
		      <!--Twiter-->
		      <li class="list-inline-item">
		        <a class="btn-floating btn-tw mx-1">
		          <i class="fab fa-twitter"> </i>
		        </a>
		      </li>
		      <!--Google+-->
		      <li class="list-inline-item">
		        <a class="btn-floating btn-gplus mx-1">
		          <i class="fab fa-google-plus-g"> </i>
		        </a>
		      </li>
		      <!--Linkdin-->
		      <li class="list-inline-item">
		        <a class="btn-floating btn-li mx-1">
		          <i class="fab fa-linkedin-in"> </i>
		        </a>
		      </li>
		      <!--Dribbble-->
		      <li class="list-inline-item">
		        <a class="btn-floating btn-dribbble mx-1">
		          <i class="fab fa-dribbble"> </i>
		        </a>
		      </li>
		    </ul>
		    <!-- Social buttons -->

		  </div>
		  <!-- Footer Elements -->

		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-3">
		  		&copy;<?php echo date('Y'); ?> Copyright <?php echo "companyName"; ?>
		  </div>
		  <!-- Copyright -->

		</footer>
		<!-- Footer -->


	</div><!--container-->





	<script src="node_modules\jquery\dist\jquery.slim.min.js"></script>
  
	<script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/main.js"></script>
	
	<script>
	
	function showNew(){
		$("#new").show(200);
		setTimeout(hideNew(), 500); 
	}
	function hideNew(){
		$("#new").hide(200);
		setTimeout(showNew(), 500); 
	}
	
 $(document).ready(function(){ 
	showNew();
  });
  
</script> 

  
</body>
</html>