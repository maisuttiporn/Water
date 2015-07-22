<?php 
class sendmail_model extends CI_Model {
	protected $mconfig=null;
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->mconfig = Array(
				'protocol' => 'smtp',

				'smtp_host' => 'mail.thaionlyone.com',
	
				'smtp_port' => 25,
		
				'smtp_user' => 'system@thaionlyone.com',
				'smtp_pass' => '1q2w3e4r1q2w3e4r',
				'charset'   => 'utf-8',
				'mailtype'  => ' text', 
				
				//google
				/*
				'smtp_host' => 'tls://smtp.googlemail.com',
				    'smtp_port' => 465,
				    'smtp_user' => 'maisuttiporn@gmail.com',
				    'smtp_pass' => 'Maike5005',
				    */
				//google
				
				);
	}
	function testmail($to) {

				$this->load->library('email', $this->mconfig);
				$this->email->set_newline("\r\n");
				$this->email->from('system@thaionlyone.com','info');
				$this->email->to($to);
				$subject = "ทดสอบอีเมล์ ภาษาไทย";
				//$subject = '=?'. $this->email->charset .'?B?'. $subject .'?=';
				$this->email->subject($subject);

				//$message=$this->load->view('saleservice/inquiry1',TRUE);
				$message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>';
				$message .= '<body>';
				$message .= "<p>สวัสดีเพื่อนๆชาวพันทิพค่ะ เราจะมาแชร์วิธีการแต่งหน้าง่ายๆ 5นาทีด้วยเครื่องสำอางแค่7ชิ้น เหมาะกับวัยเพิ่งเริ่มทำงาน(อย่างเรา) ในชั่วโมงที่รีบๆ เช่น วันที่ตื่นสาย 5555 เครื่องสำอางเราเป็นของฝาก</p>";
       		   		$message .= '</body></html>';
       		   		 $this->email->message($message);  
				// Set to, from, message, etc.
				$result = $this->email->send();
			   // return $this->email->print_debugger();
	}
	function techreview_mail($to,$qt_id,$DOC_ID,$qt_compname,$user_FULLNAME) {
				$this->load->library('email', $this->mconfig);
				$this->email->set_newline("\r\n");
				$this->email->from('system@thaionlyone.com','WASTEWATER TREATMENT ONLINE');
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
				$this->email->from('system@thaionlyone.com','WASTEWATER TREATMENT ONLINE');
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