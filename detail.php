<div id="kiri">

	<div id="menu-kategori">
	
			<?php
				echo kategori($kategori_id);
			?>
		
	</div>
</div>

<div id="kanan">
	<?php	
		$barang_id = $_GET['barang_id'];

		$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE barang_id='$barang_id' AND status='on'");
		$row = mysqli_fetch_assoc($query);

		echo "<div id='detail-barang'>
					<h2>$row[nama_barang]</h2>
					<div id='frame-gambar'>
						<img src='".BASE_URL."image/barang/$row[gambar]' class='image-standard2'/>
					</div>
					<div id='frame-harga'>
						<span>".rupiah($row['harga'])."</span>
						<a href='".BASE_URL."tambah_keranjang.php?barang_id=$row[barang_id]'>+ add to cart</a>
					</div>
					<div id='keterangan'>
						<b>Keterangan : </b> $row[spesifikasi]
					</div>
				</div>";

	?>
</div>