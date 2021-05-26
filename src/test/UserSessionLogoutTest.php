<pre>
<?php

use sarassoroberto\usm\service\UserSession;

// print_r(scandir('../'));


require "../../__autoload.php";
require "../../vendor/testTools/testTool.php";

$us = new UserSession();

$user = $us->logOut();

print_r($_SESSION);


?>
</pre>