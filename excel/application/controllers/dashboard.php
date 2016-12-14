<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
require_once APPPATH. '/third_party/Spout/Autoloader/autoload.php' ;

// Use the Spout Namespaces lets 
use  Box\Spout\Reader\ ReaderFactory ;
use  Box\Spout\Common\Type ;
use Box\Spout\Writer\WriterFactory;
ini_set('max_input_time', -1);
ini_set('max_execution_time', -1);
ini_set('memory_limit', '3G');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('prospectdata','',TRUE);
        $this->load->helper(array('form'));
    }

    function index()
    {
        
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['accesslevel'] = $session_data['accesslevel'];
    
            $country = "";
            $company= "";
            $activity_sector= "";
            $company_size= "";
            $dmode=2;
            
            //$data['extractedlistresult'] = $this->prospectdata->fetchlist($country,$company, $activity_sector,$company_size, $dmode);
            //$data['contactcompanypercountry'] = $this->prospectdata->get_contactcompanypercountry($country,$company,$activity_sector,$company_size);
            $data['companypercountry'] = $this->prospectdata->get_companypercountry($country,$company,$activity_sector,$company_size);
            $data['companyactivitypercountry'] = $this->prospectdata->get_companyactivitypercountry($country,$company,$activity_sector,$company_size);
            $data['companysizepercountry'] = $this->prospectdata->get_companysizepercountry($country,$company,$activity_sector,$company_size);
            
            $data['contactcompanypercountry'] = $this->prospectdata->getdashboard("contactcompanypercountry");
        
            $data['country'] = $country;
            $data['company'] = $company;
            $data['activity_sector'] = $activity_sector;
            $data['company_size'] = $company_size;
        
            $this->load->view('header', $data);
            $this->load->view('dashboard', $data);
            $this->load->view('footer', $data);
            
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }
    
    
    
    
}

?>

