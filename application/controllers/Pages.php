<!--
Name: Mia Ehrlich
Final Project
Purpose: This is the controller class Pages with a method that loads the views for all site pages with header,
page, and footer templates
-->
<?php
// this protects your controllers from direct access
defined('BASEPATH') OR exit('Forbidden');
class Pages extends CI_Controller {

    public function view($page = 'home') {
//        $this->load->library('parser');

        if ( !file_exists(APPPATH.'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        } else {
            $data['title'] = ucfirst($page); // Capitalize the first letter

            if ($page == 'contact') {
//                $data['contactjs'] = $this->parser->parse('templates/contact', [], TRUE);
                $data['scripts_to_load'] = array('main.js', 'contact.js');
           } else {
                $data['scripts_to_load'] = array('main.js');
            }


            $this->load->view('templates/header', $data);
            $this->load->view('pages/' . $page);
            $this->load->view('templates/footer');

        }
    }
}