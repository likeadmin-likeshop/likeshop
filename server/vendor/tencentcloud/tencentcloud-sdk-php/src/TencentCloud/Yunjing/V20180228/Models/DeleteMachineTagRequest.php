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
 * DeleteMachineTag请求参数结构体
 *
 * @method integer getRid() 获取关联的标签ID
 * @method void setRid(integer $Rid) 设置关联的标签ID
 */
class DeleteMachineTagRequest extends AbstractModel
{
    /**
     * @var integer 关联的标签ID
     */
    public $Rid;

    /**
     * @param integer $Rid 关联的标签ID
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
    }
}
