<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Arya</title>
    <style>
         * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: bisque;
        border-radius: 10px;
        margin-top: 40px;
        margin-bottom: 40px;
        }
        h1{
            text-align: center;
        }
        h1, h2, h3 {
        color: #333;
        }
        .personal-info p{
        margin: 5px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .personal-info h2{
        margin: 5px 0;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .education li, .work-experience li {
        margin-bottom: 20px;
        }

        .education h3, .work-experience h3 {
        margin-bottom: 5px;
        }

        .education p, .work-experience p {
        margin: 5px 0;
        }
        img {
        width: 150px;
        height: 170px;
        border-radius: 50%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        }
    </style>
</head>
<body>
    <?php $this->load->view('navhome/navbar'); ?>
    <div class="container">
    <h1>Curriculum Vitae</h1>
    <div class="personal-info">
      <h2>Data Diri</h2>
      <img src="<?=base_url("assets/aryaganteng.jpeg")?>" alt="fotocv">
      <p><strong>Nama:</strong> Arya Wardhana</p>
      <p><strong>Alamat:</strong> Pondok Wage indah 2</p>
      <p><strong>Email:</strong> aryawardhana089@gmail.com</p>
      <p><strong>Telepon : </strong><a href="https://wa.me/6289676948802">WA Contact Me</a></p>
	  <p><strong>Instagram : </strong><a href="https://www.instagram.com/aryawardhanas/">Instagram</a></p>
    </div>
    <h2>Pendidikan</h2>
    <ul class="education">
      <li>
        <h3>Universitas ITTELKOM SURABAYA</h3>
        <p><strong>Jurusan:</strong> Teknologi Informasi</p>
        <p><strong>Gelar:</strong> Sarjana Komputer</p>
        <p><strong>Tahun:</strong> 2020 - 2023</p>
      </li>
      <li>
        <h3>SMAN 1 TAMAN</h3>
        <p><strong>Jurusan:</strong> IPA</p>
        <p><strong>Tahun:</strong> 2017 - 2020</p>
      </li>
    </ul>
    <h2>Pengalaman Kerja</h2>
    <ul class="work-experience">
      <li>
        <h3>Perusahaan ABC</h3>
        <p><strong>Jabatan:</strong> Web Developer</p>
        <p><strong>Tahun:</strong> 2018 - 2020</p>
        <p><strong>Deskripsi:</strong> Bertanggung jawab dalam pengembangan aplikasi web menggunakan HTML, CSS, dan JavaScript.</p>
      </li>
      <li>
        <h3>Perusahaan XYZ</h3>
        <p><strong>Jabatan:</strong> Frontend Developer</p>
        <p><strong>Tahun:</strong> 2020 - Sekarang</p>
        <p><strong>Deskripsi:</strong> Mengembangkan antarmuka pengguna responsif menggunakan HTML, CSS, dan JavaScript.</p>
      </li>
    </ul>
  </div>
</body>
</html>