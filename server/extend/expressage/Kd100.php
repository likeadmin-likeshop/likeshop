<?php

namespace expressage;
use Requests;

class Kd100 extends Expressage
{


    public function logistics($code, $number)
    {

        $request_data = '{"com":"' . $code . '","num":"' . $number . '","from":"","phone":"","to":"","resultv2":"0","show":"0","order":"desc"}';
        $datas = array(
            'customer' => $this->app,
            'sign' => $this->key,
            'param' => $request_data,
        );
        $str = '';
        foreach ($datas as $k => $v) {
            $str = $str . $k . '=' . $v . '&';
        }
        $str = rtrim($str, '&');
        $result = Requests::get('http://poll.kuaidi100.com/poll/query.do?' . $str);
        //$result = self::sendPost($this->config['search_url'], $datas);
        //dd($result);
        $result = json_decode($result->body, true);
        if (isset($result['data'])) {
            $this->logistics_info = $result['data'];
            $this->logistics_info;
        }
        return false;
    }
}