<?php

//   $this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$data,
//	'itemView'=>'_view',
//));
?>


<ul>
  <?php
  /**
   * kategóriák listázása menühöz
   */
  foreach($kategoriak as $kategoria){
        if($kategoria['id'] != $kateg_id) {
            echo '<li>'.CHtml::link($kategoria['nev'],array('article/index','kateg_id'=>$kategoria['id'])).'</li>';
        }else{
            echo '<li>'.$kategoria['nev'].'</li>';
        }
  }
 ?>
</ul>

<?php foreach($datas as $data)
{
    $this->renderPartial('_view',array('data'=>$data));
}
?>

