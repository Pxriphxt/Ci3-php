<?php
class Car_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // ฟังก์ชันสำหรับดึงข้อมูลรถทั้งหมด
    public function get_cars()
    {
        $query = $this->db->get('tb_cars'); // ดึงข้อมูลจากตาราง tb_cars
        return $query->result_array(); // ส่งผลลัพธ์กลับเป็น array
    }

    // ฟังก์ชันสำหรับดึงข้อมูลรถที่ต้องการแก้ไขโดยใช้ car_id
    public function get_car_by_id($car_id)
    {
        $query = $this->db->get_where('tb_cars', ['car_id' => $car_id]); // ดึงข้อมูลจากตาราง tb_cars ตาม car_id
        return $query->row_array(); // ส่งข้อมูลรถที่ตรงกับ car_id ในรูปแบบ array
    }

    // ฟังก์ชันสำหรับเพิ่มข้อมูลรถ
    public function insert_car() {
        $data = [
            'car_username' => $this->input->post('car_username'),
            'car_userlname' => $this->input->post('car_userlname'),
            'car_brand' => $this->input->post('car_brand'),
            'car_model' => $this->input->post('car_model'),
            'car_registration' => $this->input->post('car_registration'),
            'car_color' => $this->input->post('car_color')
        ];
        return $this->db->insert('tb_cars', $data);
    }

    // ฟังก์ชันสำหรับอัพเดตข้อมูลรถ
    public function update_car($car_id) {
        $data = [
            'car_username' => $this->input->post('car_username'),
            'car_userlname' => $this->input->post('car_userlname'),
            'car_brand' => $this->input->post('car_brand'),
            'car_model' => $this->input->post('car_model'),
            'car_registration' => $this->input->post('car_registration'),
            'car_color' => $this->input->post('car_color')
        ];

        $this->db->where('car_id', $car_id); // ค้นหาตาม car_id
        return $this->db->update('tb_cars', $data); // อัพเดตข้อมูลในตาราง tb_cars
    }

    // ฟังก์ชันสำหรับลบข้อมูลรถ
    public function delete_car($car_id) {
        $this->db->where('car_id', $car_id); // ค้นหาตาม car_id
        return $this->db->delete('tb_cars'); // ลบข้อมูลจากตาราง tb_cars
    }
}
