<div class="img">
	<div class="frame">
	<?php 
		$path=$_SERVER['DOCUMENT_ROOT'].'/inc/img/event_icons/';
		$img=(!empty($event->event_icon) && is_file($path.$event->event_icon)) ? escape($event->event_icon) : 'none.gif'; 
		?>
		<img src="/inc/img/event_icons/<?php echo $img ?>" alt="<?php echo escape($event->event_name); ?>"/>
	</div>
</div>