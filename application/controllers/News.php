<!--
Name: Mia Ehrlich
Final Project
Purpose: This is the News controller that loads and passes data to the views
-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'NY Times Search';
//      Load custom scripts and stylesheets to template
        $data['scripts_to_load'] = array('main.js', 'news.js');

        $this->load->view('templates/header', $data);
        $this->load->view('pages/news'); // <-- you need to make this page!
        $this->load->view('templates/footer');
    }
}