    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WASTEWATER TREATMENT ONLINE 1.0 Beta </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="layout" content="main"/>
        
        <!-- <script type="text/javascript" src="http://www.google.com/jsapi"></script>
        -->
        <script src="<?=theme_url();?>/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/angular.min.js" type="text/javascript" ></script>
        <link href="<?=theme_url();?>/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
        <!--
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        -->
        <style>
        #notifications {
          cursor: pointer;
          position: fixed;
          right: 60px;
          z-index: 9999;
          top: 80px;
          margin-top: 22px;
          margin-right: 15px;
          max-width: 400px;   
        }
        </style>

        


    </head>
        <body>     
<div id="body-container">
<div id="body-content">   
<div class="body-nav body-nav-vertical body-nav-fixed">
    <div class="container">
    <?php 
    $mysess = $this->session->userdata('loggin_success');
    if($mysess["user_EMAIL"]!="") :
    ?>
        <ul>      

            <li>
                <a href="<?=base_url()?>taskprocess">
                    <i class="icon-tasks icon-large"></i> <strong>Task Process</strong>
                </a>
            </li>   
            <?php  if($mysess["usergroup_ID"]=="MD") : ?>         
            <li>
                <a href="<?=base_url()?>md">
                    <i class="icon-folder-open icon-large"></i> <strong>MD. </strong>
                </a>
            </li>
            <?php endif; ?>
             <?php  if($mysess["usergroup_ID"]=="SALE01") : ?>         
            <li>
                <a href="<?=saleservice_url()?>">
                    <i class="icon-folder-open icon-large"></i> <strong>Sale Services</strong>
                </a>
            </li>
            <?php endif; ?>
            <li>
                <a href="#">
                    <i class="icon-folder-open icon-large"></i> <strong>ENV Analysis</strong>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-folder-open icon-large"></i> <strong>Operation </strong>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-folder-open icon-large"></i> <strong>Accounting</strong>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-folder-open icon-large"></i> <strong>Transporter</strong>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-info-sign icon-large"></i> <strong>Doc. Flow</strong>
                </a>
            </li>         
        </ul>
    <?php endif;?>
    </div>
</div>                                 
            <section class="nav nav-page">
            <div class="container">
                <div class="row">
                    <div class="span7">
                        <header class="page-header">
                            <h3><i class="icon-home icon-large"></i>THAI ONLY ONE MANAGE AND SERVICE CO.,LTD<br/>
                                <small>Wastewater treatment Online 1.0 Beta</small>
                            </h3>
                        </header>
                    </div>
                    <div class="page-nav-options">
                        <div class="span9">
                            <ul class="nav nav-pills">
                            <!--
                                <li>
                                    <a href="#"><i class="icon-home icon-large"></i></a>
                                </li>-->

                            </ul>
                            
                            <ul class="nav nav-tabs">
                                <?php $mysess = $this->session->userdata('loggin_success');
                                if($mysess["user_EMAIL"]!="") : ?>   
                                <li>
                                    <a href="<?=main_url()?>"><i class="icon-home"></i>Home</a>
                                </li> 
                                <?php endif;?>
                            
                                <?php $mysess = $this->session->userdata('loggin_success');
                                if($mysess["user_EMAIL"]!="") : ?>                           
                                <li><a href="<?=base_url()?>usersetting">User Setting</a></li>
                                <?php endif;?>

                                <?php $mysess = $this->session->userdata('loggin_success');
                                if($mysess["user_ADMIN"]) :?>
                                    <li><a href="<?=adminsetting_url();?>">Admin Setting</a></li>
                                <?php endif;?>

                                <?php $mysess = $this->session->userdata('loggin_success');
                                if($mysess["user_EMAIL"]!="") :?>                           
                                <li><a href="<?=base_url();?>adm_user/logout">Logout</a></li>
                                <?php endif;?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page container">  
    <div class="span16 pull-right" style="text-align:right;">
    <?php 
       $sess_login =  $this->session->userdata("loggin_success");
       if(!empty($sess_login["user_FULLNAME"])) :
    ?>
      <h4>
      <i class="icon-lock"></i>
      Welcome back : <strong><?=$sess_login["user_FULLNAME"]?></strong></h4>
    <?php endif; ?>
    </div>



















  