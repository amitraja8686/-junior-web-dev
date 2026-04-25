<?php
if(isset($_COOKIE["username"]))
    {
        echo "welocome" . $_COOKIE["username"];
    }
    else
        {
            echo"cookie not found";
        }
?>