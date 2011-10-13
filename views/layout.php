<!DOCTYPE html> 
<html lang="en">
<head> 
    <meta charset="utf-8" /> 
    <title><?=ApplicationName?> - <?=$title?></title> 
    <link rel="stylesheet" type="text/css" media="screen,projection" href="<?=option('base_uri')?>public/css/layout.css" />
    <link rel="shortcut icon" type="image/x-icon" href="<?=option('base_uri')?>public/img/logo.ico">
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/jquery/jquery-1.6.4.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/form/jquery.form.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/showMessage/jquery.showMessage-2.1.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/scrollTo/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/css_browser_selector/css_browser_selector.js"></script>
    <script type="text/javascript" src="<?=option('base_uri')?>public/js/common.js"></script>
</head> 
<body> 
    <div class="toolbar">
        <table class="toolbar-menu" cellpadding="0" cellspacing="0">
            <tr>
                <td valign="middle" align="left">
                    <?php
                        
                        if ($_SERVER[REQUEST_URI] == option('base_uri')) {
                            echo "<a href='" . option('base_uri') . "' class='selected'>Dashboard</a>\n";
                        } else {
                            echo "<a href='" . option('base_uri') . "'>Dashboard</a>\n";
                        }
                        
                        if (strpos($_SERVER[REQUEST_URI], option('base_uri') . "user") === 0) {
                            echo "<a href='" . option('base_uri') . "user' class='selected'>Users</a>\n";
                        } else {
                            echo "<a href='" . option('base_uri') . "user'>Users</a>\n";
                        }
                        
                    ?>
                </td>
                <td valign="middle" align="right">
                    <a href="<?=option('base_uri')?>user/<?php echo $_SESSION[CurrentUser_ID]; ?>"><?php echo $_SESSION[CurrentUser_Username]; ?></a>
                    <a href="<?=option('base_uri')?>logout">Logout</a>
                </td>
            </tr>
        </table>
    </div>
    <div class="header">
        <table cellpadding="0" cellspacing="0"> 
            <tr valign="middle">
                <td>
                    &nbsp;<a href="<?=option('base_uri')?>"><?=ApplicationName?></a>
                </td>
            </tr>
        </table>
    </div>
    <?=$content?>
    <div class="footer">
        <a href="<?=option('base_uri')?>"><?=ApplicationName?></a> is powered by <a href="http://github.com/mbmccormick/limoncello" target="_blank">Limoncello</a>. Version <?=Version?>.
    </div>
    <div id="arrow-top" style="display: none;">
        &#9650;
    </div>
</body> 
</html>