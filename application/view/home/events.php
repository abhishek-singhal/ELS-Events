<link type="text/css" rel="stylesheet" href="<?php echo URL;?>css/events.css">
<section id="explore">
	<div class="container">
		<div class="span7">
			<div class="widget stacked widget-table action-table">
				<div class="widget-content">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Event Name</th>
								<th>Server</th>
								<th>Source</th>
								<th>Destination</th>
								<th>Time</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php date_default_timezone_set('UTC');?>
							<?php foreach($events as $event){?>
							<tr>
								<td><?php echo $event->event_name;?></td>
								<td><?php echo $event->server;?></td>
								<td><?php echo $event->source;?></td>
								<td><?php echo $event->destination;?></td>
								<td><?php echo (date("Y-m-d H:i", $event->time));?> GMT</td>
								<td><a href="<?php echo $event->event_page;?>" target="_blank"><button class="event_button">More Info</button></a></td>
							</tr>
							<?php }?>
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
	<br><br><br><br><br><br><br><br><br>
	</div>
</section>