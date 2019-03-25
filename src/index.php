<?php
$title = 'Welcome to Docker!';
/**
 * connect to db
 */
try {
    $db = new \PDO(
        'mysql:host=mysql;dbname=docker_db',
        'docker_user',
        'docker_secret',
        null
    );
    $connection = 'Connected to MariaDB!';
} catch (\Exception $e) {
    $connection = 'Error connecting to MariaDB: ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>

<body>
    <div class="content">
        <img src="assets/docker.png" alt="docker" />
        <h1><?= $title ?></h1>
        <pre><?= $connection ?></pre>
        <p><a href="phpinfo.php">phpinfo()</a></p>
    </div>
</body>

</html> 