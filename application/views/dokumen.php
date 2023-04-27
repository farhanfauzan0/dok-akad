<!DOCTYPE html>
<html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		@media dompdf {
			* {
				line-height: 1.2;
			}
		}

		@page {
			margin-left: 13px;
			margin-right: 13px;
			line-height: 1.5;
		}

		* {
			box-sizing: border-box;
		}

		dl,
		ol,
		ul {
			margin-top: 0;
			margin-bottom: 1rem;
			font-size: 18px;
		}

		li {
			font-size: 18px;
		}

		td {
			font-size: 18px;
		}

		table {
			border-collapse: collapse;
		}


		html {
			font-family: sans-serif;
			line-height: 1.15;
		}

		@font-face {
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			src: local("arial");
			font-size: 10px;
		}

		/* body {
			margin: 0;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #212529;
			text-align: left;
			background-color: #fff;
		} */

		p {
			margin-top: 0;
			margin-bottom: 1rem;
			font-size: 18px;
		}

		.column {
			flex: 50%;
			/* width: 100%; */
			padding: 10px;
			/* height: 300px; */
		}

		/* .row:after {
			content: "";
			display: table;
			clear: both;
		} */

		/* .row {
			display: flex;
			flex-wrap: wrap;
			margin-right: -15px;
			margin-left: -15px;
		} */

		.p-break {
			page-break-after: always;
		}

		.col-xs-6 {
			flex: 0 0 50%;
			max-width: 50%;
			position: relative;
			width: 50% !important;
			padding-right: 15px;
			padding-left: 15px;
		}

		.cl1 {
			float: left;
			width: 47%;
			padding: 10px;
			/* height: 300px; */
		}

		.cl2 {
			float: right;
			width: 47%;
			padding: 10px;
			/* height: 300px; */
		}
	</style>
</head>

