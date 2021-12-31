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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyBlackList请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：account
 * @method void setModule(string $Module) 设置模块名，本接口取值：account
 * @method string getOperation() 获取操作名，本接口取值：ApplyBlackList
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：ApplyBlackList
 * @method array getBlackList() 获取黑名单列表
 * @method void setBlackList(array $BlackList) 设置黑名单列表
 * @method string getInstId() 获取实例ID，不传默认为系统分配的初始实例
 * @method void setInstId(string $InstId) 设置实例ID，不传默认为系统分配的初始实例
 */
class ApplyBlackListRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：account
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：ApplyBlackList
     */
    public $Operation;

    /**
     * @var array 黑名单列表
     */
    public $BlackList;

    /**
     * @var string 实例ID，不传默认为系统分配的初始实例
     */
    public $InstId;

    /**
     * @param string $Module 模块名，本接口取值：account
     * @param string $Operation 操作名，本接口取值：ApplyBlackList
     * @param array $BlackList 黑名单列表
     * @param string $InstId 实例ID，不传默认为系统分配的初始实例
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

        if (array_key_exists("BlackList",$param) and $param["BlackList"] !== null) {
            $this->BlackList = [];
            foreach ($param["BlackList"] as $key => $value){
                $obj = new SingleBlackApply();
                $obj->deserialize($value);
                array_push($this->BlackList, $obj);
            }
        }

        if (array_key_exists("InstId",$param) and $param["InstId"] !== null) {
            $this->InstId = $param["InstId"];
        }
    }
}
