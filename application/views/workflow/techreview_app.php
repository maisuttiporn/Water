<div class="row">
<div class="span16">
	<div class="span16">
		<h3>Technician Review</h3>
		<hr>
	</div>
	
	<div class="span16">
		<h5>DOC ID. : <?= $quotation->DOC_ID?></h5>
		<h5>QT No. : <?= $quotation->qt_id?></h5>
		<h5>บริษัท : <span><?= $quotation->qt_compname?></span> </h5> 
		<h5>ผู้เสนอราคา : <span><?= $quotation->qt_createby?></span> </h5> 
	</div>
	<div class="span16">
		<table class="table">
			<thead>
				<th>#</th>
				<th width="60%">รายการสินค้าและบริการ</th>
				<th>จำนวณ</th>
				<th>หน่วย</th>
				<th>ราคา</th>
				<th>รวม</th>			
			</thead>
			<?php $i=0; foreach($quotationdesc as $row) : $i++;?>
			<tr>
				<td><?=$i?></td>
				<td><?=$row->qt_desc?></td>
				<td><?=$row->qt_qty?></td>
				<td><?=$row->qt_unit?></td>
				<td>**.**</td>
				<td>**.**</td>
			</tr>
			<?php endforeach;?>
		</table>
	</div>
	<div class="span16">	
		<div class="well">
			<h5>ข้อมความจาก <?=$msg->userfrom_name?> : </h5><p><?=$msg->msg_body?></p>
		</div>
	</div>
	<div class="span16" style="text-align:center;">
		<div class="container">
			
		</div>		
	</div>
	<div class="span16" style="text-align:center;">
	<footer id="submit-actions" class="form-actions">
	<form id="techreview_form" action="../workflow/techreview_submit" method="post">
	<strong></strong>
	<div class="form-group form-inline">
		<label class="radio-inline">
		  <input type="radio" name="app" id="app1" value="yes"> อนุมัติ &nbsp;&nbsp;&nbsp;
		</label>
		<label class="radio-inline">	
		   <input type="radio" name="app" id="app2" value="no"> ไม่อนุมติ
		</label>
		<br><br>
	</div>
	<div class="form-group">		
		<input type="hidden" name="userfrom_email" value="<?= $msg->userfrom_email?>">
		<input type="hidden" name="userfrom_name" value="<?= $msg->userfrom_name?>">
		<input type="hidden" name="userfrom_id" value="<?= $msg->userfrom_id?>">
		<input type="hidden" name="userfrom_usergroup_ID" value="<?= $msg->userfrom_usergroup_ID?>">
		<input type="hidden" name="qt_id" value="<?= $quotation->qt_id?>">
		<input type="hidden" name="DOC_ID" value="<?= $quotation->DOC_ID?>">
		<input type="hidden" name="qt_compname" value="<?= $quotation->qt_compname?>">
		<textarea style="width:93%;height:110px;"  name="msg_body" id=""  class="form-control"></textarea>			
	</div>
        	<button style="width:150px;"  name="submit" type="submit" class="btn btn-primary btn-large" value="CONFIRM"> Send </button>
    </form>
    </footer>
	</div>
</div>
</div>
<script type="text/javascript">
	$('#techreview_form').submit(function(event) {
		var app1 = $('#app1').attr("checked");
		var app2 = $('#app2').attr("checked");
		if(app1=='checked' || app2=='checked' ) {
			return true;
		} else {
			return false;
		}
	});
</script>










