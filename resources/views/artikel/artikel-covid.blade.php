@extends('layouts.artikellayout')

@section('title', 'CInfo')
@section('tantangan', 'Anda di tantang mengirimkan foto sedang mencuci tangan')

@section('content')
    <h1>Tentang COVID-19</h1>
    <small>12/4/2020</small>
    <hr>
    <img src="storage/assets/img/artikel-covid2.jpg" class="img-fluid" alt="Responsive image">
    <div style="margin: 30px 0;">
        <ul>
            <li><h4>Sejarah Penemuan</h4></li>
            <p>Pada tanggal 31 Desember 2019, World Health Organization (WHO) mendapatkan informasi mengenai kasus pneumonia yang 
                terjadi di kota Wuhan, Provinsi Hubei, Cina.Tanggal 7 Januari 2020, otoritas Cina mengkonfirmasi telah 
                mengidentifikasi virus baru, yaitu virus Corona, yang merupakan famili virus flu, seperti virus SARS dan MERS, yang 
                mana dilaporkan lebih dari 2.000 kasus infeksi virus tersebut terjadi di Cina, termasuk di luar Provinsi Hubei.Virus 
                Corona (CoV) merupakan famili virus yang menyebabkan penyakit mulai dari flu biasa hingga penyakit yang lebih berat 
                seperti Middle East Respiratory Syndrome (MERS-SoV) dan Severe Acute Respiratory Syndrome (SARS-CoV). Pada 11 
                Februari 2020, WHO mengumumkan nama virus Corona jenis baru tersebut adalah Corona Virus Disease 2019 (disingkat menjadi COVID-19).</p>
            <li><h4>Masa Inkubasi</h4></li>
            <p>Masa inkubasi dapat bervariasi antar pasien, yaitu 2-14 hari setelah terpapar virus berdasarkan periode inkubasi yang 
                ditunjukkan sebelumnya pada virus MERS. Masa inkubasi 24 hari telah diamati dalam penelitian terbaru. WHO mengatakan 
                periode inkubasi yang panjang dapat mencerminkan paparan ganda Coronavirus.Menurut laporan terbaru, ada kemungkinan 
                orang yang terinfeksi Covid-19 dapat menular sebelum menunjukkan gejala yang signifikan.</p>
            <li><h4>Penularan</h4></li>
            <p>Penularan dari orang ke orang diperkirakan terjadi melalui droplet ketika orang yang terinfeksi batuk atau bersin, 
                mirip dengan bagaimana influenza dan patogen pernapasan lainnya yang dapat terhirup ke dalam paru-paru. Penularan 
                Covid-19 dapat juga terjadi dengan menyentuh permukaan atau objek yang memiliki virus di atasnya dan kemudian orang 
                tersebut menyentuh mulut, hidung, atau mungkin mata mereka sendiri.</p>
            <br>
            <h4>Pencegahan Covid</h4>
            <li><p>Cuci tangan selama 20 detik dengan sabun dan air mengalir sesuai dengan standar WHO</p></li>
            <li><p>Hindari kerumunan/keramaian</p></li>
            <li><p>Jaga posisi jarak dengan orang lain</p></li>
            <li><p>Hindari melakukan kontak langsung dengan orang yang sakit</p></li>
            <li><p>Konsumsi secara rutin vitamin yang dapat meningkatkan kekebalan tubuh saat sehat dan mempercepat penyembuhan saat sedang sakit</p></li>
            <li><p>Gunakan masker saat keluar rumah</p></li>
            <li><p>Membersihkan dan mendisinfeksi secara berkala barang-barang yang sering disentuh</p></li>
        </ul>
        <br>
        <h5>Apakah Sudah Ada Vaksin atau Obat untuk Covid-19?</h5>
        <p>     Belum ada vaksin atau pengobatan spesifik untuk virus Covid-19 hingga saat ini. Namun, gejala yang disebabkan oleh virus 
            ini dapat diobati. Oleh karena itu pengobatan harus didasarkan pada kondisi klinis pasien dan perawatan suportif dapat 
            sangat efektif.</p>
        <h5>Adakah Antibiotik untuk Mencegah dan Mengobati Covid-19?</h5>
        <p>     Antibiotik tidak bekerja melawan virus. Antibiotik digunakan hanya untuk melawan bakteri. Antibiotik tidak boleh digunakan 
            sebagai sarana pencegahan atau pengobatan infeksi virus. Namun, antibiotik akan diberikan karena infeksi sekunder bakteri 
            mungkin terjadi saat pasien tersebut dirawat di rumah sakit.</p>
    </div>
@endsection