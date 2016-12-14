<?php 
session_start(); //we need to call PHP's session object to access it through CI

ini_set('max_input_time', -1);
ini_set('max_execution_time', -1);
ini_set('memory_limit', '3G');

class PreviewUpdate extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('prospectdata','',TRUE);
        $this->load->helper('date');
        $this->load->helper(array('form'));
        error_reporting(E_ERROR | E_PARSE);
    }

	public function preview()
	{
      $_SESSION['log'] = '';

		$session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['accesslevel'] = $session_data['accesslevel'];
		if($_FILES['userfile']['name'] ) 
       {
         

          	  $file = $_FILES['userfile']['tmp_name'];
              $config['upload_path']   = './Upload/'; 
              $config['allowed_types'] = '*'; 
              $data['filename'] = $_FILES['userfile']['name'];
              
                 
              $this->load->library('upload', $config);

              if ( ! $this->upload->do_upload('userfile')) {
                  $error = array('error' => $this->upload->display_errors()); 
                  $this->load->view('header', $data);
                  $this->load->view('wishlist', $error);
                  $this->load->view('footer', $data);
              }
              

         
              
              $this->load->library('excel');
             
              $objPHPExcel = PHPExcel_IOFactory::load($file);
              
              $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
            
              foreach ($cell_collection as $cell) {
                   $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
                   $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
                   $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
                  
                   if ($row == 1) {
                   $header[$row][$column] = $data_value;
                   } else {
                   $arr_data[$row][$column] = $data_value;
                   }
              }
              
              $log = array();
              $newRow = array();
              $fromDatabase = array();
              foreach($arr_data as $dataarray):

                  $valuearray = array('Unique_ID'=>$dataarray['A']);

                  $exist = $this->prospectdata->isExist($dataarray['A']);
                  if($exist)
                  {
                      $fromDatabase[] = $exist;
                      $log[] = array('Unique_ID'=>$dataarray['A'], 
                                     'DATE_OF_LAST_UPDATE'=>$this->excelDateToDate($dataarray['B']), 
                                     'SOURCE'=>$dataarray['C'], 
                                     'COMMENTS'=>$dataarray['D'], 
                                     'COMPANY_NAME'=>$dataarray['E'], 
                                     'SALUTATION'=>$dataarray['F'], 
                                     'FIRST_NAME'=>$dataarray['G'], 
                                     'LAST_NAME'=>$dataarray['H'], 
                                     'EXACT_JOB_TITLE'=>$dataarray['I'], 
                                     'JOB_CATEGORY'=>$dataarray['J'], 
                                     'JOB_LEVEL'=>$dataarray['K'], 
                                     'ADDRESS1'=>$dataarray['L'], 
                                     'ADDRESS2'=>$dataarray['M'], 
                                     'POSTCODE'=>$dataarray['N'], 
                                     'CITY'=>$dataarray['O'], 
                                     'REGION'=>$dataarray['P'], 
                                     'COUNTRY'=>$dataarray['Q'], 
                                     'PHONENUMBER'=>$dataarray['R'], 
                                     'DIRECTLINE'=>$dataarray['S'], 
                                     'EMAIL'=>$dataarray['T'], 
                                     'WEBSITE'=>$dataarray['U'], 
                                     'ACTIVITY_SECTOR'=>$dataarray['V'], 
                                     'SUBACTIVITY_SECTOR'=>$dataarray['W'],
                                     'ANNUAL_TURNOVER'=>$dataarray['X'],
                                     'GLOBAL_COMPANY_SIZE'=>$dataarray['Y'],
                                     'COUNTRY_COMPANY_SIZE'=>$dataarray['Z'],
                                     'IT_DM_CYCLE_LOCALLY_MADE'=>$dataarray['AA'],
                                     'LOCATION_OF_IT_DM_CYCLE'=>$dataarray['AB'],
                                     'HQLOCATION'=>$dataarray['AC'],
                                     'ERP'=>$dataarray['AD'],
                                     'CRM'=>$dataarray['AE'],
                                     'NUMBER_OF_USERS'=>$dataarray['AF'],
                                     'NUMBER_OF_VMS'=>$dataarray['AG'],
                                     'Virtualization_Solution'=>$dataarray['AH'],
                                     'Backup_Recovery_Solution'=>$dataarray['AI'],
                                     'Storage_Solution'=>$dataarray['AJ'],
                                     'Collaboration_Tools'=>$dataarray['AK'],
                                     'Business_Intelligence'=>$dataarray['AL'],
                                     'Cloud_Solution'=>$dataarray['AM']);
                  }
                  else
                  {
                    $newRow[] = array('Unique_ID'=>$dataarray['A'], 
                                     'DATE_OF_LAST_UPDATE'=>$this->excelDateToDate($dataarray['B']), 
                                     'SOURCE'=>$dataarray['C'], 
                                     'COMMENTS'=>$dataarray['D'], 
                                     'COMPANY_NAME'=>$dataarray['E'], 
                                     'SALUTATION'=>$dataarray['F'], 
                                     'FIRST_NAME'=>$dataarray['G'], 
                                     'LAST_NAME'=>$dataarray['H'], 
                                     'EXACT_JOB_TITLE'=>$dataarray['I'], 
                                     'JOB_CATEGORY'=>$dataarray['J'], 
                                     'JOB_LEVEL'=>$dataarray['K'], 
                                     'ADDRESS1'=>$dataarray['L'], 
                                     'ADDRESS2'=>$dataarray['M'], 
                                     'POSTCODE'=>$dataarray['N'], 
                                     'CITY'=>$dataarray['O'], 
                                     'REGION'=>$dataarray['P'], 
                                     'COUNTRY'=>$dataarray['Q'], 
                                     'PHONENUMBER'=>$dataarray['R'], 
                                     'DIRECTLINE'=>$dataarray['S'], 
                                     'EMAIL'=>$dataarray['T'], 
                                     'WEBSITE'=>$dataarray['U'], 
                                     'ACTIVITY_SECTOR'=>$dataarray['V'], 
                                     'SUBACTIVITY_SECTOR'=>$dataarray['W'],
                                     'ANNUAL_TURNOVER'=>$dataarray['X'],
                                     'GLOBAL_COMPANY_SIZE'=>$dataarray['Y'],
                                     'COUNTRY_COMPANY_SIZE'=>$dataarray['Z'],
                                     'IT_DM_CYCLE_LOCALLY_MADE'=>$dataarray['AA'],
                                     'LOCATION_OF_IT_DM_CYCLE'=>$dataarray['AB'],
                                     'HQLOCATION'=>$dataarray['AC'],
                                     'ERP'=>$dataarray['AD'],
                                     'CRM'=>$dataarray['AE'],
                                     'NUMBER_OF_USERS'=>$dataarray['AF'],
                                     'NUMBER_OF_VMS'=>$dataarray['AG'],
                                     'Virtualization_Solution'=>$dataarray['AH'],
                                     'Backup_Recovery_Solution'=>$dataarray['AI'],
                                     'Storage_Solution'=>$dataarray['AJ'],
                                     'Collaboration_Tools'=>$dataarray['AK'],
                                     'Business_Intelligence'=>$dataarray['AL'],
                                     'Cloud_Solution'=>$dataarray['AM']);
                  }
                  
              endforeach;


            


              $_SESSION['newRow'] = $newRow; //new rows
              $_SESSION['log'] = $log; //all row in the excel
              $data['fromdatabase'] = $fromDatabase;
              if(sizeof($log) > 0) 
              {
                $data['log'] = $log; //existing rows
              }
              else
              {
                $data['log'] = false;
              } 
            


              $this->load->view('header', $data);
              $this->load->view('uploadpreview', $data);
              $this->load->view('footer', $data);
      
      }

	}

   function excelDateToDate($readDate){
        if(date($readDate)==0) {
            if($readDate==""){
                return $readDate;
            }
            else {
                
                $UNIX_DATE = ($readDate - 25569) * 86400;
                return gmdate("d/m/Y H:i:s", $UNIX_DATE);
            }
                
        }
        else
        {return date($readDate); }
    }
}


 ?>