<div class="row">
    <div class="span3">
        <form action="<?=option('base_uri')?>login" method="post" class="form-vertical">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="username">Username</label>
                    <div class="controls">
                        <input class="xlarge" id="username" name="username" type="text" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input class="xlarge" id="password" name="password" type="password" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" name="rememberme" value="true" /> Remember me
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="actions">
                <button type="submit" class="btn primary">Login</button>&nbsp;<button type="reset" class="btn">Cancel</button>
            </div>
        </form>
    </div>
</div>
