<?php
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$banyak = $_POST['banyak'];

// Pengelolaan data untuk diubah dan dihapus
$data = array();

// Proses algoritma percabangan untuk Judul Buku, Tarif, dan Jumlah Bayar
if ($kode == 'C') {
    $judul = 'Cerpen';
    $tarif = 500;
    $jumlah_bayar = $banyak * $tarif;

    $data[] = array("Nama Peminjam" => $nama, "Kode Jenis Buku" => $kode, "Judul Buku" => $judul, "Banyak Pinjam" => $banyak, "Tarif" => $tarif, "Jumlah Bayar" => $jumlah_bayar);
} elseif ($kode == 'K') {
    $judul = 'Komik';
    $tarif = 700;
    $jumlah_bayar = $banyak * $tarif;

    $data[] = array("Nama Peminjam" => $nama, "Kode Jenis Buku" => $kode, "Judul Buku" => $judul, "Banyak Pinjam" => $banyak, "Tarif" => $tarif, "Jumlah Bayar" => $jumlah_bayar);
} elseif ($kode == 'N') {
    $judul = 'Novel';
    $tarif = 1000;
    $jumlah_bayar = $banyak * $tarif;

    $data[] = array("Nama Peminjam" => $nama, "Kode Jenis Buku" => $kode, "Judul Buku" => $judul, "Banyak Pinjam" => $banyak, "Tarif" => $tarif, "Jumlah Bayar" => $jumlah_bayar);
}

// Tampilkan data dalam format output tabel
echo "<table border='1'>";
echo "<tr><th>No.</th><th>Nama Peminjam</th><th>Kode Jenis Buku</th><th>Judul Buku</th><th>Banyak Pinjam</th><th>Tarif</th><th>Jumlah Bayar</th></tr>";
$no = 1;
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['Nama Peminjam'] . "</td>";
    echo "<td>" . $row['Kode Jenis Buku'] . "</td>";
    echo "<td>" . $row['Judul Buku'] . "</td>";
    echo "<td>" . $row['Banyak Pinjam'] . "</td>";
    echo "<td>" . $row['Tarif'] . "</td>";
    echo "<td>" . $row['Jumlah Bayar'] . "</td>";
    echo "</tr>";
    $no++;
}
echo "</table>";

// Pengurutan data A-Z berdasarkan Nama Peminjam
usort($data, function($a, $b) {
    return $a['Nama Peminjam'] <=> $b['Nama Peminjam'];
});

// Pengelolaan data untuk diubah dan dihapus
// Misalnya, untuk mengubah data berdasarkan index tertentu
$data[0]['Nama Peminjam'] = 'John Doe';

// Untuk menghapus data berdasarkan index tertentu
unset($data[1]);

// Setelah pengubahan dan/atau penghapusan, tampilkan kembali data dalam format output tabel
echo "<h2>Data Setelah Pengubahan dan Penghapusan</h2>";
echo "<table border='1'>";
echo "<tr><th>No.</th><th>Nama Peminjam</th><th>Kode Jenis Buku</th><th>Judul Buku</th><th>Banyak Pinjam</th><th>Tarif</th><th>Jumlah Bayar</th></tr>";
$no = 1;
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $row['Nama Peminjam'] . "</td>";
    echo "<td>" . $row['Kode Jenis Buku'] . "</td>";
    echo "<td>" . $row['Judul Buku'] . "</td>";
    echo "<td>" . $row['Banyak Pinjam'] . "</td>";
    echo "<td>" . $row['Tarif'] . "</td>";
    echo "<td>" . $row['Jumlah Bayar'] . "</td>";
    echo "</tr>";
    $no++;
}
echo "</table>";
?>
