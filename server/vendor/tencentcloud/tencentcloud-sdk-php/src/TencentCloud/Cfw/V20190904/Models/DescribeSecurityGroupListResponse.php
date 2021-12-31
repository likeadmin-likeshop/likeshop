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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroupList返回参数结构体
 *
 * @method integer getTotal() 获取列表当前规则总条数
 * @method void setTotal(integer $Total) 设置列表当前规则总条数
 * @method array getData() 获取安全组规则列表数据
 * @method void setData(array $Data) 设置安全组规则列表数据
 * @method integer getAllTotal() 获取不算筛选条数的总条数
 * @method void setAllTotal(integer $AllTotal) 设置不算筛选条数的总条数
 * @method integer getEnable() 获取访问控制规则全部启用/全部停用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置访问控制规则全部启用/全部停用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityGroupListResponse extends AbstractModel
{
    /**
     * @var integer 列表当前规则总条数
     */
    public $Total;

    /**
     * @var array 安全组规则列表数据
     */
    public $Data;

    /**
     * @var integer 不算筛选条数的总条数
     */
    public $AllTotal;

    /**
     * @var integer 访问控制规则全部启用/全部停用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 列表当前规则总条数
     * @param array $Data 安全组规则列表数据
     * @param integer $AllTotal 不算筛选条数的总条数
     * @param integer $Enable 访问控制规则全部启用/全部停用
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SecurityGroupListData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("AllTotal",$param) and $param["AllTotal"] !== null) {
            $this->AllTotal = $param["AllTotal"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
