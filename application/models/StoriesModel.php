<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class StoriesModel extends CI_Model {

    public function __construct() {

    }

    public function getStories(){
        /*
         * use the db object to get the stories from the database
         * they are in a table called stories
         * there are only 5 so you can just grab the whole table at once.
         * that's not recommended practice, but let's keep it simple for now.
         *
         * https://codeigniter.com/userguide3/database/index.html
         *
         * Hint, this method can be as little as 2 lines of code including the return
         */

        $query = $this->db->query("SELECT * FROM stories");


        return $query->result_array();

        //return the array that is returned from the db object
//        return $query->result_array();
    }

}