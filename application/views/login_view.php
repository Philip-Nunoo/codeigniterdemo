<div class="container-fluid">
	<div class="row-fluid">
		<div class="span5 offset1">
		<img src="<?=asset_url()?>images/login.png" style="float: left"/><h1>Crak Vote System (CVS)</h1>
		<p style="clear: left; color: #3366FF;"><hr>
			Crak Vote System is your one stop
			to automate that election within your area.
			<hr>
			Use CVS to get all your voting results.
			and conduct elections across large groups of people.
			With this system you are guaranteed of
			safe, secure, rig free elections.<br/><br/>
			<ul class="list">
				<li>Vote With ease</li>
				<li>Transparency</li>
				<li>Low cost</li>
				<li>Efficient</li>
			</ul>

			<hr>
			Call <a href="#">us</a> and start using crak vote
		</p>
		</div>
		<div class="span4 offset1">
		<div class="cover">
			<h2> CVS Login<img src="<?=asset_url()?>images/login.png" style="float: right" width="40px" /></h2>
			<p style="clear: right; color: #3366FF;"><hr/>Please Obtain your password from your
			system Administrator to login.
			</p>
			<div style="width: 72%;">
		   <?php echo validation_errors(); ?>
		   <?php echo form_open('verifylogin'); ?>
			<label for="studentid"><b>ID Number</b></label><input type="text" id="studentid" name="username"/><br>
			<label for="password"><b>Password</b></label><input type="password" id="password" name="password"/><br>
			<input type="submit" class="btn pull-right" value="Login"/>
			</div>
		</div>
		</div>
	</div>
</div>
