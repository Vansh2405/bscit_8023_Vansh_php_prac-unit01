    <?php
        session_start();

        $_SESSION = array();

        session_destroy();

        header("Location: php unit3prog07 login.php");
        exit();
    ?>