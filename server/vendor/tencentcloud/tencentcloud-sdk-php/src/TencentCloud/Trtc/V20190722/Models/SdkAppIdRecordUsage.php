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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SdkAppId级别录制时长数据。
 *
 * @method string getSdkAppId() 获取SdkAppId的值。
 * @method void setSdkAppId(string $SdkAppId) 设置SdkAppId的值。
 * @method array getUsages() 获取统计的时间点数据。
 * @method void setUsages(array $Usages) 设置统计的时间点数据。
 */
class SdkAppIdRecordUsage extends AbstractModel
{
    /**
     * @var string SdkAppId的值。
     */
    public $SdkAppId;

    /**
     * @var array 统计的时间点数据。
     */
    public $Usages;

    /**
     * @param string $SdkAppId SdkAppId的值。
     * @param array $Usages 统计的时间点数据。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Usages",$param) and $param["Usages"] !== null) {
            $this->Usages = [];
            foreach ($param["Usages"] as $key => $value){
                $obj = new RecordUsage();
                $obj->deserialize($value);
                array_push($this->Usages, $obj);
            }
        }
    }
}
