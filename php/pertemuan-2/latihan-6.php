<!-- belajar login -->
<?php
session_start();
?>
<h1>FORM LOGIN</h1>

<form method="POST">
    <div>
        <label for="">username</label>
        <input type="text" name="username" id="" placeholder="Masukan username anda">
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password" id="" placeholder="MAsukan password anda">
    </div>

    <div>
        <input type="submit" name="proses" id="" value="Login">
    </div>
</form>

<?php
if(isset($_POST["proses"])){
$username = $_POST["username"];
$password = $_POST["password"];

if($username == "admin" && $password == "1"){
    $_SESSION["user"] = $username;
    header("location: Beranda.php");
}else{
    echo "login ulang";
}
}

?>
