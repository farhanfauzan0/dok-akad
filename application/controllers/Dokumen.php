<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen extends CI_Controller
{

	public function index()
	{
		$data['data'] = [
			'no_akad' => '',
			'hari' => '',
			'tanggal' => '',
			'nama' => '',
			'tempat_tanggal_lahir' => '',
			'nik' => '',
			'pekerjaan' => '',
			'alamat' => '',
			'rempug' => '',
			'no_telp' => '',
			'angsuran' => '',
			'jangka_waktu' => '',
			'tanggal_lunas' => '',
			'dana_pembelian' => '',
			'tempat_ttd' => '',

		];

		$this->load->library('pdfgenerator');
		$this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';
		$file_pdf = 'laporan_penjualan_toko_kita';
		$paper = 'A4';
		$orientation = "portrait";

		$html = $this->load->view('dokumen', $data, true);
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
		// return $this->load->view('dokumen', $data);
	}
}
