<div class="content-wrapper">
	<section class="content-header">
		<h1>View Profiles<small></small></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Profiles</h3>
						<div class="box-tools">
							<ul class="pagination pagination-sm no-margin pull-right">
								<form method="POST" action="">
								<button type="submit" name="founder" class="btn bg-fuchsia btn-flat btn-xs">Founder</button>
								<button type="submit" name="ceo" class="btn bg-orange btn-flat btn-xs">CEO</button>
								<button type="submit" name="director" class="btn bg-blue btn-flat btn-xs">Director</button>
								<button type="submit" name="manager" class="btn bg-green btn-flat btn-xs">Manager</button>
								<button type="submit" name="exam" class="btn bg-red btn-flat btn-xs">Recruitment Team</button>
								<button type="submit" name="event" class="btn bg-teal btn-flat btn-xs">Events Team</button>
								<button type="submit" name="media" class="btn bg-yellow btn-flat btn-xs">Media Team</button>
								<button type="submit" name="cc" class="btn bg-aqua btn-flat btn-xs">CC</button>
								<button type="submit" name="driver" class="btn bg-maroon btn-flat btn-xs">Driver</button>
								<button type="submit" name="friend" class="btn bg-purple btn-flat btn-xs">Friend</button>
								<button type="submit" name="guest" class="btn bg-olive btn-flat btn-xs">Guest</button>
								<button type="submit" name="all" class="btn btn-default btn-flat btn-xs">All</button>
								</form>
							</ul>
						</div>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-bordered">
							<tr>
								<th>User ID</th>
								<th>Name</th>
								<th>Role</th>
								<th></th>
							</tr>
							<?php foreach($profiles as $profile){?>
							<tr>
							<td><?php echo $profile->user_id;?></td>
							<td><a href="<?php echo URL . 'driversworld/profile/' . $profile->user_id;?>" target="_blank"><?php echo $profile->steam_name;?></a></td>
							<td><?php echo $this->model->fetchRole($profile->rank);?></td>
							<td>
								<a href="http://steamcommunity.com/profiles/<?php echo $profile->steam_id;?>" title="Steam Profile" target="_blank"><i class="fa fa-steam-square"></i></a>
							</td>
							</tr>
							<?php }?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>