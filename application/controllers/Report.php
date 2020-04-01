<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

    public function index()
    {
        $this->load->library('pdfgenerator');
        $this->load->model('pengguna_model');

        $data['pengguna'] = $this->pengguna_model->get_data();
        $html = $this->load->view('template_laporan', $data, true);

        $this->pdfgenerator->generate($html, 'laporan_pdf');
    }
}
