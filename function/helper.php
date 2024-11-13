<?php	
define("BASE_URL", "http://localhost/motocycleshop/");

$arrayStatusPesanan[0] = "Menunggu Pembayaran";
$arrayStatusPesanan[1] = "Pembayaran Sedang Di Validasi";
$arrayStatusPesanan[2] = "Lunas";
$arrayStatusPesanan[3] = "Pembayaran Di Tolak";

function rupiah($angka) {
    $hasilRupiah = "Rp." . number_format($angka, 2, ',', '.');
    return $hasilRupiah;
};

function kategori($kategori_id = false) {
    global $koneksi;

    $string = "<div id='menu-kategori'>";

        $string .="<ul>";

                $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on' ORDER BY kategori ASC");

                while ($row = mysqli_fetch_array($query)) {
                    if ($kategori_id == $row['kategori_id']) {
                        $string .= "<li><a class='active' href='" . BASE_URL . "index.php?kategori_id=$row[kategori_id]'>$row[kategori]</a></li>";
                    } else {
                        $string .= "<li><a href='" . BASE_URL . "index.php?kategori_id=$row[kategori_id]'>$row[kategori]</a></li>";
                    }
                }
	    $string .= "</ul>";
    
    $string .= "</div>";

    return $string;
		
}
?>