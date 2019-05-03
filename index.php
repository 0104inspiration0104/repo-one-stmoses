<!DOCTYPE html>
<html lang="en">

<?php include'readmore.php';?>
	
	<body class="page1" id="top" style="background-color: #3399CC;">
<!--==============================header Starts=================================-->

									
									

  
										
									
				
									
								
<?php include'header.php';?>



<!--==============================header Ends=================================-->


				<div class="fluidHeight container_12" style="background-color:#FFFFFF">
			<div class="sliderContainer">
				<div class="iosSlider">
					<div class="slider">
					
						<div class="item item1">
						
							<div class="inner">
								<div class="text1"><span>Our mission is to spread the Gosple <br>of our Lord Jesus Christ</span></div>
							</div>
							
						</div>
						
						
						<div class="item item2">
						
							<div class="inner">
								<div class="text1"><span>Our vision remains our first priority in spreading <br>the good news of Gosple, and having eternal home</span></div>
						
							</div>				
						</div>
						
						<div class="item item3">
							<div class="inner">
								<div class="text1"><span>Our mission is to spread the Gosple <br>of our Lord Jesus Christ</span></div>
							</div>
						</div>
						
						
						<div class="item item4">
							<div class="inner">
								<div class="text1"><span>Our vision remains our first priority in spreading <br>the good news of Gosple, and having eternal home</span></div>
							</div>
						</div>

						<div class="item item5">
							<div class="inner">
								<div class="text1"><span>Our mission is to spread the Gosple <br>of our Lord Jesus Christ</span></div>
							</div>
						</div>
						
						
						<div class="item item6">
							<div class="inner">
								<div class="text1"><span>Our vision remains our first priority in spreading <br>the good news of Gosple, and having eternal home</span></div>
							</div>
						</div>
						
						<div class="item item7">
							<div class="inner">
								<div class="text1"><span>Our mission is to spread the Gosple <br>of our Lord Jesus Christ</span></div>
							</div>
						</div>
						<div class="item item8">
							<div class="inner">
								<div class="text1"><span>Our vision remains our first priority in spreading <br>the good news of Gosple, and having eternal home</span></div>
							</div>
						</div>
						
						<div class="item item9">
							<div class="inner">
								<div class="text1"><span>Our mission is to spread the Gosple <br>of our Lord Jesus Christ</span></div>
							</div>
						</div>
						
						<div class="item item10">
							<div class="inner">
								<div class="text1"><span>Our vision remains our first priority in spreading <br>the good news of Gosple, and having eternal home</span></div>
							</div>
						</div>
						
						<div class="item item11">
							<div class="inner">
								<div class="text1"><span>Our mission is to spread the Gosple <br>of our Lord Jesus Christ</span></div>
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
		
		
		<div class="content">
			<div class="container_12" style="background-color:#FFFFFF;">
				<div class="grid_6">
				
					<h2 style= "color:#000000; text-align: center;">Our Mission</h2>
					<img src="images/cns8 (3).Jpg" alt="" class="img_inner fleft">
					<div class="container">
						
						<p class="col2">
						Our mission is to spread the Gosple of our Lord Jesus Christ which He has given us the mandate to do so, as it was also carried out by the founder of this great church, Saint Moses Orimolade Tunolase. 

						<p class="read-more1">How it all started..
Orimolade started his missionary work as an itinerant preacher in Ikare (his Yoruba town of birth) with no formal education. After his baptism by Rev. Ganyes in 1912, he started to evangelise and pray for people, from where he got the nickname “Baba Aladura” (Praying Father), which is still used to identify the head of the C & S sect.</p>
						 <br>
						
					</div>
					<div class="clear"></div>
				</div>
				
				
				<div class="grid_5 prefix_1">
					<h2 style= "color:#000000; text-align: center;">Our Vision</h2>
					
					<div class="rel1">
						<p class="col2">
						Our vision remains our first priority in spreading the good news of Gosple, and We have strong faith that through prayer, all yokes would be broken and by doing the will of the father, our eternal home is secured

						<p class="read-more">How it all started..
Orimolade started his missionary work as an itinerant preacher in Ikare (his Yoruba town of birth) with no formal education. After his baptism by Rev. Ganyes in 1912, he started to evangelise and pray for people, from where he got the nickname “Baba Aladura” (Praying Father), which is still used to identify the head of the C & S sect.</p>
						</p>
						
					</div>
					<!--a href="#" class="btn">Learn More</a-->
				</div>
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