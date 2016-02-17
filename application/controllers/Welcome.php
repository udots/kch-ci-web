<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		if (!isset($_SESSION['user'])){$this->session->set_userdata('user','LOGIN');}
		if (!isset($_SESSION['pos'])){$this->session->set_userdata('pos','');}
		$this->load->view('welcome_message',array('user'=>json_encode(array('fullname'=>'','position'=>''))));
	}

	public function getcontent($table,$id){
		$data = $this->dataprocess->getContents($table,$id);
		echo json_encode($data);
	}

	public function getarticles($table){
		$data = $this->dataprocess->getArticles($table);
		echo json_encode($data);
	}

	public function gologin() {
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$data = $this->dataprocess->goLogin($user,$pass);
		$this->session->set_userdata('user',$data['fullname']);
		$this->session->set_userdata('pos',$data['position']);
		header('location: '.base_url());
	}

	public function getvisitor(){
		$data = $this->dataprocess->getVisitor();
		echo json_encode($data);
	}
	
	public function sendMail($from,$name,$to,$nohp,$isipsn,$email,$subject){
		$pesan = "Terima kasih sudah berkunjung ke web site kami. \r\n\r\nBerikut ini data anda: \r\nNama: $name \r\nNo HP: $nohp \r\nEmail: $email \r\nPesan:\r\n$isipsn \r\n\r\nKami akan segera merespon pertanyaan anda. Terima kasih. \r\n\r\nSalam \r\n\r\nKRISCHAN";
		
		$this->load->library('email');
	 	$this->email->from($from,$name);
        	$this->email->to($to);
        	$this->email->subject($subject);
        	$this->email->message($pesan);
        	$this->email->send();
	}

	public function savepesan(){
		date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y-m-d",time());
        $name = $this->input->post('txNama');
        $nohp = $this->input->post('txHp');
        $email = $this->input->post('txEmail');
        $isipsn = $this->input->post('txIsi');
        $data = array('tanggal'=>$tanggal,'nama'=>$name,'no_hp'=>$nohp,'email'=>$email,'tipe'=>'','judul'=>'','isi'=>$isipsn);
        $res = $this->dataprocess->savePesan($data);

        $this->sendMail('udots@yahoo.com','Arif Budiyono',$email,$nohp,$isipsn,$email,'Pertanyaan sudah kami terima');
		$this->sendMail($email,$name,'udots@yahoo.com',$nohp,$isipsn,$email,'Pertanyaan dari '.$name);

        header('location: '.base_url());
	}

	public function counter(){
		//Ambil informasi dari pengunjung
		$ipaddress = $this->input->server('REMOTE_ADDR')."";
		date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y-m-d",time());
		$kunjungan = 1;
		$ref = @$_SERVER[HTTP_REFERER];

		//Daftarkan ke dalam session lalu simpan ke database
		if(!isset($_SESSION['Visitor'])){
			$this->session->set_userdata('visitor',$ipaddress);
			$res = $this->dataprocess->saveVisitor($tanggal,$ipaddress,$kunjungan,$ref);
		}

		//Hitung jumlah visitor
		$sql = $this->dataprocess->getSumCounter();

		echo $sql;
	}
}
