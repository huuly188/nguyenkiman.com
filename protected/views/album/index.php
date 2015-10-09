<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
        <h2 class="header text-center">Album ảnh của An An Cute</h2>

        <?php
        foreach ($albums as $album) {
            if ($album->getIdnum() != '6121673719667265377') {
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
        ?>
    </div>
    <div class="hidden-xs hidden-sm col-md-2 col-lg-2">
        <div id="filter_year">
            <h2 class="header text-center">07/2015</h3>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#filter_year").periodSelector({
            onMonthClick: function (month) {
                console.log(month);
            },
            onYearClick: function (year) {
                console.log(year);
            },
            months: [{year: 2015, month: 7},
                {year: 2014, month: 8},
                {year: 2014, month: 5},
                {year: 2015, month: 1},
                {year: 2015, month: 2},
                {year: 2015, month: 2}]
        });
    });
</script>