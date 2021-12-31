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
 * DescribeSwitchLists返回参数结构体
 *
 * @method integer getTotal() 获取总条数
 * @method void setTotal(integer $Total) 设置总条数
 * @method array getData() 获取列表数据
 * @method void setData(array $Data) 设置列表数据
 * @method array getAreaLists() 获取区域列表
 * @method void setAreaLists(array $AreaLists) 设置区域列表
 * @method integer getOnNum() 获取打开个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnNum(integer $OnNum) 设置打开个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffNum() 获取关闭个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffNum(integer $OffNum) 设置关闭个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSwitchListsResponse extends AbstractModel
{
    /**
     * @var integer 总条数
     */
    public $Total;

    /**
     * @var array 列表数据
     */
    public $Data;

    /**
     * @var array 区域列表
     */
    public $AreaLists;

    /**
     * @var integer 打开个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnNum;

    /**
     * @var integer 关闭个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 总条数
     * @param array $Data 列表数据
     * @param array $AreaLists 区域列表
     * @param integer $OnNum 打开个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OffNum 关闭个数
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
                $obj = new SwitchListsData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("AreaLists",$param) and $param["AreaLists"] !== null) {
            $this->AreaLists = $param["AreaLists"];
        }

        if (array_key_exists("OnNum",$param) and $param["OnNum"] !== null) {
            $this->OnNum = $param["OnNum"];
        }

        if (array_key_exists("OffNum",$param) and $param["OffNum"] !== null) {
            $this->OffNum = $param["OffNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
