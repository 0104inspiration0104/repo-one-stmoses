<!DOCTYPE html>
<html lang="en">


	<?php include'readmore.php';?>
	<body class="page1" id="top" style="background-color:#3399CC;">
<!--==============================header Starts=================================-->
<?php include'header2.php';?>

<!--==============================header Ends=================================-->


				<div class="fluidHeight container_12" style="background-color:#FFFFFF">
			<div class="sliderContainer">
				<div class="iosSlider">
					<div class="slider">
					
						<div class="item item1">
						
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>OGO OLUWA BAND</strong></span></div>
							</div>
							
						</div>
						
						
						
						<div class="item item2">
						
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>IMOLE CHRIST BAND</strong></div>
						
							</div>				
						</div>
						
						<div class="item item3">
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>ATILEYIN JESU BAND</strong></span></div>
							</div>
						</div>
						
						
						<div class="item item4">
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>ALAAFIA BAND</strong></span></div>
							</div>
						</div>

						<div class="item item5">
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>OGO CHERUBIM BAND</strong></span></div>
							</div>
						</div>
						
						
						
						<div class="item item6">
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>IRAWO OWURO BAND</strong></span></div>
							</div>
						</div>
						
						<div class="item item7">
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>OBA LOLA BAND</strong></span></div>
							</div>
						</div>


						<div class="item item8">
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>DAVID BAND</strong></span></div>
							</div>
						</div>
						
						<div class="item item9">
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>BRIGADE BAND</strong></span></div>
							</div>
						</div>
						
						<div class="item item10">
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>MATA BAND</strong></div>
							</div>
						</div>
						
						<div class="item item11">
							<div class="inner">
								<div class="text1"><span style = "color:#fFF;"><strong>MARY BAND</strong></span></div>
							</div>
						</div>







						
					</div>
				</div>
				
				<div class="slideSelectors">
					<div class="item selected"></div>
					<div class="item"></div>
					<div class="item"></div>
					<div class="item"></div>
					<div class="item"></div>
					<div class="item"></div>
					<div class="item"></div>
					<div class="item"></div>
					<div class="item"></div>
					<div class="item"></div>
					<div class="item"></div>
				</div>
				
			</div>
		</div>
<!--==============================Content=================================-->
		
		
		
			<div class="container_12" style="background-color:#FFFFFF;">
				
					
						<br>
						<br>
					
					<div class="clear"></div>						
			</div>
			
			<div class="hor"></div>
			<!-- Footer -->
			
        <?php include'footer2.php';?>
										
<!--==============================footer=================================-->
		
		<script src="js/jquery.hoverdir.js"></script>
		<script>
		$(document).ready(function() {
		 $('.iosSlider').iosSlider({
			desktopClickDrag: true,
			snapToChildren: true,
			navSlideSelector: '.sliderContainer .slideSelectors .item',
			onSlideComplete: slideComplete,
			onSliderLoaded: sliderLoaded,
			onSlideChange: slideChange,
			scrollbar: false,
			autoSlide: true,
			autoSlideTimer: 3300,
			infiniteSlider: true
		 });
		});
		function slideChange(args) {
		 $('.sliderContainer .slideSelectors .item').removeClass('selected');
		 $('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
		}
		function slideComplete(args) {
		 if(!args.slideChanged) return false;
		 $(args.sliderObject).find('.text1, .text2').attr('style', '');
		 $(args.currentSlideObject).find('.text1').animate({
			right: '100px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 $(args.currentSlideObject).find('.text2').delay(200).animate({
			right: '70px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		}
		function sliderLoaded(args) {
		 $(args.sliderObject).find('.text1, .text2').attr('style', '');
		 $(args.currentSlideObject).find('.text1').animate({
			right: '100px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 $(args.currentSlideObject).find('.text2').delay(200).animate({
			right: '70px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 slideChange(args);
		}
		$(function() {
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
			});
		</script>

		
			</body>
</html>