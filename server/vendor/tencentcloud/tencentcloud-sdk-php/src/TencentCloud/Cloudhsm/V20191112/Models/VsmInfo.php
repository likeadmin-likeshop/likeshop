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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 支持的Vsm类型信息
 *
 * @method string getTypeName() 获取VSM类型名称
 * @method void setTypeName(string $TypeName) 设置VSM类型名称
 * @method integer getTypeID() 获取VSM类型值
 * @method void setTypeID(integer $TypeID) 设置VSM类型值
 */
class VsmInfo extends AbstractModel
{
    /**
     * @var string VSM类型名称
     */
    public $TypeName;

    /**
     * @var integer VSM类型值
     */
    public $TypeID;

    /**
     * @param string $TypeName VSM类型名称
     * @param integer $TypeID VSM类型值
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
        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("TypeID",$param) and $param["TypeID"] !== null) {
            $this->TypeID = $param["TypeID"];
        }
    }
}
