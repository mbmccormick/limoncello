<div class="row">
    <form action="<?=option('base_uri')?>login/reset" method="post" class="form-vertical">
        <p>To reset your account password, please enter your email address below. A new password will be sent to the email address on file.</p>
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="email">Email Address</label>
                <div class="controls">
                    <input class="input-xlarge email" id="email" name="email" type="text" />
                </div>
            </div>
        </fieldset>
        <div class="actions">
            <button type="submit" class="btn btn-primary">Reset</button>
        </div>
    </form>
</div>
