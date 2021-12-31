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
 * UploadTaxList请求参数结构体
 *
 * @method integer getChannel() 获取平台渠道
 * @method void setChannel(integer $Channel) 设置平台渠道
 * @method string getBeginMonth() 获取起始月份，YYYY-MM
 * @method void setBeginMonth(string $BeginMonth) 设置起始月份，YYYY-MM
 * @method string getEndMonth() 获取结束月份。如果只上传一个月，结束月份等于起始月份
 * @method void setEndMonth(string $EndMonth) 设置结束月份。如果只上传一个月，结束月份等于起始月份
 * @method string getFileUrl() 获取完税列表下载地址
 * @method void setFileUrl(string $FileUrl) 设置完税列表下载地址
 */
class UploadTaxListRequest extends AbstractModel
{
    /**
     * @var integer 平台渠道
     */
    public $Channel;

    /**
     * @var string 起始月份，YYYY-MM
     */
    public $BeginMonth;

    /**
     * @var string 结束月份。如果只上传一个月，结束月份等于起始月份
     */
    public $EndMonth;

    /**
     * @var string 完税列表下载地址
     */
    public $FileUrl;

    /**
     * @param integer $Channel 平台渠道
     * @param string $BeginMonth 起始月份，YYYY-MM
     * @param string $EndMonth 结束月份。如果只上传一个月，结束月份等于起始月份
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

        if (array_key_exists("BeginMonth",$param) and $param["BeginMonth"] !== null) {
            $this->BeginMonth = $param["BeginMonth"];
        }

        if (array_key_exists("EndMonth",$param) and $param["EndMonth"] !== null) {
            $this->EndMonth = $param["EndMonth"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }
    }
}
