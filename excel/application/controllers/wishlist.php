<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); //we need to call PHP's session object to access it through CI
require_once APPPATH. '/third_party/Spout/Autoloader/autoload.php' ;
use  Box\Spout\Reader\ ReaderFactory ;
use  Box\Spout\Common\Type ;
use Box\Spout\Writer\WriterFactory;
ini_set('max_input_time', -1);
ini_set('max_execution_time', -1);
ini_set('memory_limit', '3G');


class Wishlist extends CI_Controller {

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
       
            
            $this->load->view('header', $data);
            $this->load->view('wishlist', $data);
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
    
    function extractlist()
    {
        $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['accesslevel'] = $session_data['accesslevel'];
       
            
        $country= $this->input->post('country');
        $company= $this->input->post('company');
        $activity_sector= $this->input->post('activity_sector');
        $company_size= $this->input->post('company_size');
        $dmode=2;
            
        $data['extractedlistresult'] = $this->prospectdata->fetchlist($country,$company, $activity_sector,$company_size, $dmode);
        
        $this->load->view('header', $data);
            $this->load->view('extractedlist', $data);
            $this->load->view('footer', $data);
            
    }
    
    function exceldownload()
    {
         
        //$extractedlistresult = $this->prospectdata->fetchlist($country,$company, $activity_sector, $company_size, $dmode);
        $fieldlist = $this->prospectdata->get_fields();
        
        try {
            // Location excel file	       
            $filename="test03.xlsx";
            //$filename="test03.csv";
            $writer = WriterFactory::create(Type::XLSX); // for XLSX files
            //$writer = WriterFactory::create(Type::CSV); // for CSV files
            //$writer = WriterFactory::create(Type::ODS); // for ODS files

            //$writer->openToFile($file_path); // write data to a file or to a PHP stream
            // stream data directly to the browser
            $wishlistextract = array();
            $jwishlistcountry = array();
            $jwishlistcompany = array();
            
            $jwishlistcountry=$this->input->post('wishlistcountry');
            $jwishlistcompany=$this->input->post('wishlistcompany');
            
            $wishlistcountry=json_decode(htmlspecialchars_decode($jwishlistcountry, true));
            $wishlistcompany=json_decode(htmlspecialchars_decode($jwishlistcompany, true));
            $dmode=1;
            $wishlistextract = $this->prospectdata->get_wishlistextract($wishlistcountry,$wishlistcompany,$dmode);
            
            $writer->openToBrowser($fileName); 
            $writer->addRow($fieldlist); // add a row at a time
            $writer->addRows($wishlistextract); // add multiple rows at a time

            $writer->close();

      } Catch (Exception $e) {
            $error = $e->getMessage();
            
            $this->load->view('header', $data);
            $this->load->view('wishlist', $error);
            $this->load->view('footer', $data);  
        	  
      }
    }
    
    
    function readexcel()
    {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['accesslevel'] = $session_data['accesslevel'];
        
        $config['upload_path']   = './Upload/'; 
        $config['allowed_types'] = '*'; 
           
        $this->load->library('upload', $config);
			
        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('header', $data);
            $this->load->view('wishlist', $error);
            $this->load->view('footer', $data);
        }
        else { 
            $data['filename'] = $_FILES['userfile']['name']; 
            //$this->load->view('upload_success', $data); 
        }
        
        
        try{
            // Location excel file	       
            $file_path = $config['upload_path'].$_FILES['userfile']['name'] ;              	      
            $reader = ReaderFactory::create(Type::XLSX); // set Type .xlsx file 
	        $reader->open($file_path); // open the file	  	      
            
               
            $rows = array();
            $wishlistcountry = array();
            $wishlistcompany = array();
            $i = 0 ;
            //  Sheets Iterator. Once wrote multiple sheets                  	          
            foreach($reader->getSheetIterator() as $sheet) {
            //Rows // iterator	                
                if ($sheet->getIndex() === 0) {
                    foreach($sheet->getRowIterator() as $row) {
                        if ($i>0) {
                        // Data of excel sheet
                            array_push($wishlistcountry, $row[0]);
                            array_push($wishlistcompany, $row[1]);
                        }
	                   ++$i;
	               }
                    break;
                }
            }
            
            $reader->close();
            
            $wishlistcountry=array_filter($wishlistcountry);
            $wishlistcompany=array_filter($wishlistcompany);
            $dmode = 2;
            $wishlistextract = $this->prospectdata->get_wishlistextract($wishlistcountry,$wishlistcompany,$dmode);
            
            $data['wishlistextract'] = $wishlistextract;
            
            //$this->session->set_userdata($wishlistextract);
            //$this->session->set_userdata($wishlistcountry);
            //$this->session->set_userdata($wishlistcompany);
            
            $data['wishlistcountry'] = $wishlistcountry;
            $data['wishlistcompany'] = $wishlistcompany;
            $data['error'] = "The following results are Contacts within our system that belong to/based upon the Country/Companies found in the uploaded wishlist file.";
            
            $this->load->view('header', $data);
            $this->load->view('wishlistresults', $data);
            $this->load->view('footer', $data);
            
       } 
        Catch (Exception $e) {
            
            $error = $e->getMessage();
            
            $this->load->view('header', $data);
            $this->load->view('wishlist', $error);
            $this->load->view('footer', $data);  
        }
        
    }
}

?>

