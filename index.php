<?php include 'header.php';?>

<body>
	<?php include 'navbar.php';?>
	<?php include 'menu-tab.php';?>
	
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class = "col-md-9 col-lg-9 image-content">
					<div class = "widget">
						<div class = "widget-content">
							<?php include 'slider.php';?>
						</div>						
					</div>				
				</div>
				<?php include('right-sidebar.php');?>		
			
			
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-xs-12 col-sm-12">
			
			<div class = "class = "col-lg-12">
				<h1 class = "page-title center">This site is accessible to</h1>
			</div>
			<div class = "row">
				<div class = "col-lg-12 center">
					<p class = "center pag-title">&nbsp;</p>
				</div>
			</div>
				<div class = "col-lg-4 col-md-4 center">
					<a href = ""><i class = "fa fa-windows fa-5x use"></i>
					<p class = "body center">Microsoft Windows</p>
					</a>
				</div>	
				<div class = "col-lg-4 col-md-4 center">
					<a href = ""><i class = "fa fa-android fa-5x use android"></i>
					<p class = "body center">Android</p>
					</a>
				</div>	
				<div class = "col-lg-4 col-md-4 center">
					<a href = ""><i class = "fa fa-apple fa-5x use apple"></i>
					<p class = "body center">Mac Os</p>
					</a>
				</div>	
			</div>
		</div>	
	<div class  = "content">
			<div class = "col-lg-12 col-sm-12 col-md-12 col-xs-12 last-row">
			<div class = "class = "col-lg-12">
				<h1 class = "page-title center" style = "padding-top:50px;">Company Statement</h1>
			</div>
				<div class = "col-lg-4 col-md-4 thumb">
					<img src = "img/77.jpg">		
				</div>
				<div class = "col-sm-8 col-lg-6 col-md-6">
					<h2 class = "welcome">The food that makes you feel good</h2>
					<p class = "body-text">The Catering Services offers great satisfaction and awesome experience not only in food but in all of their services that guarantee the customers needs. 
					Through the great effort of their kitchen personnel and their catering crews they are successfully giving the services and a high quality value of foods that suites to all occasions and theme.
					</p>
					<br/>
					<p class = "body-text">
					Wanting to give their clients service and a catering experience like no other, Chimney's Catering has always strived to provide something new to their patrons. This is evident in the constantly expanding menus and packages that they offer.
“We attend seminars and trainings in order to see the newest trends that we can use here in the country,”Chimney Catering believes that we have to continuously learn new approaches in providing for the needs
					</p>
				</div>
			</div>
		</div>
		
		
		
<?php include 'footer.php';?> 	
<?php include 'script.php';?>
 <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
</body>
</html>



