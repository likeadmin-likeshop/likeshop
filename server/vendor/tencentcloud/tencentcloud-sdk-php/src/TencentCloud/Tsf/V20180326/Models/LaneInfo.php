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
 * 泳道
 *
 * @method string getLaneId() 获取泳道ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaneId(string $LaneId) 设置泳道ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLaneName() 获取泳道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaneName(string $LaneName) 设置泳道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取泳道备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置泳道备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLaneGroupList() 获取泳道部署组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaneGroupList(array $LaneGroupList) 设置泳道部署组
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEntrance() 获取是否入口应用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntrance(boolean $Entrance) 设置是否入口应用
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNamespaceIdList() 获取泳道已经关联部署组的命名空间列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceIdList(array $NamespaceIdList) 设置泳道已经关联部署组的命名空间列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class LaneInfo extends AbstractModel
{
    /**
     * @var string 泳道ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaneId;

    /**
     * @var string 泳道名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaneName;

    /**
     * @var string 泳道备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 泳道部署组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaneGroupList;

    /**
     * @var boolean 是否入口应用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Entrance;

    /**
     * @var array 泳道已经关联部署组的命名空间列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceIdList;

    /**
     * @param string $LaneId 泳道ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LaneName 泳道名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 泳道备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LaneGroupList 泳道部署组
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Entrance 是否入口应用
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NamespaceIdList 泳道已经关联部署组的命名空间列表
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LaneGroupList",$param) and $param["LaneGroupList"] !== null) {
            $this->LaneGroupList = [];
            foreach ($param["LaneGroupList"] as $key => $value){
                $obj = new LaneGroup();
                $obj->deserialize($value);
                array_push($this->LaneGroupList, $obj);
            }
        }

        if (array_key_exists("Entrance",$param) and $param["Entrance"] !== null) {
            $this->Entrance = $param["Entrance"];
        }

        if (array_key_exists("NamespaceIdList",$param) and $param["NamespaceIdList"] !== null) {
            $this->NamespaceIdList = $param["NamespaceIdList"];
        }
    }
}
