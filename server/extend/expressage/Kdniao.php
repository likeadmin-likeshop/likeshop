<?php

namespace expressage;
use Requests;

class Kdniao extends Expressage
{


    public function logistics($code, $number)
    {
        $request_daata = "{'OrderCode':'','ShipperCode':'$code','LogisticCode':'$number'}";

        $datas = array(
            'EBusinessID' => $this->app,
            'RequestType' => '1002',
            'RequestData' => urlencode($request_daata),
            'DataType' => '2',
        );
        $datas['DataSign'] = self::encrypt($request_daata, $this->key);
        $search_url = 'http://api.kdniao.com/Ebusiness/EbusinessOrderHandle.aspx';
        if($this->debug){
            $search_url = 'http://sandboxapi.kdniao.com:8080/kdniaosandbox/gateway/exterfaceInvoke.json';
        }

        $result = Requests::post($search_url,[], $datas);
        $result = json_decode($result->body,true);
        if(isset($result['Traces'])){
            $this->logistics_info = $result['Traces'];
            $this->logistics_info;
        }
        return false;
    }

}