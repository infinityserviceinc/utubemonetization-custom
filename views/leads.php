<?php
// session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/get-dashboard.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/class/Api.class.php");
// var_dump($_REQUEST);
// die();
function get_client_ip(){
    return isset($_SERVER['HTTP_CF_CONNECTING_IP'])?$_SERVER['HTTP_CF_CONNECTING_IP']:'127.0.0.1';
}

$route = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

$reference_url;

if (strlen($_SESSION['refer_url']) > 500) {
    $reference_url = substr($_SESSION['refer_url'], 0, 500);
} else {
    $reference_url = $_SESSION['refer_url'];
}

$brief = $_REQUEST['brief'];
if(isset($_REQUEST['age'])){
    $brief .= '|| age ' . $_REQUEST['age']; 
}
if(isset($_REQUEST['book_your_writing'])){
    $brief .= '|| book_your_writing ' . $_REQUEST['book_your_writing']; 
}
if(isset($_REQUEST['book_ready'])){
    $brief .= '|| book_ready ' . $_REQUEST['book_ready']; 
}
if(isset($_REQUEST['services'])){
    $brief .= '|| services ' . implode(',', $_REQUEST['services']); 
}
if(isset($_REQUEST['select_salution'])){
    $brief .= '|| select_salution ' . $_REQUEST['select_salution']; 
}



$data = array(
    'name' => $_REQUEST['name'],
    'email' => $_REQUEST['email'],
    'phone' => $_REQUEST['phone'],
    'website_url' => $_SERVER['HTTP_HOST'],
    'brief' => $brief,
    'source' => $_SESSION['lead_type'],
    'news' => 1,
    'route' => $route,
    'brand' => $_REQUEST['brand'],
    'tag' => $_REQUEST['tag'],
    'price' => $_REQUEST['price'],
    'domain' => $_SERVER['HTTP_HOST'],
    'ip_address' => get_client_ip(),
    'server_ip' => $_SERVER['SERVER_ADDR'] ?? null,
    'reference_url' => $reference_url ?? null,
);

// print_r($data);
// die();

try {
    function random_string($length)
    {
        return bin2hex(random_bytes($length));
    }
    $fileName = random_string(5) . date("Y-m-d_h_i_sA") . ".txt";
    $path = $_SERVER['DOCUMENT_ROOT'] . '/.hkjgdshagkjhadskjhfkjdsafhakjdsfhakjdshgf';

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    $myfile = fopen($path . '/' . $fileName, "w");
    $txt = json_encode($_REQUEST);
    fwrite($myfile, $txt);
    fclose($myfile);
} catch (\Exception $e) {
    $error = $e->getMessage();
}

// $api = new Api();
// $res = $api->hit($dashboardUrl . "/customer", $data, "POST");

// // var_dump($res);
// // die();
// $res = json_decode($res);

// $msg = $res[1];

$msg ="Thank You";

if(strpos($data["name"],'Robert') !== 0){
    
    $api = new Api();
    $res = $api->hit($dashboardUrl . "/customer", $data, "POST");
    
    // var_dump($res);
    // die();
    $res = json_decode($res);

    $msg = $res[1];
}

header("location:/thank-you/?successMsg=$msg");

if (!$msg) {
    exit(header("location:/"));
}