<div class="content-wrapper">
	<section class="content-header">
		<h1>Profile<small></small></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-3">
				<div class="box box-primary">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="<?php echo $profile->avatar;?>" alt="User profile picture">
						<h5 class="profile-username text-center"><?php echo $profile->steam_name;?></h5>
						<p class="text-muted text-center"><?php echo $this->model->fetchRole($profile->rank);?></p>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item"><b>Hours Played</b> <a class="pull-right"><?php echo $playtime;?></a></li>
							<li class="list-group-item"><b>Followers</b> <a class="pull-right"></a></li>
							<li class="list-group-item"><b>Following</b> <a class="pull-right"></a></li>
						</ul>
						<button class="btn btn-primary btn-block"><b>Coming Soon!</b>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#info" data-toggle="tab">Information</a></li>
						<?php if($profile->vtmlive_id != 0){?>
						<li><a href="#joblog" data-toggle="tab">Job Logger</a></li>
						<?php }?>
						<?php if($rank>13){?>
						<li><a href="#settings" data-toggle="tab">Settings</a></li>
						<?php }?>
					</ul>
					<div class="tab-content">
						<div class="active tab-pane" id="info">
							<dl class="dl-horizontal">
								<dt><div align="left">Steam Profile</div></dt>
								<dd><a href="<?php echo $profile_url;?>" target="_blank"><?php echo $profile_url;?></a></dd>
							</dl>
							<?php if($rank>9){?>
							<dl class="dl-horizontal">
								<dt><div align="left">Steam ID</div></dt>
								<dd><?php echo $profile->steam_id;?></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt><div align="left">Previous Bans</div></dt>
								<dd><a href="<?php echo 'https://api.truckersmp.com/v2/bans/' . $profile->steam_id;?>" target="_blank">Click Here</a></dd>
							</dl>
							<?php }?>
							<dl class="dl-horizontal">
								<dt><div align="left">Joining Date</div></dt>
								<dd><?php echo date("F j, Y",$profile->register_time);?></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt><div align="left">Truckers MP ID</div></dt>
								<dd><?php echo $profile->truckersmp_id;?></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt><div align="left">Truckers MP Join Date</div></dt>
								<dd><?php echo date("F j, Y",strtotime($profile->truckersmp_joindate));?></dd>
							</dl>
						</div>
						<?php if($profile->vtmlive_id != 0){?>
						<div class="tab-pane" id="joblog">
							<dl class="dl-horizontal">
								<dt><div align="left">Bank</div></dt>
								<dd><?php echo $vtm_details[0];?></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt><div align="left">Score</div></dt>
								<dd><?php echo $vtm_details[1];?></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt><div align="left">Deliveries</div></dt>
								<dd><?php echo $vtm_details[2];?></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt><div align="left">Road Offences</div></dt>
								<dd><?php echo $vtm_details[3];?></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt><div align="left">Distance Driven</div></dt>
								<dd><?php echo $vtm_details[4];?></dd>
							</dl>
							<dl class="dl-horizontal">
								<dt><div align="left">Average fuel consumption</div></dt>
								<dd><?php echo $vtm_details[6];?></dd>
							</dl>
						</div>
						<?php }?>
						<?php if($rank>13){?>
						<div class="tab-pane" id="settings">
							<form role="form" action="" method="POST" class="form-horizontal">
								<div class="form-group">
									<label for="inputName" class="col-sm-2 control-label">Update Role</label>
									<div class="col-sm-5">
										<select class="form-control" name="rank">
											<?php foreach ($fetch_role_list AS $fetch_role){?>
												<option value="<?php echo $fetch_role->rank;?>"><?php echo $fetch_role->role;?></option>
											<?php }?>
										</select>
									</div>
									<div class="col-sm-2">
										<button type="submit" class="btn btn-danger" name="update_rank">Submit</button>
									</div>
								</div>
							</form>
							<form role="form" action="" method="POST" class="form-horizontal">
								<div class="form-group">
									<label for="inputName" class="col-sm-2 control-label">Update VTM ID</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="vtm_id" placeholder="<?php echo $vtm_id;?>" required>
									</div>
									<div class="col-sm-2">
										<button type="submit" class="btn btn-danger" name="update_vtm">Submit</button>
									</div>
								</div>
							</form>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>