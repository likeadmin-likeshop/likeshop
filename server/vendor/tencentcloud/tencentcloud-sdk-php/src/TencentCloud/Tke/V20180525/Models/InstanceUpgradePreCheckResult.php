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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 某个节点升级前检查结果
 *
 * @method boolean getCheckPass() 获取检查是否通过
 * @method void setCheckPass(boolean $CheckPass) 设置检查是否通过
 * @method array getItems() 获取检查项数组
 * @method void setItems(array $Items) 设置检查项数组
 * @method array getSinglePods() 获取本节点独立pod列表
 * @method void setSinglePods(array $SinglePods) 设置本节点独立pod列表
 */
class InstanceUpgradePreCheckResult extends AbstractModel
{
    /**
     * @var boolean 检查是否通过
     */
    public $CheckPass;

    /**
     * @var array 检查项数组
     */
    public $Items;

    /**
     * @var array 本节点独立pod列表
     */
    public $SinglePods;

    /**
     * @param boolean $CheckPass 检查是否通过
     * @param array $Items 检查项数组
     * @param array $SinglePods 本节点独立pod列表
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
        if (array_key_exists("CheckPass",$param) and $param["CheckPass"] !== null) {
            $this->CheckPass = $param["CheckPass"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new InstanceUpgradePreCheckResultItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("SinglePods",$param) and $param["SinglePods"] !== null) {
            $this->SinglePods = $param["SinglePods"];
        }
    }
}
