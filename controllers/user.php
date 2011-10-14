<?php

    function user_list()
    {
        Security_Authorize();
    
        $result = mysql_query("SELECT * FROM user ORDER BY username ASC");
        while($row = mysql_fetch_array($result))
        {
            $body .= "<div class='list-item user'>\n";
            
            $body .= "<table cellpadding='0' cellspacing='0' style='width: 100%;'>\n";
            $body .= "<tr>\n";
            $body .= "<td valign='middle'>\n";
            $body .= "<img src='http://www.gravatar.com/avatar/" . md5($row[email]) . "?s=45' style='background-color: #ffffff; padding: 2px; border: solid 1px #dddddd;' />";
            $body .= "</td>";
            $body .= "<td>\n";
            $body .= "&nbsp;&nbsp;\n";
            $body .= "</td>\n";
            $body .= "<td valign='middle' style='width: 100%;'>\n";
            $body .= "<h3><a href='" . option('base_uri') . "users/$row[id]'>" . $row[name] . "</a></h3>\n";
            $body .= "<p>Created on " . date("F j, Y", strtotime($row[createddate])) . "</p>\n";
            $body .= "</td>\n";
            $body .= "</tr>\n";
            $body .= "</table>\n";
            
            $body .= "</div>\n";
        }
        
        if (mysql_num_rows($result) == 0)
        {
            $body .= "<div class='list-item user'>\n";
            $body .= "<p>There are currently no users setup.</p>\n";
            $body .= "</div>\n";
        }
        
        set("title", "Users");
        set("body", $body);
        return html("user/list.php");
    }
    
    function user_add()
    {
        Security_Authorize();
        
        if ($_SESSION["CurrentUser_IsAdministrator"] == "0")
        {
            header("Location: " . option('base_uri') . "users&error=You are not authorized to add a new user!");
            exit;
        }
		
        set("title", "New User");
        return html("user/add.php");
    }
    
    function user_add_post()
    {
        Security_Authorize();
        
        if ($_SESSION["CurrentUser_IsAdministrator"] == "0")
        {
            header("Location: " . option('base_uri') . "users&error=You are not authorized to add a new user!");
            exit;
        }
		
        $now = date("Y-m-d H:i:s");
        
        if ($user[password] == $user[passwordconfirm])
        {
            $sql = "INSERT INTO user (name, username, password, email, isadministrator, createddate) VALUES
                    ('" . mysql_real_escape_string($_POST[name]) . "', '" . mysql_real_escape_string($_POST[username]) . "', '" . md5(mysql_real_escape_string($_POST[password])) . "', '" . mysql_real_escape_string($_POST[email]) . "', '" . $_POST[isadministrator] . "', '" . $now . "')";
            mysql_query($sql);
        }
        else
        {
            header("Location: " . option('base_uri') . "users/add&error=Your passwords do not match!");
            exit;
        }
        
        mysql_close($con);
        
        header("Location: " . option('base_uri') . "user");
        exit;
    }
    
    function user_edit()
    {
        Security_Authorize();
        
        if ($_SESSION["CurrentUser_IsAdministrator"] == "0" &&
            $_SESSION["CurrentUser_ID"] != params('id'))
        {
            header("Location: " . option('base_uri') . "users&error=You are not authorized to edit that user!");
            exit;
        }
		
        $result = mysql_query("SELECT * FROM user WHERE id='" . params('id') . "'");
        $user = mysql_fetch_array($result);
        
        if ($user != null)
        {
            set("title", "Edit User");
            set("user", $user);
            return html("user/edit.php");
        }
        else
        {
            set("title", "User Not Found");
            set("type", "user");
            return html("common/notfound.php");
        }
    }
    
    function user_edit_post()
    {
        Security_Authorize();
        
        if ($_SESSION["CurrentUser_IsAdministrator"] == "0" &&
            $_SESSION["CurrentUser_ID"] != params('id'))
        {
            header("Location: " . option('base_uri') . "users&error=You are not authorized to edit that user!");
            exit;
        }
		
        $result = mysql_query("SELECT * FROM user WHERE id='" . params('id') . "'");
        $user = mysql_fetch_array($result);
        
        $now = date("Y-m-d H:i:s");
        
        if (md5($_POST[currentpassword]) == $user[password])
        {
            if ($user[newpassword] == $user[newpasswordconfirm])
            {
                $sql = "UPDATE user SET name='" . mysql_real_escape_string($_POST[name]) . "', username='" . mysql_real_escape_string($_POST[username]) . "', password='" . md5(mysql_real_escape_string($_POST[newpassword])) . "', email='" . mysql_real_escape_string($_POST[email]) . "', isadministrator='" . $_POST[isadministrator] . "' WHERE id='$user[id]'";
                mysql_query($sql);
            }
        }
        else
        {
            $sql = "UPDATE user SET name='" . mysql_real_escape_string($_POST[name]) . "', username='" . mysql_real_escape_string($_POST[username]) . "', email='" . mysql_real_escape_string($_POST[email]) . "', isadministrator='" . $_POST[isadministrator] . "' WHERE id='$user[id]'";
            mysql_query($sql);
        }
        
        mysql_close($con);
        
        header("Location: " . option('base_uri') . "users/$user[id]&success=Your user was updated successfully!");
        exit;
    }
    
    function user_delete()
    {
        Security_Authorize();
        
        if ($_SESSION["CurrentUser_IsAdministrator"] == "0" &&
            $_SESSION["CurrentUser_ID"] != params('id'))
        {
            header("Location: " . option('base_uri') . "users/" . params('id') . "&error=You are not authorized to delete this user!");
            exit;
        }
    
        $sql = "DELETE FROM user WHERE id='" . params('id') . "'";    
        mysql_query($sql);

        header("Location: " . option('base_uri') . "user");
        exit;
    }

?>