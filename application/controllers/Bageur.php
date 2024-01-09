<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bageur extends CI_Controller
{

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
        // fetch
        $api_url_bageur = 'https://bageur.tasikmalayakota.go.id/Home/api';
        $api_url_barangTersalurkan = 'https://bageur.tasikmalayakota.go.id/Home/apidatabarangtersalurkan';

        // Lakukan GET request dengan file_get_contents
        $response_bageur = file_get_contents($api_url_bageur);
        $data_bageur = json_decode($response_bageur, true);

        // Buat array asosiatif untuk menyimpan hasil pengelompokan
        $groupedData = array();

        // Iterasi melalui data dan mengelompokkannya berdasarkan tanggal
        foreach ($data_bageur as $item) {
            $tanggal = $item['tgl_akhir'];
            $jumlahBantuan = $item['barang_terkumpul'];

            if (!isset($groupedData[$tanggal])) {
                // Inisialisasi jika tanggal belum ada dalam hasil pengelompokan
                $groupedData[$tanggal] = array('tanggal' => $tanggal, 'total_bantuan' => 0);
            }

            // Menjumlahkan jumlah bantuan pada tanggal yang sama
            $groupedData[$tanggal]['total_bantuan'] += $jumlahBantuan;
        }

        $response_barangTersalurkan = file_get_contents($api_url_barangTersalurkan);
        $data_barangTersalurkan = json_decode($response_barangTersalurkan, true);

        $totalBarangTersalurkan = 0;
        foreach ($data_barangTersalurkan as $data) {
            $totalBarangTersalurkan += $data['jumlah_barang'];
        }

        $totalBantuan = count($data_bageur);

        // get
        $data['dataBageur'] = $data_bageur;
        $data['barangTersalurkan'] = $data_barangTersalurkan;
        $data['totalBarangTersalurkan'] = number_format($totalBarangTersalurkan, 2, ",", ".") . " Barang";
        $data['totalBantuan'] = number_format($totalBantuan, 2, ",", ".") . " Bantuan";
        $data['chart'] = array_slice($groupedData, 0, 10, true);

        $data['title']  = "Summary Bageur";
        $data['header'] = "Bageur (Janjian Berbuat Baik)";
        $data['imgUrl'] = "/assets/img/logo-bageur.svg";
        $this->load->view('partials/header.php', $data);
        $this->load->view('pages/bageur/index.php');
        $this->load->view('partials/footer.php');
    }
}
