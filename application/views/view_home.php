<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Home</h1>
	<h2>Selamat datang, <?php echo $this->session->userdata("username") ?>!</h2>
	<p>Anda telah berhasil login. Dibutuhkan data session username valid setiap kali Anda masuk ke halaman Home ini. Untuk proses pengujian berjalannya session, lakukan pengujian berikut:</p>
	<ol>
		<li>Akses halaman <a href="<?php echo base_url("login") ?>">Login</a>. Karena Anda telah memiliki session username maka controller login telah mengarahkan Anda kembali ke halaman Home ini kembali.</li>
		<li>Upload foto <a href="<?php echo base_url("upload") ?>">Upload</a>
		<li>Silahkan Anda <a href="<?php echo base_url("home/logout") ?>">Logout</a> dan kembali akses halaman ini di URL http://localhost/ci_modul_file_upload/home. Anda akan perhatikan bahwa Anda tidak bisa mengakses halaman Home ini kembali karena data session username tidak ada atau sudah di hapus (destroy saat logout) </li>
	</ol>
</body>
</html>