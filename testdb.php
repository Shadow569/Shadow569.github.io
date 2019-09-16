<?php
    $data = array();
    $handler = new mysqli('sql205.epizy.com','epiz_24459971','Fuckyou210','epiz_24459971_messages');
    if($handler->ping()){
        $data['status'] = 'up';
    }
    else{
        $data['status'] = 'down';
    }
    echo json_encode($data);
?>