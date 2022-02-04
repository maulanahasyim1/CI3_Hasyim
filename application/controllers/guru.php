<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guru extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gurumodel');
    }
	public function index()
	{
        $data = $this->gurumodel->getguru();
		$this->load->view('guru/index',['data'=>$data]);
    }

    public function error()
    {
        $this->load->view('guru/error');
    }

    public function tambah()
    {
        $this->load->view('guru/tambah');
    }
    public function action_tambah()
    {
        if($this->gurumodel->simpan()){
            redirect(base_url('index.php/guru/tambah'));
        }else{
            redirect(base_url('index.php/guru/error/'));
        }
    }

    public function edit($id)
    {
        $data = $this->gurumodel->getdata($id);
        $this->load->view('guru/edit',['data'=>$data]);
    }
    public function action_edit($id)
    {
        if($this->gurumodel->edit($id)){
            redirect(base_url('index.php/guru/edit'.$id));
        }else{
            redirect(base_url('index.php/guru/error/'));
        }
    }
    public function delete($id)
    {
        if($this->gurumodel->delete($id)){
            redirect(base_url('index.php/guru/'));
        }
    }
}
