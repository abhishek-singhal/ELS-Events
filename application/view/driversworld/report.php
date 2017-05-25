<div class="content-wrapper">
	<section class="content-header">
		<h1>Report Bug/Error & Feedback<small></small></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Enter Details</h3>
					</div>
					<form role="form" method="POST" action="">
						<div class="box-body">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" placeholder="<?php echo $user_details->steam_name;?>" disabled>
							</div>
							<div class="form-group">
								<label>Topic</label>
								<select class="form-control" name="topic">
									<option value="bug">Bug/Error</option>
									<option value="feedback">Feedback</option>
									<option value="suggestion">Suggestion</option>
									<option value="contact">Contact Us</option>
									<option value="JobLogger">Job Logger</option>
								</select>
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" rows="4" name="description" placeholder="Enter ..." required></textarea>
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary" name="submit">Submit</button>
							<button type="reset" class="btn btn-default pull-right">Reset</button>
						</div>
					</form>
				</div>
			</div>
			<?php if(isset($success)){?>
			<div class="col-md-6">
				<?php if($success==1){?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Success!</h4>
					Report Submitted successfully.
				</div>
				<?php }else{?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Oops!</h4>
					Something went wrong.
				</div>
				<?php }?>
			</div>
			<?php }?>
		</div>
	</section>
</div>