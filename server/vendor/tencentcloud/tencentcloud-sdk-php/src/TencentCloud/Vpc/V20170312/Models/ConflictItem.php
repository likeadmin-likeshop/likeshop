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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 冲突资源条目信息。
 *
 * @method string getConfilctId() 获取冲突资源的ID
 * @method void setConfilctId(string $ConfilctId) 设置冲突资源的ID
 * @method string getDestinationItem() 获取冲突目的资源
 * @method void setDestinationItem(string $DestinationItem) 设置冲突目的资源
 */
class ConflictItem extends AbstractModel
{
    /**
     * @var string 冲突资源的ID
     */
    public $ConfilctId;

    /**
     * @var string 冲突目的资源
     */
    public $DestinationItem;

    /**
     * @param string $ConfilctId 冲突资源的ID
     * @param string $DestinationItem 冲突目的资源
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
        if (array_key_exists("ConfilctId",$param) and $param["ConfilctId"] !== null) {
            $this->ConfilctId = $param["ConfilctId"];
        }

        if (array_key_exists("DestinationItem",$param) and $param["DestinationItem"] !== null) {
            $this->DestinationItem = $param["DestinationItem"];
        }
    }
}
