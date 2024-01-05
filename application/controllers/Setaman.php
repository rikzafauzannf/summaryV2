<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setaman extends CI_Controller
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
        $api_url_tertinggiSemai = 'https://setamancinta.tasikmalayakota.go.id/eks/apidatakecamatantertinggisemai';
        $api_url_tertinggiTanam = 'https://setamancinta.tasikmalayakota.go.id/eks/apidatakecamatantertinggitanam';
        $api_url_tertinggiPanen = 'https://setamancinta.tasikmalayakota.go.id/eks/apidatakecamatantertinggipanen';

        // Lakukan GET request dengan file_get_contents
        $response_tertinggiSemai = file_get_contents($api_url_tertinggiSemai);
        $data_tertinggiSemai = json_decode($response_tertinggiSemai, true);

        $response_tertinggiTanam = file_get_contents($api_url_tertinggiTanam);
        $data_tertinggiTanam = json_decode($response_tertinggiTanam, true);

        $response_tertinggiPanen = file_get_contents($api_url_tertinggiPanen);
        $data_tertinggiPanen = json_decode($response_tertinggiPanen, true);

        // fetch data
        $data['tertinggiSemai'] = $data_tertinggiSemai;
        $data['tertinggiTanam'] = $data_tertinggiTanam;
        $data['tertinggiPanen'] = $data_tertinggiPanen;

        // data
        $data['title']  = "Summary Setaman";
        $data['header'] = "Sejuta Tanaman Pangan Cegah Inflasi Kota Tasikmalaya";
        $data['imgUrl'] = "/assets/img/logoSetaman.svg";
        $this->load->view('partials/header.php', $data);
        $this->load->view('pages/setaman/index.php', $data);
        $this->load->view('partials/footer.php');
    }
}
