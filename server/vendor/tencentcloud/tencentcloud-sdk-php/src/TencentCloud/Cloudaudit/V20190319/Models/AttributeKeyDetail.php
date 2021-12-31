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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttributeKey值详情
 *
 * @method string getLabelType() 获取输入框类型
 * @method void setLabelType(string $LabelType) 设置输入框类型
 * @method string getStarter() 获取初始化展示
 * @method void setStarter(string $Starter) 设置初始化展示
 * @method integer getOrder() 获取展示排序
 * @method void setOrder(integer $Order) 设置展示排序
 * @method string getValue() 获取AttributeKey值
 * @method void setValue(string $Value) 设置AttributeKey值
 * @method string getLabel() 获取中文标签
 * @method void setLabel(string $Label) 设置中文标签
 */
class AttributeKeyDetail extends AbstractModel
{
    /**
     * @var string 输入框类型
     */
    public $LabelType;

    /**
     * @var string 初始化展示
     */
    public $Starter;

    /**
     * @var integer 展示排序
     */
    public $Order;

    /**
     * @var string AttributeKey值
     */
    public $Value;

    /**
     * @var string 中文标签
     */
    public $Label;

    /**
     * @param string $LabelType 输入框类型
     * @param string $Starter 初始化展示
     * @param integer $Order 展示排序
     * @param string $Value AttributeKey值
     * @param string $Label 中文标签
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
        if (array_key_exists("LabelType",$param) and $param["LabelType"] !== null) {
            $this->LabelType = $param["LabelType"];
        }

        if (array_key_exists("Starter",$param) and $param["Starter"] !== null) {
            $this->Starter = $param["Starter"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
