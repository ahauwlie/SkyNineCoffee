-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2018 at 08:22 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skynine_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_ar` int(3) NOT NULL,
  `judul_ar` varchar(255) NOT NULL,
  `isi_ar` text NOT NULL,
  `sumber_ar` varchar(100) NOT NULL,
  `tag_ar` varchar(25) NOT NULL,
  `thumb_ar` varchar(255) NOT NULL,
  `date_ar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_ar`, `judul_ar`, `isi_ar`, `sumber_ar`, `tag_ar`, `thumb_ar`, `date_ar`) VALUES
(1, 'Suka Kopi? \r\nIni 7 Jenis Kopi yang Perlu Diketahui', 'Kedai kopi atau coffee shop menjadi salah satu tren yang berkembang pesat di Indonesia selama beberapa tahun belakangan ini. Tak lagi kaku atau mengusung kesan yang begitu klasik, kebanyakan coffee shop saat ini justru hadir dalam konsep modern yang lebih kekinian dan jauh dari kata membosankan. Bisa jadi, kamu adalah salah satu dari ribuan anak muda yang hobi nongkrong dan menghabiskan waktu di coffee shop.\r\n\r\nUntuk kamu yang suka nongkrong dan menikmati segelas kopi panas atau dingin  di coffee shop, pastikan sudah memahami dengan baik istilah mengenai berbagai macam kopi yang biasanya disuguhkan setiap coffee shop.\r\n\r\nHal ini tentu akan membuat kamu lebih familiar dan ingin mencicipi berbagai jenis minuman berkafein ini. Simak beberapa istilah mengenai kopi yang wajib kamu pahami dan akan sering kamu temui di coffee shop berikut ini:\r\n\r\n1. Espresso\r\nMinuman kopi yang satu ini selalu hadir dalam cangkir berukuran mini yang biasa disebut espresso shot, sebab rasanya memang begitu pahit dan “berat”. Espresso merupakan ekstrak biji kopi yang diproses menggunakan sebuah mesin khusus, sehingga saripati kopinya terpisah dengan ampas kopi itu sendiri.\r\n\r\nSesaat setelah mengalalami proses ini, espresso biasanya segera disajikan dalam cangkir kecil untuk bisa segera dinikmati. Kopi murni yang tidak menggunakan campuran ini biasanya akan digunakan sebagai bahan dasar untuk olahan jenis kopi lainnya yang menggunakan tambahan krim atau susu.\r\n\r\n2. Americano\r\nMinuman kopi yang satu ini merupakan olahan espresso yang paling dasar. Americano dibuat dengan menggunakan satu shot espresso yang dicampurkan dengan air panas saja, sehingga menghasilkan secangkir kopi yang lebih “ringan” dan rasanya pun tak terlalu pahit seperti espresso. Americano ini bisa menjadi pilihan yang tepat, bagi kamu yang menyukai kopi tanpa bahan tambahan lain, namun juga tidak ingin  kopi yang terlalu pahit.\r\n\r\n3. Latte\r\nRasanya memang creamy dan memiliki tampilan yang menarik saat disajikan, membuat kopi yang satu ini menjadi salah satu yang paling banyak disukai. Latte merupakan olahan kopi yang dibuat dengan paduan espresso dan juga susu, di mana minuman ini memiliki kandungan susu yang lebih banyak daripada kopi.\r\n\r\nHal itu, jelas latte akan memiliki rasa dan aroma kopi yang tidak begitu dominan. Minuman yang satu ini juga sering hadir dalam tampilan yang biasanya dihiasi dengan latte art, yaitu berupa kreatifitas barista dalam menggambar pada permukaan kopi seperti gambar love, pohon, bunga, abstrak dan sebagainya.\r\n\r\n4. Macchiato\r\nJika latte memiliki kandungan espresso dalam jumlah yang kecil, maka jenis minuman yang satu ini hadir dalam takaran espresso yang lebih banyak lagi. Untuk menghasilkan secangkir macchiato yang nikmat, maka dibutuhkan komposisi kopi dan susu dengan jumlah perbandingan 4:1.\r\n\r\nAda dua jenis macchiato yang bisa dijadikan pilihan, yakni latte macchiato dan juga espresso macchiato. Bedanya, latte macchiato merupakan secangkir kopi yang dibuat dengan mamasukkan sedikit espresso ke dalam segelas susu, sedangkan espresso macchiato justru dihasilkan dengan segelas espresso yang ditambahkan sedikit saja susu.\r\n\r\n5. Piccolo\r\nPiccolo merupakan jenis latte yang disajikan dengan ristretto, di mana kopi ini mengalami proses ekstraksi espresso yang sangat baik, sehingga menghasilkan kopi yang nikmat. Jenis kopi yang satu ini hanya memiliki kadar asam rendah dan memberi sensasi rasa pahit dan manis yang berimbang.\r\n\r\n6. Cold Brew\r\nKopi unik ini diseduh tanpa menggunakan air panas. Cold brew hanya mengalami proses penyeduhan air dingin dengan suhu ruang selama beberapa jam, sehingga menghasilkan kopi dengan aroma dan sensasi rasa yang khas.\r\n\r\n7. Affogato\r\nMinuman kopi unik yang satu ini, akan menjadi pilihan untuk kamu yang suka sensasi rasa tidak biasa di dalam secangkir kopi. Affogato merupakan secangkir kopi yang dibuat dengan menambahkan sesendok es krim vanila yang nikmat.', 'https://www.cermati.com/artikel/suka-kopi-ini-7-jenis-kopi-yang-perlu-diketahui', 'jenis_kopi', 'affogato.jpg', '2018-08-02'),
(2, 'KOPI, SECANGKIR MINUMAN YANG NIKMAT~', 'Kopi merupakan salah satu minuman yang paling digemari banyak orang. Dari setiap tiga orang di dunia, salah satunya adalah peminum kopi. Kopi memang sungguh nikmat jika diminum baik pagi hari, atau saat malam hari ketika pekerjaan menumpuk. Kopi merupakan salah satu minuman yang paling dinikmati banyak orang, yang tidak sekadar diteguk saja, namun juga dinikmati. Bisnis kopi pun telah menjadi bisnis puluhan milyar dolar, yang hanya mampu disaingi oleh bisnis minyak bumi.\r\n\r\nSejarah Penyebaran Kopi\r\nBiji tanaman kopi dipanggang lalu dihaluskan dan dihidangkan. Metode pemanggangan biji kopi sendiri belum diketahui kapan dimulainya. Namun tanaman kopi berasal dari dataran tinggi di Ethiopia, yang pada saat itu merupakan tanaman liar di Ethiopia. Lalu tanaman kopi dari sini dikembangkan di Semenanjung Arab sekitar abad ke-15, yang terkenal menjadi Kopi Arabika. Kopi Arabika saat ini menjadi jenis kopi yang paling banyak diproduksi di dunia yaitu mencapai lebih dari 60 persen produksi kopi dunia.\r\nMenurut legenda, kopi ditemukan oleh seorang pemuda Arab bernama Kaldi, seorang penggembala kambing. Ia selalu memperhatikan bahwa kambingnya selalu menunjukkan gejala gembira setelah menggigit biji dan daun suatu tanaman hijau. Karena penasaran, ia mencoba biji tanaman tersebut dan merasakan efek semangat serta gembira. Akhirnya penemuan ini menyebar dari mulut ke mulut, sejak itu lahirlah kopi menurut legenda di Arab.\r\nPada tahun 1610, tanaman kopi pertama ditanam di daerah India. Bangsa Belanda mulai mempelajari pengembangbiakan kopi pada tahun 1614. Lalu pada tahun 1616, mereka berhasil memperoleh bibit dan tanaman kopi yang subur dan langsung mendirikan perkebunan kopi di Srilanka dan tanah Jawa (Indonesia) pada tahun 1699. Kemudian oleh bangsa Belanda, tanaman ini disebar ke koloni Belanda di Amerika Tengah seperti di Suriname dan Kepulauan Karibia. Kemudian bangsa Perancis juga tertarik dengan perdagangan kopi ini. Mereka membeli bibit kopi dari Belanda lalu dikembangkan di Pulau Réunion sebelah timur Madagaskar. Namun mereka gagal mengembangkan kopi di sini. Lalu pada tahun 1723, bangsa Perancis mencoba mengembangkan tanaman kopi di daerah Pulau Martinik. Pada tahun 1800-an, tanaman kopi dikembangkan di Hawaii. Belakangan tanaman ini juga dikembangkan di Brasil dan daerah-daerah lainnya.\r\n \r\nAsal Kata Kopi\r\nKata kopi atau dalam bahasa Inggris coffee berasal dari bahasa Arab qahwah, yang berarti kekuatan. Kemudian kata kopi yang kita kenal saat ini berasal dari bahasa Turki yaitu kahveh yang kemudian belakangan menjadi koffie dalam bahasa Belanda dan coffee dalam bahasa Inggris. Kata tersebut diserap ke dalam bahasa Indonesia menjadi kopi.\r\n \r\nKopi pada Zaman Dahulu hingga Sekarang\r\nAwalnya kopi digunakan sebagai produk makanan. Kemudian kopi digunakan sebagai pengganti minuman anggur. Belakangan kopi digunakan juga sebagai obat. Dan saat ini kopi terkenal sebagai minuman yang cukup digemari.\r\nPada awalnya kopi digunakan sebagai makanan. Seluruh biji kopi dihancurkan, lalu ditambahkan minyak. Lalu adonan ini dibentuk berbentuk bundar dan menjadi makanan. Sampai saat ini, beberapa suku di Afrika masih memakan kopi dalam bentuk seperti itu.\r\n\r\nBelakangan, kopi digunakan sebagai pengganti minuman anggur. Biji kopi dibuat sebagai minuman yang mirip dengan anggur. Beberapa orang membuat minuman seperti ini dengan menuangkan air mendidih ke biji kopi yang sudah dikeringkan.\r\nSebagai obat, kopi dapat bermanfaat untuk mengobati migrain, sakit kepala, gangguan jantung, asma kronis dan gangguan buang air. Meski demikian, untuk konsumsi kopi berlebih bisa berakibat buruk. Jika mengkonsumsi kopi secara belebih dapat meningkatkan asam lambung, menyebabkan ketegangan, dan mempercepat detak jantung. Selain itu, konsumsi kopi secara berlebih, sering dikaitkan dengan sakit maag.\r\nBelakangan, kopi digunakan sebagai minuman yang cukup nikmat. Biji kopi dikeringkan lalu dipanggang dan digiling dalam batok. Hasilnya kemudian bisa menjadi minuman kopi yang nikmat. Belakangan ditemukan mesin penggiling biji kopi yang memudahkan produksi kopi sebagai minuman.\r\n \r\nBerbagai Macam Kegunaan Kopi\r\nBerbagai rasa kopi yang khas membuat sensasi menyenangkan di mulut. Misalnya es kopi atau iced coffee yang manis biasanya menyegarkan. Es krim rasa kopi pun juga menjadi favorit bagi banyak orang. Kopi juga menjadi salah satu bahan dasar beberapa jenis kue rasa kopi. Dan yang paling populer adalah kopi polos dan juga kopi susu.\r\nNamun para ilmuwan juga menyelediki manfaat lain dari kopi. Sisa bubuk dari kopi bermanfaat sebagai pupuk yang baik. Selain itu, beberapa produk disinfektan maupun isolasi untuk dinding, lantai dan atap juga dapat dibuat dari kopi. Gliserin yang merupakan produk sampingan dari sabun, dapat dibuat dari minyak kopi. Minyak kopi juga biasa digunakan sebagai bahan pembuat cat, sabun, maupun produk lainnya.\r\nBiji kopi dapat bermanfaat untuk berbagai produk dan kegunaan. Namun yang paling populer tentu saja sebagai minuman yang nikmat yang diminum banyak orang setiap harinya.\r\n \r\nKopi Arabika dan Kopi Robusta\r\n \r\nMeski di seluruh dunia ada sekitar 70 spesies pohon kopi, dari yang berukuran seperti semak belukar hingga pohon dengan tinggi 12 meter, namun hanya ada dua spesies pohon kopi yang secara umum dikenal untuk diproduksi sebagai produk kopi. Kedua spesies ini digunakan untuk produksi sekitar 98 persen produksi kopi dunia. Apa sajakah itu? Kopi yang pertama kali dikembangkan di dunia adalah Kopi Arabika yang berasal dari spesies pohon kopi Coffea arabica. Kopi jenis ini yang paling banyak diproduksi, yaitu sekitar lebih dari 60 persen produksi kopi dunia. Kopi arabika dari spesies Coffea arabica menghasilkan jenis kopi yang terbaik. Pohon spesies ini biasanya tumbuh di daerah dataran tinggi. Tinggi pohon kopi ini antara 4 hingga 6 meter. Kopi arabika memiliki kandungan kafein tidak lebih dari 1,5 persen serta memiliki jumlah kromosom sebanyak 44 kromosom.\r\nPohon kopi spesies lainnya yang juga cukup banyak diproduksi sebagai produk kopi adalah Coffea canephora yang sering dikenal sebagai Kopi Robusta. Tinggi pohon Coffea canephora mencapai 12 meter dan dapat ditanam di daerah yang lebih rendah dibanding kopi arabika. Kopi robusta biasanya digunakan sebagai kopi instant atau cepat saji. Kopi robusta memiliki kandungan kafein yang lebih tinggi, rasanya lebih netral, serta aroma kopi yang lebih kuat. Kandungan kafein pada kopi robusta mencapai 2,8 persen serta memiliki jumlah kromosom sebanyak 22 kromosom. Produksi kopi robusta saat ini mencapai sepertiga produksi kopi seluruh dunia.\r\n \r\nDilema Minum Kopi dan Bahaya Kopi\r\nMeski minum kopi sungguh nikmat, namun minuman ini sering memunculkan berbagai dilema. Beberapa penelitian menunjukkan bahaya dari minum kopi. Bahkan pada jaman dahulu, di Timur Tengah, kopi sempat menjadi minuman yang haram karena sering menimbulkan efek negatif. Apa saja bahaya dari kopi yang nikmat ini?\r\nKonsumsi kopi telah dikenal begitu luas dewasa ini, dan berbagai peringatan dari para ahli telah berulang kali diungkapkan selama bertahun-tahun terhadap banyaknya bahaya yang mengancam para peminum kopi. Hasil penelitian menunjukkan bahwa para penggemar kopi harus mewaspadai bahaya yang bisa timbul dari kebiasaan minum kopi mereka. Bahaya tersebut antara lain penyakit jantung, diabetes dan bahkan beberapa jenis kanker. Meski demikian, banyak orang mengabaikan peringatan ini. Mengapa?\r\n\r\nSelama beberapa tahun belakangan ini, para peneliti telah mempublikasikan hasil penelitian mereka mengenai akibat minum kopi. Namun kesimpulan yang dibuat para peneliti ini belum sampai ke kesimpulan yang meyakinkan. Mengapa? Karena biasanya para peneliti hanya meneliti bahaya dari kafein, salah satu dari 500 kandungan kimia alami dalam secangkir kopi. Jadi sebenarnya penelitian terhadap kopi memang masih belum final dan masih jauh lebih kompleks.\r\nKafein yang terkandung dalam kopi memiliki efek stimulan yang cukup berbahaya. Kafein dapat menyebabkan seseorang sulit tidur. Kafein juga menyebabkan seseorang sulit mengendalikan emosi serta sulit berkonsentrasi. Kafein juga diindikasikan bisa memicu kanker.\r\nSebuah penelitian di Belanda menunjukkan bahwa kopi dapat meningkatkan kolesterol hingga 10 persen. Khususnya jika kopi yang diminum tanpa disaring dan langsung dipanaskan. Kolesterol sendiri dikenal sebagai penyebab gangguan jantung. Seorang ahli nutrisi dari Inggris merekomendasikan untuk minum kopi yang segar dan bukan kopi yang sudah diolah, dipanaskan dan dididihkan selama beberapa waktu.\r\nBagi para penggemar kopi, para ahli menyarankan untuk minum kopi secara wajar. Hindari minum lebih dari enam cangkir kopi dalam sehari. Bagi mereka yang mengalami gangguan jantung, gangguan ginjal dan tekanan darah tinggi sebaiknya minum kopi cukup satu cangkir sehari. Untuk wanita hamil dan menyusui, sebaiknya juga minum tidak lebih dari secangkir kopi sehari. Kopi memang nikmat, namun kesehatan jauh lebih penting dibanding menikmati kopi secara berlebih. Selamat menikmati secangkir kopi Anda!', 'https://kumpulan.info/sehat/artikel-kesehatan/167-kopi-minuman-nikmat.html', 'kopi_asiq', 'biji.jpg', '2017-12-17'),
(3, 'Karakteristik Kopi Robusta yang Perlu Anda Ketahui!', 'Indonesia menjadi salah satu negara pengekspor kopi robusta terbesar di dunia, yaitu sekitar 15%. Harga jual robusta di pasar kopi dunia lebih rendah dibandingkan arabika.\r\n\r\nMeskipun demikian, robusta menguasai pasar kopi dunia sebesar 30%, yaitu menempati urutan terbesar kedua setelah arabika.\r\n\r\nDi Indonesia, Sumatera Selatan dan Lampung merupakan wilayah yang paling banyak menghasilkan kopi robusta pada tahun 2015 hingga 2017. Kopi robusta Lampung sudah sejak lama dikenal sebagai jawara kopi robusta dengan kualitas terbaik.\r\n\r\nLalu, bagaimana karakteristik kopi robusta?\r\nRobusta merupakan jenis kopi dengan nama latin Coffea Canephora yang memiliki nama sinonim Coffea robusta.\r\n\r\nRobusta sendiri berasal dari kata ‘robust’ dalam bahasa Inggris yang berarti kuat. Hal ini sesuai dengan karakter cita rasa dan aroma yang kuat pada kopi robusta. Kopi robusta umumnya lebih pahit dibandingkan arabika. Cita rasa tersebut karena kandungan pyrazine pada robusta.\r\n\r\nTingkat keasaman pada robusta cenderung tinggi dan tingkat kekentalannya (body) tergolong sedang hingga kuat. Karakter rasa pada robusta cenderung tidak bervariasi, dimana karakter rasanya secara umum lebih seperti kacang-kacangan (nutty).\r\n\r\nCara menikmati kopi robusta\r\nSelain dinikmati langsung dengan cara diseduh, kopi robusta banyak digunakan sebagai bahan dasar dalam pembuatan kopi siap saji (instant coffee), kopi racikan (coffee blend), dan espresso.\r\n\r\nEspresso inilah yang selanjutnya menjadi bahan utama dalam pembuatan minuman popular yang dicampur dengan susu, krim susu, atau coklat, seperti cappuccino, caffee latte, macchiato, dan mochaccino.\r\n\r\nPenggunaan robusta sebagai bahan dasar pada minuman tersebut dapat menghasilkan cita rasa yang sesuai dengan selera konsumen tertentu. Karena karakteristik cita rasa robusta yang kuat, beberapa penikmat kopi juga mencampurkan robusta dan arabika untuk menciptakan profil rasa yang diinginkan atau disukai.\r\n\r\nRobusta memiliki kandungan kafein 2 kali lipat lebih besar daripada arabika yaitu sekitar 2.7%, sedangkan arabika sebesar 1.5%. Namun, kandungan gula pada robusta lebih rendah (3 hingga 7%) dibadingkan arabika (6 hingga 9%).\r\n\r\nSelain itu, robusta mengandung asam klorogenat (CGA atau chlorogenic acid) dengan kisaran 7 hingga 10%. Kandungan tersebut relatif lebih tinggi daripada asam klorogenat pada arabika yang berkisar antara 5.5 hingga 8%. Asam klorogenat sendiri merupakan antioksidan yang secara signifikan dapat mencegah serangan serangga pada pohon robusta.\r\n\r\nSelain karakter biji kopi robusta, karakter tanaman kopi robusta juga menarik untuk Anda ketahui!\r\nKopi robusta cocok di tanam di daerah beriklim tropis basah, seperti di beberapa kawasan di Indonesia. Pohon robusta dapat tumbuh pada ketinggian 0-900 meter di atas permukaan laut, artinya dapat tetap tumbuh di dataran rendah. Pertumbuhan yang optimum umumnya pada ketinggian 400-800 mdpl dengan curah hujan 2000-3000 mm per tahun. Adapun suhu udara yang cocok berkisar antara 24 sampai 30oC dengan suhu rata-rata sebesar 26oC.\r\n\r\nTanaman kopi robusta dapat tumbuh pada tanah dengan kandungan organik yang tinggi dan tingkat keasaman (pH) berkisar antara 5 sampai 6. Pertumbuhan optimum robusta didukung oleh kandungan air yang cukup. Hal ini karena pohon kopi robusta memiliki perakaran yang dangkal, sehingga tanaman ini rentan terhadap kekeringan.\r\n\r\nBuah kopi robusta berwana hijau ketika muda kemudian berubah menjadi merah ketika matang. Buah yang matang tidak akan rontok seperti pada kopi arabika, tetapi akan tetap menempel dengan kuat pada tangkainya.  Biji kopi robusta cenderung membulat dan memiliki ukuran yang lebih kecil dibandingkan biji kopi arabika.\r\n\r\nRobusta lebih banyak dibudidayakan karena produktivitasnya yang lebih tinggi dan pemeliharaanya yang relatif lebih mudah daripada arabika.\r\n\r\nPohon robusta juga lebih tahan terhadap serangan hama dan penyakit. Hal ini karena tingginya kandungan kafein yang berfungsi sebagai salah satu pertahanan tanaman terhadap serangan hama. Robusta juga lebih tahan terhadap berbagai kondisi lingkungan.\r\n\r\nSumber bibit kopi robusta tidak disebut sebagai varietas tetapi klon. Saat ini terdapat beberapa jenis klon robusta di Indonesia yang dikembangkan oleh Pusat Penelitian Kopi dan Kakao Indonesia (Puslitkoka), antara lain klon BP234, klon BP308, klon BP42, dan klon SA436. Setiap klon robusta memiliki keunggulannya masing-masing.\r\n\r\nDengan berbagai keunikan yang dimiliki kopi robusta, apakah Anda tertarik menjadi penikmat kopi ini?', 'Yuli Siti Fatma - http://paktanidigital.com/artikel/mengetahui-karakteristik-kopi-robusta/', 'karakter_kopi', 'kopirobusta.jpg', '2017-12-12'),
(4, 'PENGETAHUAN TENTANG KOPI UNTUK PEMULA', 'Ingat! Artikel yang satu ini hanya ditujukan untuk mereka yang baru mulai mencintai kopi. Bukan untuk mereka yang sudah mengerti dan paham dari jauh-jauh hari.\r\n\r\nDunia perkopian berkembang dengan pesatnya akhir-akhir ini. Mereka yang mulanya hanya sekedar menikmati kopi instan dan (paling-paling) kopi tubruk di rumah kini telah beranjak ke kedai kopi dan menikmati aneka kopi dari mesin espresso. Kabar baiknya banyak penikmat kopi pemula yang menikmati kopi dengan level lebih tinggi.\r\n\r\nYang dulunya mungkin hanya mampu menikmati frappe dan kopi-kopi bercampur gula dan krim kini bergeser menikmati cappuccino tanpa gula. Seiring dengan perkembangannya, banyak dari pemula yang belum tahu beberapa hal tentang kopi yang mereka nikmati. Dan untuk itu artikel ini dipersembahkan dengan senang hati untuk mereka agar tak lagi keliru soal fakta tentang kopi.\r\n\r\nArabika VS Robusta\r\n\r\nArabika dan robusta adalah dua jenis kopi yang berbeda. Arabika memiliki kadar kafein lebih rendah dari robusta. Arabika adalah jenis kopi yang paling banyak di konsumsi di dunia. Robusta harganya lebih murah dari arabika, meski rasanya lebih pahit. Kopi yang sering dijual di pasar umumnya adalah robusta, bisa jadi karena harganya lebih ekonomis.\r\n\r\nKopi Tak Melulu Hitam dan Pahit\r\n\r\nDi mindset kebanyakan masyarakat Indonesia kopi haruslah hitam dan pahit. Padahal seharusnya tidak begitu. Robusta yang disangrai dengan gelap tentulah memberi pahit yang luar biasa dahsyat. Kehitaman dan kepahitan tingkat kopi berasal dari proses penyangraiannya (roasting). Semakin lama biji kopi disangrai maka akan semakin pahit dan hitamlah kopi tersebut. Ada tiga tingkat proses penyangraian yaitu light, medium dan dark. Sebaiknya kopi tidak disangrai terlalu dark karena akan menghilangkan karakteristik biji kopi tersebut.\r\n\r\nKopi Memiliki Beragam Rasa\r\n\r\nWell, ‘beragam rasa’ yang dimaksud di sini adalah after taste. After taste adalah flavour atau rasa yang tertinggal di mulut pada saat meneguk kopi. Mungkin kamu belum tahu kalau kopi mampu memberikan aneka after taste pada saat diminum. Tak semua kopi memiliki karakteristik sama terutama saat dinikmati melalui metode manual brewing. Ada kopi yang after taste-nya nutty, cocoa atau justru karamel. Ada juga yang after taste-nya jeruk atau bisa juga stroberi. Kenapa bisa demikian? Itu tergantung kontur tanah dan di mana kopi itu berasal dan di mana kopi itu ditanam. Kopi adalah tanaman unik yang ternyata juga bisa menyerap ‘rasa’ dari tanaman yang ada di dekatnya. Keunikannya ini menjadikan kopi istimewa. Kini banyak para ahli kopi yang mencari kopi-kopi unik di seluruh dunia untuk menemukan after taste-nya.\r\n\r\nPerjalanan Kopi Sebelum Sampai ke Cangkirmu\r\n\r\nKopi memiliki perjalanan panjang sebelum kita nikmati. Awalnya kopi ditanam oleh petani. Saat panen petani memetik cherry kopi (buah kopi) dan memisahkan bijinya dari buahnya. Ada beberapa proses yang dilakukan dalam tahap ini ada wet process, honey process dan lain-lain. Setelah biji kopi dan buahnya terpisah maka biji kopi yang mentah harus dijemur beberapa waktu sampai kadar airnya berada di tingkat yang telah ditentukan. Setelah itu green bean atau biji kopi hijau ini dijual ke roaster (penyangrai kopi) atau perusahaan yang mengolah sendiri biji hijau mereka.\r\n\r\nGreen bean siap disangrai (roasting) sesuai keinginan atau karakteristik bijinya oleh roaster. Tidak semua biji mampu disangrai medium atau dark karena setiap biji memiliki karakteristik masing-masing. Setelah disangrai maka biji kopi tersebut siap diolah barista menjadi minuman. Tetapi sebelumnya harus digiling dahulu sesuai permintaan. Setelah digiling bubuk kopi siap dinikmati menjadi aneka minuman nikmat.\r\n\r\nPahitnya Kopi\r\n\r\nBuah kopi itu manis rasanya. Lalu kenapa kopi bisa pahit? Pahitnya kopi lahir karena proses penyangraian (roasting) meski ada juga yang berasal dari karakteristik bijinya. Selain itu ada alasan lain yang menunjang pahitnya kopi yaitu suhu dan tingkat kehalusan. Semakin tinggi suhu air yang digunakan untuk menyeduh kopi maka makin pahitlah kopinya. Dan semakin halus tingkat kehalusan bubuk kopi, maka kopi juga akan semakin pahit. Sesederhana itu.', 'Tomi Toraja', 'kopi', 'gambar5.jpg', '2017-09-25'),
(5, 'Pikirkan Lagi! jika akan berhenti Minum Kopi?', 'Bila Anda berencana memasukkan berhenti minum kopi dalam daftar resolusi tahun baru, ada baiknya dipertimbangkan lagi. Pasalnya, ahli nutrisi mengatakan, sebagian besar dari kita tak perlu menghindari kopi.\r\n\r\nProf. Clare Collins dari Dietitians Association of Australia mengatakan,”Hal pertama yang dilakukan seseorang ketika ingin hidup sehat adalah berhenti minum kopi. Ini hal yang gila, karena sebenarnya ada bukti manfaat sehat kopi.”\r\n\r\nIa memiliki review detil penelitian yang menyimpulkan bahwa peminum kopi memiliki risiko lebih rendah kena kanker hati dan risiko mati mendadak.\r\n\r\nSelain itu, mereka juga memiliki risiko lebih rendah kena diabetes tipe 2. diabetes jenis ini terjadi ketika tubuh tidak memiliki cukup insulin, hormon kunci yang mengubah gula menjadi energi atau insulin yang dimiliki tidak bekerja dengan benar.\r\n\r\nProf. Collins mengatakan,”Ketika Anda melihat peran biokimia kopi, tampaknya kopi punya tugas di tingkat selular yang mirip seperti pembersih, mampu datang dan mempercepat proses biokimia yang berhubungan dengan perbaikan kerusakan dalam sel atau membersihkan kotoran, sehingga molekul yang berhubungan dengan insulin dan glukosa dapat bekerja lebih efisien.”\r\n\r\nRiset juga menyimpulkan, kafein membantu melindungi otak dari penyakit Parkinson’s. Dr Robyn Brown, spesialis adiksi dari Florey Institute of Neuroscience, Victoria mengatakan, “Jika saya punya riwayat Parkinsons dalam keluarga, mungkin saya akan minum kopi setiap hari.”\r\n\r\nAhli-ahli lain mengatakan, kendati terdapat kandungan stimulan dalam kopi, zat yang bikin jantung deg-degan pada sejumlah orang itu sepertinya tidak menyebabkan masalah bagi sebagian besar masyarakat.\r\n\r\nWanita hamil sebaiknya menghindari minum kopi. Kopi juga tidak direkomendasikan untuk masyarakat dengan kondisi seperti peningkatan detak jantung jangka pendek dan tekanan darah tinggi. Anak-anak yang tak bisa mencerna kopi, sebaiknya tidak minum kopi sampai berusia remaja.\r\n\r\nAda juga penelitian yang mengungkapkan, kopi membantu tubuh tetap langsing. Peneliti dari Hannover Medical School, Jerman menemukan kandungan kafein dalam kopi membantu tubuh melawan kenaikan berat badan yang terjadi perlahan.\r\n\r\nKafein adalah stimulan yang paling banyak dikonsumsi di dunia. Banyak laporan membuktikan kopi dapat meningkatkan pengeluaran energi setiap hari sekitar lima persen. Ilmuwan mengatakan, mengombinasikan dua sampai empat cangkir kopi setiap hari dan olahraga teratur akan lebih efektif untuk menjaga berat badan.', 'https://kuikopi.wordpress.com/2016/11/07/pikirkan-lagi-jika-akan-berhenti-minum-kopi/', 'sruput_coffee', 'kopi.jpg', '2018-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `asset_artikel`
--

CREATE TABLE `asset_artikel` (
  `id_isar` int(4) NOT NULL,
  `id_ar` int(3) NOT NULL,
  `img_isar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_cm` int(5) NOT NULL,
  `id_us` int(5) NOT NULL,
  `id_ar` int(5) NOT NULL,
  `date_cm` date NOT NULL,
  `isi_cm` varchar(255) NOT NULL,
  `nama_user_cm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disc`
--

CREATE TABLE `disc` (
  `id_disc` int(5) NOT NULL,
  `jenis_disc` varchar(100) NOT NULL,
  `jum_disc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disc`
--

INSERT INTO `disc` (`id_disc`, `jenis_disc`, `jum_disc`) VALUES
(1, 'diskon 25%\r\nselamat ulang tahun :)', 0.75),
(2, 'diskon 50%\r\nulang tahun SkyNineCoffee', 0.5),
(3, 'diskon 15%', 0.85),
(4, 'diskon 35%\r\nkamu telah berbelanja lebih dari 2,500k', 0.65),
(5, 'nggak ada diskon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_pr` int(5) NOT NULL,
  `nama_pr` varchar(19) NOT NULL,
  `tipe_pr` varchar(10) NOT NULL,
  `harga_pr` int(9) NOT NULL,
  `stock_pr` int(3) NOT NULL,
  `tag_pr` varchar(25) NOT NULL,
  `decs_pr` text NOT NULL,
  `img_pr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pr`, `nama_pr`, `tipe_pr`, `harga_pr`, `stock_pr`, `tag_pr`, `decs_pr`, `img_pr`) VALUES
