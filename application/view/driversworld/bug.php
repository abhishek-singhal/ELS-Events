<div class="content-wrapper">
	<section class="content-header">
		<h1>View Bug/Feedback Report<small></small></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box <?php if($fetchBug->status==0){?>box-warning<?php }else if($fetchBug->status==1){?>box-danger<?php }else if($fetchBug->status==2){?>box-success<?php }else if($fetchBug->status==3){?>box-primary<?php }?>">
					<div class="box-header with-border">
						<h3 class="box-title"><?php echo ucfirst($fetchBug->topic);?></h3>
						<div class="box-tools">
							<ul class="pagination pagination-sm no-margin pull-right">
								<a href="http://steamcommunity.com/profiles/<?php echo $this->model->fetchUser($fetchBug->user_id)->steam_id;?>" title="Steam Profile" target="_blank"><i class="fa fa-steam-square"></i></a>
								<a href="<?php echo URL . 'driversworld/profile/' .$fetchBug->user_id;?>" title="Drivers World&trade; Profile" target="_blank"><i class="fa fa-truck"></i></a>
								<?php if($fetchBug->status==0){?><span class="label label-warning">New</span><?php }else if($fetchBug->status==1){?><span class="label label-danger">Unsolved</span><?php }else if($fetchBug->status==2){?><span class="label label-success">Solved</span><?php }else if($fetchBug->status==3){?><span class="label label-primary">Not Required</span><?php }?>
							</ul>
						</div>
					</div>
					<div class="box-body">
						<dl class="dl-horizontal">
							<dt><div align="left">Name</div></dt>
							<dd><?php echo $this->model->fetchUser($fetchBug->user_id)->steam_name;?></dd>
						</dl>
						<dl class="dl-horizontal">
							<dt><div align="left">Description</div></dt>
							<dd><?php echo $fetchBug->description;?></dd>
						</dl>
					</div>
					<form role="form" method="POST" action="">
					<div class="form-group">
						<dl class="dl-horizontal">
							<dt><div align="left">Update Status</div></dt>
							<dd>
								<div class="radio">
									<label><input type="radio" name="status" id="optionsRadios1" value="0">New</label>&emsp;&emsp;
									<label><input type="radio" name="status" id="optionsRadios1" value="1">Unsolved</label>&emsp;&emsp;
									<label><input type="radio" name="status" id="optionsRadios1" value="2">Solved</label>&emsp;&emsp;
									<label><input type="radio" name="status" id="optionsRadios1" value="3">Not Required</label>
								</div>
							</dd>
						</dl>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary" name="update_status">Update</button>
						<button type="reset" class="btn btn-default pull-right">Reset</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>