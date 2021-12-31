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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetClusterListForUser请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：cluster_mng
 * @method void setModule(string $Module) 设置模块名，本接口取值：cluster_mng
 * @method string getOperation() 获取操作名，本接口取值：cluster_list_for_user
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：cluster_list_for_user
 * @method integer getLimit() 获取返回数据项数，本接口默认取值：10，上限取值：20
 * @method void setLimit(integer $Limit) 设置返回数据项数，本接口默认取值：10，上限取值：20
 * @method integer getOffset() 获取返回数据起始偏移，本接口默认取值：0
 * @method void setOffset(integer $Offset) 设置返回数据起始偏移，本接口默认取值：0
 */
class GetClusterListForUserRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：cluster_mng
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：cluster_list_for_user
     */
    public $Operation;

    /**
     * @var integer 返回数据项数，本接口默认取值：10，上限取值：20
     */
    public $Limit;

    /**
     * @var integer 返回数据起始偏移，本接口默认取值：0
     */
    public $Offset;

    /**
     * @param string $Module 模块名，本接口取值：cluster_mng
     * @param string $Operation 操作名，本接口取值：cluster_list_for_user
     * @param integer $Limit 返回数据项数，本接口默认取值：10，上限取值：20
     * @param integer $Offset 返回数据起始偏移，本接口默认取值：0
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
