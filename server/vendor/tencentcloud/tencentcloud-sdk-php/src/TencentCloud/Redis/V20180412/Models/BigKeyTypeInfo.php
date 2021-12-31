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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大Key类型分布详情
 *
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method integer getCount() 获取数量
 * @method void setCount(integer $Count) 设置数量
 * @method integer getSize() 获取大小
 * @method void setSize(integer $Size) 设置大小
 * @method integer getUpdatetime() 获取时间戳
 * @method void setUpdatetime(integer $Updatetime) 设置时间戳
 */
class BigKeyTypeInfo extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var integer 数量
     */
    public $Count;

    /**
     * @var integer 大小
     */
    public $Size;

    /**
     * @var integer 时间戳
     */
    public $Updatetime;

    /**
     * @param string $Type 类型
     * @param integer $Count 数量
     * @param integer $Size 大小
     * @param integer $Updatetime 时间戳
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Updatetime",$param) and $param["Updatetime"] !== null) {
            $this->Updatetime = $param["Updatetime"];
        }
    }
}
