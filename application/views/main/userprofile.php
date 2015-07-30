	<div class="row">
		<div class="contaniner">
			<div class="span16">
				<legend><h1>User Profile. </h1>
				</legend>
			</div>
			<div class="span7">
				<h4>E-mail: <?=$user_EMAIL?></h4>
				<h4>ชื่อ - นามสกุล: <?=$user_FULLNAME?></h4>				
				<h4>แผนก: <?=$department_ID?>:<?=$department_NAME?></h4>
				<h4>กลุ่มผู้ใช้งาน: <?=$usergroup_ID?>:<?=$usergroup_NAME?></h4>
			</div>
			<div class="span9">
				<img src="<?=base_url()?>theme/login.jpg" alt="">
			</div>
		</div>
	</div>