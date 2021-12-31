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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLink请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method string getType() 获取链接类型，取值有:
<li>CLASS: 分类链接；</li>
<li> MATERIAL：媒体文件链接。</li>
 * @method void setType(string $Type) 设置链接类型，取值有:
<li>CLASS: 分类链接；</li>
<li> MATERIAL：媒体文件链接。</li>
 * @method string getName() 获取链接名称，不能超过30个字符。
 * @method void setName(string $Name) 设置链接名称，不能超过30个字符。
 * @method Entity getOwner() 获取链接归属者。
 * @method void setOwner(Entity $Owner) 设置链接归属者。
 * @method string getDestinationId() 获取目标资源Id。取值：
<li>当 Type 为 MATERIAL 时填媒体 ID；</li>
<li>当 Type 为 CLASS 时填写分类路径。</li>
 * @method void setDestinationId(string $DestinationId) 设置目标资源Id。取值：
<li>当 Type 为 MATERIAL 时填媒体 ID；</li>
<li>当 Type 为 CLASS 时填写分类路径。</li>
 * @method Entity getDestinationOwner() 获取目标资源归属者。
 * @method void setDestinationOwner(Entity $DestinationOwner) 设置目标资源归属者。
 * @method string getClassPath() 获取链接的分类路径，如填"/a/b"则代表链接属于该分类路径，不填则默认为根路径。
 * @method void setClassPath(string $ClassPath) 设置链接的分类路径，如填"/a/b"则代表链接属于该分类路径，不填则默认为根路径。
 * @method string getOperator() 获取操作者。填写用户的 Id，用于标识调用者及校验操作权限。
 * @method void setOperator(string $Operator) 设置操作者。填写用户的 Id，用于标识调用者及校验操作权限。
 */
class CreateLinkRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var string 链接类型，取值有:
<li>CLASS: 分类链接；</li>
<li> MATERIAL：媒体文件链接。</li>
     */
    public $Type;

    /**
     * @var string 链接名称，不能超过30个字符。
     */
    public $Name;

    /**
     * @var Entity 链接归属者。
     */
    public $Owner;

    /**
     * @var string 目标资源Id。取值：
<li>当 Type 为 MATERIAL 时填媒体 ID；</li>
<li>当 Type 为 CLASS 时填写分类路径。</li>
     */
    public $DestinationId;

    /**
     * @var Entity 目标资源归属者。
     */
    public $DestinationOwner;

    /**
     * @var string 链接的分类路径，如填"/a/b"则代表链接属于该分类路径，不填则默认为根路径。
     */
    public $ClassPath;

    /**
     * @var string 操作者。填写用户的 Id，用于标识调用者及校验操作权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param string $Type 链接类型，取值有:
<li>CLASS: 分类链接；</li>
<li> MATERIAL：媒体文件链接。</li>
     * @param string $Name 链接名称，不能超过30个字符。
     * @param Entity $Owner 链接归属者。
     * @param string $DestinationId 目标资源Id。取值：
<li>当 Type 为 MATERIAL 时填媒体 ID；</li>
<li>当 Type 为 CLASS 时填写分类路径。</li>
     * @param Entity $DestinationOwner 目标资源归属者。
     * @param string $ClassPath 链接的分类路径，如填"/a/b"则代表链接属于该分类路径，不填则默认为根路径。
     * @param string $Operator 操作者。填写用户的 Id，用于标识调用者及校验操作权限。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("DestinationId",$param) and $param["DestinationId"] !== null) {
            $this->DestinationId = $param["DestinationId"];
        }

        if (array_key_exists("DestinationOwner",$param) and $param["DestinationOwner"] !== null) {
            $this->DestinationOwner = new Entity();
            $this->DestinationOwner->deserialize($param["DestinationOwner"]);
        }

        if (array_key_exists("ClassPath",$param) and $param["ClassPath"] !== null) {
            $this->ClassPath = $param["ClassPath"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
