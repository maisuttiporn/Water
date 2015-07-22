<script src="<?=theme_url();?>/datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<link href="<?=theme_url();?>datatable/css/jquery.dataTables.min.css" type="text/css" media="screen, projection" rel="stylesheet" />
<div class="row">
<div class="span16">
	<table class="table " id="myTable">
		<thead>
			<th>#</th>
			<th>DOC_ID</th>
			<th>วัน-เวลา</th>
			<th>ชื่อโรงงาน </th>
			<th>บันทึกโดย</th>
			<th>สถานะ/Action</th>
		</thead>
		<?php $i=0; foreach($inquiry1 as $row) : $i++;?>
		<tr>
			<td><?= $i?></td>
			<td><?= $row->DOC_ID?></td>
			<td><?= $row->DOC_DATETIME?></td>
			<td><?= $row->inquiry_FACTNAME?></td>
			<td><?= $row->inquiry_CREATEBY?></td>
			<td>
			<a href="<?=base_url()?>testcon/test_pdf" target="_blank" class="btn btn-default">PDF</a>
			<a href="<?=base_url()?>saleservice/quotation?DOC_ID=<?= $row->DOC_ID?>" class="btn btn-primary">New Quotation</a>
			<a href="<?=base_url()?>saleservice/quotation" class="btn btn-danger">Remove</a>
			
			</td>
		</tr>
		<?php endforeach;?>
	</table>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
    $('#myTable').DataTable();
	});
</script>