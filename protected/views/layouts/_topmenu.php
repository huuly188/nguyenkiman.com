<div id="top_menu" class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo Yii::app()->createUrl("album"); ?>">An An Cute</a>
        </div>
        <div class="navbar-collapse collapse">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array('label' => 'Album ảnh', 'url' => array('/album')),
//                    array('label' => 'Video', 'url' => array('/video')),
                ),
                'htmlOptions' => array(
                    'class' => 'nav navbar-nav',
                ),
            ));
            ?>
            <div id="counter" style="height: 50px; line-height: 50px;" class="pull-right"></div>
        </div>
    </div>
</div>