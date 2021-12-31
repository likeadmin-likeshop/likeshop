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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchWordItems请求参数结构体
 *
 * @method string getDictId() 获取自定义词库ID。
 * @method void setDictId(string $DictId) 设置自定义词库ID。
 * @method array getWordItems() 获取待检索的词条集合。
 * @method void setWordItems(array $WordItems) 设置待检索的词条集合。
 */
class SearchWordItemsRequest extends AbstractModel
{
    /**
     * @var string 自定义词库ID。
     */
    public $DictId;

    /**
     * @var array 待检索的词条集合。
     */
    public $WordItems;

    /**
     * @param string $DictId 自定义词库ID。
     * @param array $WordItems 待检索的词条集合。
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
        if (array_key_exists("DictId",$param) and $param["DictId"] !== null) {
            $this->DictId = $param["DictId"];
        }

        if (array_key_exists("WordItems",$param) and $param["WordItems"] !== null) {
            $this->WordItems = [];
            foreach ($param["WordItems"] as $key => $value){
                $obj = new WordItem();
                $obj->deserialize($value);
                array_push($this->WordItems, $obj);
            }
        }
    }
}
