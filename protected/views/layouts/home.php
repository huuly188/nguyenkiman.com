<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php $this->renderPartial('//layouts/_head'); ?>
    </head>
    <body>
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
