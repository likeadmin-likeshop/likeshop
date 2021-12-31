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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 线路分组信息
 *
 * @method string getLineId() 获取线路分组ID
 * @method void setLineId(string $LineId) 设置线路分组ID
 * @method string getName() 获取线路分组名称
 * @method void setName(string $Name) 设置线路分组名称
 * @method string getType() 获取分组类型
 * @method void setType(string $Type) 设置分组类型
 * @method array getLineList() 获取线路分组包含的线路列表
 * @method void setLineList(array $LineList) 设置线路分组包含的线路列表
 */
class LineGroupInfo extends AbstractModel
{
    /**
     * @var string 线路分组ID
     */
    public $LineId;

    /**
     * @var string 线路分组名称
     */
    public $Name;

    /**
     * @var string 分组类型
     */
    public $Type;

    /**
     * @var array 线路分组包含的线路列表
     */
    public $LineList;

    /**
     * @param string $LineId 线路分组ID
     * @param string $Name 线路分组名称
     * @param string $Type 分组类型
     * @param array $LineList 线路分组包含的线路列表
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
        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            $this->LineId = $param["LineId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LineList",$param) and $param["LineList"] !== null) {
            $this->LineList = $param["LineList"];
        }
    }
}
