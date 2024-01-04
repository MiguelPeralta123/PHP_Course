<?php
session_start();
if (isset($_SESSION['test_session'])) {
    echo $_SESSION['test_session'];
}
else {
    echo 'No sessions set';
}
?>