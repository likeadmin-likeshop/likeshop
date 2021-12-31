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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLane请求参数结构体
 *
 * @method string getLaneId() 获取泳道ID
 * @method void setLaneId(string $LaneId) 设置泳道ID
 * @method string getLaneName() 获取泳道名称
 * @method void setLaneName(string $LaneName) 设置泳道名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class ModifyLaneRequest extends AbstractModel
{
    /**
     * @var string 泳道ID
     */
    public $LaneId;

    /**
     * @var string 泳道名称
     */
    public $LaneName;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $LaneId 泳道ID
     * @param string $LaneName 泳道名称
     * @param string $Remark 备注
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
        if (array_key_exists("LaneId",$param) and $param["LaneId"] !== null) {
            $this->LaneId = $param["LaneId"];
        }

        if (array_key_exists("LaneName",$param) and $param["LaneName"] !== null) {
            $this->LaneName = $param["LaneName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
