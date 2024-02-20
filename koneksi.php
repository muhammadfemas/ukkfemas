<?php
class Koneksi {
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "kasir_femas";

	public function getConnection() {
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);

		if ($conn->connect_error) {
			die("Koneksi gagal: " . $conn->connect_error);
		}

		return $conn;
	}
}
?>