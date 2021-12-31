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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGroup请求参数结构体
 *
 * @method string getGroupName() 获取人体库名称，[1,60]个字符，可修改，不可重复。
 * @method void setGroupName(string $GroupName) 设置人体库名称，[1,60]个字符，可修改，不可重复。
 * @method string getGroupId() 获取人体库 ID，不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
 * @method void setGroupId(string $GroupId) 设置人体库 ID，不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
 * @method string getTag() 获取人体库信息备注，[0，40]个字符。
 * @method void setTag(string $Tag) 设置人体库信息备注，[0，40]个字符。
 * @method string getBodyModelVersion() 获取人体识别所用的算法模型版本。 
目前入参仅支持 “1.0”1个输入。 默认为"1.0"。  
不同算法模型版本对应的人体识别算法不同，新版本的整体效果会优于旧版本，后续我们将推出更新版本。
 * @method void setBodyModelVersion(string $BodyModelVersion) 设置人体识别所用的算法模型版本。 
目前入参仅支持 “1.0”1个输入。 默认为"1.0"。  
不同算法模型版本对应的人体识别算法不同，新版本的整体效果会优于旧版本，后续我们将推出更新版本。
 */
class CreateGroupRequest extends AbstractModel
{
    /**
     * @var string 人体库名称，[1,60]个字符，可修改，不可重复。
     */
    public $GroupName;

    /**
     * @var string 人体库 ID，不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
     */
    public $GroupId;

    /**
     * @var string 人体库信息备注，[0，40]个字符。
     */
    public $Tag;

    /**
     * @var string 人体识别所用的算法模型版本。 
目前入参仅支持 “1.0”1个输入。 默认为"1.0"。  
不同算法模型版本对应的人体识别算法不同，新版本的整体效果会优于旧版本，后续我们将推出更新版本。
     */
    public $BodyModelVersion;

    /**
     * @param string $GroupName 人体库名称，[1,60]个字符，可修改，不可重复。
     * @param string $GroupId 人体库 ID，不可修改，不可重复。支持英文、数字、-%@#&_，长度限制64B。
     * @param string $Tag 人体库信息备注，[0，40]个字符。
     * @param string $BodyModelVersion 人体识别所用的算法模型版本。 
目前入参仅支持 “1.0”1个输入。 默认为"1.0"。  
不同算法模型版本对应的人体识别算法不同，新版本的整体效果会优于旧版本，后续我们将推出更新版本。
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("BodyModelVersion",$param) and $param["BodyModelVersion"] !== null) {
            $this->BodyModelVersion = $param["BodyModelVersion"];
        }
    }
}
