<?php

	function common_dashboard()
	{
		set("title", "Dashboard");
        set("description", "This is the home page of the application.");
		return html("common/dashboard.php");
	}

?>