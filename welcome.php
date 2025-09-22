


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>
<body class="p-3">
    <?php require __DIR__ . '/includes/navigation.php'; ?>

    <?php if($_GET['member'] === 'false'):  ?>
        <? chdir('signup.php'); ?>
    
    <?php else: ?>
        <h1>Welcome, Movie Club member!</h1>

    <?php endif ?>
    
</body>
</html>