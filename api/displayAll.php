<?php
    require_once "../crud/components/db_connect.php";

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $sql = "SELECT * FROM locations";
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if(count($rows) != 0){
            response(200, "success", $rows);
        }else {
            response(200, "No data", null);
        }

    }else {
        response(400, "Invalid request", null);
    }

function response($status, $status_message, $data) {
    $response["status"] = $status;
    $response["status_message"] = $status_message;
    $response["data"] = $data;

    //output JSON
    echo json_encode($response);
}