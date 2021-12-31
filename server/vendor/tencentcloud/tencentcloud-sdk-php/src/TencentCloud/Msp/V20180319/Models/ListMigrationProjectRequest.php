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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListMigrationProject请求参数结构体
 *
 * @method integer getOffset() 获取记录起始数，默认值为0
 * @method void setOffset(integer $Offset) 设置记录起始数，默认值为0
 * @method integer getLimit() 获取返回条数，默认值为500
 * @method void setLimit(integer $Limit) 设置返回条数，默认值为500
 */
class ListMigrationProjectRequest extends AbstractModel
{
    /**
     * @var integer 记录起始数，默认值为0
     */
    public $Offset;

    /**
     * @var integer 返回条数，默认值为500
     */
    public $Limit;

    /**
     * @param integer $Offset 记录起始数，默认值为0
     * @param integer $Limit 返回条数，默认值为500
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
