<div class="page-header">
    <h1><?=$title?></h1>
</div>
<div class="row">
	<div class="span10">
		<form action="<?=option('base_uri')?>users/add" method="post" class="form-stacked">
			<fieldset>
				<div class="clearfix">
					<label for="name">Name</label>
					<div class="input">
						<input class="xlarge" id="name" name="name" size="30" type="text">
					</div>
				</div>
				<div class="clearfix">
					<label for="email">Email Address</label>
					<div class="input">
						<input class="xlarge" id="email" name="email" size="30" type="text">
					</div>
				</div>
				<br />
				<div class="clearfix">
					<label for="password">Password</label>
					<div class="input">
						<input class="xlarge" id="password" name="password" size="30" type="password">
					</div>
				</div>
				<div class="clearfix">
					<label for="passwordconfirm">Confirm Password</label>
					<div class="input">
						<input class="xlarge" id="passwordconfirm" name="passwordconfirm" size="30" type="password">
					</div>
				</div>
				<br />
				<div class="clearfix">
					<div class="input">
						<input type="checkbox" name="isadministrator" value="1">
						<span>This user is an administrator</span>
					</div>
				</div>
			</fieldset>
			<br />
			<div class="actions">
				<button type="submit" class="btn primary">Add User</button>&nbsp;<button type="reset" class="btn">Cancel</button>
			</div>
		</form>
	</div>
	<div class="span4">
	</div>
</div>