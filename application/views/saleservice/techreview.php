<div class="row">
<div class="span16">
	<div class="span16">
		<h3>Technician Review</h3>
		<hr>
	</div>
	
	<div class="span16">
		<h4><?= $quotation->DOC_ID?></h4>
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
				<td><?=$row->qt_price?></td>
				<td><?=$row->qt_total?></td>
			</tr>
			<?php endforeach;?>
		</table>
	</div>
	<div class="span16">		
	</div>
	<div class="span16" style="">
	<!--
		<div class="container">
			<label for="">
			<h4>ผู้ Review.</h4>				
			</label>
			<select class="form-control" name="" id="">
				<option value="0">กลุ่มผู้ใช้งาน</option>
			</select>
			<select class="form-control" name="" id="">
				<option value="0">ผู้ใช้งาน</option>
			</select>
			<button style="margin-bottom:7px;" type="button" class="btn btn-success">Add</button>
		</div>
	-->
	</div>
	<div class="span16" style="text-align:center;">
	<form action="../saleservice/techreview_submit" method="post">
	<footer id="submit-actions" class="form-actions">
	<strong>*ข้อมูลจะถูกส่งผ่านไปยัง  <strong style="color:red;"> แผนกสิ่งแวดล้อม และ แผนกปฏิบัติการ</strong>*</strong>
			<div class="form-group">
							<input type="hidden" name="qt_id" value="<?= $quotation->qt_id?>">
							<input type="hidden" name="DOC_ID" value="<?= $quotation->DOC_ID?>">
							<input type="hidden" name="qt_compname" value="<?= $quotation->qt_compname?>">
						<textarea style="width:93%;height:110px;"  name="msg_body" id="msg_body" class="form-control"></textarea>			
			</div>
        <button style="width:150px;" type="submit"  class="btn btn-primary btn-large" name="submit" value="CONFIRM"> Send </button>
    </footer>
    </form>
	</div>
</div>
</div>