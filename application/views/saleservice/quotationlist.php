<script src="<?=theme_url();?>/datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<link href="<?=theme_url();?>datatable/css/jquery.dataTables.min.css" type="text/css" media="screen, projection" rel="stylesheet" />
<div class="row">
<div class="span16">
	<table class="table " id="myTable">
		<thead>
			<th>#</th>
			<th>QT </th>
			<th>วัน-เวลา</th>
			<th>ชื่อโรงงาน </th>
			<th>บันทึกโดย</th>
			<th>สถานะ/Action</th>
		</thead>
		<?php $i=0; foreach($quotation as $row) : $i++;?>
		<tr>
			<td><?= $i?></td>
			<td><?= $row->qt_id?></td>
			<td><?= $row->DOC_DATETIME?></td>
			<td><?= $row->qt_compname?></td>
			<td><?= $row->qt_createby?></td>
			<td>
			<a href="<?=base_url()?>testcon/test_pdf" target="_blank" class="btn btn-default">PDF</a>
			<?php if($row->qt_status=="new") :?>
			<a href="<?=base_url()?>saleservice/techreview?qt_id=<?= $row->qt_id?>" class="btn btn-primary">Technician Review </a>
			<?php else : ?>
			<!-- <strong>ส่งแล้ว</strong> -->
			<?php endif; ?>
			<a href="#" class="btn btn-success">Details</a>
			<a href="#" class="btn btn-danger">X</a>
			</td>
		</tr>
		<?php endforeach;?>
</div>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function(){
    $('#myTable').DataTable();
	});
</script>