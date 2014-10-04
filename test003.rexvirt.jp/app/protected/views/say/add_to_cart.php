<h1>your cart </h1>
<?php
 foreach($books->items as $item){
	echo '<li>' .CHtml::encode($item->title).'</li>';
 }
?>
