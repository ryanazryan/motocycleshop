<?php	
if($user_id){
    header("Location: ".BASE_URL);
}
?>
<div id="container-user-akses">

    <form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">

        <?php
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
            $alamat = isset ($_GET['alamat']) ? $_GET['alamat'] : false;

            if($notif == "require") {
                echo "<div class='notif'>Maaf, kamu harus melengkap form dibawah ini</div>";
            }else if($notif == "password"){
                echo "<div class='notif'>Maaf, password yang kamu masukan tidak sama</div>";
            }else if($notif == "email"){
                echo "<div class='notif'>Maaf, email yang kamu masukkan sudah terdaftar</div>";
            }
        ?>

        <div class="element-form">
            <label>Nama Lengkap</label>
            <span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" /></span>
        </div>
        <div class="element-form">
            <label>Email</label>
            <span><input type="text" name="email" value="<?php echo $email; ?>" /></span>
        </div>
        <div class="element-form">
            <label>Nomor Telephone/Handphone</label>
            <span><input type="text" name="phone" value="<?php echo $phone; ?>" /></span>
        </div>
        <div class="element-form">
            <label>Alamat</label>
            <span><textarea name="alamat"><?php echo $alamat; ?></textarea></span>
        </div>
        <div class="element-form">
            <label>Password</label>
            <span><input type="password" name="password" id="pass" /></span>
        </div>
        <div class="element-form">
            <label>Re-type Password</label>
            <span><input type="password" name="re_password" /></span>
        </div>
        <div class="element-form">
            <label for="checks"><input type="checkbox" onclick="check()" id="checks">Show Password</label>
        </div>
        <div class="element-form">
            <span><input type="submit" value="register" /></span>
        </div>

    </form>

</div>