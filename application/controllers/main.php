<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {

    }
 
    public function brands()
    {
        $crud = new grocery_CRUD();
 
        $crud->set_table('brands');
        $crud->set_subject('Marca');
        $crud->columns('brand','model');
        $crud->display_as('brand','Marca');
        $crud->display_as('model','Modelo');
        $output = $crud->render();

 
        $this->test_crud($output);                
        //echo "<pre>";
        //print_r($output);
        //echo "</pre>";
        //die();
    }
 
    function test_crud($output = null)
 
    {
        $this->load->view('example2.php',$output);    
    }    
}