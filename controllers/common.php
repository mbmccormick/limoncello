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

?>