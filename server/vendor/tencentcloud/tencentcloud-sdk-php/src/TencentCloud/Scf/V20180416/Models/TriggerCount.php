<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TriggerCount描述不同类型触发器的数量
 *
 * @method integer getCos() 获取Cos触发器数量
 * @method void setCos(integer $Cos) 设置Cos触发器数量
 * @method integer getTimer() 获取Timer触发器数量
 * @method void setTimer(integer $Timer) 设置Timer触发器数量
 * @method integer getCmq() 获取Cmq触发器数量
 * @method void setCmq(integer $Cmq) 设置Cmq触发器数量
 * @method integer getTotal() 获取触发器总数
 * @method void setTotal(integer $Total) 设置触发器总数
 * @method integer getCkafka() 获取Ckafka触发器数量
 * @method void setCkafka(integer $Ckafka) 设置Ckafka触发器数量
 * @method integer getApigw() 获取Apigw触发器数量
 * @method void setApigw(integer $Apigw) 设置Apigw触发器数量
 * @method integer getCls() 获取Cls触发器数量
 * @method void setCls(integer $Cls) 设置Cls触发器数量
 * @method integer getClb() 获取Clb触发器数量
 * @method void setClb(integer $Clb) 设置Clb触发器数量
 * @method integer getMps() 获取Mps触发器数量
 * @method void setMps(integer $Mps) 设置Mps触发器数量
 * @method integer getCm() 获取Cm触发器数量
 * @method void setCm(integer $Cm) 设置Cm触发器数量
 * @method integer getVod() 获取Vod触发器数量
 * @method void setVod(integer $Vod) 设置Vod触发器数量
 */
class TriggerCount extends AbstractModel
{
    /**
     * @var integer Cos触发器数量
     */
    public $Cos;

    /**
     * @var integer Timer触发器数量
     */
    public $Timer;

    /**
     * @var integer Cmq触发器数量
     */
    public $Cmq;

    /**
     * @var integer 触发器总数
     */
    public $Total;

    /**
     * @var integer Ckafka触发器数量
     */
    public $Ckafka;

    /**
     * @var integer Apigw触发器数量
     */
    public $Apigw;

    /**
     * @var integer Cls触发器数量
     */
    public $Cls;

    /**
     * @var integer Clb触发器数量
     */
    public $Clb;

    /**
     * @var integer Mps触发器数量
     */
    public $Mps;

    /**
     * @var integer Cm触发器数量
     */
    public $Cm;

    /**
     * @var integer Vod触发器数量
     */
    public $Vod;

    /**
     * @param integer $Cos Cos触发器数量
     * @param integer $Timer Timer触发器数量
     * @param integer $Cmq Cmq触发器数量
     * @param integer $Total 触发器总数
     * @param integer $Ckafka Ckafka触发器数量
     * @param integer $Apigw Apigw触发器数量
     * @param integer $Cls Cls触发器数量
     * @param integer $Clb Clb触发器数量
     * @param integer $Mps Mps触发器数量
     * @param integer $Cm Cm触发器数量
     * @param integer $Vod Vod触发器数量
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Cos",$param) and $param["Cos"] !== null) {
            $this->Cos = $param["Cos"];
        }

        if (array_key_exists("Timer",$param) and $param["Timer"] !== null) {
            $this->Timer = $param["Timer"];
        }

        if (array_key_exists("Cmq",$param) and $param["Cmq"] !== null) {
            $this->Cmq = $param["Cmq"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Ckafka",$param) and $param["Ckafka"] !== null) {
            $this->Ckafka = $param["Ckafka"];
        }

        if (array_key_exists("Apigw",$param) and $param["Apigw"] !== null) {
            $this->Apigw = $param["Apigw"];
        }

        if (array_key_exists("Cls",$param) and $param["Cls"] !== null) {
            $this->Cls = $param["Cls"];
        }

        if (array_key_exists("Clb",$param) and $param["Clb"] !== null) {
            $this->Clb = $param["Clb"];
        }

        if (array_key_exists("Mps",$param) and $param["Mps"] !== null) {
            $this->Mps = $param["Mps"];
        }

        if (array_key_exists("Cm",$param) and $param["Cm"] !== null) {
            $this->Cm = $param["Cm"];
        }

        if (array_key_exists("Vod",$param) and $param["Vod"] !== null) {
            $this->Vod = $param["Vod"];
        }
    }
}
