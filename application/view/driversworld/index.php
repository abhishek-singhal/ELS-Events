<div class="content-wrapper">
	<section class="content-header">
		<h1>Welcome to Drivers World&trade;<small></small></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-green"><i class="fa fa-eur"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">BANK</span>
						<span class="info-box-number"><?php echo $bank;?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">EMPLOYEES</span>
						<span class="info-box-number"><?php echo $employees;?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-aqua"><i class="fa fa-truck"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">DELIVERIES</span>
						<span class="info-box-number"><?php echo $delivery;?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box">
					<span class="info-box-icon bg-black"><i class="fa fa-road"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">DISTANCE DRIVEN</span>
						<span class="info-box-number"><?php echo $distance;?></span>
					</div>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
						<h3 class="box-title">Distance</h3>
						</div>
						<div class="box-body table-responsive no-padding">
							<table class="table table-hover table-bordered">
								<tr>
									<th>Rank</th>
									<th>Name</th>
									<th>Distance</th>
								</tr>
								<tr>
									<td>#1</td>
									<td><?php echo $top5dnames[0];?></td>
									<td><?php echo $top5dd[0];?></td>
								</tr>
								<tr>
									<td>#2</td>
									<td><?php echo $top5dnames[1];?></td>
									<td><?php echo $top5dd[1];?></td>
								</tr>
								<tr>
									<td>#3</td>
									<td><?php echo $top5dnames[2];?></td>
									<td><?php echo $top5dd[2];?></td>
								</tr>
								<tr>
									<td>#4</td>
									<td><?php echo $top5dnames[3];?></td>
									<td><?php echo $top5dd[3];?></td>
								</tr>
								<tr>
									<td>#5</td>
									<td><?php echo $top5dnames[4];?></td>
									<td><?php echo $top5dd[4];?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Profits</h3>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-bordered">
							<tr>
								<th>Rank</th>
								<th>Name</th>
								<th>Profit</th>
							</tr>
							<tr>
								<td>#1</td>
								<td><?php echo $top5pnames[0];?></td>
								<td><?php echo $top5pp[0];?></td>
							</tr>
							<tr>
								<td>#2</td>
								<td><?php echo $top5pnames[1];?></td>
								<td><?php echo $top5pp[1];?></td>
							</tr>
							<tr>
								<td>#3</td>
								<td><?php echo $top5pnames[2];?></td>
								<td><?php echo $top5pp[2];?></td>
							</tr>
							<tr>
								<td>#4</td>
								<td><?php echo $top5pnames[3];?></td>
								<td><?php echo $top5pp[3];?></td>
							</tr>
							<tr>
								<td>#5</td>
								<td><?php echo $top5pnames[4];?></td>
								<td><?php echo $top5pp[4];?></td>
							</tr>
						</table>
					</div>
				</div>
				</div>
				<div class="col-md-8">
					<?php if($rank==0||$rank==1){
				if($app_count!=0){?>
				<div class="box <?php if($app->result==0){?>box-warning<?php }else if($app->result==1){?>box-primary<?php }else if($app->result==2){?>box-success<?php }else if($app->result==3){?>box-danger<?php }else if($app->result==4){?>box-info<?php }?>">
					<div class="box-header with-border">
						<h3 class="box-title">Your Application</h3>
						<div class="box-tools">
							<ul class="pagination pagination-sm no-margin pull-right">
								<?php if($app->result==0){?><span class="label label-warning">Not Seen</span><?php }else if($app->result==1){?><span class="label label-primary">Test Pending</span><?php }else if($app->result==2){?><span class="label label-success">Accepted</span><?php }else if($app->result==3){?><span class="label label-danger">Rejected</span><?php }else if($app->result==4){?><span class="label label-info">Decision Pending</span><?php }?>
							</ul>
						</div>
					</div>
					<div class="box-body">
						<dl class="dl-horizontal">
							<dt><div align="left">Name</div></dt>
							<dd><?php echo $this->model->fetchUser($app->user_id)->steam_name;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Age</div></dt>
							<dd><?php echo $app->age;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Country</div></dt>
							<dd><?php echo $app->country;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">English</div></dt>
							<dd><?php echo $app->english;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Mic</div></dt>
							<dd><?php echo $app->mic;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Discord</div></dt>
							<dd><?php echo $app->discord;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Where did you heard<br>about ELS?</div></dt>
							<dd><?php echo $app->about_els;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Tell us about Yourself</div></dt>
							<dd><?php echo $app->about_user;?></dd>
						</dl>
						<?php if($app->result==3){?>
						<?php if($app->reason != NULL){?>
						<dl class="dl-horizontal">
							<dt><div align="left">Reason for Rejection</div></dt>
							<dd><?php echo $app->reason;?></dd>
						</dl>
						<?php }}?>
					</div>
				</div>
				<?php }}?>
				</div>
				<div class="col-md-4">
					<?php if($rank==0||$rank==1){
						if($app_count!=0){
						if($app->examiner_id!=0){?>
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Examiner Details</h3>
							</div>
							<div class="box-body">
								<dl class="dl">
									<dt>Name:</dt>
									<dd><?php echo $this->model->fetchUser($app->examiner_id)->steam_name;?></dd>
								</dl>
								<dl class="dl">
									<dt>Steam Profile:</dt>
									<dd><a href="http://steamcommunity.com/profiles/<?php echo $this->model->fetchUser($app->examiner_id)->steam_id;?>" target="_blank" title="Steam Profile">Click Here</a></dd>
								</dl>
								<?php if($app->result==0||$app->result==1){?>
								<dl class="dl">
									<dd>Please contact your examiner for further instructions.</dd>
								</dl>
								<?php }?>
							</div>
						</div>
					<?php }}}?>
				</div>
			</div>
			<div class="col-md-4">
				<iframe src="https://discordapp.com/widget?id=280015767292870656&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
			</div>
		</div>	
	</section>
</div>