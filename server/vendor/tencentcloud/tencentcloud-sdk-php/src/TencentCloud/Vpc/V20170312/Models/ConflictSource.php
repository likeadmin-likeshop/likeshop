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
 * 冲突资源信息。
 *
 * @method string getConflictSourceId() 获取冲突资源ID
 * @method void setConflictSourceId(string $ConflictSourceId) 设置冲突资源ID
 * @method string getSourceItem() 获取冲突资源
 * @method void setSourceItem(string $SourceItem) 设置冲突资源
 * @method array getConflictItemSet() 获取冲突资源条目信息
 * @method void setConflictItemSet(array $ConflictItemSet) 设置冲突资源条目信息
 */
class ConflictSource extends AbstractModel
{
    /**
     * @var string 冲突资源ID
     */
    public $ConflictSourceId;

    /**
     * @var string 冲突资源
     */
    public $SourceItem;

    /**
     * @var array 冲突资源条目信息
     */
    public $ConflictItemSet;

    /**
     * @param string $ConflictSourceId 冲突资源ID
     * @param string $SourceItem 冲突资源
     * @param array $ConflictItemSet 冲突资源条目信息
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
        if (array_key_exists("ConflictSourceId",$param) and $param["ConflictSourceId"] !== null) {
            $this->ConflictSourceId = $param["ConflictSourceId"];
        }

        if (array_key_exists("SourceItem",$param) and $param["SourceItem"] !== null) {
            $this->SourceItem = $param["SourceItem"];
        }

        if (array_key_exists("ConflictItemSet",$param) and $param["ConflictItemSet"] !== null) {
            $this->ConflictItemSet = [];
            foreach ($param["ConflictItemSet"] as $key => $value){
                $obj = new ConflictItem();
                $obj->deserialize($value);
                array_push($this->ConflictItemSet, $obj);
            }
        }
    }
}
