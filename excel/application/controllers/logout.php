<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
require_once APPPATH. '/third_party/Spout/Autoloader/autoload.php' ;

// Use the Spout Namespaces lets 
use  Box\Spout\Reader\ ReaderFactory ;
 use  Box\Spout\Common\Type ;
use Box\Spout\Writer\WriterFactory;

class Logout extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
        $this->load->model('prospectdata','',TRUE);
        
         $this->load->helper(array('form'));

    }

    function index()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }
    
    
}

?>

