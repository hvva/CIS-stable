<?php
	session_start();
	if (!isSet($_SESSION['lang'])){
		$_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}
	include_once 'inc/common.php';
        $activePage = htmlspecialchars($_GET['p']);
	include 'inc/header.php';
	include 'inc/mainCarousel.php';
?>




    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/test.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>International</h2>
          <p class="customfont">The College of International Studies at Hallym University not only teaches cooperation and understanding between cultures, but also has staff from many different cultures and backgrounds.</p>
          <p><a class="btn btn-default" href="index.php?p=about&do=faculty" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/test2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Professional</h2>
          <p>Students who graduate from the College of International Studes at Hallym University are prepared to enter international marketing, cybercrime investigation or business.</p>
          <p><a class="btn btn-default" href="index.php?p=majors" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/test3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Cultural</h2>
          <p>The College of Internaional Studies at Hallym University strives for cultural understanding through immersion within South Korea and partner countries.</p>
          <p><a class="btn btn-default" href="index.php?p=sap" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr />

      <div class="row featurette">
        <div class="col-md-5">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-7">
          <img class="featurette-image img-responsive center-block" style="padding-top: 100px;" src="images/scholar.jpg" alt="International students" />
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


    <?php include 'inc/footer.php'; ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script>
	$('.carousel').carousel({
		interval: 4000
	});

	$('.navbar').affix({
  		offset: {
    			top: 100,
   		 bottom: function () {
     			 return (this.bottom = $('.footer').outerHeight(true))
    		}
  		}
	})
		$('#floatingLogo').affix({
  		offset: {
    			top: 100,
   		 bottom: function () {
     			 return (this.bottom = $('.footer').outerHeight(true))
    		}
  		}
	})

		$('#topRightLogo').affix({
  		offset: {
    			top: 100,
   		 bottom: function () {
     			 return (this.bottom = $('.footer').outerHeight(true))
    		}
  		}
	})

    $(document).ready(function(){
	
    });
    </script>
  </body>
</html>