<body>
	<div class="p-break">

		<div class="cl1">

			<div class="">
				<p style="text-align: center;">AKAD WAKALAH</p>
				<p style="text-align: center;">No <?= $data['no_akad'] ?></p>
				<p style="text-align: justify;">Pada hari ini <?= $data['hari'] ?> tanggal <?= $data['tanggal'] ?>, telah ditandatangani &nbsp;AKAD WAKALAH &nbsp;(selanjutnya &nbsp;disebut</p>
				<p style="text-align: justify;">&rdquo;Akad&rdquo;) oleh dan antara :</p>
				<ol style="text-align: justify;">
					<li>PT. &nbsp;BPRS &nbsp;MULIA&nbsp; BERKAH ABADI &nbsp;dalam hal ini diwakiliki oleh Muhammad Anwar dalam jabatannya selaku Direktur dari dan &nbsp;karenanya sah bertindak untuk &nbsp;dan&nbsp; atas &nbsp;nama serta mewakili PT. &nbsp;BPRS MULIA &nbsp;BERKAH&nbsp; ABADI, &nbsp;berkedudukan &nbsp;di Tangerang Selatan, berdasarkan Akta Pendirian Nomor 48 yang telah mendapatkan pengesahan Menteri Kehakiman&nbsp; Nomor C-215.845 HT.01.01.TH.1995 Tanggal 5 Desember 1995 beserta perubahan-perubahannya yang &nbsp;terakhir dengan Akta Nomor&nbsp; 01 Tanggal 19-05-2022 yang dibuat &nbsp;di &nbsp;hadapan Notaris&nbsp; Titiek &nbsp;Gemi Sugiyarti, Sarjana&nbsp; Hukum, &nbsp;Magister Kenotariatan berkedudukan di Kabupaten Tangerang, yang telah mendapatkan&nbsp; &nbsp;pengesahan&nbsp; &nbsp;Menteri Kehakiman Nomor &nbsp;AHU-AH.01.09-0013925 TANGGAL 20 Mei 2022, selanjutnya disebut. PIHAK PERTAMA/Pemberi Kuasa (Muwakkil).</li>
					<li></li>
				</ol>
				<table style="width: 576px;">
					<tbody>
						<tr>
							<td style="width: 180.883px; padding-left: 30px;">Nama</td>
							<td>:</td>
							<td style="width: 394px;"><?= $data['nama'] ?></td>
						</tr>
						<tr>
							<td style="width: 180.883px; padding-left: 30px;">Tempat, tanggal lahir</td>
							<td>:</td>
							<td style="width: 394px;"><?= $data['tempat_tanggal_lahir'] ?></td>
						</tr>
						<tr>
							<td style="width: 180.883px; padding-left: 30px;">NIK</td>
							<td>:</td>
							<td style="width: 394px;"><?= $data['nik'] ?></td>
						</tr>
						<tr>
							<td style="width: 180.883px; padding-left: 30px;">Alamat</td>
							<td>:</td>
							<td style="width: 394px;"><?= $data['alamat'] ?></td>
						</tr>
					</tbody>
				</table>
				<p style="padding-left: 30px; text-align: justify;">yang&nbsp; &nbsp;selanjutnya&nbsp;&nbsp; disebut&nbsp; &nbsp;PIHAK KEDUA/Penerima Kuasa (Wakil).</p>
				<p style="text-align: justify;">PIHAK &nbsp;PERTAMA/Pemberi &nbsp;Kuasa (Muwakkil)&nbsp; dan PIHAK KEDUA/Penerima Kuasa (Wakil) selanjutnya secara bersama-sama disebut Para Pihak dan &nbsp;masing- masing&nbsp; pihak&nbsp; sebagaimana&nbsp; kedudukannya tersebut &nbsp;di atas&nbsp; &nbsp;terlebih&nbsp; &nbsp;dahulu&nbsp; &nbsp;menerangkan&nbsp;&nbsp; hal-hal&nbsp; &nbsp;sebagai berikut:</p>
				<ol style="list-style-type: lower-alpha; text-align: justify;">
					<li>Bahwa &nbsp;PIHAK&nbsp; PERTAMA merupakan Perusahaan berbentuk Perseroan Terbatas yang bergerak dalam kegiatan usaha jasa perbankan dengan prinsip Syariah yang salah satu usahanya adalah menyalurkan fasilitas pembiayaan.</li>
					<li>Bahwa &nbsp;PIHAK &nbsp;KEDUA&nbsp; telah &nbsp;mengajukan permohonan&nbsp; Pembiayaan &nbsp;Murabahah &nbsp;kepada PIHAK PERTAMA untuk pembelian Barang dengan spesifikasi sebagaimana diuraikan dalam Pasal 3 Akad ini.</li>
					<li>Bahwa &nbsp;dalam rangka pembelian Barang, PIHAK PERTAMA bermaksud untuk menunjuk PIHAK KEDUA selaku Penerima Kuasa (Wakil) untuk bertindak untuk&nbsp; dan &nbsp;atas nama PIHAK PERTAMA dalam membeli Barang dari Pemasok berkaitan dengan pemberian fasilitas Pembiayaan Murabahah yang akan &nbsp;diberikan PIHAK PERTAMA selaku Pemberi Kuasa (Muwakkil) kepada PIHAK KEDUA selaku Penerima Kuasa (Wakil).</li>
				</ol>
				<p style="text-align: justify;">Berdasarkan pertimbangan-pertimbangan di atas, Para Pihak yang&nbsp; bertandatangan di bawah ini sepakat untuk mengikatkan diri&nbsp; dalam&nbsp; Akad &nbsp;ini &nbsp;dengan syarat-syarat dan ketentuan-ketentuan sebagai berikut :</p>


			</div>
		</div>
		<div class="cl2">
			<div class="">
				<p style="text-align: center;">Pasal 1</p>
				<p style="text-align: center;">DEFINISI</p>
				<p>Kecuali ditentukan lain, maka &nbsp;definisi dari istilah-istilah berikut ini adalah :</p>
				<ol style="list-style-type: lower-alpha;">
					<li style="text-align: justify;">Barang adalah &nbsp;barang-barang yang &nbsp;dibeli&nbsp; PIHAK PERTAMA&nbsp;&nbsp; dengan &nbsp;spesifikasi&nbsp; &nbsp;dan&nbsp; &nbsp;jenis sebagaimana diuraikan dalam Pasal 3 dari Akad ini yang tidak bertentangan dengan prinsip syaria</li>
					<li style="text-align: justify;">Jangka &nbsp;Waktu Penyerahan &nbsp;adalah Jangka waktu bagi Penerima Kuasa untuk&nbsp; menyerahkan Barang berikut dokumen bukti kepemilikan Barang (jika ada) kepada &nbsp;BANK&nbsp; yaitu &nbsp;selambat-lambatnya &nbsp;10 (sepuluh) hari kerja sejak ditandatanganinya Akad ini atau &nbsp;jangka waktu&nbsp; lain yang disepakati oleh Para Pihak</li>
					<li style="text-align: justify;">Wakalah adalah Pemberian kuasa dan kewenangan</li>
				</ol>
				<p style="text-align: justify;">oleh PIHAK PERTAMA selaku Pemberi Kuasa (Muwakkil) kepada Nasabah selaku Penerima Kuasa(Wakil) untuk melakukan pembelian Barang dengan syarat dan &nbsp;ketentuan sebagaimana&nbsp; diatur dalam Akad ini.</p>
				<p style="text-align: center;">Pasal 2</p>
				<p style="text-align: center;">MAKSUD DAN TUJUAN</p>
				<p style="text-align: justify;">Pemberi &nbsp;Kuasa &nbsp;(Muwakkil) &nbsp;dengan &nbsp;ini&nbsp;&nbsp; memberikan kuasa dan kewenangan kepada Penerima Kuasa (Wakil) tanpa&nbsp;&nbsp; hak&nbsp;&nbsp; &nbsp;substitusi&nbsp; &nbsp;untuk&nbsp;&nbsp; &nbsp;membeli&nbsp; &nbsp;Barang&nbsp; &nbsp;dan Penerima Kuasa (Wakil) dengan ini menerima baik pemberian kuasa dan&nbsp; kewenangan dari Pemberi Kuasa (Muwakkil) untuk membeli Barang untuk kepentingan Pemberi Kuasa (Muwakkil).</p>
				<p style="text-align: center;">Pasal 3</p>
				<p style="text-align: center;">BARANG</p>
				<p style="text-align: justify;">Para Pihak &nbsp;sepakat &nbsp;bahwa spesifikasi &nbsp;Barang&nbsp; dalam Akad ini adalah sebagaimana tercantum dalam RENCANA &nbsp;PEMBELIAN &nbsp;BARANG &nbsp;yang&nbsp; &nbsp;sudah ditulis oleh &nbsp;PIHAK&nbsp;&nbsp; KEDUA &nbsp;dan&nbsp; &nbsp;sudah &nbsp;diserahkan &nbsp;kepada PIHAK PERTAMA dalam bentuk &nbsp;Formulir Rencana Pembelian barang.</p>
				<p style="text-align: center;">Pasal 4</p>
				<p style="text-align: center;">DANA PEMBELIAN BARANG</p>
				<ol>
					<li style="text-align: justify;">Untuk dapat mencapai maksud dan tujuan Akad sebagaimana &nbsp;dimaksud &nbsp;dalam &nbsp;Pasal &nbsp;2 &nbsp;Akad &nbsp;ini, PIHAK PERTAMA (Muwakkil) memberikan kuasa kepada &nbsp;PIHAK&nbsp; &nbsp;KEDUA &nbsp;(Wakil)&nbsp;&nbsp; untuk&nbsp; &nbsp;membeli Barang dengan Dana &nbsp;Pembelian sebesar Rp. <?= $data['dana_pembelian'] ?></li>
					<li style="text-align: justify;">Dengan telah &nbsp;diterimanya &nbsp;Dana&nbsp; &nbsp;Pembelian sebagaimana &nbsp;dimaksud &nbsp;dalam &nbsp;ayat&nbsp;&nbsp; 1 &nbsp;Pasal &nbsp;ini, maka&nbsp; &nbsp;Penerima&nbsp; Kuasa &nbsp;(Wakil) &nbsp;akan menandatangani Tanda Terima Uang&nbsp; sebagai bukti telah diterimanya sejumlah dana dari Pemberi Kuasa (Muwakkil) oleh Penerima Kuasa (Wakil).</li>
				</ol>
				<ol style="text-align: justify;" start="2">
					<li>PIHAK &nbsp;KEDUA WAJIB&nbsp; menyerahkan &nbsp;Barang dan dokumen-dokumen &nbsp;yang &nbsp;berkaitan&nbsp; dengan pembelian Barang kepada PIHAK PERTAMA dalam jangka waktu &nbsp;yang telah disepakati oleh Para Pihak</li>
					<li>Para Pihak senantiasa menjaga agar &nbsp;penggunaan dana sebagaimana dimaksud dalam Pasal ini sesuai dengan maksud dan &nbsp;tujuan Akad sebagaimana dimaksud dalam Pasal 2 Akad ini.</li>
					<li>Pihak kedua wajib menyampaikan bukti pembelian barang tidak kurang dari &nbsp;dana yang diberikan sebagaimana tercatat dalam pasal 4 ayat 1.</li>
				</ol>
			</div>
		</div>
	</div>
	<div class="p-break">
		<div class="cl1">

			<div class="">
				<p style="text-align: center;">Pasal 5</p>
				<p style="text-align: center;">SANKSI</p>
				<ol>
					<li>Dalam hal Penerima Kuasa (Wakil) tidak dapat menggunakan &nbsp;dana &nbsp;pembiayaan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sebagaimana yang&nbsp; &nbsp;telah &nbsp;disepakati &nbsp;bersama,&nbsp; maka&nbsp; &nbsp;pemberian kuasa berdasarkan Akad &nbsp;ini&nbsp; menjadi berakhir dan Penerima&nbsp; Kuasa &nbsp;(Wakil) &nbsp;dengan ini &nbsp;setuju &nbsp;untuk menerima&nbsp;&nbsp; &nbsp;sanksi&nbsp;&nbsp; &nbsp;dari&nbsp;&nbsp; &nbsp;PIHAK&nbsp; &nbsp;PERTAMA&nbsp; &nbsp;baik sebagian maupun seluruh sanksi berupa :
						<ol style="list-style-type: lower-alpha;">
							<li style="text-align: justify;">Mengembalikan seluruh dana yang&nbsp; telah diterima Penerima Kuasa Penerima Kuasa (Wakil) sebagaimana dimaksud dalam Pasal &nbsp;4 Akad ini kepada PIHAK PERTAMA secara sekaligus dan seketika atas permintaan pertama dari PIHAK PERTAMA.</li>
							<li style="text-align: justify;">Memberi ganti rugi atas seluruh biaya yang telah dikeluarkan&nbsp; PIHAK &nbsp;PERTAMA&nbsp; berkaitan dengan pembelian Barang.</li>
						</ol>
					</li>
				</ol>
				<p style="text-align: center;">Pasal 6</p>
				<p style="text-align: center;">SURAT MENYURAT</p>
				<p style="text-align: justify;">Setiap pemberitahuan permintaan atau pemberian persetujuan&nbsp; &nbsp;antara&nbsp; &nbsp;kedua &nbsp;belah&nbsp; &nbsp;pihak yang dapat dilakukan menurut Akad ini harus dilakukan secara tertulis melalui korespodensi dengan alamat Para Pihak sebagai berikut :</p>
				<p><u>PIHAK </u><u>PERTAMA / Pemberi Kuasa</u></p>
				<table style="width: 339.5px;">
					<tbody>
						<tr>
							<td style="width: 100px;">Alamat</td>
							<td>:</td>
							<td style="width: 200.5px;">
								<p>Jl. Ceger Raya &nbsp;No. 2C Jurangmangu Timur, Pondok Aren, Kota Tangerang Selatan</p>
							</td>
						</tr>
						<tr>
							<td style="width: 100px;">No. Telpon&nbsp;</td>
							<td>:</td>
							<td style="width: 200.5px;">021-7342 750</td>
						</tr>
					</tbody>
				</table>
				<p>&nbsp;</p>
				<p><u>PIHAK </u><u>KEDUA / Penerima Kuasa</u></p>
				<table style="width: 645px;">
					<tbody>
						<tr>
							<td style="width: 130px;">Alamat</td>
							<td style="width: 13.2px;">:</td>
							<td style="width: 538.8px;">
								<p><?= $data['alamat'] ?></p>
							</td>
						</tr>
						<tr>
							<td style="width: 130px;">No. Telpon&nbsp;</td>
							<td style="width: 13.2px;">:</td>
							<td style="width: 538.8px;"><?= $data['no_telp'] ?></td>
						</tr>
					</tbody>
				</table>
				<p style="text-align: justify;">Berdasarkan ketentuan-ketentuan tersebut di &nbsp;atas &nbsp;serta dilandasi dengan itikad baik dari Para Pihak, maka &nbsp;Akad ini dibuat dan &nbsp;ditanda tangani oleh Para Pihak, di, pada hari dan tanggal yang telah disebutkan di awal Akad ini.</p>
				<table style="width: 588.5px;">
					<tbody>
						<tr style="height: 31px;">
							<td style="width: 587.5px; height: 31px;">
								<p>PIHAK PERTAMA/Pemberi Kuasa</p>
							</td>
						</tr>
						<tr style="height: 11.5px;">
							<td style="width: 587.5px; height: 11.5px;">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr style="height: 31px;">
							<td style="width: 587.5px; height: 31px;">
								<p>...................................</p>
							</td>
						</tr>
						<tr style="height: 31px;">
							<td style="width: 587.5px; height: 31px;">
								<p>PIHAK KEDUA/Penerima Kuasa</p>
							</td>
						</tr>
						<tr style="height: 31px;">
							<td style="width: 587.5px; height: 31px;">
								<p>&nbsp;</p>
							</td>
						</tr>
						<tr style="height: 31px;">
							<td style="width: 587.5px; height: 31px;">
								<p>...................................</p>
							</td>
						</tr>
					</tbody>
				</table>
				<p style="text-align: center;">AKAD PEMBIAYAAN &nbsp;MURABAHAH</p>
				<p style="text-align: center;">No. <?= $data['no_akad'] ?></p>
				<p>AKAD PEMBIAYAAN MURABAHAH ini dibuat dan ditandatangani pada hari ini, <?= $data['hari'] ?> tanggal <?= $data['tanggal'] ?> oleh dan antara pihak-pihak :</p>
				<ol>
					<li style="text-align: justify;">PT. BPRS &nbsp;MULIA BERKAH ABADI dalam hal ini diwakiliki oleh Muhammad Anwar dalam jabatannya selaku &nbsp;Direktur &nbsp;dari &nbsp;dan&nbsp;&nbsp; karenanya sah bertindak untuk dan atas nama serta mewakili PT. BPRS MULIA BERKAH ABADI, berkedudukan di Tangerang</li>
				</ol>
			</div>

		</div>
		<div class="cl2">

			<div class="">
				<p style="text-align: justify;">Selatan, berdasarkan Akta Pendirian Nomor 48 yang telah mendapatkan pengesahan Menteri Kehakiman Nomor&nbsp;&nbsp; &nbsp;C-215.845&nbsp; &nbsp;HT.01.01.TH.1995 &nbsp;Tanggal Desember 1995 beserta perubahan-perubahannya yang terakhir dengan Akta Nomor 01 Tanggal 19-05-2022 &nbsp;yang&nbsp;&nbsp; dibuat &nbsp;di &nbsp;hadapan Notaris &nbsp;Titiek &nbsp;Gemi Sugiyarti, Sarjana Hukum, Magister Kenotariatan berkedudukan di &nbsp;Kabupaten Tangerang, yang &nbsp;telah mendapatkan pengesahan Menteri Kehakiman Nomor &nbsp;AHU-AH.01.09-0013925 TANGGAL 20 Mei 2022, &nbsp;selanjutnya disebut PIHAK PERTAMA.</p>
				<table style="width: 407px;">
					<tbody>
						<tr>
							<td style="width: 175.783px;">Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
							<td style="width: 50.2167px;">:</td>
							<td style="width: 232px;"><?= $data['nama'] ?></td>
						</tr>
						<tr>
							<td style="width: 175.783px;">Tempat, tanggal lahir</td>
							<td style="width: 50.2167px;">:</td>
							<td style="width: 232px;"><?= $data['tempat_tanggal_lahir'] ?></td>
						</tr>
						<tr>
							<td style="width: 175.783px;">NIK</td>
							<td style="width: 50.2167px;">:</td>
							<td style="width: 232px;"><?= $data['nik'] ?></td>
						</tr>
						<tr>
							<td style="width: 175.783px;">Pekerjaan</td>
							<td style="width: 50.2167px;">:</td>
							<td style="width: 232px;"><?= $data['pekerjaan'] ?></td>
						</tr>
						<tr>
							<td style="width: 175.783px;">Alamat</td>
							<td style="width: 50.2167px;">:</td>
							<td style="width: 232px;"><?= $data['alamat'] ?></td>
						</tr>
						<tr>
							<td style="width: 175.783px;">Rembug</td>
							<td style="width: 50.2167px;">:</td>
							<td style="width: 232px;"><?= $data['rempug'] ?></td>
						</tr>
					</tbody>
				</table>
				<p>yang selanjutnya disebut PIHAK KEDUA.</p>
				<p style="text-align: justify;">PIHAK PERTAMA dan &nbsp;PIHAK KEDUA secara bersama- sama selanjutnya disebut sebagai Para Pihak. Para Pihak terlebih dahulu menerangkan hal-hal sebagai berikut :</p>
				<ol style="list-style-type: lower-alpha; text-align: justify;">
					<li>Bahwa,&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;PIHAK&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;KEDUA&nbsp;&nbsp;&nbsp; &nbsp;telah&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;mengajukan permohonan fasilitas pembiayaan kepada PIHAK PERTAMA untuk &nbsp;membeli &nbsp;barang, dan &nbsp;selanjutnya PIHAK PERTAMA &nbsp;menyetujui, dan dengan Akad ini mengikatkan diri untuk menyediakan fasilitas pembiayaan sesuai dengan ketentuan dan&nbsp; syarat- syarat sebagaimana dinyatakan dalam Akad &nbsp;ini.</li>
					<li>Bahwa, berdasarkan ketentuan Syari&rsquo;ah, Pembiayaan oleh PIHAK PERTAMA kepada PIHAK KEDUA diatur dan &nbsp;akan &nbsp;berlangsung menurut ketentuan-ketentuan sebagai berikut:
						<ol>
							<li>PIHAK &nbsp;KEDUA untuk &nbsp;dan &nbsp;atas &nbsp;nama PIHAK PERTAMA membeli barang dari pemasok untuk memenuhi kepentingan PIHAK KEDUA dengan Pembiayaan&nbsp;&nbsp; &nbsp;yang&nbsp;&nbsp; &nbsp;disediakan oleh PIHAK PERTAMA, dan &nbsp;selanjutnya PIHAK PERTAMA menjual barang tersebut kepada PIHAK KEDUA sebagaimana &nbsp;PIHAK KEDUA membelinya &nbsp;dari PIHAK &nbsp;PERTAMA, &nbsp;dengan harga &nbsp;yang &nbsp;telah disepakati&nbsp; &nbsp;oleh&nbsp; &nbsp;PIHAK&nbsp; &nbsp;KEDUA &nbsp;dan&nbsp; &nbsp;PIHAK PERTAMA.</li>
							<li>PIHAK&nbsp;&nbsp;&nbsp; &nbsp;KEDUA&nbsp;&nbsp; &nbsp;membayar&nbsp;&nbsp; &nbsp;harga&nbsp;&nbsp; &nbsp;pokok ditambah &nbsp;Margin &nbsp;Keuntungan atas &nbsp;jual beli &nbsp;ini kepada PIHAK PERTAMA dalam jangka waktu tertentu, sehingga &nbsp;karenanya KEDUA &nbsp;membayar &nbsp;lunas&nbsp; &nbsp;harga &nbsp;Pokok&nbsp; &nbsp;dansebelum &nbsp;PIHAK Margin Keuntungan kepada PIHAK PERTAMA, PIHAK&nbsp;&nbsp; &nbsp;KEDUA&nbsp;&nbsp; &nbsp;berutang&nbsp; &nbsp;kepada&nbsp;&nbsp; &nbsp;PIHAK PERTAMA.</li>
						</ol>
					</li>
				</ol>
				<p style="text-align: justify;">Selanjutnya Para Pihak sepakat menuangkan Akad&nbsp; ini dalam&nbsp; Akad &nbsp;Pembiayaan &nbsp;Murabahah (selanjutnya disebut &nbsp;&ldquo;Akad&rdquo;) &nbsp;dengan syarat-syarat serta&nbsp; ketentuan- ketentuan sebagai berikut :</p>
				<p style="text-align: center;">PASAL 1</p>
				<p style="text-align: center;">PEMBIAYAAN DAN PENGGUNAANNYA </p>
				<ol>
					<li style="text-align: justify;">PIHAK PERTAMA &nbsp;berjanji &nbsp;dan&nbsp; &nbsp;dengan&nbsp; ini mengikatkan diri untuk menyediakan fasilitas Pembiayaan&nbsp;&nbsp;&nbsp; Murabahah kepada &nbsp;PIHAK &nbsp;KEDUA yang&nbsp; &nbsp;akan&nbsp;&nbsp; &nbsp;digunakan&nbsp;&nbsp; untuk&nbsp; &nbsp;pembelian&nbsp;&nbsp; barang berupa 1 dimana Akad ini sekaligus merupakan bukti terjadinya jual beli tersebut</li>
				</ol>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</div>

		</div>
	</div>
	<div class="">
		<div class="cl1">

			<div class="">
				<p>Dengan ini PIHAK KEDUA berjanji serta dengan ini mengikatkan diri untuk&nbsp; menerima pembiayaan tersebut dari dan&nbsp; karenanya telah berutang kepada PIHAK PERTAMA sejumlah sebagai berikut :</p>
				<table style="width: 457px;">
					<tbody>
						<tr>
							<td style="width: 307.533px;">
								- Harga &nbsp;Beli
							</td>
							<td style="width: 44.4667px;">
								Rp.
							</td>
							<td style="width: 280px;">
								&hellip;&hellip;&hellip;&hellip;
							</td>
							<td style="width: 467px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="width: 307.533px;">
								- Margin Murabahah
							</td>
							<td style="width: 44.4667px;">Rp.</td>
							<td style="width: 280px;">&hellip;&hellip;&hellip;&hellip;</td>
							<td style="width: 467px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="width: 307.533px;">
								- Harga &nbsp;Jual
							</td>
							<td style="width: 44.4667px;">Rp.</td>
							<td style="width: 280px;">&hellip;&hellip;&hellip;&hellip;</td>
							<td style="width: 467px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="width: 307.533px;">
								- Hutang &nbsp;Murabahah
							</td>
							<td style="width: 44.4667px;">Rp.</td>
							<td style="width: 280px;">&hellip;&hellip;&hellip;&hellip;</td>
							<td style="width: 467px;">&nbsp;</td>
						</tr>
						<tr>
							<td style="width: 307.533px;">
								- Angsuran
							</td>
							<td style="width: 44.4667px;">Rp.</td>
							<td style="width: 280px;"><?= $data['angsuran'] ?></td>
							<td style="width: 467px;">/Bulan</td>
						</tr>
					</tbody>
				</table>
				<p></p>
				<p style="text-align: center;">&nbsp;</p>
				<p style="text-align: center;">PASAL&nbsp; &nbsp;2</p>
				<p style="text-align: center;">JANGKA WAKTU DAN TATA CARA PEMBAYARAN UTANG MURABAHAH</p>
				<ol>
					<li style="text-align: justify;">PIHAK &nbsp;KEDUA sanggup&nbsp; dan&nbsp;&nbsp; mengikat &nbsp;diri &nbsp;untuk membayar kepada PIHAK PERTAMA seluruh kewajiban &nbsp;PIHAK &nbsp;KEDUA yang&nbsp;&nbsp; terutang &nbsp;sebagai dimaksud pasal 1 Akad ini dalam jangka waktu &hellip;&hellip;. Bulan sejak ditandatanganinya Akad ini sehingga harus lunas paling lambat pada tanggal .................... dengan dibayar secara mengangsur&nbsp; sesuai jadwal angsuran yang ditentukan dalam lampiran Akad ini yang &nbsp;merupakan satu&nbsp; kesatuan &nbsp;dan &nbsp;bagian &nbsp;tidak terpisah dari Akad ini</li>
				</ol>
				<p style="text-align: center;">PASAL&nbsp; &nbsp;3</p>
				<p style="text-align: center;">TANGGUNG RENTENG</p>
				<ol>
					<li style="text-align: justify;">Untuk lebih menjamin pembayaran kembali dengan tertib sebagaimana mestinya &nbsp;berdasarkan Akad ini, PIHAK KEDUA dan/atau KELOMPOKNYA memberikan jaminan angsuran ke PIHAK PERTAMA apabila terdapat salah satu anggota/ lebih yang tidak dapat memenuhi kewajibannya dengan cara &nbsp;saling menggalang/tanggung renteng</li>
				</ol>
				<ol start="2">
					<li style="text-align: justify;">Apabila dalam jangka waktu berjalannya akad &nbsp;ini terdapat tiga kali tanggung renteng dari PIHAK KEDUA, maka &nbsp;PIHAK PERTAMA berhak meminta secara keseluruhan sisa hutang dari PIHAK KEDUA</li>
				</ol>
				<p style="text-align: center;">PASAL 4</p>
				<p style="text-align: center;">PENYELESAIAN&nbsp;PERSELISIHAN</p>
				<ol>
					<li style="text-align: justify;">Apabila di kemudian hari terjadi perbedaan pendapat atau penafsiran atas hal-hal yang tercantum di dalam Akad &nbsp;ini &nbsp;atau&nbsp; &nbsp;terjadi &nbsp;perselisihan &nbsp;atau&nbsp;&nbsp; sengketa dalam &nbsp;pelaksanaan &nbsp;Akad &nbsp;ini,&nbsp; Para Pihak sepakat untuk menyelesaikannya secara musyawarah untuk mufakat.</li>
					<li style="text-align: justify;">Dalam&nbsp;&nbsp; hal&nbsp; &nbsp;penyelesaian&nbsp; &nbsp;sengketa &nbsp;sebagaimana dimaksud &nbsp;pada &nbsp;ayat&nbsp; &nbsp;1 &nbsp;Pasal &nbsp;ini &nbsp;tidak mencapai kesepakatan, &nbsp;maka&nbsp; &nbsp;Para &nbsp;Pihak&nbsp; &nbsp;bersepakat, &nbsp;dan dengan &nbsp;ini&nbsp; &nbsp;berjanji&nbsp; &nbsp;serta mengikatkan&nbsp; &nbsp;diri&nbsp; &nbsp;satu terhadap yang lain, untuk menyelesaikannya melalui Pengadilan Agama &nbsp;di .............................................</li>
				</ol>
				<p style="text-align: center;">PASAL 5</p>
				<p style="text-align: center;">PENGALIHAN HAK DAN KEWAJIBAN</p>
				<ol>
					<li style="text-align: justify;">PIHAK &nbsp;KEDUA&nbsp; setuju &nbsp;bahwa &nbsp;apabila &nbsp;dianggap perlu oleh PIHAK PERTAMA, berdasarkan pertimbangannya sendiri PIHAK PERTAMA mempunyai hak &nbsp;untuk &nbsp;mengalihkan, baik&nbsp; seluruh atau sebagian hak-hak &nbsp;yang timbul sehubungan dengan pelaksanaan Akad ini (berikut setiap perubahan, penambahan atau &nbsp;perpanjangannya) kepada pihak lainnya, dan &nbsp;PIHAK KEDUA setuju bahwa penerima pengalihan hak yang</li>
				</ol>
			</div>

		</div>
		<div class="cl2">

			<div class="">
				<p style="text-align: justify;">bersangkutan akan &nbsp;mendapat manfaat yang sama dengan yang diberikan kepada PIHAK PERTAMA berdasarkan Akad ini. Dalam hal PIHAK PERTAMA mengalihkan hak dan kewajibannya baik sebagian atau seluruhnya, PIHAK KEDUA tetap terikat dan tunduk pada syarat-syarat dan ketentuan-ketentuan dalam Akad ini berikut setiap perubahan, penambahan atau perpanjangannya) serta perjanjian-perjanjian/akad-akad lainnya yang berhubungan dengan pelaksanaan Akad ini.</p>
				<p style="text-align: center;">PASAL 6</p>
				<p style="text-align: center;">LAIN-LAIN</p>
				<ol>
					<li style="text-align: justify;">PIHAK&nbsp; KEDUA tunduk &nbsp;kepada semua ketentuan syariah dan kebiasaan mengenai akad &nbsp;pembiayaan murabahah dan perjanjian pemberian jaminan yang berlaku&nbsp; pada PIHAK &nbsp;PERTAMA&nbsp; serta peraturan yang&nbsp;&nbsp; ditetapkan &nbsp;oleh &nbsp;PIHAK &nbsp;PERTAMA, &nbsp;fatwa- fatwa Dewan &nbsp;Syariah Nasional Majelis Ulama Indonesia (DSN-MUI) baik yang telah maupun yang akan &nbsp;ditetapkan dikemudian hari dan&nbsp; hal tersebut telah disetujui oleh PIHAK KEDUA</li>
					<li style="text-align: justify;">Lampiran-lampiran Akad&nbsp; ini (jika ada) &nbsp;merupakan bagian yang &nbsp;tidak terpisahkan dari Akad&nbsp; ini serta wajib &nbsp;dipatuhi &nbsp;oleh&nbsp; PIHAK &nbsp;KEDUA sebagaimana mestinya.</li>
					<li style="text-align: justify;">Hal-hal yang &nbsp;belum atau &nbsp;belum cukup&nbsp; diatur atau perubahan atau &nbsp;tambahan atas setiap kesepakatan dalam Akad ini akan ditetapkan berdasarkan musyawarah oleh PIHAK PERTAMA dan PIHAK KEDUA, diatur secara tertulis serta ditandatangani oleh Para Pihak dan merupakan satu kesatuan dan bagian tidak terpisah dari Akad ini.</li>
				</ol>
				<p style="text-align: justify;">Berdasarkan ketentuan-ketentuan tersebut di atas serta dilandasi dengan itikad baik dari Para Pihak, maka &nbsp;Akad ini&nbsp; &nbsp;dibuat&nbsp; &nbsp;dan&nbsp; &nbsp;ditanda&nbsp; &nbsp;tangani&nbsp; &nbsp;oleh&nbsp; &nbsp;Para &nbsp;Pihak,&nbsp; &nbsp;di</p>
				<p><?= $data['tempat_ttd'] ?>, pada &nbsp;hari dan &nbsp;tanggal yang telah disebutkan di awal Akad ini.</p>
				<p>&nbsp;</p>
				<table style="width: 451px;">
					<tbody>
						<tr style="height: 21.5px;">
							<td style="width: 241.5px; height: 21.5px; text-align: center;">PIHAK PERTAMA</td>
							<td style="width: 208.5px; height: 21.5px; text-align: center;">PIHAK KEDUA</td>
						</tr>
						<tr style="height: 21.5px;">
							<td style="width: 241.5px; height: 21.5px; text-align: center;">&nbsp;</td>
							<td style="width: 208.5px; height: 21.5px; text-align: center;">&nbsp;</td>
						</tr>
						<tr style="height: 21.5px;">
							<td style="width: 241.5px; height: 21.5px; text-align: center;">&nbsp;</td>
							<td style="width: 208.5px; height: 21.5px; text-align: center;">&nbsp;</td>
						</tr>
						<tr style="height: 21.5px;">
							<td style="width: 241.5px; height: 21.5px; text-align: center;">&nbsp;</td>
							<td style="width: 208.5px; height: 21.5px; text-align: center;">&nbsp;</td>
						</tr>
						<tr style="height: 21px;">
							<td style="width: 241.5px; height: 21px; text-align: center;">.........................................</td>
							<td style="width: 208.5px; height: 21px; text-align: center;">.........................................</td>
						</tr>
					</tbody>
				</table>
				<p>&nbsp;</p>
			</div>

		</div>
	</div>
</body>

</html>