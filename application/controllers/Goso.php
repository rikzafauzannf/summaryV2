<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Goso extends CI_Controller
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
        $api_url_total = 'https://goso.tasikmalayakota.go.id/manage/Apisampah';
        $api_url_perbulan = 'https://goso.tasikmalayakota.go.id/manage/Api14hari';
        $api_url_hariIni = 'https://goso.tasikmalayakota.go.id/manage/Apisampahterakhir';
        $api_url_Perkecamatan = 'https://goso.tasikmalayakota.go.id/manage/Apisampahperkecamatan';

        // total
        $api_url_Bulanini = 'https://goso.tasikmalayakota.go.id/manage/Apidatabulansekarang';
        $api_url_KecamatanTertinggi = 'https://goso.tasikmalayakota.go.id/manage/Apidatakecamatantertinggi';
        $api_url_KelurahanTertinggi = 'https://goso.tasikmalayakota.go.id/manage/Apidatakelurahantertinggi';

        // Lakukan GET request dengan file_get_contents
        $response_total = file_get_contents($api_url_total);
        $data_total = json_decode($response_total, true);

        $total_data = 0;
        foreach ($data_total as $data) {
            $total_data += $data['lapsam_jumlah'];
        }

        $response_perbulan = file_get_contents($api_url_perbulan);
        $data_perbulan = json_decode($response_perbulan, true);

        $response_hariIni = file_get_contents($api_url_hariIni);
        $data_hariIni = json_decode($response_hariIni, true);

        $response_perkecamatan = file_get_contents($api_url_Perkecamatan);
        $data_perkecamatan = json_decode($response_perkecamatan, true);

        //totalfetch 
        $response_Bulanini = file_get_contents($api_url_Bulanini);
        $data_Bulanini = json_decode($response_Bulanini, true);

        $response_KecamatanTertinggi = file_get_contents($api_url_KecamatanTertinggi);
        $data_KecamatanTertinggi = json_decode($response_KecamatanTertinggi, true);

        $response_KelurahanTertinggi = file_get_contents($api_url_KelurahanTertinggi);
        $data_KelurahanTertinggi = json_decode($response_KelurahanTertinggi, true);

        // fetch
        $data['totalData'] = $total_data;
        $data['content'] = $data_perbulan;
        $data['hariIni'] = $data_hariIni;
        $data['dataPerkecamatan'] = $data_perkecamatan;

        $data['bulanini'] = $data_Bulanini;
        $data['kecamatanTertinggi'] = $data_KecamatanTertinggi;
        $data['kelurahanTertinggi'] = $data_KelurahanTertinggi;

        // page
        $data['title']  = "Summary Goso";
        $data['header'] = "GOSO (Gerakan Olah Sampah Organik)";
        $data['imgUrl'] = "/assets/img/goso-logo.svg";
        $this->load->view('partials/header.php', $data);
        $this->load->view('pages/goso/index.php', $data);
        $this->load->view('partials/footer.php');
    }
}
