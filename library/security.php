<?php

    function Security_Login($username, $password, $rememberme = false)
    {
        $sql = mysql_query("SELECT * FROM user WHERE username='" . mysql_real_escape_string($username) . "' AND password='" . mysql_real_escape_string(md5($password)) . "'");
        
        if (mysql_num_rows($sql) > 0)
        {
            $row = mysql_fetch_array($sql);
            
            Security_Refresh($row['id']);

            if ($rememberme == true)
            {
                setcookie("username", $row['username'], time() + (60 * 60 * 24 * 7), "/", $_SERVER['HTTP_HOST'], true);
                setcookie("password", $row['password'], time() + (60 * 60 * 24 * 7), "/", $_SERVER['HTTP_HOST'], true);
            }
        
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function Security_CookieLogin($username, $password)
    {
        $sql = mysql_query("SELECT * FROM username WHERE username='" . mysql_real_escape_string($username) . "' AND password='" . mysql_real_escape_string($password) . "'");
        
        if (mysql_num_rows($sql) > 0)
        {
            $row = mysql_fetch_array($sql);
            
            Security_Refresh($row['id']);

            setcookie("username", $row['username'], time() + (60 * 60 * 24 * 7), "/", "paigeapp.com", true);
            setcookie("password", $row['password'], time() + (60 * 60 * 24 * 7), "/", "paigeapp.com", true);

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

        setcookie("username", "", time() - (60 * 60), "/", "paigeapp.com");
        setcookie("password", "", time() - (60 * 60), "/", "paigeapp.com");
        
        return true;
    }
    
    function Security_Authorize()
    {
        if ($_SESSION['CurrentUser_ID'] == null)
        {
            header("Location: " . option('base_uri') . "login");
            exit;
        }
    }
    
    function Security_Refresh($id)
    {
        $sql = mysql_query("SELECT * FROM user WHERE id='" . mysql_real_escape_string($id) . "'");
        
        if (mysql_num_rows($sql) > 0)
        {
            $row = mysql_fetch_array($sql);
            
            $_SESSION['CurrentUser_ID'] = $row['id'];
            $_SESSION['CurrentUser_Name'] = $row['name'];
            $_SESSION['CurrentUser_Username'] = $row['username'];
            $_SESSION['CurrentUser_IsAdministrator'] = $row['isadministrator'];
        }
    }
    
?>