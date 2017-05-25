<div class="content-wrapper">
	<section class="content-header">
		<h1>Join ELS<small>Fill the form below</small></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="callout callout-info">
					<h4>Requirements:</h4>
					<p><ul><li>Public Steam Profile</li>
					<li>60 Hours Driving Time</li>
					<li>Must be 13+ years old</li>
					<li>Basic Understanding of English</li>
					<li>Must have DISCORD</li></ul>
					Please note it can take up to around two days before you're contacted by someone from the ELS Staff. This is due to recent high-demand to join the company.  However we will aim to deal with your application as quickly as possible!</p>
				</div>
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Tell us about Yourself</h3>
					</div>
					<form role="form" method="POST" action="">
						<div class="box-body">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" placeholder="<?php echo $user_details->steam_name;?>" disabled>
								</div>
								<div class="form-group">
									<label>Age</label>
									<input type="number" class="form-control" name="age" placeholder="Enter your age" required>
								</div>
								<div class="form-group">
									<label>Country</label>
									<input type="text" class="form-control" name="country" placeholder="Enter the name of Country where you live" required>
								</div>
								<div class="form-group">
									<label>Ability to speak English</label>
									<div class="radio">
										<label><input type="radio" name="english" id="optionsRadios1" value="1/5" checked>1</label>&emsp;&emsp;
										<label><input type="radio" name="english" id="optionsRadios1" value="2/5">2</label>&emsp;&emsp;
										<label><input type="radio" name="english" id="optionsRadios1" value="3/5">3</label>&emsp;&emsp;
										<label><input type="radio" name="english" id="optionsRadios1" value="4/5">4</label>&emsp;&emsp;
										<label><input type="radio" name="english" id="optionsRadios1" value="5/5">5</label>
										<span class="help-block">1 being the worst and 5 is fluent in English</span>
									</div>
								</div>
								<div class="form-group">
									<label>Do you have a working MIC?</label>
									<div class="radio">
										<label><input type="radio" name="mic" id="optionsRadios1" value="Yes" checked>YES</label>&emsp;&emsp;
										<label><input type="radio" name="mic" id="optionsRadios1" value="No">NO</label>
									</div>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Will you be able to use DISCORD?</label>
									<div class="radio">
										<label><input type="radio" name="discord" id="optionsRadios1" value="Yes" checked>YES</label>&emsp;&emsp;
										<label><input type="radio" name="discord" id="optionsRadios1" value="No">NO</label>
										<span class="help-block">Link to Discord is available in Dashboard.</span>
									</div>
								</div>
								<div class="form-group">
									<label>Where did you heard about ELS?</label>
									<textarea class="form-control" rows="4" name="about_els" placeholder="Enter ..." required></textarea>
								</div>
								<div class="form-group">
									<label>Tell us about Yourself</label>
									<textarea class="form-control" rows="4" name="about_user" placeholder="Do you see yourself playing this game in future and Why do you want to join Us?" required></textarea>
								</div>
							</div>
						</div>
						<div class="box-footer" align="center">
							<?php if(isset($success)){?>
								<?php if($success==1){?>
									<div class="alert alert-success">Application Submitted</div>
								<?php }else{?>
									<div class="alert alert-danger">Oops! There was an error</div>
								<?php }?>
							<?php }else{?>
							<button type="submit" class="btn btn-primary" name="apply">Submit Application</button>
							<?php }?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>