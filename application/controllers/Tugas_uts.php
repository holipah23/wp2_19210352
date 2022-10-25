<?php
class Tugas_uts extends CI_Controller
{
 public function index()
 {
	$this->load->view('tugas_uts/view_form');
 }
 
 public function cetak()
 { 
	$this->form_validation->set_rules('nama','Nama Siswa',
	'required|min_length[3]', ['required' => 'Nama siswa harus diisi','min_length' => 'Nama terlalu pendek']);
	
	$this->form_validation->set_rules('nis','NIS',
	'required|min_length[3]', ['required' => 'Nomor induk siswa harus diisi','min_length' => 'NIS terlalu pendek']);
	
	$this->form_validation->set_rules('kelas','Kelas',
	'required|min_length[3]', ['required' => 'Kelas harus diisi','min_length' => 'Kelas terlalu pendek']);
	
	$this->form_validation->set_rules('tanggal','Tanggal Lahir',
	'required|min_length[3]', ['required' => 'Tanggal lahir harus diisi','min_length' => 'Tanggal Lahir terlalu pendek']);
	
	$this->form_validation->set_rules('tempat','Tempat Lahir',
	'required|min_length[3]', ['required' => 'Tempat lahir harus diisi','min_length' => 'Tempat Lahir terlalu pendek']);
	
	$this->form_validation->set_rules('alamat','Alamat',
	'required|min_length[3]', ['required' => 'Alamat harus diisi','min_length' => 'Alamat terlalu pendek']);
	
	$this->form_validation->set_rules('jeniskel','Jenis Kelamin','required|min_length[3]', ['required' => 'Jenis kelamin harus dipilih','min_length' => 'pilih jenis kelamin']);
	
	$this->form_validation->set_rules('agama','Agama',
	'required|min_length[3]', ['required' => 'Agama harus dipilih','min_length' => 'pilih salah satu agama']);
	
	if ($this->form_validation->run() != true) 
		{
			$this->load->view('tugas_uts/view_form');
		}
	else
		{
			$data =[
			 'nama' => $this->input->post('nama'),
			 'nis' => $this->input->post('nis'),
			 'kelas' => $this->input->post('kelas'),
			 'tanggal' => $this->input->post('tanggal'),
			 'tempat' => $this->input->post('tempat'),
			 'alamat' => $this->input->post('alamat'),
			 'jeniskel' => $this->input->post('jeniskel'),
			 'agama' => $this->input->post('agama'),];
			 
			$this->load->view('tugas_uts/view_data', $data);
		}
 }
}
 