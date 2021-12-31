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
 * ImportMaterial请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method Entity getOwner() 获取媒体归属者，团队或个人。
 * @method void setOwner(Entity $Owner) 设置媒体归属者，团队或个人。
 * @method string getName() 获取媒体名称，不能超过30个字符。
 * @method void setName(string $Name) 设置媒体名称，不能超过30个字符。
 * @method string getSourceType() 获取导入媒资类型，取值：
<li>VOD：云点播文件；</li>
<li>EXTERNAL：媒资绑定。</li>
注意：如果不填默认为云点播文件。
 * @method void setSourceType(string $SourceType) 设置导入媒资类型，取值：
<li>VOD：云点播文件；</li>
<li>EXTERNAL：媒资绑定。</li>
注意：如果不填默认为云点播文件。
 * @method string getVodFileId() 获取云点播媒资 FileId，仅当 SourceType 为 VOD 时有效。
 * @method void setVodFileId(string $VodFileId) 设置云点播媒资 FileId，仅当 SourceType 为 VOD 时有效。
 * @method ExternalMediaInfo getExternalMediaInfo() 获取原始媒资文件信息，当 SourceType 取值 EXTERNAL 的时候必填。
 * @method void setExternalMediaInfo(ExternalMediaInfo $ExternalMediaInfo) 设置原始媒资文件信息，当 SourceType 取值 EXTERNAL 的时候必填。
 * @method string getClassPath() 获取媒体分类路径，形如："/a/b"，层级数不能超过10，每个层级长度不能超过15字符。若不填则默认为根路径。
 * @method void setClassPath(string $ClassPath) 设置媒体分类路径，形如："/a/b"，层级数不能超过10，每个层级长度不能超过15字符。若不填则默认为根路径。
 * @method integer getPreProcessDefinition() 获取媒体预处理任务模板 ID。取值：
<li>10：进行编辑预处理。</li>
 * @method void setPreProcessDefinition(integer $PreProcessDefinition) 设置媒体预处理任务模板 ID。取值：
<li>10：进行编辑预处理。</li>
 * @method string getOperator() 获取操作者。填写用户的 Id，用于标识调用者及校验操作权限。
 * @method void setOperator(string $Operator) 设置操作者。填写用户的 Id，用于标识调用者及校验操作权限。
 */
class ImportMaterialRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var Entity 媒体归属者，团队或个人。
     */
    public $Owner;

    /**
     * @var string 媒体名称，不能超过30个字符。
     */
    public $Name;

    /**
     * @var string 导入媒资类型，取值：
<li>VOD：云点播文件；</li>
<li>EXTERNAL：媒资绑定。</li>
注意：如果不填默认为云点播文件。
     */
    public $SourceType;

    /**
     * @var string 云点播媒资 FileId，仅当 SourceType 为 VOD 时有效。
     */
    public $VodFileId;

    /**
     * @var ExternalMediaInfo 原始媒资文件信息，当 SourceType 取值 EXTERNAL 的时候必填。
     */
    public $ExternalMediaInfo;

    /**
     * @var string 媒体分类路径，形如："/a/b"，层级数不能超过10，每个层级长度不能超过15字符。若不填则默认为根路径。
     */
    public $ClassPath;

    /**
     * @var integer 媒体预处理任务模板 ID。取值：
<li>10：进行编辑预处理。</li>
     */
    public $PreProcessDefinition;

    /**
     * @var string 操作者。填写用户的 Id，用于标识调用者及校验操作权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param Entity $Owner 媒体归属者，团队或个人。
     * @param string $Name 媒体名称，不能超过30个字符。
     * @param string $SourceType 导入媒资类型，取值：
<li>VOD：云点播文件；</li>
<li>EXTERNAL：媒资绑定。</li>
注意：如果不填默认为云点播文件。
     * @param string $VodFileId 云点播媒资 FileId，仅当 SourceType 为 VOD 时有效。
     * @param ExternalMediaInfo $ExternalMediaInfo 原始媒资文件信息，当 SourceType 取值 EXTERNAL 的时候必填。
     * @param string $ClassPath 媒体分类路径，形如："/a/b"，层级数不能超过10，每个层级长度不能超过15字符。若不填则默认为根路径。
     * @param integer $PreProcessDefinition 媒体预处理任务模板 ID。取值：
<li>10：进行编辑预处理。</li>
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("VodFileId",$param) and $param["VodFileId"] !== null) {
            $this->VodFileId = $param["VodFileId"];
        }

        if (array_key_exists("ExternalMediaInfo",$param) and $param["ExternalMediaInfo"] !== null) {
            $this->ExternalMediaInfo = new ExternalMediaInfo();
            $this->ExternalMediaInfo->deserialize($param["ExternalMediaInfo"]);
        }

        if (array_key_exists("ClassPath",$param) and $param["ClassPath"] !== null) {
            $this->ClassPath = $param["ClassPath"];
        }

        if (array_key_exists("PreProcessDefinition",$param) and $param["PreProcessDefinition"] !== null) {
            $this->PreProcessDefinition = $param["PreProcessDefinition"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
