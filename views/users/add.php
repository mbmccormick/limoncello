<div class="row">
    <div class="span6">
        <form action="<?=option('base_uri')?>users/add" method="post" class="form-vertical">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="username">Username</label>
                    <div class="controls">
                        <input class="input-xlarge" id="username" name="username" type="text" />
                    </div>
                </div>
                <br />
                <div class="control-group">
                    <label class="control-label" for="name">Name</label>
                    <div class="controls">
                        <input class="input-xlarge" id="name" name="name" type="text" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">Email Address</label>
                    <div class="controls">
                        <input class="input-xlarge email" id="email" name="email" type="text" />
                    </div>
                </div>
                <br />
                <div class="control-group">
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input class="input-xlarge" id="password" name="password" type="password" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="passwordconfirm">Confirm Password</label>
                    <div class="controls">
                        <input class="input-xlarge" id="passwordconfirm" name="passwordconfirm" type="password" />
                    </div>
                </div>
                <br />
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" name="isadministrator" value="1" /> This user is an administrator
                        </label>
                    </div>
                </div>
            </fieldset>
            <br />
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Add User</button>&nbsp;<button type="reset" class="btn">Cancel</button>
            </div>
        </form>
    </div>
    <div class="span2">
        <h5>Page Description</h5>
        <p>This page allows you to add a new user to the application. Make sure that the email address you provide is valid, as it will be used to reset the user's password.</p>
        <br />
    </div>
</div>