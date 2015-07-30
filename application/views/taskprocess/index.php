<div class="container">
	<div class="span16">
		<h3>Task Process</h3>
		<hr>
	</div>
	<div class="span16">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#inbox" aria-controls="inbox" role="tab" data-toggle="tab">Inbox</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sent Items</a></li>

  </ul>


    <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="inbox">
    	 <table class="table">
			<thead>
				<th>#</th>
				<th>Date Time</th>
				<th width="">ประเภท</th>				
				<th>ชื่อ-บริษัท</th>
				<th>ผู้ส่ง</th>
				<th>QT No.</th>
				<th></th>			
			</thead>
			<?php $i=0; foreach($inbox_process as $row) : $i++;?>
			<tr>
				<td><?=$i?></td>
				<td><?=$row->msg_datetime?></td>
				<td><?=$row->msg_type?></td>
				<td><?=$row->REF2?></td>
				<td><?=$row->userfrom_name?></td>
				<td><?=$row->REF1?></td>
				<td>
				<?php if($row->msg_type=="techreview") :?>				
					<?php if($row->msg_status=="done") : ?>
						<strong>ดำเนินการแล้ว</strong>
					<?php else : ?>
					<a href="<?=base_url()?>workflow/techreview_app?qt_id=<?=$row->REF1?>&msg_id=<?=$row->ID?>" type="button" class="btn btn-primary">ดำเนินการ</a>
					<?php endif; ?>
				<?php endif;?>

				<?php if($row->msg_type=="techreviewprove") :?>
					<?php if($row->msg_status=="done") : ?>
						<strong>ดำเนินการแล้ว</strong>
					<?php else : ?>
					<a href="<?=base_url()?>workflow/mdreview?qt_id=<?=$row->REF1?>&msg_id=<?=$row->ID?>" type="button" class="btn btn-primary">ส่งไป MD</a>
					<?php endif; ?>
				<?php endif;?>

				<?php if($row->msg_type=="mdreview") :?>
					<?php if($row->msg_status=="done") : ?>
						<strong>ดำเนินการแล้ว</strong>
					<?php else : ?>
					<a href="<?=base_url()?>workflow/mdreview_app?qt_id=<?=$row->REF1?>&msg_id=<?=$row->ID?>" type="button" class="btn btn-primary"> อนุมัติ QT</a>
					<?php endif; ?>
				<?php endif;?>

				<?php if($row->msg_type=="mdprove") :?>
					<?php if($row->msg_status=="done") : ?>
						<strong>ดำเนินการแล้ว</strong>
					<?php else : ?>
					<a href="testcon/test_pdf" target="_blank" type="button" class="btn btn-info">PDF</a>
					<?php endif; ?>
				<?php endif;?>

				

				<!--
				<button type="button" class="btn btn-success">Detail</button>
				-->
				</td>
			</tr>
			<?php endforeach;?>
		</table>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
   		 <table class="table">
			<thead>
				<th>#</th>
				<th>Date Time</th>
				<th width="">ประเภท</th>				
				<th>ชื่อ-บริษัท</th>
				<th>ผู้ส่ง</th>
				<th>QT No.</th>
				<th></th>			
			</thead>
			<?php $i=0; foreach($sentitems_process as $row) : $i++;?>
			<tr>
				<td><?=$i?></td>
				<td><?=$row->msg_datetime?></td>
				<td><?=$row->msg_type?></td>
				<td><?=$row->REF2?></td>
				<td><?=$row->userto_name?></td>
				<td><?=$row->REF1?></td>
				<td>
				<?php if($row->msg_status=="none") :?>		
				<span style="color:red;"><i class="icon-envelope"></i> Unread</span>	
				<?php else : ?>		
				<span style="color:green;"><i class="icon-envelope"></i> Read</span>	
				<?php endif;?>
				</td>
			</tr>
			<?php endforeach;?>
		</table>

    </div>

  	</div>




		
	</div>
</div>