<!DOCTYPE html> 
<html lang="en">
<head> 
    <meta charset="utf-8" /> 
    <title><?=ApplicationName?> - <?=$title?></title> 
    <link rel="stylesheet" href="<?=option('base_uri')?>public/css/bootstrap.css" />
	<link rel="stylesheet" href="<?=option('base_uri')?>public/css/layout.css" />
    <link rel="shortcut icon" type="image/x-icon" href="<?=option('base_uri')?>public/img/logo.ico">
	<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/bootstrap-alerts.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/bootstrap-buttons.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/bootstrap-scrollspy.js"></script>
	<script type="text/javascript" src="<?=option('base_uri')?>public/js/bootstrap-tabs.js"></script>
	<script type="text/javascript" src="<?=option('base_uri')?>public/js/bootstrap-twipsy.js"></script>
	<script type="text/javascript" src="<?=option('base_uri')?>public/js/common.js"></script>
</head> 
<body>
    <div class="topbar">
        <div class="fill">
            <div class="container">
                <a class="brand" href="<?=option('base_uri')?>"><?=ApplicationName?></a>
                <ul class="nav">
                    <li class="active"><a href="<?=option('base_uri')?>">Home</a></li>
                    <li><a href="<?=option('base_uri')?>about">About</a></li>
                    <li><a href="<?=option('base_uri')?>contact">Contact</a></li>
                </ul>
                <?php if ($_SESSION['CurrentUser_ID'] != null) { ?>
                <p class="pull-right">Logged in as <a href="<?=option('base_uri')?>users/<?=$_SESSION['CurrentUser_ID']?>"><?=$_SESSION['CurrentUser_Username']?></a></p>
                <?php } else { ?>
                <form action="<?=option('base_uri')?>login" method="post" class="pull-right">
                    <input name="username" class="input-small" type="text" placeholder="Username">
                    <input name="password" class="input-small" type="password" placeholder="Password">
                    <button class="btn" type="submit">Sign in</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="page-header">
                <h1><?=$title?> <small><?=$description?></small></h1>
            </div>
            <?=$content?>
        </div>
        <footer>
            <p><a href="<?=option('base_uri')?>"><?=ApplicationName?></a> is powered by <a href="http://github.com/mccormicktechnologies/limoncello" target="_blank">Limoncello</a>. Version <?=Version?>.</p>
        </footer>
    </div>
    </body>
</html>
