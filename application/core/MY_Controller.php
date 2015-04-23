<?php
class Admin_Controller extends CI_Controller
{
  function __construct() { 
    parent::__construct(); 
    
    // Check if the user is already logged in 
    if (!$this->ion_auth->logged_in()) { 
      // If not, we send him to the login Page 
      redirect(base_url() .'auth/login');   
    }
    if(!$this->ion_auth->is_admin()){
      redirect(base_url() .'auth/login');  
    }
  }
}


class Member_Controller extends CI_Controller
{
  function __construct() { 
    parent::__construct(); 
    
    // Check if the user is already logged in 
    if (!$this->ion_auth->logged_in()) { 
      // If not, we send him to the login Page 
      redirect(base_url() .'auth/login'); 
    }
  }
}
?>