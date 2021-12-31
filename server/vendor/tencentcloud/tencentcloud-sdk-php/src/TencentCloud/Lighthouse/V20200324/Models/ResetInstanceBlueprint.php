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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了镜像重置信息
 *
 * @method Blueprint getBlueprintInfo() 获取镜像详细信息
 * @method void setBlueprintInfo(Blueprint $BlueprintInfo) 设置镜像详细信息
 * @method boolean getIsResettable() 获取实例镜像是否可重置为目标镜像
 * @method void setIsResettable(boolean $IsResettable) 设置实例镜像是否可重置为目标镜像
 * @method string getNonResettableMessage() 获取不可重置信息.当镜像可重置时为""
 * @method void setNonResettableMessage(string $NonResettableMessage) 设置不可重置信息.当镜像可重置时为""
 */
class ResetInstanceBlueprint extends AbstractModel
{
    /**
     * @var Blueprint 镜像详细信息
     */
    public $BlueprintInfo;

    /**
     * @var boolean 实例镜像是否可重置为目标镜像
     */
    public $IsResettable;

    /**
     * @var string 不可重置信息.当镜像可重置时为""
     */
    public $NonResettableMessage;

    /**
     * @param Blueprint $BlueprintInfo 镜像详细信息
     * @param boolean $IsResettable 实例镜像是否可重置为目标镜像
     * @param string $NonResettableMessage 不可重置信息.当镜像可重置时为""
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
        if (array_key_exists("BlueprintInfo",$param) and $param["BlueprintInfo"] !== null) {
            $this->BlueprintInfo = new Blueprint();
            $this->BlueprintInfo->deserialize($param["BlueprintInfo"]);
        }

        if (array_key_exists("IsResettable",$param) and $param["IsResettable"] !== null) {
            $this->IsResettable = $param["IsResettable"];
        }

        if (array_key_exists("NonResettableMessage",$param) and $param["NonResettableMessage"] !== null) {
            $this->NonResettableMessage = $param["NonResettableMessage"];
        }
    }
}
