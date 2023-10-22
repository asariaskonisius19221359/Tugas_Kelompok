<h4>selamat datang pustakawan<?=$pengguna['nama_lengap'] ?? ''?>
<?php if($pengguna('tingkat') == 'PUS'){
}else{
    echo"Administrator";
} ?></h4>

<ul>
    <li><a href="<?=base_url('anggota')?>">Anggota</a></li>
    <li><a href="<?=base_url('kategori')?>">kategori</a></li>
    <li><a href="<?=base_url('penerbit')?>">penerbit</a></li>
    <li><a href="<?=base_url("")?>">Buku</a></li>
    <li><a href="<?=base_url("")?>">koleksi Buku</a></li>
    <li><a href="<?=base_url("")?>">peminjaman</a></li>
</ul>