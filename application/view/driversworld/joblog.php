<div class="content-wrapper">
	<section class="content-header">
		<h1>Job Logger<small></small></h1>
	</section>
	<section class="content">
		<div class="row">
		
			<div class="col-md-6">
				<?php if($user_details->vtmlive_id != 0){?>
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Job Logger</h3>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover table-bordered">
							<tr>
								<th>Stats</th>
								<th></th>
							</tr>
							<tr>
								<td>Bank</td>
								<td><?php echo $vtm_details[0];?></td>
							</tr>
							<tr>
								<td>Score</td>
								<td><?php echo $vtm_details[1];?></td>
							</tr>
							<tr>
								<td>Deliveries</td>
								<td><?php echo $vtm_details[2];?></td>
							</tr>
							<tr>
								<td>Road Offences</td>
								<td><?php echo $vtm_details[3];?></td>
							</tr>
							<tr>
								<td>Distance Driven</td>
								<td><?php echo $vtm_details[4];?></td>
							</tr>
							<tr>
								<td>Average fuel consumption</td>
								<td><?php echo $vtm_details[6];?></td>
							</tr>
						</table>
					</div>
				</div>
				<?php }else{?>
				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title">Connect to VTM Live Account</h3>
					</div>
					<div class="box-body">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img src="http://i.imgur.com/DuzPzYP.png" alt="First slide">
								</div>
								<div class="carousel-caption">
								</div>
								<div class="item">
									<img src="http://i.imgur.com/FrHQZwP.png" alt="Second slide">
								</div>
								<div class="carousel-caption">
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="fa fa-angle-left"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="fa fa-angle-right"></span>
							</a>
						</div>
						<br>
						<ol>
							<li>Open the link <a href="http://virtualtruckingmanager.com/company/2642/distance" target="_blank">http://virtualtruckingmanager.com/company/2642/distance</a></li>
							<li>Find your name in the list of drivers and click it</li>
							<li>You will be redirected to a new page</li>
							<li>Enter the last numeric digits shown in the URL in the box below</li>
							<li>In the above example: Its 10783</li>
						</ol>
						<br>
						<form role="form" method="POST" action="" class="form-horizontal">
							<div class="form-group">
								<label for="inputName" class="col-sm-2 control-label">VTM ID</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name="vtm_id" placeholder="Enter only the number" required>
								</div>
								<div class="col-sm-2">
									<button type="submit" class="btn btn-danger" name="update_vtm">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<?php if(isset($result)){
					if($result==0||$result==1){?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Oops!</h4>
					Invalid VTM ID
				</div>
				<?php }}?>
				<?php }?>
			</div>
			<div class="col-md-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Virtual Trucking Manager</h3>
					</div>
					<div class="box-body">
						<p>ELS members are now required to sign up to this website.
						Even though we are an Events VTC, we prefer if we use this as
						a way to relax and have some enjoyment whilst seeing out VTC grow
						not only in profit but more drivers and eventually getting placed on the leaderboard.</p>
						
						<p>Please go ahead and register your personal account here:
						<a href="http://virtualtruckingmanager.com/register" target="_blank">http://virtualtruckingmanager.com/register</a></p>
						
						<p>Then create an application to the ELS VTC Company and join here:
						<a href="http://virtualtruckingmanager.com/company/2642" target="_blank">http://virtualtruckingmanager.com/company/2642</a></p>
						<p>Head to VTM Live in the navigation bar of the website or head here:
						<a href="http://virtualtruckingmanager.com/vtmlive" target="_blank">http://virtualtruckingmanager.com/vtmlive</a></p>
						
						<p>Ensure you read the rules specified by us via the company website: Damage/Fines recieved are issued and we expect VTC members to avoid them as much as possible.</p>
						
						<p>We expect you to complete at least 2 deliveries per week.</p>
					</div>
				</div>
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Steps</h3>
					</div>
					<div class="box-body">
						<ol>
							<li>Ensure you can sign into your account on VTM</li>
							<li>Click download and launch the VTM Live software and install the program</li>
							<li>Launch "VTM live" and go ahead and sign in using your VTM login / password</li>
							<li>Then in the VTM live application go to "Settings" and now choose your ETS2 directory (It may already be done for you depending on where you saved it)</li>
							<li>Tracking only works on MULTIPLAYER so you must complete deliveries in MULTIPLAYER ONLY.</li>
							<li>Ensure your VTM application is running in the background and YOU ARE SIGNED IN</li>
							<li>Launch ETS2 Multiplayer and complete a delivery (Please note parking must be done if you are to gain money / points on the VTM website. If you skip parking it will NOT track your delivery).</li>
							<li>You should now see your delivery as PENDING, soon it will be ACCEPTED by a staff member and you will be placed on the leaderboard.</li>
							<li>Any help needed? <a href="<?php echo URL;?>driversworld/report">Click Here</a></li>
					</div>
				</div>
			</div>
		
		</div>
	</section>
</div>