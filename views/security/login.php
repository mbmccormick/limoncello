<div class="page-header">
    <h1><?=$title?> <small><?=$description?></small></h1>
</div>
<div class="row">
    <div class="span8">
        <form action="<?=option('base_uri')?>login" method="post" class="form-stacked">
            <fieldset>
                <legend>Sign in to <?=ApplicationName?></legend>
                <div class="clearfix">
                    <label for="username">Username</label>
                    <div class="input">
                        <input class="xlarge" id="username" name="username" size="30" type="text">
                    </div>
                </div>
                <div class="clearfix">
                    <label for="password">Password</label>
                    <div class="input">
                        <input class="xlarge" id="password" name="password" size="30" type="password">
                    </div>
                </div>
                <div class="clearfix">
                    <div class="input">
                        <label>
                            <input type="checkbox" name="rememberme" value="true">
                            <span>Remember me</span>
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="actions">
                <button type="submit" class="btn primary">Sign in</button>&nbsp;<button type="reset" class="btn">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">

    function authenticateOpenID()
    {
        document.getElementById("login").action = "<?=option('base_uri')?>login/openid/google";
        document.getElementById("login").submit();
    }

</script>
