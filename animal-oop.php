<?php 
class Animal {

    // Property (Sama seperti Variabel yang menampung nilai atau value)
    public $name = '';
    public $legs = 2 ;
    public $cold_blooded = 'false';


    // -------------------------------------Method 

    // Construct adalah method yang pertama kali dipanggil/dijalankan
    public function __construct($data_name) 
    {
        $this->name = $data_name;
    }

    // Set data property name
    public function set_name($data)
    {
        $this->name = $data;
    }

    // Untuk ambil data dari property name
    public function get_name() 
    {
        return $this->name;
    }

    public function set_legs($data)
    {
        $this->legs = $data;
    }

    public function get_legs()
    {
        return $this->legs;
    }

    public function set_cold($data)
    {
        $this->cold_blooded = $data;
    }

    public function get_cold()
    {
        return $this->cold_blooded;
    }

}
