<?php

    session_start();
    session_destroy();
    echo "You succsessfully logout. Click here to login again  <a href='adminlogin.php'>login again</a>";

?>