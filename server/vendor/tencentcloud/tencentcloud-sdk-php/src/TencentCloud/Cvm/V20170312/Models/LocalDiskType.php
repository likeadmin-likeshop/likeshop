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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本地磁盘规格
 *
 * @method string getType() 获取本地磁盘类型。
 * @method void setType(string $Type) 设置本地磁盘类型。
 * @method string getPartitionType() 获取本地磁盘属性。
 * @method void setPartitionType(string $PartitionType) 设置本地磁盘属性。
 * @method integer getMinSize() 获取本地磁盘最小值。
 * @method void setMinSize(integer $MinSize) 设置本地磁盘最小值。
 * @method integer getMaxSize() 获取本地磁盘最大值。
 * @method void setMaxSize(integer $MaxSize) 设置本地磁盘最大值。
 * @method string getRequired() 获取购买时本地盘是否为必选。取值范围：<br><li>REQUIRED：表示必选<br><li>OPTIONAL：表示可选。
 * @method void setRequired(string $Required) 设置购买时本地盘是否为必选。取值范围：<br><li>REQUIRED：表示必选<br><li>OPTIONAL：表示可选。
 */
class LocalDiskType extends AbstractModel
{
    /**
     * @var string 本地磁盘类型。
     */
    public $Type;

    /**
     * @var string 本地磁盘属性。
     */
    public $PartitionType;

    /**
     * @var integer 本地磁盘最小值。
     */
    public $MinSize;

    /**
     * @var integer 本地磁盘最大值。
     */
    public $MaxSize;

    /**
     * @var string 购买时本地盘是否为必选。取值范围：<br><li>REQUIRED：表示必选<br><li>OPTIONAL：表示可选。
     */
    public $Required;

    /**
     * @param string $Type 本地磁盘类型。
     * @param string $PartitionType 本地磁盘属性。
     * @param integer $MinSize 本地磁盘最小值。
     * @param integer $MaxSize 本地磁盘最大值。
     * @param string $Required 购买时本地盘是否为必选。取值范围：<br><li>REQUIRED：表示必选<br><li>OPTIONAL：表示可选。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PartitionType",$param) and $param["PartitionType"] !== null) {
            $this->PartitionType = $param["PartitionType"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }
    }
}
