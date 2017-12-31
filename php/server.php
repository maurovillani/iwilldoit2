<?php
if(isset($_GET['op'])) {
    $op = $_GET['op];
    switch($op){
        case "list":
            $data = "";
            $fh = fopen("list.json", "r");
            while ($line = fgets($fh)){
                $data .= $line; 
            } 
            fclose($fh);
            $data = json_decode($data);
            header("Content-type:text/javascript"); 
            echo json_encode($data);
            break;
    }
}
?>