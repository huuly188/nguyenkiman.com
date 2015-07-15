<h2 class="header text-center"><?php echo $albumTitle; ?></h2>
<div class="social_like">
    <div class="fb-like" data-href="<?php echo Yii::app()->getRequest()->getHostInfo() . Yii::app()->request->requestUri; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
</div>
<div id="links" class="row">
    <?php
    foreach ($images as $image)
    {
        ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 photo_item">
            <a href="<?php echo $image->getContent(); ?>" title="<?php echo $image->getTitle(); ?>" data-gallery>
                <img class="img-responsive lazy" alt="<?php echo $image->getTitle(); ?>" data-original="<?php echo $image->getLargeThumb(); ?>" />
            </a>
            <!--<div><?php // echo $image->getTitle();             ?></div>-->
            <!--<div><?php // echo $image->getIdnum();             ?></div>-->
        </div>
        <?php
    }
    ?>
</div>
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Lui
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Tới
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="comment">
    <h2 class="header">Cô chú cho con nhận xét nhé</h2>
    <div class="comment_fb">
        <div class="fb-comments" data-href="<?php echo Yii::app()->getRequest()->getHostInfo() . Yii::app()->request->requestUri; ?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>   
    </div>
</div>

<script type="text/javascript">
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {
                    index: link,
                    event: event,
                    onopen: function () {
                        $('html').css('overflow-y', 'hidden');
                    },
                    onclose: function () {
                        $('html').css('overflow-y', 'scroll');
                    }
                },
        links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>