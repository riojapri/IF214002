<?php 
$host   = "localhost";
$dbuser = "postgres";
$dbpass = "waifu";
$port   = "5432";
$dbname = "db_dragbig";
	
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Credentials: true");
  header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT');
  header('Content-Type: application/json; charset=utf-8');
	
  $request = $_SERVER['REQUEST_URI'];
  
  function ambilSemuaDataKomiku($host, $dbuser, $dbpass, $port, $dbname) {
    try {
			
      // Coba dulu apa yang ada di sini,
			
      // Biasanya dikasih nama $conn 
      $link = new PDO("pgsql:dbname=$dbname;host=$host",$dbuser,$dbpass);
			
      $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
      $objekPerintah = $link->prepare("SELECT register.id_register,admin.nama_admin,peserta.nama_peserta,kelas_motor.nama_kelas,biaya_daftar.biaya FROM register INNER JOIN admin ON register.id_admin = admin.id_admin INNER JOIN peserta on register.id_peserta = peserta.id_peserta inner JOIN kelas_motor on register.id_kelas = kelas_motor.id_kelas INNER JOIN biaya_daftar on register.id_biaya = biaya_daftar.id_biaya ORDER BY register");
      $objekPerintah->execute();
			
      $hasilQuery = $objekPerintah->fetchAll();
			
      echo json_encode($hasilQuery);
			
      // Perintah query
			
      $objekKoneksiBasisData = null;
			
    } catch(PDOException $e) {
      // Kalo gagal, jalankan yang dibawah ini
			
      echo "Sebab gagalnya: " . $e->getMessage();
    }
  }
      ambilSemuaDataKomiku($host, $dbuser, $dbpass, $port, $dbname);  
  
?>
