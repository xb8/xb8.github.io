<?php
$currentUser = get_current_user(); 
$rootDir = '/';
echo "<h3>Current User:</h3>";
echo "<p>" . htmlspecialchars($currentUser) . "</p>";

echo "<h3>Contents of " . htmlspecialchars($rootDir) . ":</h3>";
if (is_readable($rootDir)) {
    $contents = scandir($rootDir);
    echo "<pre>";
    print_r($contents);
    echo "</pre>";
} else {
    echo "<p><em>Error: The PHP process does not have permission to read the root directory.</em></p>";
}
die();
?>
