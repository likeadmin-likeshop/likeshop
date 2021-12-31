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
namespace TencentCloud\Yunsou\V20180504\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataManipulation请求参数结构体
 *
 * @method string getOpType() 获取操作类型，add或del
 * @method void setOpType(string $OpType) 设置操作类型，add或del
 * @method string getEncoding() 获取数据编码类型
 * @method void setEncoding(string $Encoding) 设置数据编码类型
 * @method string getContents() 获取数据
 * @method void setContents(string $Contents) 设置数据
 * @method integer getResourceId() 获取应用Id
 * @method void setResourceId(integer $ResourceId) 设置应用Id
 */
class DataManipulationRequest extends AbstractModel
{
    /**
     * @var string 操作类型，add或del
     */
    public $OpType;

    /**
     * @var string 数据编码类型
     */
    public $Encoding;

    /**
     * @var string 数据
     */
    public $Contents;

    /**
     * @var integer 应用Id
     */
    public $ResourceId;

    /**
     * @param string $OpType 操作类型，add或del
     * @param string $Encoding 数据编码类型
     * @param string $Contents 数据
     * @param integer $ResourceId 应用Id
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
        if (array_key_exists("OpType",$param) and $param["OpType"] !== null) {
            $this->OpType = $param["OpType"];
        }

        if (array_key_exists("Encoding",$param) and $param["Encoding"] !== null) {
            $this->Encoding = $param["Encoding"];
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = $param["Contents"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
