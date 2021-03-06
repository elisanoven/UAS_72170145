<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sampel extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->BASE_API="http://localhost/CodeIgniter/index.php";
        $this->load->library('curl');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function index()
    {
        $data["products"] = json_decode($this->curl->simple_get($this->BASE_API.'/api/product'));
        $this->load->view("sampel/sampel_view",$data);
    }
}
?>
