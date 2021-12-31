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
 * 服务器标签信息
 *
 * @method integer getRid() 获取关联标签ID
 * @method void setRid(integer $Rid) 设置关联标签ID
 * @method string getName() 获取标签名
 * @method void setName(string $Name) 设置标签名
 * @method integer getTagId() 获取标签ID
 * @method void setTagId(integer $TagId) 设置标签ID
 */
class MachineTag extends AbstractModel
{
    /**
     * @var integer 关联标签ID
     */
    public $Rid;

    /**
     * @var string 标签名
     */
    public $Name;

    /**
     * @var integer 标签ID
     */
    public $TagId;

    /**
     * @param integer $Rid 关联标签ID
     * @param string $Name 标签名
     * @param integer $TagId 标签ID
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
        if (array_key_exists("Rid",$param) and $param["Rid"] !== null) {
            $this->Rid = $param["Rid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }
    }
}
