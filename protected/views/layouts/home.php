<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php $this->renderPartial('//layouts/_head'); ?>
    </head>
    <body>
		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','//connect.facebook.net/en_US/fbevents.js');

		fbq('init', '447288965455829');
		fbq('track', "PageView");</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=447288965455829&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=1551369015136719&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <?php $this->renderPartial('//layouts/_topmenu'); ?>
        <div id="wrap_content">
            <div class="container">
                <?php echo $content; ?>
            </div>
        </div>
        <div class="flower_footer"></div>
        <a title="Back to top" href="#top" id="back_to_top"></a>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/anan1_0/js/jquery.min.js"></script>
        <!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/anan1_0/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/anan1_0/js/jquery.blueimp-gallery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/anan1_0/js/bootstrap-image-gallery.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/anan1_0/js/countup.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/anan1_0/js/jquery.lazyload.min.js"></script>
        <!--<script src="js/demo.js"></script>-->
        <script type="text/javascript">
    $(document).ready(function () {
        $("img.lazy").lazyload({
            effect: "fadeIn"
        });
        $("#back_to_top").hide();
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back_to_top').fadeIn();
            } else {
                $('#back_to_top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back_to_top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
        </script>
    </body> 
</html>
