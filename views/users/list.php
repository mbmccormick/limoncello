<div class="page-header">
    <h1><?=$title?></h1>
</div>
<div class="row">
	<div class="span10">
		<table class="bordered-table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th style="width: 100px;">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?=$body?>
			</tbody>
		</table>
		<div class="well">
			<a href="<?=option('base_uri')?>users/add" class="btn primary">New User</a>
		</div>
	</div>
	<div class="span4">
	</div>
</div>