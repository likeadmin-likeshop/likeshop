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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeItemById请求参数结构体
 *
 * @method string getItemIDs() 获取歌曲ID，目前暂不支持批量查询
 * @method void setItemIDs(string $ItemIDs) 设置歌曲ID，目前暂不支持批量查询
 */
class DescribeItemByIdRequest extends AbstractModel
{
    /**
     * @var string 歌曲ID，目前暂不支持批量查询
     */
    public $ItemIDs;

    /**
     * @param string $ItemIDs 歌曲ID，目前暂不支持批量查询
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
        if (array_key_exists("ItemIDs",$param) and $param["ItemIDs"] !== null) {
            $this->ItemIDs = $param["ItemIDs"];
        }
    }
}
