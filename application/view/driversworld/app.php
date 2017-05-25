<div class="content-wrapper">
	<section class="content-header">
		<h1>View Application<small></small></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box <?php if($app->result==0){?>box-warning<?php }else if($app->result==1){?>box-primary<?php }else if($app->result==2){?>box-success<?php }else if($app->result==3){?>box-danger<?php }else if($app->result==4){?>box-info<?php }?>">
					<div class="box-header with-border">
						<h3 class="box-title"><?php echo $name;?></h3>
						<div class="box-tools">
							<ul class="pagination pagination-sm no-margin pull-right">
								<a href="http://steamcommunity.com/profiles/<?php echo $this->model->fetchUser($app->user_id)->steam_id;?>" title="Steam Profile" target="_blank"><i class="fa fa-steam-square"></i></a>
								<a href="<?php echo URL . 'driversworld/profile/' .$app->user_id;?>" title="Drivers World&trade; Profile" target="_blank"><i class="fa fa-truck"></i></a>
								<?php if($app->result==0){?><span class="label label-warning">New</span><?php }else if($app->result==1){?><span class="label label-primary">Test Pending</span><?php }else if($app->result==2){?><span class="label label-success">Accepted</span><?php }else if($app->result==3){?><span class="label label-danger">Rejected</span><?php }else if($app->result==4){?><span class="label label-info">Decision Pending</span><?php }?>
							</ul>
						</div>
					</div>
					<div class="box-body">
						<dl class="dl-horizontal">
							<dt><div align="left">Name</div></dt>
							<dd><?php echo $name;?></dd>
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
							<dt><div align="left">Hours Played</div></dt>
							<dd><?php echo $playtime;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Where did you heard<br>about ELS?</div></dt>
							<dd><?php echo $app->about_els;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Tell us about Yourself</div></dt>
							<dd><?php echo $app->about_user;?></dd>
						</dl>
						
						<?php if($app->reason != NULL){?>
						<dl class="dl-horizontal">
							<dt><div align="left">Reason for Rejection</div></dt>
							<dd><?php echo $app->reason;?></dd>
						</dl>	
						<?php }?>
					</div>
				</div>
				<?php if($app->result==3){?>
				<?php if($app->reason == NULL){?>
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Reason for Rejection</h3>
					</div>
					<form role="form" method="POST" action="">
						<div class="box-body">
							<div class="form-group">
								<label>Reason?</label>
								<textarea class="form-control" rows="4" name="reason_reject" placeholder="Enter ..." required></textarea>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary" name="reason">Submit</button>
							<button type="reset" class="btn btn-default pull-right">Reset</button>
						</div>
					</form>
				</div>
				<?php }}?>
			</div>
			
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Examiner Panel</h3>
					</div>
					<form role="form" method="POST" action="">
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Examiner Name</label>
								<?php if($app->examiner_id != 0){?>
								<input type="text" class="form-control" placeholder="<?php echo $this->model->fetchUser($app->examiner_id)->steam_name;?>" disabled><?php }else{?><br><button type="submit" class="btn btn-primary" name="examiner">Click Here to become Examiner</button><?php }?>
							</div>
							<div class="form-group">
								<label>Update Status</label>
								<div class="radio">
									<label><input type="radio" name="status" id="optionsRadios1" value="1">Test Pending</label>&emsp;&emsp;
									<label><input type="radio" name="status" id="optionsRadios1" value="4">Decision Pending</label>&emsp;&emsp;
									<label><input type="radio" name="status" id="optionsRadios1" value="2">Accepted</label>&emsp;&emsp;
									<label><input type="radio" name="status" id="optionsRadios1" value="3">Rejected</label>
								</div>
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary" name="update_status">Update</button>
								<button type="reset" class="btn btn-default pull-right">Reset</button>
							</div>
						</div>
					</form>
				</div>
				<?php if(isset($success)){?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-warning"></i> Alert!</h4>
					First set the Examiner of this Application.
				</div>
				<?php }?>
				<?php if($app->result == 1){?>
					<?php if($count_test==0){?>
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Driver Test</h3>
					</div>
					<form role="form" method="POST" action="">
						<div class="box-body">
							<div class="form-group">
								<label>Ability to listen to instructions</label>
								<div class="radio">
									<label><input type="radio" name="instruction" id="optionsRadios1" value="YES" checked>YES</label>&emsp;&emsp;
									<label><input type="radio" name="instruction" id="optionsRadios1" value="NO">NO</label>
								</div>
							</div>
							<div class="form-group">
								<label>Correct Speed Limit</label>
								<div class="radio">
									<label><input type="radio" name="speed" id="optionsRadios1" value="0" checked>0</label>&emsp;&emsp;
									<label><input type="radio" name="speed" id="optionsRadios1" value="1">1</label>&emsp;&emsp;
									<label><input type="radio" name="speed" id="optionsRadios1" value="2">2</label>&emsp;&emsp;
									<label><input type="radio" name="speed" id="optionsRadios1" value="3">3</label>&emsp;&emsp;
									<label><input type="radio" name="speed" id="optionsRadios1" value="4">4</label>&emsp;&emsp;
									<label><input type="radio" name="speed" id="optionsRadios1" value="5">5</label>
								</div>
							</div>
							<div class="form-group">
								<label>Parking Test 1 at Trameri</label>
								<div class="radio">
									<label><input type="radio" name="parking1" id="optionsRadios1" value="0" checked>0</label>&emsp;&emsp;
									<label><input type="radio" name="parking1" id="optionsRadios1" value="1">1</label>&emsp;&emsp;
									<label><input type="radio" name="parking1" id="optionsRadios1" value="2">2</label>&emsp;&emsp;
									<label><input type="radio" name="parking1" id="optionsRadios1" value="3">3</label>&emsp;&emsp;
									<label><input type="radio" name="parking1" id="optionsRadios1" value="4">4</label>&emsp;&emsp;
									<label><input type="radio" name="parking1" id="optionsRadios1" value="5">5</label>
								</div>
							</div>
							<div class="form-group">
								<label>Parking Test 2 at Hotel</label>
								<div class="radio">
									<label><input type="radio" name="parking2" id="optionsRadios1" value="0" checked>0</label>&emsp;&emsp;
									<label><input type="radio" name="parking2" id="optionsRadios1" value="1">1</label>&emsp;&emsp;
									<label><input type="radio" name="parking2" id="optionsRadios1" value="2">2</label>&emsp;&emsp;
									<label><input type="radio" name="parking2" id="optionsRadios1" value="3">3</label>&emsp;&emsp;
									<label><input type="radio" name="parking2" id="optionsRadios1" value="4">4</label>&emsp;&emsp;
									<label><input type="radio" name="parking2" id="optionsRadios1" value="5">5</label>
								</div>
							</div>
							<div class="form-group">
								<label>Overall Driving</label>
								<div class="radio">
									<label><input type="radio" name="driving" id="optionsRadios1" value="0" checked>0</label>&emsp;&emsp;
									<label><input type="radio" name="driving" id="optionsRadios1" value="1">1</label>&emsp;&emsp;
									<label><input type="radio" name="driving" id="optionsRadios1" value="2">2</label>&emsp;&emsp;
									<label><input type="radio" name="driving" id="optionsRadios1" value="3">3</label>&emsp;&emsp;
									<label><input type="radio" name="driving" id="optionsRadios1" value="4">4</label>&emsp;&emsp;
									<label><input type="radio" name="driving" id="optionsRadios1" value="5">5</label>
								</div>
							</div>
							<div class="form-group">
								<label>Notes</label>
								<textarea class="form-control" rows="4" name="notes" placeholder="Enter ..." required></textarea>
							</div>
							<div class="form-group">
								<label>Result</label>
								<div class="radio">
									<label><input type="radio" name="res" id="optionsRadios1" value="1" checked>PASS</label>&emsp;&emsp;
									<label><input type="radio" name="res" id="optionsRadios1" value="0">FAIL</label>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary" name="driver_test">Submit</button>
							<button type="reset" class="btn btn-default pull-right">Reset</button>
						</div>
					</form>
				</div>
					<?php }?>
				<?php }?>
				<?php if($count_test==1){?>
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Test Report</h3>
						<div class="box-tools">
							<ul class="pagination pagination-sm no-margin pull-right">
								<?php echo date("F j, Y H:m",$test_details->time);?> GMT
						</div>
					</div>
				<div class="box-body">
						<dl class="dl-horizontal">
							<dt><div align="left">Ability to listen to<br>instructions</div></dt>
							<dd><?php echo $test_details->instruction;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Correct Speed Limit</div></dt>
							<dd><?php echo $test_details->speed;?> Point(s)</dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Parking Test 1 at Trameri</div></dt>
							<dd><?php echo $test_details->parking1;?> Point(s)</dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Parking Test 2 at Hotel</div></dt>
							<dd><?php echo $test_details->parking2;?> Point(s)</dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Overall Driving</div></dt>
							<dd><?php echo $test_details->driving;?> Point(s)</dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Notes</div></dt>
							<dd><?php echo $test_details->notes;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Result</div></dt>
							<dd><?php if($test_details->result == 1){echo "PASS";}else{echo "FAIL";}?></dd>
						</dl>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</section>
</div>