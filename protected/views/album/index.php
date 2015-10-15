<div class="row">
    <h2 class="header text-center">Album ảnh của An An Cute</h2>
    <?php
    foreach ($albums as $album)
    {
        if ($album->getIdnum() != '6121673719667265377') //ko show album profile
        {
            if($album->getNumphotos() > 0){
            ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 album_item">
                <a href="<?php echo Yii::app()->createUrl("album/photo/albumid/" . $album->getIdnum()); ?>" title="<?php echo $album->getTitle(); ?>">
                    <img class="img-responsive lazy" data-original="<?php echo $album->getIcon(); ?>" alt="<?php echo $album->getTitle(); ?>" />
                </a>
                <p class="album_title"><a href="<?php echo Yii::app()->createUrl("album/photo/albumid/" . $album->getIdnum()); ?>"><?php echo $album->getTitle() . ' (' . $album->getNumphotos() . ')'; ?></a></p>
            </div>
            <?php
            }
        }
    }
    ?>
</div>