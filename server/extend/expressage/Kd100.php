<?php

namespace expressage;

use Requests;

class Kd100 extends Expressage
{

    public function logistics($code, $number)
    {
        $request_data = '{"com":"' . $code . '","num":"' . $number . '","from":"","phone":"","to":"","resultv2":"0","show":"0","order":"desc"}';

        $datas = array(
            'customer'  => $this->app,
            'sign'      => strtoupper(md5($request_data . $this->key . $this->app)),
            'param'     => $request_data,
        );

        $params = "";
        foreach ($datas as $k => $v) {
            $params .= "$k=" . urlencode($v) . "&";
        }
        $params = substr($params, 0, -1);
        $result = Requests::get('http://poll.kuaidi100.com/poll/query.do?' . $params);
        $result = json_decode($result->body, true);
        if (isset($result['data'])) {
            $this->logistics_info = $result['data'];
            $this->logistics_info;
        }
        return false;
    }
}