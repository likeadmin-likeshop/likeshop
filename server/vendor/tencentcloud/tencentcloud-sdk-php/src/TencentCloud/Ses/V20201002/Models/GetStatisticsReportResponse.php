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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetStatisticsReport返回参数结构体
 *
 * @method array getDailyVolumes() 获取发信统计报告，按天
 * @method void setDailyVolumes(array $DailyVolumes) 设置发信统计报告，按天
 * @method Volume getOverallVolume() 获取发信统计报告，总览
 * @method void setOverallVolume(Volume $OverallVolume) 设置发信统计报告，总览
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetStatisticsReportResponse extends AbstractModel
{
    /**
     * @var array 发信统计报告，按天
     */
    public $DailyVolumes;

    /**
     * @var Volume 发信统计报告，总览
     */
    public $OverallVolume;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DailyVolumes 发信统计报告，按天
     * @param Volume $OverallVolume 发信统计报告，总览
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DailyVolumes",$param) and $param["DailyVolumes"] !== null) {
            $this->DailyVolumes = [];
            foreach ($param["DailyVolumes"] as $key => $value){
                $obj = new Volume();
                $obj->deserialize($value);
                array_push($this->DailyVolumes, $obj);
            }
        }

        if (array_key_exists("OverallVolume",$param) and $param["OverallVolume"] !== null) {
            $this->OverallVolume = new Volume();
            $this->OverallVolume->deserialize($param["OverallVolume"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
