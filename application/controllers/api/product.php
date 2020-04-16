<?php
require APPPATH . 'libraries/REST_Controller.php';
class Product extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function index_get($id = 0)
    {
        if(!empty($id)){
            $data = $this->db->get_where("products", ['product_id' => $id])->result();
        }else{
            $data = $this->db->get("products")->result();
        }
        $this->response($data, REST_Controller::HTTP_OK);
    }
}