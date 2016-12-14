<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); //we need to call PHP's session object to access it through CI

ini_set('max_input_time', -1);
ini_set('max_execution_time', -1);
ini_set('memory_limit', '3G');

class Uploadupdate extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('prospectdata','',TRUE);
        $this->load->helper('date');
        $this->load->helper(array('form'));
        error_reporting(E_ERROR | E_PARSE);
    }

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['accesslevel'] = $session_data['accesslevel'];
           
            $this->load->view('header', $data);
            $this->load->view('uploadupdate', $data);
            $this->load->view('footer', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function read()
    {
        try {



          if($this->session->userdata('logged_in'))
          {
              $session_data = $this->session->userdata('logged_in');
              $data['username'] = $session_data['username'];
              $data['accesslevel'] = $session_data['accesslevel'];

            
            if($this->input->post('uni_id')){
                foreach($this->input->post('uni_id') as $id)
                {
                    foreach($_SESSION['log'] as $logId)
                    {
                        if($logId['Unique_ID'] == $id)
                        {
                            $this->prospectdata->updateEx($logId);
                        }
                    }
                }
                
            }
             
            foreach($_SESSION['newRow'] as $new)
            {
              $this->prospectdata->uploadprospect($new);
            }


              $data['success'] = "Prospect Upload Update Successful!";
              $this->prospectdata->save_contactcompanypercountry();
              $this->prospectdata->save_companypercountry();
              $this->prospectdata->save_companyactivitypercountry();
              $this->prospectdata->save_companysizepercountry();

              $this->load->view('header', $data);
              $this->load->view('uploadupdate', $data);
              $this->load->view('footer', $data);
          }
          else
          {
              //If no session, redirect to login page
              redirect('login', 'refresh');
          }
        } catch (Exception $e) {
            $data['success'] = "An Error Occured";
            $this->load->view('header', $data);
            $this->load->view('uploadupdate', $data);
            $this->load->view('footer', $data);
        }
    }


  
}


 ?>