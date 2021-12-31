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
 * ModifyProject请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method string getProjectId() 获取项目 Id。
 * @method void setProjectId(string $ProjectId) 设置项目 Id。
 * @method string getName() 获取项目名称，不可超过30个字符。
 * @method void setName(string $Name) 设置项目名称，不可超过30个字符。
 * @method string getAspectRatio() 获取画布宽高比，取值有：
<li>16:9；</li>
<li>9:16。</li>
 * @method void setAspectRatio(string $AspectRatio) 设置画布宽高比，取值有：
<li>16:9；</li>
<li>9:16。</li>
 * @method Entity getOwner() 获取项目归属者。
 * @method void setOwner(Entity $Owner) 设置项目归属者。
 * @method string getMode() 获取项目模式，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Defualt：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>
 * @method void setMode(string $Mode) 设置项目模式，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Defualt：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var string 项目 Id。
     */
    public $ProjectId;

    /**
     * @var string 项目名称，不可超过30个字符。
     */
    public $Name;

    /**
     * @var string 画布宽高比，取值有：
<li>16:9；</li>
<li>9:16。</li>
     */
    public $AspectRatio;

    /**
     * @var Entity 项目归属者。
     */
    public $Owner;

    /**
     * @var string 项目模式，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Defualt：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>
     */
    public $Mode;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param string $ProjectId 项目 Id。
     * @param string $Name 项目名称，不可超过30个字符。
     * @param string $AspectRatio 画布宽高比，取值有：
<li>16:9；</li>
<li>9:16。</li>
     * @param Entity $Owner 项目归属者。
     * @param string $Mode 项目模式，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Defualt：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
