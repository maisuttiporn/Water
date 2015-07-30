<?php 
class sendmail_model extends CI_Model {
	protected $mconfig=null;
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		        $this->load->library("phpmailer");
		        $this->load->library("smtp");
		        $this->phpmailer->IsSMTP(); // we are going to use SMTP
		        $this->phpmailer->SMTPAuth   = true; // enabled SMTP authentication
		        $this->phpmailer->SMTPSecure = "";  // prefix for secure protocol to connect to the server
		        $this->phpmailer->Host       = "mail.thaionlyone.com";      // setting GMail as our SMTP server
		        $this->phpmailer->Port       = 25;                   // SMTP port to connect to GMail
		        $this->phpmailer->Username   = "system@thaionlyone.com";  // user email address
		        $this->phpmailer->Password   = "1q2w3e4r1q2w3e4r";            // password in GMail
		        $this->phpmailer->SetFrom('system@thaionlyone.com', 'WASTEWATER TREATMENT ONLINE');  //Who is sending the email
		        $this->phpmailer->AddReplyTo("system@thaionlyone.com","WASTEWATER TREATMENT ONLINE");  //email address that receives the response
		        $this->phpmailer->CharSet = "UTF-8";
		        $this->phpmailer->IsHTML(true);
	}
	function testmail($to) {		
	            $this->phpmailer->Subject    = "ทดสอบ subject";	
		
		$message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>';
		$message .= '<body>';
		$message .= "<h4>สวัสดีเพื่อนๆชาวพันทิพค่ะ เราจะมาแชร์วิธีการแต่งหน้าง่ายๆ 5นาทีด้วยเครื่องสำอางแค่7ชิ้น เหมาะกับวัยเพิ่งเริ่มทำงาน(อย่างเรา) ในชั่วโมงที่รีบๆ เช่น วันที่ตื่นสาย 5555 เครื่องสำอางเราเป็นของฝาก</h4>";
		$message .= '</body></html>';
		
		
		$this->phpmailer->Body  =   $message;
		//$this->phpmailer->AltBody    = "Plain text message";
       		
       		       $this->phpmailer->AddAddress($to, ""); 
       		       if(!$this->phpmailer->Send()) {
	          		return  "Error: " . $this->phpmailer->ErrorInfo;
		        } else {
		            return "Message sent correctly!";
		        }		
	}
	function techreview_mail($to,$qt_id,$DOC_ID,$qt_compname,$user_FULLNAME) {
				
				
				 $this->phpmailer->Subject    = '<แจ้งเตือน> Technical Review หมายเลข QT '.$qt_id.' บริษัท '.$qt_compname;
				
				$message = '<div style="">';
				$message .= '<br><h2>มีการส่ง Technical Review จากคุณ '.$user_FULLNAME.'<h2>';
				$message .= '<ul>';
				$message .= '<li>ใบเสนอราคาเลขที่ '.$qt_id.'</li>';
				$message .= '<li>เอกสารเลขที่ '.$DOC_ID.'</li>';
				$message .= '</ul>';
				$message .= '<h3>คุณสามารคลิ๊ก <a href="'.base_url().'">link</a> นี้เพื่อดำเนินการได้ทันที<h3>';
				$message .= '<div>';
       		   	 	
       		   	 	$this->phpmailer->Body  =   $message;
       		   	 	$this->phpmailer->AddAddress($to, ""); 
		       		       if(!$this->phpmailer->Send()) {
			          		return  "Error: " . $this->phpmailer->ErrorInfo;
				        } else {
				            return "Message sent correctly!";
				        }
       		   	 	
	}

	function techreviewapp_mail($to,$qt_id,$DOC_ID,$qt_compname,$user_FULLNAME) {
			
				
				
				$message = '<div style="">';
				$message .= '<br><h2>มีการอนุมัติ Technical Review จากคุณ '.$user_FULLNAME.'<h2>';
				$message .= '<ul>';
				$message .= '<li>ใบเสนอราคาเลขที่ '.$qt_id.'</li>';
				$message .= '<li>เอกสารเลขที่ '.$DOC_ID.'</li>';
				$message .= '</ul>';
				$message .= '<h3>คุณสามารคลิ๊ก <a href="'.base_url().'">link</a> นี้เพื่อดำเนินการได้ทันที<h3>';
				$message .= '<div>';
       

			    	 $this->phpmailer->Subject    = '<แจ้งเตือน> มีการอนุมัติ Technical Review หมายเลข QT '.$qt_id.' บริษัท '.$qt_compname;
				
			
       		   	 	
       		   	 	$this->phpmailer->Body  =   $message;
       		   	 	$this->phpmailer->AddAddress($to, ""); 
		       		       if(!$this->phpmailer->Send()) {
			          		return  "Error: " . $this->phpmailer->ErrorInfo;
				        } else {
				            return "Message sent correctly!";
				        }
	}
}