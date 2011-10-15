<?php

    function Security_Login($email, $password)
    {
        $sql = mysql_query("SELECT * FROM user WHERE email='" . mysql_real_escape_string($email) . "' AND password='" . md5(mysql_real_escape_string($password)) . "'");
        
        if (mysql_num_rows($sql) > 0)
        {
            $row = mysql_fetch_array($sql);
            
            $_SESSION["CurrentUser_ID"] = $row[id];
            $_SESSION["CurrentUser_Name"] = $row[name];
            $_SESSION["CurrentUser_Email"] = $row[email];
            $_SESSION["CurrentUser_IsAdministrator"] = $row[isadministrator];
        
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function Security_Login_OpenID($identity)
    {
        $sql = mysql_query("SELECT * FROM user WHERE identity='" . $identity . "'");
        
        if (mysql_num_rows($sql) > 0)
        {
            $row = mysql_fetch_array($sql);
            
            $_SESSION["CurrentUser_ID"] = $row[id];
            $_SESSION["CurrentUser_Name"] = $row[name];
            $_SESSION["CurrentUser_Email"] = $row[email];
            $_SESSION["CurrentUser_IsAdministrator"] = $row[isadministrator];
        
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function Security_Logout()
    {
        session_destroy();
        
        return true;
    }
    
    function Security_Authorize()
    {
        if ($_SESSION["CurrentUser_ID"] == null)
        {
            header("Location: login");
            exit;
        }
    }
    
    function Security_Refresh($id)
    {
        $sql = mysql_query("SELECT * FROM user WHERE id='" . $id . "'");
        
        if (mysql_num_rows($sql) > 0)
        {
            $row = mysql_fetch_array($sql);
            
            $_SESSION["CurrentUser_ID"] = $row[id];
            $_SESSION["CurrentUser_Name"] = $row[name];
            $_SESSION["CurrentUser_Email"] = $row[email];
            $_SESSION["CurrentUser_IsAdministrator"] = $row[isadministrator];
        }
    }
    
?>