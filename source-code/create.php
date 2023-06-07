<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("model/Pasien.class.php");
include_once("model/TabelPasien.class.php");
include_once("view/TampilPasienForm.php");

$tp = new TampilPasienForm();

if(isset($_POST['submit']))
{
    // Add Data.
    $tp->add($_POST);
}
else if(isset($_GET['show']))
{
    // Menampilkan formulir edit.
    $data = $tp->tampilEdit($_GET['show']);
    if(isset($_POST['edit']))
    {
        // Edit Data.
        $tp->edit($_POST);
    }
}
else
{
    // Menampilkan formulir tambah data.
    $data = $tp->tampil();
}