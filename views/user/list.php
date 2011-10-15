<div class="content">
    <div class="navigation">
        <a href="<?=option('base_uri')?>users">Users</a>
    </div>
    <table class="data-table" cellpadding="0" cellspacing="0" style="width: 100%;">
		<tr>
			<th>Name</th>
			<th style="width: 100px;">Actions</th>
		</tr>
        <?=$body?>
    </table>
    <br />
    <button type="button" class="button" onclick="location.href='<?=option('base_uri')?>users/add';">
        <span>New User</span>
    </button>
</div>
