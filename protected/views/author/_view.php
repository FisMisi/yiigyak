
<h3><?php echo CHtml::link($data->name,array('author/view','id'=>$data->id));?></h3>
<p><smail><?php echo $data->created_at; ?></smail></p>
<p><?=$data->bio?></p>
