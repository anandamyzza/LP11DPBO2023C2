<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		
		// Mengeksekusi query
		return $this->execute($query);
	}
	function delPasien($id)
	{
		// Query mysql select data pasien
		$query = "DELETE FROM pasien WHERE id=$id";
		
		// Mengeksekusi query
		return $this->execute($query);
	}
	function addPasien($data)
	{
		$NIK = $data["NIK"];
		$nama = $data["nama"];
		$tempat = $data["tempat"];
		$tl = $data["tanggal_lahir"];
		$gender = $data["gender"];
		$email = $data["email"];
		$telp = $data["telp"];

		// Query mysql add data pasien
		$query = "INSERT INTO pasien VALUES('', '$NIK', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";
		
		// Mengeksekusi query
		return $this->execute($query);
	}
	function editPasien($data)
	{
		$id = $data["id"];
		$NIK = $data["NIK"];
		$nama = $data["nama"];
		$tempat = $data["tempat"];
		$tl = $data["tanggal_lahir"];
		$gender = $data["gender"];
		$email = $data["email"];
		$telp = $data["telp"];

		// Query mysql update data pasien
		$query = "UPDATE pasien SET nik = '$NIK', nama = '$nama', tempat = '$tempat', tl = '$tl', gender = '$gender', email = '$email', telp = '$telp' WHERE id = $id";
		
		// Mengeksekusi query
		return $this->execute($query);
	}
}
