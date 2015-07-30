<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class pdf {
    
    function pdf()
    {
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
    }
 
    function load($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf60/mpdf.php';
         
        if ($params == NULL)
        {
            $param = '"UTF-8","A4","","",10,10,10,10,6,3';     
            //$param =  "'th', 'A4-L', '0', 'THSaraban'";
            //'th', 'A4-L', '0', 'THSaraban' 
        }
         
        return new mPDF($param);
    }
}