<?php 
class sendmail_model extends CI_Model {
	protected $mconfig=null;
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->mconfig = Array(
				'protocol' => 'smtp',
				//'smtp_host' => '58.137.215.11',
				'smtp_host' => 'mail.saico.co.th',
				//'smtp_port' => 587,
				'smtp_port' => 25,
				//'smtp_user' => 'admin@thaionlyone.com',
				//'smtp_pass' => '1q2w3e4r1q2w3e4r',
				'smtp_user' => 'suttiporn@saico.co.th',
				'smtp_pass' => '1234',

				//google
				/*
				'smtp_host' => 'tls://smtp.googlemail.com',
				    'smtp_port' => 465,
				    'smtp_user' => 'maisuttiporn@gmail.com',
				    'smtp_pass' => 'Maike5005',
				    */
				//google
				'mailtype'  => 'html', 
				'charset'   => 'utf-8'
				);
	}
	function testmail($to) {
				$this->load->library('email', $this->mconfig);
				$this->email->set_newline("\r\n");
				$this->email->from('suttiporn@saico.co.th','info');
				$this->email->to($to);
				$this->email->subject('ทดสอบ อีเมล์');
       		    $this->email->message('Testing the email class.');  
				// Set to, from, message, etc.
				$result = $this->email->send();
			   // return $this->email->print_debugger();
	}
	function techreview_mail($to,$qt_id,$DOC_ID,$qt_compname,$user_FULLNAME) {
				$this->load->library('email', $this->mconfig);
				$this->email->set_newline("\r\n");
				$this->email->from('suttiporn@saico.co.th','WASTEWATER TREATMENT ONLINE');
				$this->email->to($to);
				$this->email->subject('<แจ้งเตือน> Technical Review หมายเลข QT '.$qt_id.' บริษัท '.$qt_compname);
				$msg_body = '<div style="">';
				$msg_body .= '<br><h2>มีการส่ง Technical Review จากคุณ '.$user_FULLNAME.'<h2>';
				$msg_body .= '<ul>';
				$msg_body .= '<li>ใบเสนอราคาเลขที่ '.$qt_id.'</li>';
				$msg_body .= '<li>เอกสารเลขที่ '.$DOC_ID.'</li>';
				$msg_body .= '</ul>';
				$msg_body .= '<h3>คุณสามารคลิ๊ก <a href="'.base_url().'">link</a> นี้เพื่อดำเนินการได้ทันที<h3>';
				$msg_body .= '<div>';
       		   	 $this->email->message($msg_body);

				// Set to, from, message, etc.
				if(!$result = $this->email->send()) {
					echo $this->email->print_debugger();
				}
			    return $this->email->print_debugger();
	}

	function techreviewapp_mail($to,$qt_id,$DOC_ID,$qt_compname,$user_FULLNAME) {
				$this->load->library('email', $this->mconfig);
				$this->email->set_newline("\r\n");
				$this->email->from('suttiporn@saico.co.th','WASTEWATER TREATMENT ONLINE');
				$this->email->to($to);
				$this->email->subject('<แจ้งเตือน> มีการอนุมัติ Technical Review หมายเลข QT '.$qt_id.' บริษัท '.$qt_compname);
				$msg_body = '<div style="">';
				$msg_body .= '<br><h2>มีการอนุมัติ Technical Review จากคุณ '.$user_FULLNAME.'<h2>';
				$msg_body .= '<ul>';
				$msg_body .= '<li>ใบเสนอราคาเลขที่ '.$qt_id.'</li>';
				$msg_body .= '<li>เอกสารเลขที่ '.$DOC_ID.'</li>';
				$msg_body .= '</ul>';
				$msg_body .= '<h3>คุณสามารคลิ๊ก <a href="'.base_url().'">link</a> นี้เพื่อดำเนินการได้ทันที<h3>';
				$msg_body .= '<div>';
       		    $this->email->message($msg_body);

				// Set to, from, message, etc.
				$result = $this->email->send();
			    return $this->email->print_debugger();
	}
}