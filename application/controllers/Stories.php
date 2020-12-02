<!--
Name: Mia Ehrlich
Final Project
Purpose: This is the Stories controller that queries the database and passes the database data to the view
-->

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stories extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // this loads the StoriesModel and creates a StoriesModel object
        $this->load->model('StoriesModel');
    }

    public function index() {

//    Set page title

        $data['title'] = 'Stories';
//      Load custom scripts to template
        $data['scripts_to_load'] = array('main.js', 'stories.js');

        /*
         * Retrieve stories array from model's getStories() which queries db
         */
        $stories = $this->StoriesModel->getStories();

        /*
         * THIS IS THE HARD PART
         * Now that you have an array full of data you want to display,
         * you have to figure what to do with it. You can't display it as is.
         * The solution is templates (using the CI parser). You have all the raw
         * data in the $stories array. Make template(s) to send the data and get
         * back well formed HTML which you put into the $data[] associative array.
         * Then you send the $data array to the page below. There are many ways to
         * do this, but the idea is always the same. Do something like this...
         *
         * $data['somekey'] = $this->parser->parse('templates/sometemplate', [stories data], TRUE);
         *
         *
         */

        $story_data = array(
            'stories' => $stories
        );

        $data['stories'] = $this->parser->parse('templates/stories', $story_data, TRUE);

         /*
         * Where 'somekey' is how you will access the filled template in the page below.
         * 'sometemplate' is the template you want to fill with stories data
         * [stories data] is the data you want to send to the template to fill it in.
         *     that's not syntactically correct, it's just a concept, you have to figure
         *     out how to build the [stories data] array and send it.
         *
         * you will need to read this https://codeigniter.com/userguide3/libraries/parser.html
         *
         * there are 5 stories in the database, but you cannot count on that! you have to make
         * a general solution that will work if the number of stories change
         */

        $this->load->view('templates/header', $data);
        $this->load->view('pages/stories'); // <-- you need to make this page!
        $this->load->view('templates/footer');
    }

}
