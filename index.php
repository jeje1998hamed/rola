<?php
include 'config.php';
session_start();
$user_id=$_SESSION['user_id'];


if(!isset($user_id)){
    header('location:login.php');
};
if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
      header('location:login.php');

}
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my shop</title>
    <link rel="stylesheet" href="styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php
    if(isset($message)){
        foreach($message as $message){
            echo '<div class="message" onclick="this.remove();"> '.$message.'</div>';
                }
    }
    ?>
      <header>
            <nav class="navigation">
            <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#content">contact </a>
                <a href="index.php?logout=<?php echo $user_id;?> " onclick="return confirm('are your sure you want to logout?');
    "  >logout</a>
    
            </nav>
        </header>
        
        <div class="banner" id="home">
        <div class="banner-text">
        <a href="#" class="logo">jewels <span>store</span></a>
        <H1> welcome</H1>
        <h2>For all web developers</h2>
        <p> I hope you find something useful on my wonderful page</p>
        <div class="social-icons">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fas fa-phone"></i></a>
               </div>
        </div>
       
    
       
 
        
       
  

    </div>
    <section class="aboutme" id="about">
    <div class="banner2">
    <img src="pp.png">
</div>


    </section>
    <section class="content" id="content">
    <div class="footer">
    <div class="social-icons">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fas fa-phone"></i></a>
               </div>
        </div>

    </section>
</body>
</html>