(1, 'Bali Honey', 'Kopi', 75000, 450, 'kopi_indo', 'Sweet Aromatics, Lemon, Black Tea\r\nProcess: Honey\r\nType: Arabica\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 5', 'balihoney.png'),
(2, 'Bali Natural', 'Kopi', 75000, 643, 'kopi_indo', 'Pineapple, Chocolate, Orange peel\r\nProcess: Natural\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 5', 'balinatural.png'),
(3, 'Balok Sari', 'Kopi', 70000, 119, 'kopi_indo', 'Cocoa, Foral, Sugar Browning\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 3', 'baloksari.png'),
(4, 'Ethiopia', 'Kopi', 90000, 50, 'sruput_coffee', 'CitrusFruit, Foral, Sugarcane, Smooth & Clean finish\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 2\r\nSweetness: 4', 'ethiopia.png'),
(5, 'Garut', 'Kopi', 80000, 76, 'kopi_indo', 'Orange Mouthfeel, Clean Aftertaste & Tamarind\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'garut.png'),
(6, 'Gayo', 'Kopi', 75000, 840, 'kopi_indo', 'Hazelnut, Musty, Foral\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 2', 'gayo.png'),
(7, 'Kerinci', 'Kopi', 75000, 460, 'kopi_indo', 'Green Aple, Medium Body, Long Aftertaste\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 4\r\nBody: 3\r\nSweetness: 4', 'kerinci.png'),
(8, 'Kopsus(1kg)', 'Kopi_1kg', 180000, 999, 'kopi_luar_kiloan', 'Black Tea, Peanut Butter, Brown Sugarlike\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 2\r\nBody: 3\r\nSweetness: 3', 'kopsus_1kg.jpeg'),
(9, 'Luna', 'Kopi', 78000, 167, 'sruput_coffee', 'Nutty, Choco, Tobacco\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'luna.png'),
(10, 'Puncak Sari', 'Kopi', 60000, 460, 'kopi_indo', 'Roasted, Peanut, Dark Cocoa\r\nProcess: Natural\r\nType: Robusta\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'puncaksari.png'),
(11, 'Smooth Operator', 'Kopi', 78000, 466, 'kopikelas', 'Caramel, Sweet Brown, Orange Peel Like\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 4\r\nBody: 2\r\nSweetness: 3', 'smooth.png'),
(12, 'Toraja', 'Kopi', 75000, 168, 'kopi_indo', 'Chocolate, Yellow Watermelon\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 1\r\nBody: 4\r\nSweetness: 3', 'toraja.png'),
(13, 'Kenya', 'Kopi', 90000, 568, 'kopikelas', 'Orange Mouthfeel, Clean After Taste & Brown Sugar\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'kenya.jpeg'),
(14, 'Colombia', 'Kopi', 90000, 100, 'kopikelas', 'Chocolate, Honey like, Orange like. Medium Body, Medium Acidity, High Sweetness\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'colombia.jpeg'),
(15, 'Bali Kintamani-50kg', 'Biji_Kopi', 6000000, 200, 'biji_kopi_berkualitas', 'Natural\r\nType: Arabica', 'balikintamani.jpeg'),
(16, 'Paper Filter 100W', 'Filter', 85000, 200, 'filterdulubosq', 'Spesifikasi Produk:\r\n- Cocok untuk Hario/Tiamo V60 01\r\n- Kapasitas 1-2 cups\r\n- Isi per bungkus : 100 lembar\r\n- Made in Japan', 'hariopaper1.jpg'),
(17, 'Paper Filter 100M', 'Filter', 85000, 200, 'filterdulubosq', 'Spesifikasi Produk:\r\n- Cocok untuk Hario/Tiamo V60 01\r\n- Kapasitas 1-2 cups\r\n- Isi per bungkus : 100 lembar\r\n- Made in Japan', 'hariopaper.jpg'),
(18, 'V-60 coffee grinder', 'Alat_Seduh', 3300000, 200, 'bikin_kopi', 'Brand: Hario\r\nPower: AC 220V\r\nPower Consumption: 150W\r\nHopper Capacity: Maximum 8oz(240g)\r\nDimensi: 30x13.5x39cm\r\nCable Length: 1.3m\r\nConial: Stainless steel\r\nWeight: 2.4kg', 'v60.jpg'),
(19, 'Vd-02w dripper', 'Filter', 100000, 200, 'filterdulubosq', 'Material: Japan Plastic\r\nBrand: Hario\r\nDimensi: 13.5x11.5x10cm', 'dripper.jpg'),
(20, 'Dripper v-60', 'Filter', 450000, 200, 'filterdulubosq', 'Material: Japan Plastic\r\nBrand: Hario\r\nSendok kopi plastik ukuran 12gr', 'dripper1.jpg'),
(21, 'Aeropress', 'Alat_Seduh', 590000, 200, 'bikin_kopi', 'Material BPA free, food grade\r\nMade in USA', 'aeropress.jpg'),
(22, 'Abledisk filter', 'Filter', 220000, 200, 'filterdulubosq', 'Brand: Able\r\nType: Standard\r\nMaterial: Stainless Stell\r\nDiameter: 6.3cm\r\nMade In USA', 'disk.jpg'),
(23, 'Dripscale vst-2000b', 'Alat_Seduh', 1200000, 200, 'bikin_kopi', 'Brand: Hario\r\nType: Coffee Drip Scale\r\nMaterial: ABS Resin\r\nDimensi: 19x12x2.85\r\nBattery: 2pcs AAA\r\nAuto-off after 5 minutes', 'scale.jpg'),
(24, 'Puncak Sari(1kg)', 'Kopi_1kg', 220000, 200, 'kopi_kiloan_indo', 'Roasted, Peanut, Dark Cocoa\r\nProcess: Natural\r\nType: Robusta\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'puncaksari_1kg.jpg'),
(25, 'Luna(1kg)', 'Kopi_1kg', 300000, 200, 'kopi_luar_kiloan', 'Nutty, Choco, Tobacco\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'luna_1kg.jpg'),
(26, 'Balok sari(1kg)', 'Kopi_1kg', 265000, 200, 'kopi_kiloan_indo', 'Cocoa, Foral, Sugar Browning\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 3', 'baloksari_1kg.jpg'),
(27, 'Smooth Op(1kg)', 'Kopi_1kg', 300000, 200, 'kopi_luar_kiloan', 'Caramel, Sweet Brown, Orange Peel Like\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 4\r\nBody: 2\r\nSweetness: 3', 'smooth_1kg.jpg'),
(28, 'Toraja(1kg)', 'Kopi_1kg', 280000, 200, 'kopi_kiloan_indo', 'Chocolate, Yellow Watermelon\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 1\r\nBody: 4\r\nSweetness: 3', 'toraja_1kg.jpg'),
(29, 'Solok(1kg)', 'Kopi_1kg', 280000, 200, 'kopi_kiloan_indo', 'Chocolate\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'solok_1kg.jpeg'),
(30, 'Solok', 'Kopi', 280000, 200, 'kopi_indo', 'Chocolate\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'solok.png'),
(31, 'Kerinci(1kg)', 'Kopi_1kg', 275000, 200, 'kopi_kiloan_indo', 'Green Aple, Medium Body, Long Aftertaste\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 4\r\nBody: 3\r\nSweetness: 4', 'kerinci_1kg.jpg'),
(32, 'Gayo(1kg)', 'Kopi_1kg', 285000, 200, 'kopi_kiloan_indo', 'Hazelnut, Musty, Foral\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 2', 'gayo_1kg.jpg'),
(33, 'Bali Natural(1kg)', 'Kopi_1kg', 290000, 200, 'kopi_kiloan_indo', 'Pineapple, Chocolate, Orange peel\r\nProcess: Natural\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 5', 'bali_natural_1kg.jpg'),
(34, 'Bali Honey(1kg)', 'Kopi_1kg', 280000, 200, 'kopi_kiloan_indo', 'Sweet Aromatics, Lemon, Black Tea\r\nProcess: Honey\r\nType: Arabica\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 5', 'bali_honey_1kg.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_tr` int(5) NOT NULL,
  `id_us` int(5) NOT NULL,
  `id_disc` int(5) NOT NULL,
  `date_tr` datetime NOT NULL,
  `total_tr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_detail`
--

CREATE TABLE `trans_detail` (
  `id_td` int(5) NOT NULL,
  `id_tr` int(5) NOT NULL,
  `id_pr` int(5) NOT NULL,
  `nama_pr` varchar(19) NOT NULL,
  `harga_td` int(10) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_us` int(5) NOT NULL,
  `username_us` varchar(32) NOT NULL,
  `password_us` varchar(100) NOT NULL,
  `full_name_us` varchar(100) NOT NULL,
  `email_us` varchar(150) NOT NULL,
  `phone_num_us` varchar(14) NOT NULL,
  `img_us` text,
  `date_birth_us` date DEFAULT NULL,
  `address_us` varchar(255) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `id_ug` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_us`, `username_us`, `password_us`, `full_name_us`, `email_us`, `phone_num_us`, `img_us`, `date_birth_us`, `address_us`, `active`, `id_ug`) VALUES
(1, 'skynine_coffee', '$2y$10$L7xrnAdT3bCwm2g1ARqI1ePvGRlIf0a4NvssbOBaBa3FSljTodTVy', 'Skynine Coffee', 'skynine.coffee.id@gmail.com', '089514055817', 'logo.png', '2017-07-17', 'Komplek BSD Sektor XI Ruko Boulevard Tekno Block A Nomer 3 Kota Tanggerang Selatan 15314, Setu, South Tangerang City, Banten 15310', 1, 1),
(2, 'hauw_yeah', '$2y$10$7y97DILt.xvYitqbM4i2KetB9VMxgA36.XvucvTgESVVv/GgaCMnS', 'Bayu Tirta Sartama', 'ahauwlie@gmail.com', '089514055817', 'author-1.jpg', '1997-09-02', 'dimana&quot; hatiku senang', 1, 4),
(3, 'skynine_mar', '$2y$10$CiW0Pmq7CCPxUs/PXknDcunATSrSHkIHfnSk5SYoCqhfOtuu.8/lm', 'Skynine Marketing', 'skynine.coffee.id@gmail.com', '089514055817', 'logo.png', '2017-07-17', 'Komplek BSD Sektor XI Ruko Boulevard Tekno Block A Nomer 3 Kota Tanggerang Selatan 15314, Setu, South Tangerang City, Banten 15310', 1, 2),
(4, 'skynine_buku', '$2y$10$wBuVEhOSf6BdZeRxk3TG6uwIpjtk9wn.ddMYTAEa3BNOp5by2QEhO', 'Skynine Publikasi', 'skynine.coffee.id@gmail.com', '089514055817', 'logo.png', '2017-07-17', 'Komplek BSD Sektor XI Ruko Boulevard Tekno Block A Nomer 3 Kota Tanggerang Selatan 15314, Setu, South Tangerang City, Banten 15310', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id_ug` int(5) NOT NULL,
  `jenis_ug` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id_ug`, `jenis_ug`) VALUES
(1, 'admin manager'),
(2, 'admin marketing'),
(3, 'admin pembukuan'),
(4, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_ar`);

--
-- Indexes for table `asset_artikel`
--
ALTER TABLE `asset_artikel`
  ADD PRIMARY KEY (`id_isar`),
  ADD KEY `fk_id_ar` (`id_ar`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cm`),
  ADD KEY `fk_id_ar_comment` (`id_ar`),
  ADD KEY `fk_id_us_comment` (`id_us`);

--
-- Indexes for table `disc`
--
ALTER TABLE `disc`
  ADD PRIMARY KEY (`id_disc`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pr`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_tr`),
  ADD KEY `fk_id_us` (`id_us`),
  ADD KEY `fk_id_disc` (`id_disc`);

--
-- Indexes for table `trans_detail`
--
ALTER TABLE `trans_detail`
  ADD PRIMARY KEY (`id_td`),
  ADD KEY `fk_id_tr` (`id_tr`),
  ADD KEY `fk_id_pr` (`id_pr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_us`),
  ADD KEY `fk_id_ug` (`id_ug`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id_ug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_ar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `asset_artikel`
--
ALTER TABLE `asset_artikel`
  MODIFY `id_isar` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cm` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disc`
--
ALTER TABLE `disc`
  MODIFY `id_disc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_tr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trans_detail`
--
ALTER TABLE `trans_detail`
  MODIFY `id_td` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_us` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id_ug` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asset_artikel`
--
ALTER TABLE `asset_artikel`
  ADD CONSTRAINT `fk_id_ar` FOREIGN KEY (`id_ar`) REFERENCES `artikel` (`id_ar`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_id_ar_comment` FOREIGN KEY (`id_ar`) REFERENCES `artikel` (`id_ar`),
  ADD CONSTRAINT `fk_id_us_comment` FOREIGN KEY (`id_us`) REFERENCES `user` (`id_us`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_id_disc` FOREIGN KEY (`id_disc`) REFERENCES `disc` (`id_disc`),
  ADD CONSTRAINT `fk_id_us` FOREIGN KEY (`id_us`) REFERENCES `user` (`id_us`);

--
-- Constraints for table `trans_detail`
--
ALTER TABLE `trans_detail`
  ADD CONSTRAINT `fk_id_pr` FOREIGN KEY (`id_pr`) REFERENCES `product` (`id_pr`),
  ADD CONSTRAINT `fk_id_tr` FOREIGN KEY (`id_tr`) REFERENCES `transaksi` (`id_tr`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_id_ug` FOREIGN KEY (`id_ug`) REFERENCES `user_group` (`id_ug`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
