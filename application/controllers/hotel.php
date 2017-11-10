<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hotel extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->model('country_model');
        $this->load->model('state_model');
        $this->load->model('city_model');
        $this->load->model('hotel_model');

    }
     public function view_hotel()
    {
             $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $data['city_list'] = $this->city_model->getcitylist();
       $data['hotel_list']=$this->hotel_model->gethotellist();
         $this->load->view('hotel_view',$data);
    }
              public function add_hotel()
    {
                     $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $data['city_list'] = $this->city_model->getcitylist();
       $data['hotel_list']=$this->hotel_model->gethotellist();
         $this->load->view('hotel_add',$data);
    }

    public function index()
	{  
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $data['city_list'] = $this->city_model->getcitylist();
        $data['hotel_list']=$this->hotel_model->gethotellist();
        $this->load->view('hotel_view', $data);
	}
        
        public function addp()
        {
            $config['upload_path'] = 'upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 800;
        $config['max_width'] = 2024;
        $config['max_height'] = 4000;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());

        } else {
          
            $data = array('upload_data' => $this->upload->data());
        
        $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'mobile' => $_POST['mobile'],
            'star'=>$_POST['star'],
            'image' => $_FILES['image']['name'],
            'country_id' => $_POST['country_id'],
            'state_id' => $_POST['state_id'],
            'city_id' => $_POST['city_id'],
        );
       
          $this->hotel_model->insert($data);
        }
        
            redirect('hotel/index');
             }
             
           public function drop_state() {
        $this->load->model('hotel_model');
        $data['update_data'] = $this->hotel_model->drop_state($_POST['country_id']);
        $this->load->view('drop_state', $data);
    }

    public function drop_city() {
        $this->load->model('hotel_model');
        $data['update_data'] = $this->hotel_model->drop_city($_POST['state_id']);
        $this->load->view('drop_city', $data);
    }
public function delete($hotel_id) {
        $this->hotel_model->delete($hotel_id);
        redirect("hotel/index");
    }
public function edit_data($hotel_id) {
    
        $data['update_data'] = $this->hotel_model->edit_data($hotel_id);
           $data['hotel_list']=$this->hotel_model->gethotellist();
        
        $data['country_list'] = $this->country_model->getcountrylist();
        
        $data['state_list'] = $this->state_model->getstatelist();
        $data['city_list'] = $this->city_model->getcitylist();
        $this->load->view('hotel_view', $data);
    }
        public function editp() {
            $config['upload_path'] = 'upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 800;
        $config['max_width'] = 2024;
        $config['max_height'] = 4000;
        
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
        } else
            {
           
        $this->hotel_model->update_data($_POST['hotel_id'], $_POST['name'], $_POST['email'], $_POST['mobile'],$_POST['star'],$_FILES['image']['name'],$_POST['country_id'],$_POST['state_id'], $_POST['city_id']);
         redirect("hotel/index");
    }
   
        }

    public function update_data($hotel_id) {
        $data['hotel_list']=$this->hotel_model->gethotellist();
        $data['country_list'] = $this->country_model->getcountrylist();
         $data['update_data'] = $this->state_model->getstatelist();
        $data['update_data'] = $this->city_model->getcitylist();
        $data['update_data'] = $this->hotel_model->edit_data($hotel_id);
        $data['hotel_list'] = $this->hotel_model->gethotellist();
        $this->load->view('hotel_view', $data);
    }

}
