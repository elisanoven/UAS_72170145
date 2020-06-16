<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pasien1 extends CI_Controller
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
        $data["pasienn"] = json_decode($this->curl->simple_get($this->BASE_API.'/api/pasien'));
        $this->load->view("RS/pasienview",$data);
    }
}
?>