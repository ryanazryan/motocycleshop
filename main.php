<?php

	$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

?>

<!-- Menu Kategori -->
<div id="kiri">
	<?php	
		echo kategori($kategori_id);
	?>
</div>

<!-- Barang -->

<div id="kanan">

    <div id="slides">
            <?php

                $queryBanner    =   mysqli_query($koneksi, "SELECT * FROM banner WHERE status='on' ORDER BY banner_id DESC LIMIT 3");
                while($rowBanner=mysqli_fetch_assoc($queryBanner)){
                    echo "<a href='".BASE_URL."$rowBanner[link]'><img src='".BASE_URL."image/slide/$rowBanner[gambar]' class='image-standard2' style='display: block;
					margin-left: auto;
					margin-right: auto;
					width: 50%;'/></a>";
                }
            ?>
    </div>

	<div id="frame-barang">
		<ul>
			<?php

			// Display barang sesuai kategori
			if ($kategori_id) {
				$queryBarang = mysqli_query($koneksi, "SELECT * FROM barang WHERE kategori_id='$kategori_id' AND status='on' ORDER BY rand() DESC LIMIT 9");
			} else {
				$queryBarang = mysqli_query($koneksi, "SELECT * FROM barang WHERE status='on' ORDER BY rand() DESC LIMIT 9");
			}

            $no = 1;
            while ($row = mysqli_fetch_assoc($queryBarang)){
                $style  =   false;
                if($no == 3){
                    $style  = "style='margin-right:0px'";
                    $no     = 0;
                }
            
					echo "
					<li $style>
						<p class='price'>" . rupiah($row['harga']) . "</p>

						<a href='" . BASE_URL . "index.php?page=detail&barang_id=$row[barang_id]'>
							<img src='" . BASE_URL . "image/barang/$row[gambar]' class='standart-img'>
						</a>
	
						<div class='keterangan-gambar'>
							<p><a href='" . BASE_URL . "index.php?page=barang&barang_id=$row[barang_id]'>$row[nama_barang]</a></p>
							<span>Stok : $row[stok]</span>
						</div>
										
						<div class='button-add-cart'>
						<a href='" . BASE_URL . "index.php?page=tambah_keranjang&barang_id=$row[barang_id]'>Add to Cart</a>
						</div>
						
					</li>";

                $no++;
            }
			?>

		</ul>
	</div>
</div>