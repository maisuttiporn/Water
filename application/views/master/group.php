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
        <div class="span16">
        	<?php if(isset($record)) : foreach($record as $row) :?>		
			<h4>
			<?=anchor(master_url()."usrgrp_delete/".$row->ID,"delete")?>
			" >>"
			<?=$row->usrgrp_id ?>:
			<?=$row->usrgrp_name ?>
			</h4>			
			<?php endforeach; ?>
        	<?php else : ?>
			<h4>No Record was return</h4>
			<?php endif; ?>
        </div>
	</div>
</div>
<?=$this->uri->segment(4); ?>












