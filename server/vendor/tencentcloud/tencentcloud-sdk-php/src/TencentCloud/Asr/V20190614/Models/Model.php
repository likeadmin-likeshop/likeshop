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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自学习模型信息
 *
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method string getDictName() 获取模型文件名称
 * @method void setDictName(string $DictName) 设置模型文件名称
 * @method string getModelId() 获取模型Id
 * @method void setModelId(string $ModelId) 设置模型Id
 * @method string getModelType() 获取模型类型，“8k”或者”16k“
 * @method void setModelType(string $ModelType) 设置模型类型，“8k”或者”16k“
 * @method string getServiceType() 获取服务类型
 * @method void setServiceType(string $ServiceType) 设置服务类型
 * @method integer getModelState() 获取模型状态，-1下线状态，1上线状态, 0训练中, -2 训练失败
 * @method void setModelState(integer $ModelState) 设置模型状态，-1下线状态，1上线状态, 0训练中, -2 训练失败
 * @method string getAtUpdated() 获取最后更新时间
 * @method void setAtUpdated(string $AtUpdated) 设置最后更新时间
 * @method array getTagInfos() 获取标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagInfos(array $TagInfos) 设置标签信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Model extends AbstractModel
{
    /**
     * @var string 模型名称
     */
    public $ModelName;

    /**
     * @var string 模型文件名称
     */
    public $DictName;

    /**
     * @var string 模型Id
     */
    public $ModelId;

    /**
     * @var string 模型类型，“8k”或者”16k“
     */
    public $ModelType;

    /**
     * @var string 服务类型
     */
    public $ServiceType;

    /**
     * @var integer 模型状态，-1下线状态，1上线状态, 0训练中, -2 训练失败
     */
    public $ModelState;

    /**
     * @var string 最后更新时间
     */
    public $AtUpdated;

    /**
     * @var array 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagInfos;

    /**
     * @param string $ModelName 模型名称
     * @param string $DictName 模型文件名称
     * @param string $ModelId 模型Id
     * @param string $ModelType 模型类型，“8k”或者”16k“
     * @param string $ServiceType 服务类型
     * @param integer $ModelState 模型状态，-1下线状态，1上线状态, 0训练中, -2 训练失败
     * @param string $AtUpdated 最后更新时间
     * @param array $TagInfos 标签信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("DictName",$param) and $param["DictName"] !== null) {
            $this->DictName = $param["DictName"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ModelState",$param) and $param["ModelState"] !== null) {
            $this->ModelState = $param["ModelState"];
        }

        if (array_key_exists("AtUpdated",$param) and $param["AtUpdated"] !== null) {
            $this->AtUpdated = $param["AtUpdated"];
        }

        if (array_key_exists("TagInfos",$param) and $param["TagInfos"] !== null) {
            $this->TagInfos = $param["TagInfos"];
        }
    }
}
