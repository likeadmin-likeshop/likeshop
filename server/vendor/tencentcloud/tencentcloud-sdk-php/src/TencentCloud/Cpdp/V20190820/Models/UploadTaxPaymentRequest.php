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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadTaxPayment请求参数结构体
 *
 * @method integer getChannel() 获取平台渠道
 * @method void setChannel(integer $Channel) 设置平台渠道
 * @method string getTaxId() 获取完税ID
 * @method void setTaxId(string $TaxId) 设置完税ID
 * @method string getFileUrl() 获取完税列表下载地址
 * @method void setFileUrl(string $FileUrl) 设置完税列表下载地址
 */
class UploadTaxPaymentRequest extends AbstractModel
{
    /**
     * @var integer 平台渠道
     */
    public $Channel;

    /**
     * @var string 完税ID
     */
    public $TaxId;

    /**
     * @var string 完税列表下载地址
     */
    public $FileUrl;

    /**
     * @param integer $Channel 平台渠道
     * @param string $TaxId 完税ID
     * @param string $FileUrl 完税列表下载地址
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
        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("TaxId",$param) and $param["TaxId"] !== null) {
            $this->TaxId = $param["TaxId"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }
    }
}
