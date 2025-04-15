-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 06:46 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id` int(11) NOT NULL,
  `judul` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id`, `judul`) VALUES
(1, 'prey');

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama aktor` varchar(245) NOT NULL,
  `link` varchar(112) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`id`, `judul`, `nama aktor`, `link`) VALUES
(1, 'prey', 'semi', 'semi.com'),
(2, 'prey', 'gilang', 'gjjhggvu');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `genre2` varchar(20) NOT NULL,
  `genre3` varchar(20) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `rilis` varchar(20) NOT NULL,
  `sinopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `judul`, `genre`, `genre2`, `genre3`, `rating`, `durasi`, `gambar`, `umur`, `rilis`, `sinopsis`) VALUES
(1, 'Prey', 'action', '', '', '7.2', '99 min', '1.png', 'R', '2022', 'Sinopsis film Prey mengambil latar waktu pada 1719 dengan berfokus pada Naru, anggota dari suku Indian yang merupakan penghuni asli wilayah Amerika Utara. Naru berusaha untuk memutuskan tradisi pada sukunya dengan menjadi pemburu cewek pertama. Namun, Naru justru menemukan fakta bahwa ada makhluk luar angkasa berbahaya yang memburu manusia untuk trofi dan mengancam keselamatan sukunya.'),
(2, 'Carter', 'action', '', '', '5.1', '132 min', '10.png', 'TV-MA', '2022', 'Film \'Carter\' pada intinya berkisah soal aksi Carter sebagai agen rahasia yang terpaksa menjalani sebuah misi khusus yang mengancam keselamatannya sendiri, setelah sebelumnya mengalami amnesia.'),
(3, 'Logan', 'action', 'comedy', '', '8.1', '137 min', '11.png', 'R', '2017', 'Wolverine yang mulai menua, kini hidup mengasingkan diri karena harus merawat Profesor X. Namun, kehadiran sesosok mutan gadis cilik yang diburu oleh para musuh tiba-tiba menjungkirbalikkan segalanya.'),
(4, 'The Avengers', 'action', '', 'drama', '8.0', '143 min', '12.png', 'PG-13', '2012', 'Ketika musuh yang tak terduga muncul, mengancam keselamatan dan keamanan dunia, Nick Fury, direktur Badan Perdamaian Internasional, dikenal sebagai S.H.I.E.L.D. , membutuhkan tim untuk menyelamatkan dunia dari bencana. Usaha perekrutan pun dimulai Iron Man, Captain America, Hulk, Thor, Black Widow dan Hawkeye dikumpulkan untuk menaklukkan Dewa Kehancuran, Loki, dalam usahanya menghancurkan bumi. Dengan semua gabungan kekuatan, tugas nampak lebih mudah. Namun kenyatannya tidak demikian! Para pahlawan super justru saling melawan satu sama lain Hulk melawan Captain America, siapa yang akan menang? Apakah Iron Man dapat mengalahkan kekuatan super milik Thor? Bagaimana para pahlawan super ini secara bersama-sama menghadapi bencana, melindungi masyarakat dan yang terpenting, bertahan hidup?'),
(5, 'Bullet Train', 'action', 'action', '', '7.5', '127 min', '2.png', 'R', '2022', 'Lima pembunuh bayaran beraksi di atas kereta peluru yang bergerak sangat cepat dan mengetahui bahwa mereka memiliki misi yang sama.'),
(6, 'Thirteen Lives', 'action', '', 'action', '7.8', '147 min', '3.png', 'R', '2022', 'Film ini menceritakan tentang peristiwa penyelamatan anggota tim sepak bola junior beserta pelatihnya yang terjebak di gua Tham Luang, Thailand, pada 2018 lalu.'),
(7, ' The Gray Man', 'action', '', '', '6.5', '122 min ', '4.png', 'PG-13 ', '2022', 'Film ini berfokus pada kisah pelarian karakter Gray Man (Ryan Gosling) sebagai mantan agen andalan CIA. Ia menjadi target buron nomor satu agensi tersebut.  Baca artikel CNN Indonesia \"Sinopsis The Gray Man, Agen Nomor Satu CIA Jadi Buron\" selengkapnya di sini: https://www.cnnindonesia.com/hiburan/20220722090747-220-824703/sinopsis-the-gray-man-agen-nomor-satu-cia-jadi-buron.  Download Apps CNN Indonesia sekarang https://app.cnnindonesia.com/'),
(8, 'Day Shift', 'action', '', '', '6.1', '113 min', '5.png', 'R', '2022', 'Film \'Day Shift\' pada intinya berkisah soal kehidupan Bud Jablonski (Jamie Foxx) yang menjalani profesinya sebagai pembersih kolam sekaligus diam-diam memburu vampir. Pada satu kesempatan, Bud dan kelompok pembersih kolamnya membunuh dua vampir yang terdiri dari satu wanita tua dan satu remaja.'),
(9, 'Uncharted', 'action', '', '', '6.4', '116 min', '6.png', 'PG-13', '2022', 'Nathan Drake direkrut oleh pemburu harta karun berpengalaman Victor Sullivan (Sully) untuk mengembalikan kekayaan yang dikumpulkan oleh Ferdinand Magellan dan hilang 500 tahun yang lalu oleh House of Moncada.'),
(10, 'Lightyear', 'action', '', '', '5.9', '100 min', '7.png', 'PG', '2022', 'Misi luar angkasa Buzz Lightyear (Chris Evans) menjadi serba salah ketika dia membuat kesalahan besar. Akibatnya, dia dan krunya terdampar di planet asing selama setahun. Mereka terus gigih mencari solusi untuk keluar dari planet ini.'),
(11, 'Top Gun: Maverick', 'action', '', '', '8.5', '130 min', '8.png', 'PG-13', '2022', 'Lebih dari 30 tahun mengabdi sebagai salah satu penerbang Angkatan Laut terbaik, Pete “Maverick” Mitchell berada dalam posisi dambaannya, melakukan aksi-aksi mendobrak sebagai pilot uji nan pemberani, dan menampik setiap kesempatan naik pangkat karena akan membuatnya tak bisa menerbangkan pesawatnya.'),
(12, 'Thor: Love and Thunder', 'action', '', '', '6.7', '118 min ', '9.png', 'PG-13', '2022', '\"Thor: Love and Thunder\"menceritakan Thor dalam sebuah perjalanan yang belum pernah ia jalani – pencariankedamaian batin. Namun, masa pensiunnya terganggu oleh seorang pembunuh galaksi yang dikenal sebagai Gorr sang Dewa Jagal , yang ingin memusnahkan para dewa.'),
(13, 'Titanic', 'Romance', '', '', '7.9', '194 min', '', 'PG-13', '1997', '84 tahun kemudian, seorang wanita berusia 100 tahun bernama Rose DeWitt Bukater menceritakan kisah kepada cucunya Lizzy Calvert, Brock Lovett, Lewis Bodine, Bobby Buell dan Anatoly Mikailavich di Keldysh tentang kehidupannya yang ditetapkan pada 10 April 1912, di sebuah kapal bernama Titanic ketika Rose muda menaiki kapal yang berangkat dengan penumpang kelas atas dan ibunya, Ruth DeWitt Bukater, dan tunangannya, Caledon Hockley. Sementara itu, seorang drifter dan artis bernama Jack Dawson dan sahabatnya Fabrizio De Rossi memenangkan tiket kelas tiga ke kapal dalam sebuah permainan. Dan dia menjelaskan keseluruhan cerita dari keberangkatan sampai kematian Titanic pada pelayaran pertama dan terakhirnya tanggal 15 April 1912 pukul 2:20 pagi.'),
(14, 'The Notebook', 'Romance', '', '', '7.8', '123 min', '', 'PG-13', '2004', 'Di sebuah panti jompo, penduduk Duke (James Garner) membacakan kisah romantis kepada seorang wanita tua (Gena Rowlands) yang menderita demensia pikun dengan kehilangan ingatan. Pada akhir 1930-an, Allie Hamilton (Rachel McAdams) berusia 17 tahun yang kaya sedang menghabiskan liburan musim panas di Seabrook. Pekerja lokal Noah Calhoun (Ryan Gosling) bertemu Allie di sebuah karnaval dan mereka segera jatuh cinta satu sama lain. Suatu hari, Noah membawa Allie ke sebuah rumah kuno yang dia impikan untuk dibeli dan dipulihkan dan mereka mencoba untuk bercinta tetapi diganggu oleh teman mereka. Orang tua Allie tidak menyetujui asmara mereka karena Noah milik kelas sosial lain, dan mereka pindah ke New York bersamanya. Noah menulis 365 surat (satu hari selama setahun) kepada Allie, tetapi ibunya Anne Hamilton (Joan Allen) tidak mengirimkannya kepada putrinya. Tiga tahun kemudian, Amerika Serikat bergabung dengan Perang Dunia II dan Noah dan sahabatnya Fin (Kevin Connolly) mendaftar di tentara, dan Allie bekerja sebagai perawat tentara. Dia bertemu tentara terluka Lon Hammond (James Marsden) di rumah sakit. Setelah perang, mereka bertemu satu sama lain lagi berkencan dan kemudian, Lon, yang kaya dan tampan, melamar. Sementara itu, Nuh membeli dan merenovasi rumah tua tersebut dan banyak orang yang ingin membelinya. Ketika Allie tidak sengaja melihat foto Noah dan rumahnya di koran, dia merasa terbagi antara cinta pertamanya dan komitmennya dengan Lon. Sementara itu, Duke berhenti membaca untuk wanita tua itu karena anak-anaknya mengunjunginya di panti jompo.'),
(15, 'A Walk To Remember', 'Romance', '', '', '7.3', '101 min', '', 'PG', '2002', 'Di North Carolina, khususnya di Beaufort, sebuah lelucon pada seorang pria salah dan menempatkan siswa di klinik. Carter, seorang siswa terkenal yang tidak memiliki rencana untuk masa depan, bertanggung jawab dan dipaksa untuk bergabung dalam kegiatan layanan masyarakat setelah sekolah sebagai konsekuensinya, termasuk membintangi sebagai pemeran utama dalam drama tersebut. Dan yang berpartisipasi dalam kegiatan tersebut adalah Jamie Sullivan, putri pendeta yang memiliki ambisi besar dan tidak memiliki kesamaan dengan Landon. Ketika Landon memutuskan bahwa dia ingin melakukan aktivitasnya dengan serius, dia meminta bantuan Jamie dan mulai menghabiskan sebagian besar waktunya bersamanya. Tapi dia mulai menyukainya, yang tidak dia duga. Hubungan mereka, sangat mengecewakan teman-teman lama Landon yang populer dan ayah Jamie yang sangat tegas. Tetapi ketika rahasia yang memilukan diketahui yang menguji hubungan mereka, saat itulah Landon dan Jamie menyadari arti sebenarnya dari cinta dan takdir.'),
(16, 'The Vow', 'Romance', '', '', '6.8', '104 min', '', 'PG-13', '2012', 'Leo dan Paige adalah pasangan yang baru saja menikah. Setelah kecelakaan, Paige tidak sadarkan diri, dan ketika dia bangun dia tidak ingat Leo. Orang tuanya, yang belum pernah dia lihat sejak dia dan Leo berkumpul, datang dan mengunjunginya. Dia tidak percaya bahwa dia tidak melihat mereka untuk waktu yang lama. Leo ingin membawanya pulang bersamanya tetapi orang tuanya ingin dia pergi bersama mereka. Dia pergi dengan Leo tetapi ketika dia tidak mengenali apa pun, dia pergi ke orang tuanya. Dan dia bertanya-tanya mengapa dia memutuskan kontak dengan keluarganya. Dia juga bertemu dengan mantannya dan bertanya-tanya mengapa mereka putus. Leo mencoba untuk memenangkannya kembali dengan merayunya lagi.'),
(17, 'Before Sunrise', 'Romance', '', '', '8.1', '101 min', '', 'PG-13', '1995', 'Turis Amerika Jesse dan mahasiswa Prancis Celine bertemu secara kebetulan di kereta dari Budapest ke Wina. Merasa bahwa mereka sedang mengembangkan koneksi, Jesse meminta Celine untuk menghabiskan hari bersamanya di Wina, dan dia setuju. Jadi mereka melewatkan waktu sebelum jadwal penerbangannya keesokan paginya bersama. Bagaimana dua orang asing yang sempurna terhubung begitu akrab selama satu hari? Apa hal istimewa yang mengikat dua orang begitu kuat? Ketika ikatan mereka berubah menjadi cinta, apa yang akan terjadi pada mereka keesokan paginya ketika Jesse terbang?'),
(18, 'Paper Towns', 'Romance', '', '', '6.3', '109 min', '', 'PG-13', '2015', 'Diadaptasi dari novel laris oleh penulis John Green, PAPER TOWNS adalah kisah dewasa yang berpusat pada Quentin dan tetangganya yang penuh teka-teki Margo, yang sangat menyukai misteri hingga dia menjadi salah satunya. Setelah membawanya pada petualangan sepanjang malam melalui kampung halaman mereka, Margo tiba-tiba menghilang - meninggalkan petunjuk samar untuk Quentin untuk menguraikan. Pencarian membawa Quentin dan teman-temannya yang cerdas dalam petualangan yang menggembirakan yang sama-sama lucu dan mengharukan. Pada akhirnya, untuk melacak Margo, Quentin harus menemukan pemahaman yang lebih dalam tentang persahabatan sejati - dan cinta sejati.'),
(19, 'La La Land', 'Romance', '', '', '8.0', '128 min', '', 'PG-13', '2016', 'Calon aktris menyajikan latte kepada bintang film di sela-sela audisi dan musisi jazz Sebastian mengikis dengan memainkan pertunjukan pesta koktail di bar suram. Tetapi ketika kesuksesan meningkat, mereka dihadapkan pada keputusan yang merusak jalinan cinta mereka yang rapuh, dan mimpi yang mereka usahakan dengan susah payah untuk dipertahankan satu sama lain mengancam untuk merobek mereka.'),
(20, 'Dear John\r\n', 'Romance', '', '', '6.3', '108 min', '', 'PG-13', '2010', 'Prajurit operasi khusus Angkatan Darat AS Carolina Selatan, John, sedang cuti musim panas dari pangkalannya di Jerman, mengunjungi ayahnya yang janda. Menjadi gagah di dermaga, dia berteman dengan mahasiswa Savannah, seorang mahasiswa, dan teman-temannya, seorang ayah terminal dan putra malaikatnya. John jatuh cinta dengan Savannah, yang mendiagnosa ayahnya yang tercinta, lembut tapi aneh sebagai autis ringan. Dia berencana untuk tidak mendaftar lagi, tetapi 9/11 mengubahnya, dan dia tidak akan menunggu dengan santai sementara teman-teman mereka sangat membutuhkan bantuan.'),
(21, 'The Aftermath', 'Romance', '', '', '6.3', '108 min', '', 'PG', '2019', 'Ditetapkan di Jerman pascaperang pada tahun 1946, Rachael Morgan (Keira Knightley) tiba di reruntuhan Hamburg di musim dingin yang pahit, untuk dipersatukan kembali dengan suaminya Lewis (Jason Clarke), seorang kolonel Inggris yang ditugaskan untuk membangun kembali kota yang hancur. Tetapi ketika mereka berangkat ke rumah baru mereka, Rachael terkejut mengetahui bahwa Lewis telah membuat keputusan yang tidak terduga: Mereka akan berbagi rumah besar dengan pemilik sebelumnya, seorang duda Jerman (Alexander Skarsgård) dan putrinya yang bermasalah. Dalam suasana yang penuh muatan ini, permusuhan dan kesedihan memberi jalan kepada gairah dan pengkhianatan.'),
(22, 'Five Feet Apart\r\n', 'Romance', '', '', '7.2', '116 min', '', 'PG-13', '2019', 'Stella yang berusia tujuh belas tahun menghabiskan sebagian besar waktunya di rumah sakit sebagai pasien cystic fibrosis. Hidupnya penuh dengan rutinitas, batasan, dan pengendalian diri yang semuanya diuji ketika dia bertemu Will, seorang remaja menawan yang memiliki penyakit yang sama. Ada godaan instan, meskipun batasan menentukan bahwa mereka harus menjaga jarak aman di antara mereka. Saat hubungan mereka meningkat, begitu pula godaan untuk membuang aturan ke luar jendela dan merangkul ketertarikan itu. Cinta tidak memiliki batas.'),
(23, 'Midnight Sun\r\n', 'Romance', '', '', '6.6', '91 min', '', 'PG-13', '2018', 'Berdasarkan film Jepang, Midnight Sun berpusat pada Katie, 17 tahun terlindung sejak kecil dan dikurung di rumahnya pada siang hari oleh penyakit langka yang membuat bahkan jumlah terkecil sinar matahari mematikan. Takdir campur tangan ketika dia bertemu Charlie dan mereka memulai romansa musim panas.'),
(24, 'Endless\r\n', 'Romance', '', '', '6.2', '104 min', '', 'PG-13', '2014', 'David telah naksir Jade sejak pertama kali dia melihatnya di kelas sepuluh. Dengan berakhirnya sekolah menengah, David tidak pernah berbicara dengannya sampai keluarganya tiba di The Inn, tempat David bekerja sebagai pelayan. Dia dan David jatuh cinta, cinta yang hanya tumbuh lebih kuat ketika orang tua mencoba untuk memisahkan mereka. David tahu masa lalu Jade, tetapi ketika rahasianya perlahan terungkap, kepercayaan Jade diuji dan membuat mereka bertanya-tanya apakah mereka benar-benar ditakdirkan untuk bersama.'),
(25, 'Yes Day', 'comedy\n', '', '', '5.7', '86 min', '', 'R', '2021', 'Allison dan Carlos biasa mengatakan YA untuk segala hal dalam hidup, juga ketika mereka bertemu dan kemudian menikah. Tapi kemudian mereka pindah ke pinggiran kota dan memiliki 3 anak dan hidup mereka menjadi garis panjang TIDAK. Putri tertua mereka, Katie, 14, mendapat TIDAK dari ibu untuk pergi ke konser bersama teman-temannya. Carlos juga mengatakan TIDAK kepada karyawan yang bekerja di Icarus Technologies. Allison mencoba untuk kembali ke pasar tenaga kerja tetapi tidak mendapatkan wawancara kerja. Di sekolah Katie, Allison dan Carlos diperlihatkan proyek Katie di video. Video tersebut membandingkan \"Mommy Dearest\" dengan Stalin dan Mussolini. Kemudian, konselor bimbingan dll memberikan saran mengapa dia begitu santai meskipun memiliki 6 anak. Dia memberi mereka hari YA di mana dia dan istrinya, dengan beberapa aturan dasar, mengatakan YA untuk semuanya. Ibu menyetujui 24 jam YA/hari yang menyenangkan setelah melihat foto skydivingnya yang berusia lebih dari 15 tahun. Apakah ini akan menjadi apokaliptik, seperti yang pertama ditakuti Allison, atau petualangan liar dan menyenangkan untuk kelimanya?—Scott Filtenborg\n'),
(26, 'Palm Springs', 'comedy', '', '', '7.4', '90 min', '', 'PG\n', '2020', 'Saat terjebak di sebuah pernikahan di Palm Springs, Nyles (Andy Samberg) bertemu Sarah (Cristin Milioti), pelayan kehormatan dan kambing hitam keluarga. Setelah dia menyelamatkannya dari bencana, Sarah menjadi tertarik pada Nyles dan nihilismenya yang aneh. Tapi ketika kencan dadakan mereka digagalkan oleh gangguan nyata, Sarah harus bergabung dengan Nyles dalam merangkul gagasan bahwa tidak ada yang benar-benar penting, dan mereka mulai mendatangkan malapetaka semangat pada perayaan pernikahan.\n'),
(27, 'Anchorman', 'comedy', '', '', '7.1', '94 min', '', 'PG-13\n', '2004', '\"Pada 1970-an San Diego, jurnalisme adalah profesi yang dihormati dan orang-orang benar-benar peduli dengan apa yang mereka lihat di TV. Dan pembawa berita dengan peringkat teratas di kota ini adalah Ron Burgundy. Dia menikmati perjalanannya di puncak, dan selama lima tahun terakhir. Dan tim beritanya sama baiknya dengan dia. Atlet profesional dan mantan pemain bisbol profesional Champ Kind menangani olahraga, Brick Tamland yang anehnya redup - yang hanya memiliki beberapa saluran berlangganan kabel - menangani cuaca, dan pria wanita Brian Fantana - yang koleksi wewangiannya akan ada di Guinness Book Of Records - menangani pelaporan di lapangan. Tapi sekarang semua itu akan berubah selamanya. Stasiun TV Burgundy bekerja untuk, Channel 4, telah merangkul keragaman dan telah menyewa pembawa acara wanita baru yang cantik bernama Veronica Corningstone. Sementara Ron Burgundy dan anggota tim berita Channel 4 lainnya senang berkelahi dengan pesaing, minum-minum, dan menggoda para wanita, Veronica dengan tenang naik ke puncak. Dan kesuksesan Veronica membuat Ron Burgundy gila. Begitu banyak campur tangan Veronica yang menyebabkan Ron diturunkan pangkatnya dan akhirnya kehilangan pekerjaannya dengan Channel 6. Sekarang tanpa apa-apa, Ron harus menemukan cara untuk kembali ke puncak - dan itu melibatkan cerita tentang panda Cina langka yang melahirkan di AS tanah. Akankah Ron menjadi orang yang melaporkan cerita di tingkat nasional?—halo1k\n\"\n'),
(28, 'This Is the End', 'comedy', '', '', '6.6', '107 min', '', 'D\n', '2013', 'Semua yang diharapkan Jay Baruchel datang ke LA adalah waktu yang menyenangkan bersama Seth Rogen dengan semua pesta liar untuk mereka sendiri dan di pesta pindah rumah James Franco. Tiba-tiba, Rapture melanda dan Kiamat Alkitab telah dimulai. Sekarang, Jay dan Seth mati-matian berlindung di rumah James untuk diselamatkan bersama beberapa teman lainnya. Bersama-sama, mereka harus bersatu untuk mencoba bertahan di akhir dunia, hanya bagi Jay untuk menemukan bahwa mereka semua terlalu bodoh dan dangkal untuk melakukannya sampai mereka menemukan satu-satunya jalan keluar.—Kenneth Chisholm (kchishol@rogers.com)\n'),
(29, 'Bridesmaids', 'comedy', '', '', '6.8', '125 min', '', 'R\n', '2011', 'Annie (Kristen Wiig), adalah pengiring pengantin yang hidupnya terurai saat dia memimpin sahabatnya Lillian (Maya Rudolph) dan sekelompok pengiring pengantin yang berwarna-warni (Rose Byrne, Melissa McCarthy, Wendi McLendon-Covey, dan Ellie Kemper) di alam liar. menyusuri jalan menuju pernikahan. Kehidupan Annie berantakan, tetapi ketika dia mengetahui sahabat seumur hidupnya bertunangan, dia hanya harus melayani sebagai pelayan kehormatan Lillian. Meskipun jatuh cinta dan bangkrut, Annie menggertak melalui ritual yang mahal dan aneh. Dengan satu kesempatan untuk membuatnya sempurna, dia akan menunjukkan kepada Lillian dan pengiring pengantinnya seberapa jauh seorang teman sejati akan pergi untuk seorang teman.—Anonim\n'),
(30, 'Were the Millers', 'comedy', '', '', '7.0', '110 min', '', '17+\n', '2013', 'Setelah dirampok selama seminggu, pengedar ganja kecil-kecilan, David, dipaksa oleh bosnya untuk pergi ke Meksiko untuk mengambil banyak ganja. Untuk meningkatkan peluangnya untuk melewati perbatasan, David meminta penari telanjang Rose yang bangkrut dan dua remaja lokal untuk bergabung dengannya dan berpura-pura mereka sedang berlibur keluarga.—Peter Brandt Nielsen\n'),
(31, 'The 40 year Old Virgin', 'comedy', '', '', '7.1', '116 min', '', '18+\n', '2022', 'Andy yang berusia empat puluh tahun, seorang petugas pengiriman toko elektronik, adalah seorang geek stereotip, yang bermain video game dan mengurus figur aksi koleksinya. Dia tidak memiliki teman sejati dan menghabiskan sebagian besar waktunya jauh dari pekerjaan sendirian. Meskipun secara filosofis memiliki ketertarikan pada lawan jenis sebagaimana disaksikan oleh ereksi paginya yang konstan dan tidak terkendali, ia masih perawan. Dia tidak pernah berencana untuk tidak berhubungan seks, tetapi menjadi semakin sulit untuk mendapatkan pengalaman pertama itu seiring bertambahnya usia, ke titik di mana, baginya, itu menjadi kenyataan dalam hidupnya. Ketika rekan kerjanya mengetahuinya, beberapa orang mengejek dan mengejeknya, sementara sekelompok kecil yang terdiri dari Dave, Jay, dan Cal mengambil tindakan sendiri untuk membantunya bercinta, meskipun masing-masing dari ketiganya memiliki masalah hubungan mereka sendiri yang membuat mereka mungkin bukan orang terbaik. untuk memberikan nasihat atau bantuan. Andy juga mendapat beberapa saran tak terduga dari beberapa orang yang berdiri di sela-sela hidupnya. Di luar saran itu, Andy harus menjadi orang yang mengambil langkah terakhir menuju kenyataan, dia tidak hanya tidak memiliki pengalaman praktis, tetapi juga tidak memiliki pengalaman teoretis karena dia bahkan tidak menonton atau tertarik pada pornografi atau masturbasi. Beberapa saran yang dia terima berpusat pada wanita sebenarnya yang seharusnya menjadi yang pertama baginya. Terlepas dari saran itu, dia memutuskan bahwa wanita yang benar-benar dia inginkan adalah Trish, pengecer khusus dengan outlet batu bata dan mortar yang agak tidak berguna di seberang toko elektronik. Ketika Andy mengejar kemudian akhirnya jatuh cinta pada Trish, dia harus memutuskan seberapa banyak dirinya yang sebenarnya akan dia ungkapkan padanya.—Huggo\n'),
(32, 'Scooby-Doo', 'comedy', '', '', '5.2', '89 min', '', 'R\n', '2002', '\"The Mystery Inc. gang have gone their separate ways and have been apart for two years, until they each receive an invitation to Spooky Island. Not knowing that the others have also been invited, they show up and discover an amusement park that affects young visitors in very strange ways. Fred, Daphne, Velma, Shaggy and Scooby soon realize that they cannot solve this mystery without help from each other.—Doug_Funnie\n\n\"\n'),
(33, 'Deadpool', 'comedy', '', '', '8.0', '108 min', '', 'D\n', '2016', 'Ini adalah kisah asal mula mantan agen Pasukan Khusus yang menjadi tentara bayaran Wade Wilson, yang setelah mengalami eksperimen jahat yang membuatnya memiliki kekuatan penyembuhan yang dipercepat, mengadopsi alter ego Deadpool. Berbekal kemampuan barunya dan selera humor yang gelap dan bengkok, Deadpool memburu pria yang hampir menghancurkan hidupnya.—20th Century Fox\n'),
(34, 'School of Rock', 'comedy', '', '', '7.2', '109 min', '', '13+\n', '2004', 'Setelah dikeluarkan dari band rocknya, gitaris pemalas Dewey Finn menghadapi segunung hutang dan depresi. Dia berbagi apartemen dengan sahabatnya, Ned Schneebly, seorang anggota band lama yang sekarang menjadi guru pengganti. Dewey menerima pekerjaan sebagai guru pengganti di sekolah dasar swasta yang sombong di mana sikap dan tingkah lakunya berdampak besar pada murid-muridnya. Dia mengetahui bahwa mereka adalah musisi muda berbakat, dan dia memutuskan untuk membentuk band rock bersama mereka untuk memenangkan hadiah uang $10.000 dalam kontes band lokal. Begitu Dewey memenangkan kompetisi yang disebut \"Battle of the Bands\", hadiah uang akan memecahkan masalah keuangannya dan menempatkannya kembali dalam sorotan musik rock.—Steve Shedloski\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(12, 0, '  .........', 'Pocong Mumun', '2022-09-04 21:17:11'),
(13, 0, '  Halo', 'davy', '2022-09-04 22:40:15'),
(14, 12, 'Haloo', 'semi', '2022-09-04 22:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like_unlike`
--

CREATE TABLE `tbl_like_unlike` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `like_unlike` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_like_unlike`
--

INSERT INTO `tbl_like_unlike` (`id`, `member_id`, `comment_id`, `like_unlike`, `date`) VALUES
(44, 1, 12, 0, '2022-09-05 02:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `email`, `username`, `password`, `level`) VALUES
('admin', 'admin@gmail.com', 'admin', 'admin123', 1),
('emil', 'emil@gmail.com', 'emil', '56ab3b73804c02e2084b159958e9c27b', 0),
('semi', 'semi@gmail.com', 'semi', 'aeea0a1665ec1af469336909810645b5', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_like_unlike`
--
ALTER TABLE `tbl_like_unlike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_like_unlike`
--
ALTER TABLE `tbl_like_unlike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
