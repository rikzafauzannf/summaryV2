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
        $api_url_perbulan = 'https://goso.tasikmalayakota.go.id/manage/Apikecamatanperbulan';
        $api_url_Perkecamatan = 'https://goso.tasikmalayakota.go.id/manage/Apisampahperkecamatan';

        // Lakukan GET request dengan file_get_contents
        $response_perbulan = file_get_contents($api_url_perbulan);
        $data_perbulan = json_decode($response_perbulan, true);

        $response_perkecamatan = file_get_contents($api_url_Perkecamatan);
        $data_perkecamatan = json_decode($response_perkecamatan, true);
        
        // fetch
        $data['content'] = $data_perbulan;
        $data['contentPerkecamatan'] = $data_perkecamatan;

        $data['title']  = "Summary Goso";
        $data['header'] = "GOSO (Gerakan Olah Sampah Organik)";
        $data['imgUrl'] = "/assets/img/goso-logo.svg";
        $this->load->view('partials/header.php', $data);
        $this->load->view('pages/goso/index.php', $data);
        $this->load->view('partials/footer.php');
    }
}
