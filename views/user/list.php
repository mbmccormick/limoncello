<div class="content">
    <div class="navigation">
        <a href="<?=option('base_uri')?>user">Users</a>
    </div>
    <div class="list">
        <?=$body?>
    </div>
    <br />
    <button type="button" class="button" onclick="location.href='<?=option('base_uri')?>user/add';">
        <span>New User</span>
    </button>
</div>
