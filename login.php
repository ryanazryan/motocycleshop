<?php	
if($user_id){
    header("Location: ".BASE_URL);
}
?>
<div id="container-user-akses">
    <form action="<?php	echo BASE_URL."proses_login.php";?>" method="POST">
        
        <?php	
            $notif = isset($_GET["notif"]) ? $_GET["notif"] : false;

            if($notif == true) {
                echo "<div class='notif'>Maaf, Email dan Password yang anda masukkan salah</div>";
            } 

        ?>

        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email"/></span>
        </div>
        <div class="element-form">
            <label>Password</label>
            <span><input type="password" name="password" id="pass"/></span>
        </div>
        <div class="element-form">
            <label for="checks"><input type="checkbox" onclick="check()" id="checks">Show Password</label>
        </div>
        <div class="element-form">
            <span><input type="submit" value="Login" /></span>
        </div>
    </form>
</div>