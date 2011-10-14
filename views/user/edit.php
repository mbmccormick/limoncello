<div class="content">
    <div class="navigation">
        <a href="<?=option('base_uri')?>user">Users</a> / <a href="<?=option('base_uri')?>user/<?=$user[id]?>/edit">Edit User</a>
    </div>
    <table cellpadding="0" cellspacing="0" style="width: 100%;">
        <tr valign="top">
            <td style="width: 50%;">
                <div class="list">
                    <form id="user-edit" action="<?=option('base_uri')?>user/<?=$user[id]?>/edit" method="post">
                        <div class="list-item user">
                            <h3>Edit User</h3>
                            <br />
                            <b>Username</b><br />
                            <input type="text" name="username" style="width: 333px;" value="<?=$user[username]?>" /><br />
                            <br />
                            <b>Email</b><br />                    
                            <input type="text" name="email" style="width: 333px;" value="<?=$user[email]?>" /><br />
                            <br />
                            <br />
                            <b>Current Password</b><br />                    
                            <input type="password" name="currentpassword" style="width: 333px;" /><br />
                            <br />
                            <br />
                            <b>New Password</b><br />                    
                            <input type="password" name="newpassword" style="width: 333px;" /><br />
                            <br />
                            <b>Confirm New Password</b><br />                    
                            <input type="password" name="newpasswordconfirm" style="width: 333px;" /><br />
							<br />
                            <br />
                            <input type="checkbox" name="isadministrator" value="1" <?php if ($user[isadministrator] == "1") { echo "checked='checked'"; } ?> <?php if ($_SESSION["CurrentUser_IsAdministrator"] == "0" || $_SESSION["CurrentUser_ID"] == $user[id]) { echo "disabled='true'"; } ?>  /> <b>Is Administrator</b>
                        </div>
                        <br />
                        <button type="submit" class="button">
                            <span>Save User</span>
                        </button>
                        <button type="button" class="button danger" onclick="confirm('Are you sure you want to delete this user?') ? location.href='<?=option('base_uri')?>user/<?=$user[id]?>/delete' : false;">
                            <span>Delete</span>
                        </button>
                    </form>
                </div>
            </td>
            <td>
                <div class="spacer" style="width: 20px;">
                    &nbsp;
                </div>
            </td>
            <td style="width: 50%;">
                <div class="standard-form help">
                    <b>Update your avatar at Gravatar</b><br />
                    <br />
                    You can update the avatar for your account by uploading a new one at <a href="http://www.gravatar.com/" target="_blank">Gravatar</a> using your email address.
                </div>
                <div class="standard-form help">
                    <b>Change your password</b><br />
                    <br />
                    You can change your password for your account by entering your current password and your new password in the form on the left.
                </div>
                <div class="standard-form help">
                    <b>Login with your Google Account</b><br />
                    <br />
                    <?php if ($user[identity] != null) { ?>
                    Your account is linked with your Google Account, which allows you to login to <?=ApplicationName?> with one click. If you don't like this, you can always <a onclick="confirm('Are you sure you want to disconnect your Google Account?') ? location.href='<?=option('base_uri')?>login/openid/remove' : false;" href="#">disconnect</a> your Google Account.
                    <?php } else { ?>
                    Did you know that you can login to <?=ApplicationName?> using your Google Account? If you want to set this up, click <a onclick="authenticateOpenID()" href="#">here</a> to get started.
                    <?php } ?>
                </div>
            </td>
        </tr>
    </table>
</div>
<script type="text/javascript">
    
    $("#user-edit").submit(function validate() {
        var formData = $("#user-edit").serializeArray();
        for (var i=0; i < formData.length; i++) { 
            if (formData[i].contains("password")) continue;
            
            if (!formData[i].value) { 
                $(document).showMessage({
                    thisMessage: ["Please complete all fields, check your input, and try again."],
                    className: "error",
                    opacity: 95,
                    displayNavigation: false,
                    autoClose: true,
                    delayTime: 5000
                });
                
                return false;
            }
        }
    });
    
    function authenticateOpenID()
    {
        document.getElementById("login").action = "<?=option('base_uri')?>login/openid/google";
        document.getElementById("login").submit();
    }
    
</script>
