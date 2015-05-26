<div class="row">
	<div class="contaniner">
		<div class="span16">
			<legend>สร้างแผนกผู้ใช้งานใหม่</legend>
		</div>
		<form action="<?=master_url()?>usrgrp_create" method="post">	
		<div class="span8">			
			<div class="form-group">
			<label for="">รหัสแผนกผู้ใช้งาน</label>
			<input type="text" name="usrgrp_id" class="form-control">
			</div>
			<div class="form-group">
			<label for="">ชื่อแผนกผู้ใช้งาน</label>
			<input type="text" name="usrgrp_name" class="form-control">
			</div>
		</div>
		<div class="span8">			
		</div>
		<div class="clearfix"></div>		
		<div class="span8">              
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">บันทึก</button>
                        <button type="submit" class="btn" name="action" value="CANCEL">ยกเลิก</button>               
        </div> 
        </form>	
	</div>
</div>