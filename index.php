<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>
    
    <?php include 'includes/header.php'; 
    $logged_in=true;
    if($logged_in==true){
        echo '<p>Welcome back!</p>';
    }else{
        header('Location: login.php');
    }

    ?>
    <?php echo '<p>Hello World</p>'; ?>
    <p>Today is <?php echo date('l, F jS, Y'); ?>.</p>
    <?php define('SITE_NAME', "Michael Murton's Site") ?>
    <p>Welcome to <?php echo SITE_NAME; ?>!</p>
    <a href="info.php">Info</a>

    <?php include 'includes/footer.php'; ?>

</body>
</html>
