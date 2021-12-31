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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询_通用字段
 *
 * @method integer getCount() 获取Count
 * @method void setCount(integer $Count) 设置Count
 * @method array getList() 获取List
 * @method void setList(array $List) 设置List
 */
class SaDivulgeDataQueryPubList extends AbstractModel
{
    /**
     * @var integer Count
     */
    public $Count;

    /**
     * @var array List
     */
    public $List;

    /**
     * @param integer $Count Count
     * @param array $List List
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new SaDivulgeDataQueryPub();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
