<?php
header('Content-type: text/html; charset=utf-8');
// giá trị từ form
$idphong = $_POST['idphong'];
$name = $_POST['name'];
$sdt = $_POST['sdt'];
$checkin = $_POST['check_in'];
$checkout = $_POST['check_out'];
$slNguoiLon = $_POST['sl_NguoiLon'];
$sltreEm = $_POST['sl_tre_em'];
function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        )
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}
// Include your execPostRequest function and other necessary code

$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

// Retrieve data from the form
$orderInfo = $_POST['idphong'];
$amount = $_POST['gia'];
$orderId = time() . "";
// $redirectUrl = "http://localhost:3000/controller/user.php?act=billcomfirm";
$redirectUrl = "http://localhost:3000/controller/user.php?act=billcomfirm&name=$name&sdt=$sdt&checkin=$checkin&checkout=$checkout&slNguoiLon=$slNguoiLon&sltreEm=$sltreEm&ptt=1";
$ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
$extraData = "";

// // giá trị từ form
// $name = $_POST['name'];
// $sdt = $_POST['sdt'];
// $checkin = $_POST['check_in'];
// $checkout = $_POST['check_out'];
// $slNguoiLon = $_POST['sl_NguoiLon'];
// $sltreEm = $_POST['sl_tre_em'];

$requestId = time() . "";
$requestType = "payWithATM";

// Build the raw hash for the signature
$rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
$signature = hash_hmac("sha256", $rawHash, $secretKey);

// Include additional form data in the API request
$data = array(
    'partnerCode' => $partnerCode,
    'partnerName' => "Test",
    "storeId" => "MomoTestStore",
    'requestId' => $requestId,
    'amount' => $amount,
    'orderId' => $orderId,
    'orderInfo' => $orderInfo,
    'redirectUrl' => $redirectUrl,
    'ipnUrl' => $ipnUrl,
    'lang' => 'vi',
    'extraData' => $extraData,
    'requestType' => $requestType,
    'signature' => $signature,

    'idphong' => $idphong,
    'name' => $name,
    'sdt' => $sdt,
    'checkin' => $checkin,
    'checkout' => $checkout,
    'slNguoiLon' => $slNguoiLon,
    'sltreEm' => $sltreEm
);
// var_dump($data);
// die();
// Make the API request
$result = execPostRequest($endpoint, json_encode($data));
// var_dump($result);
// die();
$jsonResult = json_decode($result, true);

// Process the API response and redirect
if (isset($jsonResult['payUrl'])) {
    header('Location: ' . $jsonResult['payUrl']);
} else {
    echo "Lỗi: Không thể lấy được URL thanh toán.";
    // Log details of the response for debugging
    // error_log(print_r($jsonResult, true));
}
