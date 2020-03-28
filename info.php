<?php
if (!defined('PDO::ATTR_DRIVER_NAME')) {
echo '<h1 style="color: red;">PDO unavailable</h1>';
}
elseif (defined('PDO::ATTR_DRIVER_NAME')) {
echo '<h1 style="color: green;">PDO available</h1>';
}

echo phpinfo();

$processUser = posix_getpwuid(posix_geteuid());
print $processUser['name'];
exit;

?>