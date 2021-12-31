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
 * CreateLane请求参数结构体
 *
 * @method string getLaneName() 获取泳道名称
 * @method void setLaneName(string $LaneName) 设置泳道名称
 * @method string getRemark() 获取泳道备注
 * @method void setRemark(string $Remark) 设置泳道备注
 * @method array getLaneGroupList() 获取泳道部署组信息
 * @method void setLaneGroupList(array $LaneGroupList) 设置泳道部署组信息
 */
class CreateLaneRequest extends AbstractModel
{
    /**
     * @var string 泳道名称
     */
    public $LaneName;

    /**
     * @var string 泳道备注
     */
    public $Remark;

    /**
     * @var array 泳道部署组信息
     */
    public $LaneGroupList;

    /**
     * @param string $LaneName 泳道名称
     * @param string $Remark 泳道备注
     * @param array $LaneGroupList 泳道部署组信息
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
        if (array_key_exists("LaneName",$param) and $param["LaneName"] !== null) {
            $this->LaneName = $param["LaneName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("LaneGroupList",$param) and $param["LaneGroupList"] !== null) {
            $this->LaneGroupList = [];
            foreach ($param["LaneGroupList"] as $key => $value){
                $obj = new LaneGroup();
                $obj->deserialize($value);
                array_push($this->LaneGroupList, $obj);
            }
        }
    }
}
