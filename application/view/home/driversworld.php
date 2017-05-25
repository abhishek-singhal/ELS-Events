<section id="explore">
	<div class="container">
		<div class="col-sm-7 col-md-6">
			<p>
			The ELS Drivers World&trade; - Dedicated to ensure all our drivers are happy at all times in ELS.
			We believe close friendships and overall driver satisfaction in our company leads to an enriching community atmosphere as
			well as an excellent track record of performance.</p>
 			<p>Thats why the ELS Drivers World is existent within the company. This is a specific sector dedicated at all members in
 			ELS regardless of their position in the company ensure all members give a fair input of what can be done to make
 			their experience in ELS better.</p>
 			<p>Not also is it a feedback opportunity, it also ensure that members in ELS are in constant contact with other members
 			and can allow events, deliveries or community convoys to be done together.</p>
 			<p>Drivers World ensures that deliveries, events and community convoys are run smoothly, with an active contribution
 			from all members in ELS.</p>
 			Drivers World will assure comfort and satisfaction whilst being a member in ELS.			
		</div>
		<div align="center">
			<?php if(isset($_SESSION['user_id'])){?>
				<h2><font color = "white">You are signed in as</font>
				<br><font color = "red"><?php echo $user_details->steam_name;?></font><br>
				</h2>
				<a href="<?php echo URL;?>driversworld/index" class="btn btn-primary" target="_blank"><i class="fa fa-sign-in fa-rotate-180"></i> Drivers World&trade;</a>
				<a href="<?php echo URL;?>home/logout" class="btn btn-primary">Logout <i class="fa fa-sign-out"></i></a>
			<?php }else{?>
				<form method = "POST" action = "?login">
					<input type = "image" name = "login" src = "https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_01.png">
				</form>
				You need to sign in to access Drivers World&trade;
			<?php }?>
		</div>
	</div>
</section><!--/#explore-->