<?php
	$nama = $_POST["nama"];
	$dob = $_POST["dob"];
	$jantina = $_POST["radio-choice-h-1"];
	$menjahit = $_POST["checkbox-v-1a"];
	$memasak = $_POST["checkbox-v-1b"];
	$mengemas = $_POST["checkbox-v-1c"];
	$jenis = $_POST["select-native-1"];
	$komen = $_POST["textarea-1"];
	
	
	
	echo "Nama: $nama <br />
			Tarikh Lahir: $dob <br />
			Jantina: $jantina <br />
			Menjahit: $menjahit <br />
			Memasak: $memasak <br />
			Mengemas: $mengemas <br />
			Jenis Pekerjaan: $jenis <br />
			Komen: $komen";

?>