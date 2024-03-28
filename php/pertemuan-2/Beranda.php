<?php
session_start();

if(!$_SESSION["user"]){
    header("location: latihan-6.php");
}

?>
<h1>Selamat datang <?php echo $_SESSION["user"] ?> disini </h1>

<form action="" method="post">
    <input type="submit" name="logout" id=""      value="logout">
</form>

<?php
session_destroy();
header("location:latihan-6.php");
?>

<?php
    session_start(); //sesi tangkap login
    if(!$_SESSION['user']){
        header('location:latihan6.php');
    }
?>
<h1> Selamat Datang <?php echo $_SESSION['user']; ?> di Web NF </h1>
<br>
<form method="POST">
    <input type="submit" name="logout" value="logout">
</form>
<?php
if(isset($_POST['logout'])){
    session_destroy(); //lepas sesi login
    header('location:latihan6.php');
}    
?>