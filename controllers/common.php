<?php

    function common_dashboard()
    {
        if ($_SESSION['CurrentUser_ID'] != null)
        {
            set("title", "Dashboard");
            set("description", "This is the home page of the application.");
            return html("common/dashboard.php");
        }
        else
        {
            set("title", "Home");
            return html("static/home.php");
        }
    }
    
    function common_about()
    {
        set("title", "About");
        return html("static/about.php");
    }

?>