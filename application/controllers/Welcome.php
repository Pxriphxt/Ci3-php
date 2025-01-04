<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();  // โหลดฐานข้อมูล
        $this->load->model('Car_model'); // โหลด Model Car_model
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('home');
    }

    public function about() {
        $this->load->view('about');
    }

    public function resume() {
        $this->load->view('resume');
    }

    public function portfolio() {
        $this->load->view('portfolio');
    }

    public function cars() {
        // เรียกข้อมูลจาก Model
        $data['cars'] = $this->Car_model->get_cars();

        // โหลด view และส่งข้อมูลไปยัง view
        $this->load->view('cars', $data);
    }

    public function create() {
        $this->form_validation->set_rules('car_username', 'First Name', 'required');
        $this->form_validation->set_rules('car_userlname', 'Last Name', 'required');
        $this->form_validation->set_rules('car_brand', 'Brand', 'required');
        $this->form_validation->set_rules('car_model', 'Model', 'required');
        $this->form_validation->set_rules('car_registration', 'Registration', 'required');
        $this->form_validation->set_rules('car_color', 'Color', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('create_car');
        } else {
            $this->Car_model->insert_car();
        	redirect('cars');
        }
    }
	public function edit($car_id) {
		// โหลดข้อมูลที่ต้องการแก้ไข
		$data['car'] = $this->Car_model->get_car_by_id($car_id);
	
		if (empty($data['car'])) {
			show_404(); // ถ้าไม่พบข้อมูล
		}
	
		// ตั้งค่าการ validation ของฟอร์ม
		$this->form_validation->set_rules('car_username', 'First Name', 'required');
		$this->form_validation->set_rules('car_userlname', 'Last Name', 'required');
		$this->form_validation->set_rules('car_brand', 'Brand', 'required');
		$this->form_validation->set_rules('car_model', 'Model', 'required');
		$this->form_validation->set_rules('car_registration', 'Registration', 'required');
		$this->form_validation->set_rules('car_color', 'Color', 'required');
	
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('edit_car', $data);
		} else {
			$this->Car_model->update_car($car_id); // เรียกฟังก์ชัน update_car
			redirect('cars');
		}
	}
	public function delete($car_id) {
		$this->Car_model->delete_car($car_id); // เรียกฟังก์ชัน delete_car
		redirect('cars');
	}

} // ปิดคลาส Welcome
?>