<?php

Class Prospectdata extends CI_Model
{
        function get_countryList()
        {
            $this -> db -> select('id, country');
            $this -> db -> from('country');
            $this->db->order_by('country','asc');
            
            $query = $this -> db -> get();
            return $query->result();
            
        }
    
        function get_companysizeList()
        {
            $this -> db -> select('id, company_size');
            $this -> db -> from('company_size');
            
            $query = $this -> db -> get();
            return $query->result();
            
        }
    
        function get_fields()
        {
            
            return $this->db->list_fields('master');
            
        }
    
        function fetchlist($country,$company, $activity_sector,$company_size, $dmode)
        {   
            /*
            $query = $this->db->query('SELECT `Unique_ID`, `DATE_OF_LAST_UPDATE`, `SOURCE`, `COMMENTS`, `COMPANY_NAME`, `SALUTATION`, `FIRST_NAME`, `LAST_NAME`, `EXACT_JOB_TITLE`, `JOB_CATEGORY`, `JOB_LEVEL`, `ADDRESS1`, `ADDRESS2`, `POSTCODE`, `CITY`, `REGION`, `COUNTRY`, `PHONENUMBER`, `DIRECTLINE`, `EMAIL`, `WEBSITE`, `ACTIVITY_SECTOR`, `SUBACTIVITY_SECTOR`, `ANNUAL_TURNOVER`, `GLOBAL_COMPANY_SIZE`, `COUNTRY_COMPANY_SIZE`, `IT_DM_CYCLE_LOCALLY_MADE`, `LOCATION_OF_IT_DM_CYCLE`, `HQLOCATION`, `ERP`, `CRM`, `NUMBER_OF_USERS`, `NUMBER_OF_VMS`, `Virtualization_Solution`, `Backup_Recovery_Solution`, `Storage_Solution`, `Collaboration_Tools`, `Business_Intelligence`, `Cloud_Solution`FROM master where `ACTIVITY_SECTOR` like  
'); */
            $this -> db -> select('Unique_ID, 
                                   DATE_OF_LAST_UPDATE, 
                                   SOURCE, 
                                   COMMENTS, 
                                   COMPANY_NAME, 
                                   SALUTATION, 
                                   FIRST_NAME, 
                                   LAST_NAME, 
                                   EXACT_JOB_TITLE, 
                                   JOB_CATEGORY, 
                                   JOB_LEVEL, 
                                   ADDRESS1, 
                                   ADDRESS2, 
                                   POSTCODE, 
                                   CITY, 
                                   REGION, 
                                   COUNTRY, 
                                   PHONENUMBER, 
                                   DIRECTLINE, 
                                   EMAIL, 
                                   WEBSITE, 
                                   ACTIVITY_SECTOR, 
                                   SUBACTIVITY_SECTOR,
                                   ANNUAL_TURNOVER,
                                   GLOBAL_COMPANY_SIZE,
                                   COUNTRY_COMPANY_SIZE,
                                   IT_DM_CYCLE_LOCALLY_MADE,
                                   LOCATION_OF_IT_DM_CYCLE,
                                   HQLOCATION,
                                   ERP,
                                   CRM,
                                   NUMBER_OF_USERS,
                                   NUMBER_OF_VMS,
                                   Virtualization_Solution,
                                   Backup_Recovery_Solution,
                                   Storage_Solution,
                                   Collaboration_Tools,
                                   Business_Intelligence,
                                   Cloud_Solution');
            $this -> db -> from('master');
            if ($country != NULL)  $this->db->where('COUNTRY', $country);
            if ($company != NULL)  $this->db->like('COMPANY_NAME', $company);
            if ($activity_sector != NULL)  $this->db->where('ACTIVITY_SECTOR', $activity_sector);
            if ($company_size != NULL)  $this->db->where('COUNTRY_COMPANY_SIZE', $company_size);
            
            if ($dmode==2)
                $query = $this->db->limit(1000);
            
            $query = $this -> db -> get();
            return $query->result_array();
            
        }
        function get_acvtivitySectorList()
        {
            $this -> db -> select('id, activity_sector');
            $this -> db -> from('activity_sector');
            
            $query = $this -> db -> get();
            return $query->result();
            
        }
    
    function get_wishlistextract($wishlistcountry,$wishlistcompany,$dmode)
        {   
           $this -> db -> select('Unique_ID, 
                                   DATE_OF_LAST_UPDATE, 
                                   SOURCE, 
                                   COMMENTS, 
                                   COMPANY_NAME, 
                                   SALUTATION, 
                                   FIRST_NAME, 
                                   LAST_NAME, 
                                   EXACT_JOB_TITLE, 
                                   JOB_CATEGORY, 
                                   JOB_LEVEL, 
                                   ADDRESS1, 
                                   ADDRESS2, 
                                   POSTCODE, 
                                   CITY, 
                                   REGION, 
                                   COUNTRY, 
                                   PHONENUMBER, 
                                   DIRECTLINE, 
                                   EMAIL, 
                                   WEBSITE, 
                                   ACTIVITY_SECTOR, 
                                   SUBACTIVITY_SECTOR,
                                   ANNUAL_TURNOVER,
                                   GLOBAL_COMPANY_SIZE,
                                   COUNTRY_COMPANY_SIZE,
                                   IT_DM_CYCLE_LOCALLY_MADE,
                                   LOCATION_OF_IT_DM_CYCLE,
                                   HQLOCATION,
                                   ERP,
                                   CRM,
                                   NUMBER_OF_USERS,
                                   NUMBER_OF_VMS,
                                   Virtualization_Solution,
                                   Backup_Recovery_Solution,
                                   Storage_Solution,
                                   Collaboration_Tools,
                                   Business_Intelligence,
                                   Cloud_Solution');
            $this -> db -> from('master');
            
            if (!empty($wishlistcountry))  $this->db->where_in('COUNTRY', $wishlistcountry);
            if (!empty($wishlistcompany))  $this->db->where_in('COMPANY_NAME', $wishlistcompany);
            
            if ($dmode==2)
                $query = $this->db->limit(1000);
            $query = $this -> db -> get();
            /*
            $rows = array();
        
            foreach($query->result_array() as $row)
            {    
                $rows[] = $row; //add the fetched result to the result array;
            }
            */
            //return $rows;
            return $query->result_array();
            
        }
    
        function get_contactcompanypercountry($country,$company_name,$activity_sector,$company_size)
        {
            $this->db->save_queries = FALSE;
            
            $sql = "select count(company_name) as unique_contact_count,  company_name, country 
                    from master"; 
            
            $where_val = array();
            if (!empty($country)) {
                $sql .= " where country = ?";
                array_push($where_val, $country);
            }
            if (!empty($activity_sector)) {
                $sql .= " and activity_sector = ?";
                array_push($where_val, $activity_sector);
            }
            if (!empty($company_size)) {
                $sql .= " and country_company_size = ?";
                array_push($where_val, $company_size);
            }
            if (!empty($company_name)) {
                $sql .= " and company_name = ?";
                array_push($where_val, $company_name);
            }
            
            $sql .= " group by company_name ";
            
            
            return $this->db->query($sql, $where_val)->result_array();

        }
    
        function save_contactcompanypercountry()
        {
            $this->db->save_queries = FALSE;
            
            $this->db->empty_table('contactcompanypercountry');
            
            $sql = "insert into contactcompanypercountry(unique_contact_count, company_name, country)
                    select count(company_name) as unique_contact_count,  company_name, country 
                    from master
                    group by company_name"; 
            
            $this->db->query($sql);

        }
    
        function get_companypercountry($country,$company_name,$activity_sector,$company_size)
        {
            $this->db->save_queries = FALSE;
            
            $sql = "select count( distinct company_name) as company_count , country 
                    from master"; 
            
            $where_val = array();
            if (!empty($country)) {
                $sql .= " where country = ?";
                array_push($where_val, $country);
            }
            if (!empty($activity_sector)) {
                $sql .= " and activity_sector = ?";
                array_push($where_val, $activity_sector);
            }
            if (!empty($company_size)) {
                $sql .= " and country_company_size = ?";
                array_push($where_val, $company_size);
            }
            if (!empty($company_name)) {
                $sql .= " and company_name = ?";
                array_push($where_val, $company_name);
            }
            
            $sql .= " group by country ";
            
            
            return $this->db->query($sql, $where_val)->result_array();
            

        }
    
        function save_companypercountry()
        {
            $this->db->save_queries = FALSE;
            
            $this->db->empty_table('companypercountry');
            
            $sql = "insert into companypercountry(company_count, country) ";
            $sql .= "select count( distinct company_name) as company_count , country 
                    from master"; 
            
            $sql .= " group by country ";
            
            
            $this->db->query($sql);
            

        }
    
        function get_companyactivitypercountry($country,$company_name,$activity_sector,$company_size)
        {
            $this->db->save_queries = FALSE;
            
            $sql = "select count( distinct company_name) as unique_company_count,  activity_sector, country 
                    from master"; 
            
            $where_val = array();
            if (!empty($country)) {
                $sql .= " where country = ?";
                array_push($where_val, $country);
            }
            if (!empty($activity_sector)) {
                $sql .= " and activity_sector = ?";
                array_push($where_val, $activity_sector);
            }
            if (!empty($company_size)) {
                $sql .= " and country_company_size = ?";
                array_push($where_val, $company_size);
            }
            if (!empty($company_name)) {
                $sql .= " and company_name = ?";
                array_push($where_val, $company_name);
            }
            
            
            $sql .= " group by activity_sector ";
            
            return $this->db->query($sql, $where_val)->result_array();

        }
    
        function save_companyactivitypercountry()
        {
            $this->db->save_queries = FALSE;
            
            $this->db->empty_table('companyactivitypercountry');
            
            $sql = "insert into companyactivitypercountry (unique_company_count, activity_sector, country) ";
            $sql .= "select count( distinct company_name) as unique_company_count,  activity_sector, country 
                    from master"; 
            
            $sql .= " group by activity_sector ";
            
            $this->db->query($sql);

        }
    
        function get_companysizepercountry($country,$company_name,$activity_sector,$company_size)
        {
            $this->db->save_queries = FALSE;
            $sql = "select count( distinct company_name) as unique_company_count, country_company_size , country, id 
                    from master
                    join company_size
                    where country_company_size =company_size "; 
            
            $where_val = array();
            if (!empty($country)) {
                $sql .= " and country = ?";
                array_push($where_val, $country);
            }
            if (!empty($company_size)) {
                $sql .= " and country_company_size  = ?";
                array_push($where_val, $company_size);
            }
            if (!empty($activity_sector)) {
                $sql .= " and activity_sector = ?";
                array_push($where_val, $activity_sector);
            }
            if (!empty($company_name)) {
                $sql .= " and company_name = ?";
                array_push($where_val, $company_name);
            }
            
            $sql .= " group by country_company_size  order by id asc ";
            
            return $this->db->query($sql, $where_val)->result_array();

        }
    
        function save_companysizepercountry()
        {
            $this->db->save_queries = FALSE;
            $this->db->empty_table('companysizepercountry');
            
            $sql = "insert into companysizepercountry(unique_company_count, country_company_size,  country, order_id) ";
            $sql .= "select count( distinct company_name) as unique_company_count, country_company_size , country, id as order_id 
                    from master
                    join company_size
                    where country_company_size =company_size "; 
            
            
            $sql .= " group by country_company_size  order by id asc ";
            
            $this->db->query($sql);

        }
        
        function uploadprospect($dataarray)
        {  
            $this->db->insert('master',$dataarray);
        }

        public function updateEx($data)
        {
            $this->db->where('unique_id', $data['Unique_ID']);
            return $this->db->update('master', $data); 
        }
    
        function get_summary($option,$wishlistcountry,$wishlistcompany)
        {
            $sql = "select count( distinct company_name) as unique_company_count,  country_company_size, country 
                    from master
                    join company_size
                    where country_company_size=company_size "; 
            
            $where_val = array();
            if (!empty($country)) {
                $sql .= " and country = ?";
                array_push($where_val, $country);
            }
            if (!empty($company_size)) {
                $sql .= " and country_company_size = ?";
                array_push($where_val, $company_size);
            }
            if (!empty($activity_sector)) {
                $sql .= " and activity_sector = ?";
                array_push($where_val, $activity_sector);
            }
            if (!empty($company_name)) {
                $sql .= " and company_name = ?";
                array_push($where_val, $company_name);
            }
            
            $sql .= " group by country_company_size order by id asc ";
            
            return $this->db->query($sql, $where_val)->result();

        }
    
        function getdashboard($summarytable)
        {
            $sql = "select * from " . $summarytable; 
            
            
            
            return $this->db->query($sql)->result_array();

        }

     

       

        function isExist($id)
        {
            $this -> db -> select('Unique_ID, 
                                   DATE_OF_LAST_UPDATE, 
                                   SOURCE, 
                                   COMMENTS, 
                                   COMPANY_NAME, 
                                   SALUTATION, 
                                   FIRST_NAME, 
                                   LAST_NAME, 
                                   EXACT_JOB_TITLE, 
                                   JOB_CATEGORY, 
                                   JOB_LEVEL, 
                                   ADDRESS1, 
                                   ADDRESS2, 
                                   POSTCODE, 
                                   CITY, 
                                   REGION, 
                                   COUNTRY, 
                                   PHONENUMBER, 
                                   DIRECTLINE, 
                                   EMAIL, 
                                   WEBSITE, 
                                   ACTIVITY_SECTOR, 
                                   SUBACTIVITY_SECTOR,
                                   ANNUAL_TURNOVER,
                                   GLOBAL_COMPANY_SIZE,
                                   COUNTRY_COMPANY_SIZE,
                                   IT_DM_CYCLE_LOCALLY_MADE,
                                   LOCATION_OF_IT_DM_CYCLE,
                                   HQLOCATION,
                                   ERP,
                                   CRM,
                                   NUMBER_OF_USERS,
                                   NUMBER_OF_VMS,
                                   Virtualization_Solution,
                                   Backup_Recovery_Solution,
                                   Storage_Solution,
                                   Collaboration_Tools,
                                   Business_Intelligence,
                                   Cloud_Solution');
            $this -> db -> from('master');
            $this -> db -> where('unique_id', $id);
            $this -> db -> limit(1);

            $query = $this -> db -> get();

            if($query -> num_rows() == 1)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }

        function masterDetail($id)
        {
            $this -> db -> select('Unique_ID, 
                                   DATE_OF_LAST_UPDATE, 
                                   SOURCE, 
                                   COMMENTS, 
                                   COMPANY_NAME, 
                                   SALUTATION, 
                                   FIRST_NAME, 
                                   LAST_NAME, 
                                   EXACT_JOB_TITLE, 
                                   JOB_CATEGORY, 
                                   JOB_LEVEL, 
                                   ADDRESS1, 
                                   ADDRESS2, 
                                   POSTCODE, 
                                   CITY, 
                                   REGION, 
                                   COUNTRY, 
                                   PHONENUMBER, 
                                   DIRECTLINE, 
                                   EMAIL, 
                                   WEBSITE, 
                                   ACTIVITY_SECTOR, 
                                   SUBACTIVITY_SECTOR,
                                   ANNUAL_TURNOVER,
                                   GLOBAL_COMPANY_SIZE,
                                   COUNTRY_COMPANY_SIZE,
                                   IT_DM_CYCLE_LOCALLY_MADE,
                                   LOCATION_OF_IT_DM_CYCLE,
                                   HQLOCATION,
                                   ERP,
                                   CRM,
                                   NUMBER_OF_USERS,
                                   NUMBER_OF_VMS,
                                   Virtualization_Solution,
                                   Backup_Recovery_Solution,
                                   Storage_Solution,
                                   Collaboration_Tools,
                                   Business_Intelligence,
                                   Cloud_Solution');
            $this -> db -> from('master');
            $this -> db -> where('unique_id', $id);
            $this -> db -> limit(1);

            $query = $this -> db -> get();

            if($query -> num_rows() == 1)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }


}
?>
        