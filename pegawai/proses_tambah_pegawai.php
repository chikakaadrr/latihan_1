<?php
if($_POST){
    $id=$_POST['id'];
    $NIK=$_POST['NIK'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_tlep=$_POST['no_tlep'];
    $jabatan= $_POST['jabatan'];
    $jenis_kelamin=$_POST['gender']; // Sesuaikan dengan nama field di form

    if(empty($nama)){
        echo "<script>alert('Nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif(empty($id)){
        echo "<script>alert('ID tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif(empty($NIK)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi.php";$insert=mysqli_query($conn,"INSERT INTO siswa (id, nik, nama, alamat, no_tlep, jabatan, jenis_kelamin) VALUES ('".$id."','".$NIK."','".$nama."','".$alamat."','".$no_tlep."','".$jabatan."','".$jenis_kelamin."')");

        if(!$insert){
            die("Query error: " . mysqli_error($conn));
        }        
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>
