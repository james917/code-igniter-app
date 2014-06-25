<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Magazine extends CI_Controller {

    public function index() {
        $data = array();

        $this->load->model('Publication');
        $publication = new Publication();
        $publication->load(1);
        $data['publication'] = $publication;

        $this->load->model('Issue');
        $issue = new Issue(1);
        $data['issue'] = $issue;

        $this->load->view('magazines');
        $this->load->view('magazine', $data);

    }
}