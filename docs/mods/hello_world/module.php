<?php
// if this module is to be made available to students on the Home or Main Navigation
$_modules[] = 'mods/hello_world/index.php';

// adding this module to the main page as a basic student tool:
$_pages['mods/hello_world/index.php']['title'] = 'Hello World';
$_pages['mods/hello_world/index.php']['img']   = 'mods/hello_world/images/hello_world.png';

// adding this modeul's instructor page to the course Manage page:
$_pages['mods/hello_world/instructor/index.php']['title']     = 'Hello World';
$_pages['mods/hello_world/instructor/index.php']['parent']    = 'tools/index.php';
$_pages['mods/hello_world/instructor/index.php']['privilege'] = AT_PRIV_ADMIN;

?>