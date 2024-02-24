<?php 

function lang($phrase){

    static $lang = array(


        'Message' => 'welcome',
        'Admin' => 'Adminstrator'
    );
    return $lang[$phrase];

}


?>