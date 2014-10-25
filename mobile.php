
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Takla Translator</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" />
		<link rel="stylesheet" href="css/style_2.css"/>
        <link href="http://mobifreaks.com/wp-content/demos/demo.css" rel="stylesheet" type="text/css" />
	</head>
	<body >

		<div class="wrap">
		
		<hr class="separator"/>	
		<div class="container">
			<div class="content">
				<article>
				<center><h1>Takla Translator</h1></center>
					<hr class="separator"/>
					
					<center>
					<h5>Normal banglish to Takla Banglish</h5>
					</center>
				

					<form action="" method="post" class="contact-form">

					    <div>
							<center><label for="Body"> Insert Your Banglish Language <span class="red">*</span></label></center>
							<textarea cols="40" rows="8" name="language" id="Body"></textarea>
						</div>
						<div>
						    <input type="submit" value="Translate" name="submit" />
					    </div>
					</form>
				</article>
			</div>
			<hr class="separator"/>
	
<center>
	

	<p>
	<?php

	if (isset($_POST['submit'])) {
		# code...
	$string = $_POST['language'];

	$t = array('e','E');
	$f = array('a','A');

	$string = str_replace($t, $f, $string);

	$target_words = array('i' , 'I' , 'j' , 'J','h','H','v','V' ,'u','U');
	$fill_up      = array('e','E','g' ,'G','','','b','B','o','O');

	$gone = str_replace($target_words,$fill_up, $string);
	echo '<center>';
	echo 'Translated Takla language:';
	echo '</center><br><br><br>';
	echo '<h2>';
	echo $gone;
	echo '</h2><br><br><br><br>';


	}

?>
</p>

</center>


		</div>
		<hr class="separator"/>


		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/slider.min.js"></script>
		<script>
		$(function () {
		
		  // Slideshow 1
		  $("#slider").responsiveSlides({
		    maxwidth: 800,
		    speed: 800
		  });
		
		});
		</script> 

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1695306097361316&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<center>
	
	<center><p>Developed By: <a href="https://www.facebook.com/aniruddha.chakraborty.5817">Aniruddha Chakraborty</a> </p>
		 <fb:subscribe layout="button_count" colorscheme="dark" href="https://www.facebook.com/aniruddha.chakraborty.5817"></fb:subscribe><br>

	</center>
	<br>
<div class="fb-share-button" data-href="http://3dmodelscene.com/app/" data-width="500" data-layout="button_count"></div>
	<p>Inspired By: <a href="https://www.facebook.com/MuradaTakala"> Murad Takla </a></p>
	<p>Powerd By : PHP</p>


</center>

	
	</body>


</html>
