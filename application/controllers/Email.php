<!--
Name: Mia Ehrlich
Final Project
Purpose: This is the controller class Email that performs server side validation and echos an error response to the client
-->

<?php
defined('BASEPATH') OR exit('Forbidden');

class Email extends CI_Controller {

    public function __construct() {
        // this is the constructor for the Email class
        // the next line says to inherit the CI_controller constructor
        parent::__construct();

        /*
         * This controller should only accept AJAX requests
         * Putting this in the controller constructor protects
         * against non-AJAX connections
         */
        if(!$this->input->is_ajax_request()){
            die("error");
        }
    }

    private function mymail(){
        // dummy function to simulate calling a real mail() function
        // leave this as-is
        return true;
    }

    public function send() {
        /* uncomment this next line to see if you're getting
         * the post vars correctly */
//        var_dump($this->input->post());

        $response = "error";

    /* This will test to make sure we have a non-empty $_POST array from
     * the form submission. */
    if (!empty($_POST)) {

        /* Each of these will strip anything harmful or extraneous out
         * of the submitted $_POST variables. */
        $name = substr(strip_tags(trim($_POST['name'])), 0, 64);
        $subject = substr(strip_tags(trim($_POST['subject'])), 0, 64);
        $message = substr(strip_tags(trim($_POST['message'])), 0, 64);
        $from = filter_var($_POST['remail1'], FILTER_VALIDATE_EMAIL) ? $_POST['remail1'] : $from = "";

        /* The cleaning routines above may leave any variable empty. If we
         * find an empty variable, we stop processing because that means
         * someone tried to send us something malicious or incorrect. */
        if (!empty($name) && !empty($from) && !empty($subject) && !empty($message)) {

            /* this forms the correct email headers to send an email */
            $headers = "From: $from\r\n";
            $headers .= "Reply-To: $from\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

            /* Now attempt to send the email. This uses a dummy email function
             * because the student email server will not send mail. On a real
             * server, you would use just "mail" instead of "mymail" and
             * it will be sent normally.
             */
            if ($this->mymail('youremail@g.austincc.edu', $subject, $name . '\n\n' . $message, $headers)) {
                $response = 'okay';
            } else {
                $response = 'mailerror';
            }
        } else {
            $response = 'varerror';
        }
    } else {
        $response = 'posterror';
    }
    echo $response;
//}

//        if($this->mymail()){
//            echo "okay";
//        } else {
//            echo "error";
//        }

    }
}