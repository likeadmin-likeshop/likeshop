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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运单识别结果
 *
 * @method WaybillObj getRecName() 获取收件人姓名
 * @method void setRecName(WaybillObj $RecName) 设置收件人姓名
 * @method WaybillObj getRecNum() 获取收件人手机号
 * @method void setRecNum(WaybillObj $RecNum) 设置收件人手机号
 * @method WaybillObj getRecAddr() 获取收件人地址
 * @method void setRecAddr(WaybillObj $RecAddr) 设置收件人地址
 * @method WaybillObj getSenderName() 获取寄件人姓名
 * @method void setSenderName(WaybillObj $SenderName) 设置寄件人姓名
 * @method WaybillObj getSenderNum() 获取寄件人手机号
 * @method void setSenderNum(WaybillObj $SenderNum) 设置寄件人手机号
 * @method WaybillObj getSenderAddr() 获取寄件人地址
 * @method void setSenderAddr(WaybillObj $SenderAddr) 设置寄件人地址
 * @method WaybillObj getWaybillNum() 获取运单号
 * @method void setWaybillNum(WaybillObj $WaybillNum) 设置运单号
 */
class TextWaybill extends AbstractModel
{
    /**
     * @var WaybillObj 收件人姓名
     */
    public $RecName;

    /**
     * @var WaybillObj 收件人手机号
     */
    public $RecNum;

    /**
     * @var WaybillObj 收件人地址
     */
    public $RecAddr;

    /**
     * @var WaybillObj 寄件人姓名
     */
    public $SenderName;

    /**
     * @var WaybillObj 寄件人手机号
     */
    public $SenderNum;

    /**
     * @var WaybillObj 寄件人地址
     */
    public $SenderAddr;

    /**
     * @var WaybillObj 运单号
     */
    public $WaybillNum;

    /**
     * @param WaybillObj $RecName 收件人姓名
     * @param WaybillObj $RecNum 收件人手机号
     * @param WaybillObj $RecAddr 收件人地址
     * @param WaybillObj $SenderName 寄件人姓名
     * @param WaybillObj $SenderNum 寄件人手机号
     * @param WaybillObj $SenderAddr 寄件人地址
     * @param WaybillObj $WaybillNum 运单号
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
        if (array_key_exists("RecName",$param) and $param["RecName"] !== null) {
            $this->RecName = new WaybillObj();
            $this->RecName->deserialize($param["RecName"]);
        }

        if (array_key_exists("RecNum",$param) and $param["RecNum"] !== null) {
            $this->RecNum = new WaybillObj();
            $this->RecNum->deserialize($param["RecNum"]);
        }

        if (array_key_exists("RecAddr",$param) and $param["RecAddr"] !== null) {
            $this->RecAddr = new WaybillObj();
            $this->RecAddr->deserialize($param["RecAddr"]);
        }

        if (array_key_exists("SenderName",$param) and $param["SenderName"] !== null) {
            $this->SenderName = new WaybillObj();
            $this->SenderName->deserialize($param["SenderName"]);
        }

        if (array_key_exists("SenderNum",$param) and $param["SenderNum"] !== null) {
            $this->SenderNum = new WaybillObj();
            $this->SenderNum->deserialize($param["SenderNum"]);
        }

        if (array_key_exists("SenderAddr",$param) and $param["SenderAddr"] !== null) {
            $this->SenderAddr = new WaybillObj();
            $this->SenderAddr->deserialize($param["SenderAddr"]);
        }

        if (array_key_exists("WaybillNum",$param) and $param["WaybillNum"] !== null) {
            $this->WaybillNum = new WaybillObj();
            $this->WaybillNum->deserialize($param["WaybillNum"]);
        }
    }
}
