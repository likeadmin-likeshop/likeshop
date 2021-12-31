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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品发布过的全部版本
 *
 * @method string getOtaVersion() 获取版本名称
 * @method void setOtaVersion(string $OtaVersion) 设置版本名称
 * @method integer getPublishTime() 获取发布时间，unix时间戳，单位：秒
 * @method void setPublishTime(integer $PublishTime) 设置发布时间，unix时间戳，单位：秒
 */
class OtaPubHistory extends AbstractModel
{
    /**
     * @var string 版本名称
     */
    public $OtaVersion;

    /**
     * @var integer 发布时间，unix时间戳，单位：秒
     */
    public $PublishTime;

    /**
     * @param string $OtaVersion 版本名称
     * @param integer $PublishTime 发布时间，unix时间戳，单位：秒
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
        if (array_key_exists("OtaVersion",$param) and $param["OtaVersion"] !== null) {
            $this->OtaVersion = $param["OtaVersion"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }
    }
}
