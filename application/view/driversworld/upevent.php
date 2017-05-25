<div class="content-wrapper">
	<section class="content-header">
		<h1>Upcoming Events<small></small></h1>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Event Details</h3>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-bordered">
							<tr>
								<th>ID</th>
								<th>Event Name</th>
								<th>Server</th>
								<th>Source</th>
								<th>Destination</th>
								<th>Time</th>
								<th>Trailer</th>
								<th>Route Map</th>
								<th>ETS2C.COM</th>
								<?php if($rank>4){?>
								<th></th>
								<?php }?>
							</tr>
							<?php foreach($fetch_events AS $fetch_event){?>
							<tr>
								<td><?php echo $fetch_event->event_id;?></td>
								<td><?php echo $fetch_event->event_name;?></td>
								<td><?php echo $fetch_event->server;?></td>
								<td><?php echo $fetch_event->source;?></td>
								<td><?php echo $fetch_event->destination;?></td>
								<td><?php echo (date("F j, Y",$fetch_event->time)) . ' ' .(date("H:i", $fetch_event->time));?> GMT</td>
								<td><?php echo $fetch_event->trailer;?></td>
								<td></td>
								<td><a href="<?php echo $fetch_event->event_page;?>" target="_blank"><i class="fa fa-external-link"></i></a></td>
								<?php if($rank==9 || $rank>12){?>
								<td><a href="<?php echo URL . 'driversworld/delevent/' . $fetch_event->event_id;?>" title="Delete"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a></td>
								<?php }}?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>