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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListLayers请求参数结构体
 *
 * @method string getCompatibleRuntime() 获取适配的运行时
 * @method void setCompatibleRuntime(string $CompatibleRuntime) 设置适配的运行时
 * @method integer getOffset() 获取偏移位置
 * @method void setOffset(integer $Offset) 设置偏移位置
 * @method integer getLimit() 获取查询数目限制
 * @method void setLimit(integer $Limit) 设置查询数目限制
 * @method string getSearchKey() 获取查询key，模糊匹配名称
 * @method void setSearchKey(string $SearchKey) 设置查询key，模糊匹配名称
 */
class ListLayersRequest extends AbstractModel
{
    /**
     * @var string 适配的运行时
     */
    public $CompatibleRuntime;

    /**
     * @var integer 偏移位置
     */
    public $Offset;

    /**
     * @var integer 查询数目限制
     */
    public $Limit;

    /**
     * @var string 查询key，模糊匹配名称
     */
    public $SearchKey;

    /**
     * @param string $CompatibleRuntime 适配的运行时
     * @param integer $Offset 偏移位置
     * @param integer $Limit 查询数目限制
     * @param string $SearchKey 查询key，模糊匹配名称
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
        if (array_key_exists("CompatibleRuntime",$param) and $param["CompatibleRuntime"] !== null) {
            $this->CompatibleRuntime = $param["CompatibleRuntime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
