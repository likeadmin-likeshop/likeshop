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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务发布历史
 *
 * @method integer getTotalCount() 获取发布版本总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置发布版本总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVersionList() 获取历史版本列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionList(array $VersionList) 设置历史版本列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceReleaseHistory extends AbstractModel
{
    /**
     * @var integer 发布版本总数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 历史版本列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionList;

    /**
     * @param integer $TotalCount 发布版本总数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VersionList 历史版本列表。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("VersionList",$param) and $param["VersionList"] !== null) {
            $this->VersionList = [];
            foreach ($param["VersionList"] as $key => $value){
                $obj = new ServiceReleaseHistoryInfo();
                $obj->deserialize($value);
                array_push($this->VersionList, $obj);
            }
        }
    }
}
