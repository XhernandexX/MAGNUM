<?php
session_start();
session_destroy();
header('Location: https://magnumshop.herokuapp.com');
?>