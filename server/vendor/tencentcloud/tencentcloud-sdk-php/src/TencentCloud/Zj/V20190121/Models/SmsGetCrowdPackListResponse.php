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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信人群包返回信息
 *
 * @method integer getTotal() 获取人群包总数
 * @method void setTotal(integer $Total) 设置人群包总数
 * @method array getList() 获取人群包返回数据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置人群包返回数据列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmsGetCrowdPackListResponse extends AbstractModel
{
    /**
     * @var integer 人群包总数
     */
    public $Total;

    /**
     * @var array 人群包返回数据列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @param integer $Total 人群包总数
     * @param array $List 人群包返回数据列表
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new SmsGetCrowdPackList();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
