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
 * ModifySequenceRules请求参数结构体
 *
 * @method string getEdgeId() 获取边Id值
 * @method void setEdgeId(string $EdgeId) 设置边Id值
 * @method array getData() 获取修改数据
 * @method void setData(array $Data) 设置修改数据
 * @method string getArea() 获取NAT地域
 * @method void setArea(string $Area) 设置NAT地域
 * @method integer getDirection() 获取方向，0：出向，1：入向
 * @method void setDirection(integer $Direction) 设置方向，0：出向，1：入向
 */
class ModifySequenceRulesRequest extends AbstractModel
{
    /**
     * @var string 边Id值
     */
    public $EdgeId;

    /**
     * @var array 修改数据
     */
    public $Data;

    /**
     * @var string NAT地域
     */
    public $Area;

    /**
     * @var integer 方向，0：出向，1：入向
     */
    public $Direction;

    /**
     * @param string $EdgeId 边Id值
     * @param array $Data 修改数据
     * @param string $Area NAT地域
     * @param integer $Direction 方向，0：出向，1：入向
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
        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SequenceData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
