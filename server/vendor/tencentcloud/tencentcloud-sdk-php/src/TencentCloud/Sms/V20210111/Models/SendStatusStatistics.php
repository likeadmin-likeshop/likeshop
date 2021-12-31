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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发送数据统计响应包体
 *
 * @method integer getFeeCount() 获取短信计费条数统计，例如提交成功量为100条，其中有20条是长短信（长度为80字）被拆分成2条，则计费条数为： ```80 * 1 + 20 * 2 = 120``` 条。
 * @method void setFeeCount(integer $FeeCount) 设置短信计费条数统计，例如提交成功量为100条，其中有20条是长短信（长度为80字）被拆分成2条，则计费条数为： ```80 * 1 + 20 * 2 = 120``` 条。
 * @method integer getRequestCount() 获取短信提交量统计。
 * @method void setRequestCount(integer $RequestCount) 设置短信提交量统计。
 * @method integer getRequestSuccessCount() 获取短信提交成功量统计。
 * @method void setRequestSuccessCount(integer $RequestSuccessCount) 设置短信提交成功量统计。
 */
class SendStatusStatistics extends AbstractModel
{
    /**
     * @var integer 短信计费条数统计，例如提交成功量为100条，其中有20条是长短信（长度为80字）被拆分成2条，则计费条数为： ```80 * 1 + 20 * 2 = 120``` 条。
     */
    public $FeeCount;

    /**
     * @var integer 短信提交量统计。
     */
    public $RequestCount;

    /**
     * @var integer 短信提交成功量统计。
     */
    public $RequestSuccessCount;

    /**
     * @param integer $FeeCount 短信计费条数统计，例如提交成功量为100条，其中有20条是长短信（长度为80字）被拆分成2条，则计费条数为： ```80 * 1 + 20 * 2 = 120``` 条。
     * @param integer $RequestCount 短信提交量统计。
     * @param integer $RequestSuccessCount 短信提交成功量统计。
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
        if (array_key_exists("FeeCount",$param) and $param["FeeCount"] !== null) {
            $this->FeeCount = $param["FeeCount"];
        }

        if (array_key_exists("RequestCount",$param) and $param["RequestCount"] !== null) {
            $this->RequestCount = $param["RequestCount"];
        }

        if (array_key_exists("RequestSuccessCount",$param) and $param["RequestSuccessCount"] !== null) {
            $this->RequestSuccessCount = $param["RequestSuccessCount"];
        }
    }
}
