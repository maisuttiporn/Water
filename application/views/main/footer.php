<br><br><br>
</section>

    

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
                <h5><u>Wastewater treatment Online 1.0 Beta</u></h5>
                <div class="disclaimer">
                <p>disclaimer. All right reserved. Copyright © 2015-2020. AT THAI ONLY ONE MANAGE AND SERVICE CO.,LTD</p>
                   
                    <p>หมู่ที่ 2 ตำบล เขาคันทรง อำเภอ ศรีราชา ชลบุรี 20110, โทร:0-3841-6953 อีเมล์: info@thaionlyone.com</p>
                </div>
            </div>
        </footer>
        <div id="notifications"></div>
        
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/jquery/jquery-chosen.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/jquery/virtual-tour.js" type="text/javascript" ></script>
        <script src="<?=theme_url();?>/js/notify/Notify.js" type="text/javascript" ></script>
       <!--
        <script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        -->
       <script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
        <script type="text/javascript">
        $(function() {
            $('#sample-table').tablesorter();
            $('#datepicker').datepicker();
            $(".chosen").chosen();
        });
    </script>
    
<?php 
/*
if(validation_errors()) {
    echo '<script type="text/javascript">'; 
    echo '$(window).bind("load", function() {';
    echo 'Notify("Insert Error ! : Unit Name ไม่สามารถเป็นค่าว่าง", null, null, "danger");';
    echo '});';
    echo '</script>';
} */
if(isset($Notify_info)) {
    echo '<script type="text/javascript">'; 
    echo '$(window).bind("load", function() {';
    echo 'Notify("'.$Notify_info.'", null, null, "'.$Notify_Type.'");';
    echo '});';
    echo '</script>';
}
?>
    </body>
</html>