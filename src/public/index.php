<!DOCTYPE html>
<html>
<head>
    <title>Docker!</title>
</head>
<body>
    <h1>Welcome to Docker</h1>
    <?php
    try {
        $pdo = new \PDO(
            'mysql:host=db;dbname=demoDb',
            'demoUser',
            'demoPass'
        );
        echo 'Connected!';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>
</body>
</html>
