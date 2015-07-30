<div class="row">
<div class="span16">
<form action="" method="post">
	<div class="span16" style="text-align:center;">
			<h4><strong><u>Waste Inquiry request form 1/4</u></strong></h4>
			<h4 style="color:red;"><u>DOC ID:<?=$DOC_ID?></u></h4>
	</div>
	<div class="span16">
	<div class="blockoff-left">		
	    <legend class="lead">
	    <h4><strong>
	    1.ส่วนของ บริษัทไทย โอนลี่ วัน แมนเนจ แอนด์ เซอร์วิส จำกัด</strong></h4>
	    </legend>	       
	    <div class="row">
	    <div class="contaniner">
    	<div class="span5">
			<div class="form-group">
				<label for="">
					<strong>รหัสของเสีย : Waste code</strong>
				</label>
				<input type="text" class="form-group" name="WASTECODE" 
				value="<?= $inquiry1["WASTECODE"];?>" style="width:100%">
			</div>
    	</div>
    	<div class="span5">
			<div class="form-group">
				<label for="">
					<strong>เลขประจำตัวผู้ก่อกำเนิดของเสีย</strong>
				</label>
				<input type="text" class="form-group" style="width:100%"
				name="WASTEOWNER" value="<?= $inquiry1["WASTEOWNER"];?>" >
			</div>
    	</div>	    	
	    </div>
	    <div class="span5">
			<div class="form-group">
				<label for="">
					<strong>วันที่ลงข้อมูล</strong>
				</label>
				<input type="text" class="form-group" style="width:100%"
				name="DATE" value="<?= $inquiry1["DATE"];?>">
			</div>
    	</div>	
    	<div class="span15">
			<div class="form-group">
				<label for="">
					<strong>ชื่อของเสีย : Waste Name</strong>
				</label>
				<input type="text" class="form-group" style="width:100%"
				name="WASTENAME" value="<?= $inquiry1["WASTENAME"];?>">
			</div>
    	</div>    	
	    </div> <!-- container -->
	    </div> <!-- row -->
    </div>
    <div class="span16">

	<div class="blockoff-left">
	    <legend class="lead">
	    <h4><strong>
	    2.ส่วนข้อมูลโรงงาน</strong></h4>
	    </legend>
	    <div class="row">
	    <div class="contaniner">
    	<div class="span15">
			<div class="form-group">
				<label for="">
					<strong>1.บริษัทผู้ผลิต : Company Name</strong>
				</label>
				<input type="text" class="form-group" style="width:100%"
				name="FACTNAME" value="<?= $inquiry1["FACTNAME"];?>">
			</div>
    	</div>
    	<div class="span15">
			<div class="form-group">
				<label for="">
					<strong>2.ที่อยู่ : Address</strong>
				</label>
				<input type="text" class="form-group" style="width:100%"
				name="FACTADDR" value="<?= $inquiry1["FACTADDR"];?>">
			</div>
    	</div>	    	
	    
	    <div class="span5">
			<div class="form-group">
				<label for="">
					<strong>ผู้ติดต่อ : Contact Person</strong>
				</label>
				<input type="text" class="form-group" style="width:100%"
				name="FACTCONTACT" value="<?= $inquiry1["FACTCONTACT"];?>">
			</div>
    	</div>	
    	<div class="span10">
			<div class="form-group">
				<label for="">
					<strong>ตำแหน่ง : Position</strong>
				</label>
				<input type="text" class="form-group" style="width:100%"
				name="FACTPOSITION" value="<?= $inquiry1["FACTPOSITION"];?>">
			</div>
    	</div>  
    	<div class="span5">
			<div class="form-group">
				<label for="">
					<strong>โทร. : Tel.</strong>
				</label>
				<input type="text" class="form-group" style="width:100%"
				name="FACTTEL" value="<?= $inquiry1["FACTTEL"];?>">
			</div>
    	</div>
    	<div class="span5">
			<div class="form-group">
				<label for="">
					<strong>แฟ๊กซ์ : Fax.</strong>
				</label>
				<input type="text" class="form-group" style="width:100%"
				name="FACTFAX" value="<?= $inquiry1["FACTFAX"];?>">
			</div>
    	</div>
    	<div class="span5">
			<div class="form-group">
				<label for="">
					<strong>E-mail</strong>
				</label>
				<input type="text" class="form-group" style="width:100%"
				name="FACTEMAIL" value="<?= $inquiry1["FACTEMAIL"];?>">
			</div>
    	</div>  
    	<div class="span15">
    		<div class="form-group">
    		<button name="submit" type="submit" class="btn btn-info btn-large">SAVE 1/4</button>
	    	<a href="<?=base_url()?>saleservice/unset_inquiry1/new" class="btn btn-info btn-large" >Clear Form</a>
	    	
	    </div>
    	</div>
    	</div>
	 
	    </div> <!-- row -->
	</div>
    </div>
</form>
</div>
</div>
