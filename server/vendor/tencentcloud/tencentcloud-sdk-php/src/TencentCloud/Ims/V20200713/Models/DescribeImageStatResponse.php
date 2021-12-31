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
namespace TencentCloud\Ims\V20200713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageStat返回参数结构体
 *
 * @method Overview getOverview() 获取识别结果统计
 * @method void setOverview(Overview $Overview) 设置识别结果统计
 * @method array getTrendCount() 获取识别量统计
 * @method void setTrendCount(array $TrendCount) 设置识别量统计
 * @method array getEvilCount() 获取违规数据分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvilCount(array $EvilCount) 设置违规数据分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageStatResponse extends AbstractModel
{
    /**
     * @var Overview 识别结果统计
     */
    public $Overview;

    /**
     * @var array 识别量统计
     */
    public $TrendCount;

    /**
     * @var array 违规数据分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvilCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param Overview $Overview 识别结果统计
     * @param array $TrendCount 识别量统计
     * @param array $EvilCount 违规数据分布
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Overview",$param) and $param["Overview"] !== null) {
            $this->Overview = new Overview();
            $this->Overview->deserialize($param["Overview"]);
        }

        if (array_key_exists("TrendCount",$param) and $param["TrendCount"] !== null) {
            $this->TrendCount = [];
            foreach ($param["TrendCount"] as $key => $value){
                $obj = new TrendCount();
                $obj->deserialize($value);
                array_push($this->TrendCount, $obj);
            }
        }

        if (array_key_exists("EvilCount",$param) and $param["EvilCount"] !== null) {
            $this->EvilCount = [];
            foreach ($param["EvilCount"] as $key => $value){
                $obj = new EvilCount();
                $obj->deserialize($value);
                array_push($this->EvilCount, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
