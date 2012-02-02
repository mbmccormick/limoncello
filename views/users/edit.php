<div class="row">
    <div class="span6">
        <form action="<?=option('base_uri')?>users/<?=$user['id']?>/edit" method="post" class="form-vertical">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="username">Username</label>
                    <div class="controls">
                        <input class="input-xlarge" id="username" name="username" type="text" value="<?=$user['username']?>">
                    </div>
                </div>
                <br />
                <div class="control-group">
                    <label class="control-label" for="name">Name</label>
                    <div class="controls">
                        <input class="input-xlarge" id="name" name="name" type="text" value="<?=$user['name']?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">Email Address</label>
                    <div class="controls">
                        <input class="input-xlarge email" id="email" name="email" type="text" value="<?=$user['email']?>">
                    </div>
                </div>
                <br />
                <div class="control-group">
                    <label class="control-label" for="newpassword">New Password</label>
                    <div class="controls">
                        <input class="input-xlarge exclude" id="newpassword" name="newpassword" type="password">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="newpasswordconfirm">Confirm New Password</label>
                    <div class="controls">
                        <input class="input-xlarge exclude" id="newpasswordconfirm" name="newpasswordconfirm" type="password">
                    </div>
                </div>
                <br />                
                <div class="control-group">
                    <div class="controls">
                        <input type="checkbox" name="isadministrator" value="1" <?php if ($user['isadministrator'] == 1) { ?>checked="true"<?php } ?> <?php if ($_SESSION["CurrentUser_IsAdministrator"] != "1") { ?>disabled="true"<?php } ?>>
                        <span>This user is an administrator</span>
                    </div>
                </div>
            </fieldset>
            <br />
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save User</button>&nbsp;<a onclick="return confirm('Are you sure you want to delete this user?');" href="<?=option('base_uri')?>users/<?=$user['id']?>/delete" class="btn">Delete</a>
            </div>
        </form>
    </div>
    <div class="span2">
        <h5>Page Description</h5>
        <p>This page allows you to edit a user's information. You also have the ability to delete a user from this page.</p>
        <br />
        <h5>Change Password</h5>
        <p>You can change the password for this user by entering their existing password and then providing a new password for the user.</p>
        <br />
    </div>
</div>