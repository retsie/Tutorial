
<?php
Class User extends CI_Model
{
    
 // methods..
    function login($username, $password)
    {
        $this -> db -> select('id, username, password, accesslevel');
        $this -> db -> from('userlogin');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', MD5($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
 //properties
    
    function getAccess($id)
    {
        $this ->db -> select('accesslevel').
        $this ->db -> from ('userlogin');
        $this ->db -> where('id',$id);
        $this -> db ->limit(1);
        
        $query = $this -> db ->get();
        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
        
    }
}    
?>

