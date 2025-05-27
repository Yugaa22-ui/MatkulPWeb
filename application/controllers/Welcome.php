<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');

		// echo base_url();

		// $nama = "yoga";
		// $umur = 20;
		// echo "Nama saya $nama, umur saya $umur tahun<br>";
		// echo "Nama saya $nama, umur saya $umur tahun<br>";
		// echo "Nama saya $nama, umur saya $umur tahun<br>";

		$panjang = 5;
		$lebar = 3;
		// $luas = $panjang * $lebar;
		// $luas += 5;
		// echo "Luas = $luas";

		// if($panjang == 6 && $lebar = 4) {
		// 	echo 'true';
		// }
		// elseif ($lebar == 3) {
		// 	echo "lebar sama dengan 3";
		// }
		// else {
		// 	echo 'false';
		// }

		// echo $panjang > $lebar ? 'true' : 'false';

		// for ($i = 1; $i < 10; $i++) {
		// 	echo "Urutan ke-$i <br>";
		// }

		// $array = array('Merah', 'Biru', 'Kuning');
		// foreach ($array as $key => $value) {
		// 	$key += 1;
		// 	echo $key . ". " . $value . "<br>";
		// }
		// $array1 = ["Yoga", 20];
		// $array2 = ["nama" => "Yoga", "umur" => 20, "alamat" => "Jl. Kediri No. 10"];

		// print_r($array[0]);

		$mahasiswa = [
			[
				"nama" => "Andi",
				"nim" => "220101",
				"jurusan" => "Informatika",
				"nilai" => [90, 85, 88]
			],
			[
				"nama" => "Budi",
				"nim" => "220102",
				"jurusan" => "Sistem Informasi",
				"nilai" => [75, 80, 70]
			],
			[
				"nama" => "Citra",
				"nim" => "220103",
				"jurusan" => "Teknik Komputer",
				"nilai" => [95, 92, 94]
				]
			];

		// print_r($mahasiswa[0]['nama']);
		foreach ($mahasiswa as $key => $value) {
			echo $key . ". " . $value['nama'] . "<br>";
		}
	}
}