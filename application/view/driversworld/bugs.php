<div class="content-wrapper">
	<section class="content-header">
		<h1>View Bugs<small></small></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Bugs/Feedback</h3>
						<div class="box-tools">
							<ul class="pagination pagination-sm no-margin pull-right">
								<form method="POST" action="">
								<button type="submit" name="unsolved" class="btn bg-red btn-xs">Unsolved</button>
								<button type="submit" name="new" class="btn bg-yellow btn-xs">New</button>
								<button type="submit" name="solved" class="btn bg-green btn-xs">Solved</button>
								<button type="submit" name="not" class="btn bg-blue btn-xs">Not Required</button>
								<button type="submit" name="all" class="btn btn-default btn-xs">All</button>
								</form>
							</ul>
						</div>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-bordered">
							<tr>
								<th>Report ID</th>
								<th>Name</th>
								<th>Topic</th>
								<th>Status</th>
								<th></th>
							</tr>
							<?php foreach($fetchBugs AS $fetchBug){?>
							<tr>
							<td><?php echo $fetchBug->feedback_id;?></td>
							<td><?php echo $this->model->fetchUser($fetchBug->user_id)->steam_name;?></td>
							<td><?php echo $fetchBug->topic;?></td>
							<td><?php if($fetchBug->status==0){?><span class="label label-warning">New</span><?php }else if($fetchBug->status==1){?><span class="label label-danger">Unsolved</span><?php }else if($fetchBug->status==2){?><span class="label label-success">Solved</span><?php }else if($fetchBug->status==3){?><span class="label label-primary">Not Required</span><?php }?></td>
							<td><a href="<?php echo URL . 'driversworld/bug/' . $fetchBug->feedback_id;?>"><button class="btn bg-grey btn-xs"><i class="fa fa-bug"></i></button></a></td>
							</tr>
							<?php }?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>