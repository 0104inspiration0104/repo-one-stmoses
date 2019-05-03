<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--meta name = "format-detection" content = "telephone=no" /-->
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/sForm.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.1/materia/bootstrap.min.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
		<script src="src2/readmore.js"></script>
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

		<style>
			body { min-height: 	100vh; background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%); }
			.container { font-size: 	1.5rem; margin: 	150px auto; }
		</style>

			<title>
				Read More/Read Less Buttons Demo
			</title>

	</head>

	<body class="content" id="top"  style="background-color:#3366CC">

<?php include 'header.php';?>


				<div class="container">
					<h1>Read More/Read Less Buttons</h1>
						<article>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum metus ac semper finibus. Praesent vulputate augue ac tempus congue.
								Curabitur in sapien semper, tristique arcu eget, pharetra risus. Donec tempus aliquet purus eu lobortis.
								Etiam ac finibus felis. Integer congue sit amet neque sit amet pellentesque. Donec cursus interdum rutrum.
								Interdum et malesuada fames ac ante ipsum primis in faucibus.
							</p>
							<p class="read-more">Praesent luctus at erat at sagittis.
								Etiam posuere, erat nec laoreet ornare, odio dui mattis nisl, convallis semper ligula lectus eu turpis.
								Phasellus pharetra risus tortor, eget fringilla tortor laoreet at. Quisque egestas tristique dui. Mauris non iaculis ex.
								Ut pellentesque, massa ut molestie egestas, tortor leo imperdiet sem, vitae malesuada nibh dolor in magna. Etiam pulvinar pharetra dolor, vel dapibus ipsum commodo eget.
								Praesent turpis odio, suscipit ut ullamcorper vel, finibus at ligula. Phasellus dolor lectus, molestie a velit sed, iaculis rhoncus risus.
								Ut id pellentesque erat, quis elementum ligula. Donec dignissim diam sem, a bibendum erat mattis quis. Vivamus id erat dui. Vestibulum sollicitudin ac justo at lacinia.
							</p>
						</article>
					</div>


	
			<script>
				$(function(){
					$(".read-more").readmore({
						buttonClasses: "btn btn-primary",
					});
				});

			</script>

			<script type="text/javascript">

				  var _gaq = _gaq || [];
				  _gaq.push(['_setAccount', 'UA-36251023-1']);
				  _gaq.push(['_setDomainName', 'jqueryscript.net']);
				  _gaq.push(['_trackPageview']);

				  (function() {
				    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();

			</script>
	</body>
</html>
