<div class="page-header">
    <h1><?=$title?></h1>
</div>
<table class="bordered-table">
	<thead>
		<tr>
			<th>Name</th>
			<th style="width: 100px;">Actions</th>
		</tr>
	</thead>
	<tbody>
		<?=$body?>
	</tbody>
</table>
<div class="well">
	<a href="<?=option('base_uri')?>users/add" class="btn large primary">New User</a>
</div>