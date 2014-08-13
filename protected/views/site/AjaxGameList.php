<?
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$data,
    'enableSorting' => false,
    'itemView'=>'_game',
    'template' => '{items}{pager}'
));
?>
