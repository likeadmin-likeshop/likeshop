<?php
use App\Oauth\YlyOauthClient;
use App\Api\PrintService;
use App\Api\PicturePrintService;
use App\Api\ExpressPrintService;

$client = new YlyOauthClient($config);
try {
    $token = $client->getToken();
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
    print_r(json_decode($e->getMessage(), true));
    return;
}

$access_token = $token->access_token;           //调用API凭证AccessToken 永久有效,请妥善保存.
$refresh_token = $token->refresh_token;         //刷新AccessToken凭证 失效时间35天
$expires_in = $token->expires_in;               //自有型应用可忽略此回调参数, AccessToken失效时间30天
$machine_code = '';                             //机器码
$origin_id = '';                                //内部订单号(32位以内)

if (empty($machine_code)) {echo 'The machine_code cannot be empty';return;}

if (empty($origin_id)) {echo 'The origin_id cannot be empty';return;}


/**文本接口开始**/
$print = new PrintService($access_token, $config);
//58mm排版 排版指令详情请看 http://doc2.10ss.net/332006
$content = "<FS2><center>**#1 美团**</center></FS2>";
$content .= str_repeat('.', 32);
$content .= "<FS2><center>--在线支付--</center></FS2>";
$content .= "<FS><center>张周兄弟烧烤</center></FS>";
$content .= "订单时间:". date("Y-m-d H:i") . "\n";
$content .= "订单编号:40807050607030\n";
$content .= str_repeat('*', 14) . "商品" . str_repeat("*", 14);
$content .= "<table>";
$content .= "<tr><td>烤土豆(超级辣)</td><td>x3</td><td>5.96</td></tr>";
$content .= "<tr><td>烤豆干(超级辣)</td><td>x2</td><td>3.88</td></tr>";
$content .= "<tr><td>烤鸡翅(超级辣)</td><td>x3</td><td>17.96</td></tr>";
$content .= "<tr><td>烤排骨(香辣)</td><td>x3</td><td>12.44</td></tr>";
$content .= "<tr><td>烤韭菜(超级辣)</td><td>x3</td><td>8.96</td></tr>";
$content .= "</table>";
$content .= str_repeat('.', 32);
$content .= "<QR>这是二维码内容</QR>";
$content .= "小计:￥82\n";
$content .= "折扣:￥４ \n";
$content .= str_repeat('*', 32);
$content .= "订单总价:￥78 \n";
$content .= "<FS2><center>**#1 完**</center></FS2>";

try{
    var_dump($print->index($machine_code, $content, $origin_id));
}catch (Exception $e) {
    echo $e->getMessage();
}
/**文本接口结束**/


///**图形接口开始**/
//$picturePrint = new PicturePrintService($access_token, $config);
//$content = "https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1497000905083&di=7c3cffef1dd40edffbd0a37c4eabb277&imgtype=0&src=http://img1.touxiang.cn/uploads/20131114/14-054929_462.jpg";
//try{
//    var_dump($picturePrint->index($machine_code, $content, $origin_id));
//}catch (Exception $e) {
//    echo $e->getMessage();
//}
///**图形接口结束**/


///**面单接口开始**/ //打印机型必须为k5;
//$expressPrint = new ExpressPrintService($access_token, $config);
//$content = array(
//    "OrderCode"=> "0126578665784971",
//    "ShipperCode"=> "SF",  //SF YZPY  HTKY  YD
//    "PayType"=> 1,
//    "ExpType"=> 1,
//    "Cost"=>6.0,
//    "OtherCost"=> 7.0,
//    "CustomerName" => '1264546',
//    "CustomerPwd" => '4545454',
//    "MonthCode" => '',
//    "Sender"=> array(
//        "Company" => "5645645",
//        "Name" => "Taylor",
//        "Mobile" => "15018442396",
//        "ProvinceName" => "上海",
//        "CityName" => "上海",
//        "PostCode" => '61000',
//        "ExpAreaName" => "青浦区",
//        "Address" => "明珠路73号"
//    ),
//    "Receiver"=> array(
//        "Company"=> "789789",
//        "Name"=> "Yann",
//        "Mobile"=> "15018442396",
//        "ProvinceName"=> "北京",
//        "CityName"=> "北京",
//        "PostCode" => '61000',
//        "ExpAreaName"=> "朝阳区",
//        "Address"=> "三里屯街道雅秀大厦"
//    ),
//    "Commodity" => array(
//        array(
//            "GoodsName"=> "鞋子",
//        )
//    ),
//    "AddService"=> array(
//        array(
//            "Name"=> "COD",
//            "Value"=> "1020",
//            "CustomerID" => "44564"
//        )
//    ),
//    "StartDate" => date("y-M-d H:i:s",time() + 7200),
//    "Weight"=> 1.0,
//    "Quantity"=> 1,
//    "Volume"=> 0.0,
//    "Remark"=> "小心轻放",
//);
//
//try{
//    var_dump($expressPrint->index($machine_code, $content, $origin_id));
//}catch (Exception $e) {
//    echo $e->getMessage();
//}
///**面单接口结束**/