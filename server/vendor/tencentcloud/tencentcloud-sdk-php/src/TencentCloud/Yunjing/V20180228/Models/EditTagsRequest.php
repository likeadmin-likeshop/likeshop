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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditTags请求参数结构体
 *
 * @method string getName() 获取标签名
 * @method void setName(string $Name) 设置标签名
 * @method integer getId() 获取标签ID
 * @method void setId(integer $Id) 设置标签ID
 * @method array getQuuids() 获取CVM主机ID
 * @method void setQuuids(array $Quuids) 设置CVM主机ID
 */
class EditTagsRequest extends AbstractModel
{
    /**
     * @var string 标签名
     */
    public $Name;

    /**
     * @var integer 标签ID
     */
    public $Id;

    /**
     * @var array CVM主机ID
     */
    public $Quuids;

    /**
     * @param string $Name 标签名
     * @param integer $Id 标签ID
     * @param array $Quuids CVM主机ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
