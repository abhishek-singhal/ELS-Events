<div class="content-wrapper">
	<section class="content-header">
		<h1>View Applications<small></small></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
			
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Applications</h3>
						<div class="box-tools">
							<ul class="pagination pagination-sm no-margin pull-right">
								<form method="POST" action=""><button type="submit" name="new" class="btn btn-warning btn-xs">New</button>
								<button type="submit" name="pending" class="btn btn-primary btn-xs">Test Pending</button>
								<button type="submit" name="dpending" class="btn btn-info btn-xs">Decision Pending</button>
								<button type="submit" name="accept" class="btn btn-success btn-xs">Accepted</button>
								<button type="submit" name="reject" class="btn btn-danger btn-xs">Rejected</button>
								<button type="submit" name="all" class="btn btn-default btn-xs">All</button></form>
							</ul>
						</div>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-bordered">
							<tr>
								<th>App ID</th>
								<th>Name</th>
								<th>Submission Date</th>
								<th>Status</th>
								<th>Examiner</th>
								<th></th>
							</tr>
							<?php date_default_timezone_set('UTC');?>
							<?php foreach($apps AS $app){?>
							<?php $r = $app->result;?>
							<?php if($r>0){?>
							<?php $examiner_name = $this->model->fetchUser($app->examiner_id)->steam_name;?>
							<?php }?>
							<tr>
								<td><?php echo $app->app_id;?></td>
								<td><?php echo $this->model->fetchUser($app->user_id)->steam_name;?></td>
								<td><?php echo (date("F j, Y",$app->time));?></td>
								<td><?php if($r == 0){?><span class="label label-warning">New</span><?php }else if($r == 1){?><span class="label label-primary">Test Pending</span><?php }else if($r == 2){?><span class="label label-success">Accepted</span><?php }else if($r == 3){?><span class="label label-danger">Rejected</span><?php }else if($r == 4){?><span class="label label-info">Decision Pending</span><?php }?></td>
								<td><?php if($r>0){ echo $examiner_name;}?></td>
								<td><a href="<?php echo URL;?>driversworld/app/<?php echo $app->app_id;?>"><button class="btn btn-primary btn-xs"><i class="fa fa-envelope-open-o"></i></button></a></td>
							</tr>
							<?php }?>
						</table>
					</div>
				</div>
			
			</div>
		</div>
	</section>
</div>