<?php
    echo CHtml::ajaxButton ($data->name,
        CController::createUrl('site/AjaxGetGamesForCategory',array('category_games' => $data->id,'sort' => $data->sort,'how_to_sort' => $data->how_to_sort)),
            array(
                'beforeSend' => "function(){ $('games_of_the_categories').fadeOut(); }",
                'success' => "function(data){
                    $('#games_of_the_categories').hide().html(data).delay(400).fadeIn(500);
                    for(i=0; i< $('#cat_button input').length; ++i) $('#cat_button input').removeAttr('disabled');
                    $('#cat-button-".$data->id."').attr({'disabled' : 'true'});
                }"
            ),
            array('id' => 'cat-button-'.$data->id)
        );
?>