<?php 
session_start();
unset( $_SESSION['id'] );
unset( $_SESSION['userdata'] );
session_destroy();
header('Location:./');