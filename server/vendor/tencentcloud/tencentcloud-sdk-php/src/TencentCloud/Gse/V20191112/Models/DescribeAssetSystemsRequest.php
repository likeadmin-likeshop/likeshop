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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetSystems请求参数结构体
 *
 * @method string getOsType() 获取生成包支持的操作系统类型
 * @method void setOsType(string $OsType) 设置生成包支持的操作系统类型
 * @method integer getOsBit() 获取生成包支持的操作系统位数
 * @method void setOsBit(integer $OsBit) 设置生成包支持的操作系统位数
 */
class DescribeAssetSystemsRequest extends AbstractModel
{
    /**
     * @var string 生成包支持的操作系统类型
     */
    public $OsType;

    /**
     * @var integer 生成包支持的操作系统位数
     */
    public $OsBit;

    /**
     * @param string $OsType 生成包支持的操作系统类型
     * @param integer $OsBit 生成包支持的操作系统位数
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
        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("OsBit",$param) and $param["OsBit"] !== null) {
            $this->OsBit = $param["OsBit"];
        }
    }
}
