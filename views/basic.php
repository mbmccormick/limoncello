<!DOCTYPE html> 
<html lang="en">
<head> 
    <meta charset="utf-8" /> 
    <title><?=ApplicationName?> - <?=$title?></title> 
    <link rel="stylesheet" type="text/css" media="screen,projection" href="<?=option('base_uri')?>public/css/basic.css" />
    <link rel="shortcut icon" type="image/x-icon" href="<?=option('base_uri')?>public/img/logo.ico">
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/jquery/jquery-1.6.4.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/form/jquery.form.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/showMessage/jquery.showMessage-2.1.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/scrollTo/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/css_browser_selector/css_browser_selector.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/common.js"></script>
</head> 
<body> 
    <?=$content?>
    <div class="footer">
        <?=ApplicationName?> is powered by <a href="http://github.com/mccormicktechnologies/limoncello" target="_blank">Limoncello</a>. Version <?=Version?>.
    </div>
    <div id="arrow-top" style="display: none;">
        &#9650;
    </div>
</body> 
</html>