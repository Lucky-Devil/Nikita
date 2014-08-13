<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
<style type="text/css">

    .game-form {
        width:250px;
        float:left;
        text-align:center;
        margin:5px;
    }

        .game-form img {
            margin:5px;
        }

    .clear {
        clear:both;
    }


</style>
<div id="cat_button">
    <?
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$GameCategory,
        'enableSorting' => false,
        'itemView'=>'_cat_game',
        'template' => '{items}{pager}'
    ));
    ?>
</div>
<div id="games_of_the_categories">
    <?
    $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$NewGames,
        'enableSorting' => false,
        'itemView'=>'_game',
        'template' => '{items}{pager}'
    ));
    ?>
</div>




