<?php

# starta session.
session_start();

# förstöra alla session värden.
session_destroy();

# gå till index därefter
header("location: login.php");?>
