<div class="game-form">
    <img width="250px" src="<?php echo Chtml::encode($data->link_image); ?>" />
    <?php echo Chtml::encode($data->name); ?><br>
    <?php
        if($data->discount != 0)
        {
            $discount = ($data->price / 100) * $data->discount;
            echo "Без скидки:".$data->price."<br />Цена со скидкой: ";
            echo $data->price - $discount;
            echo '<br/>Процент скидки:'.$data->discount.'%';
        }
        else echo $data->price;
    ?>
</div>