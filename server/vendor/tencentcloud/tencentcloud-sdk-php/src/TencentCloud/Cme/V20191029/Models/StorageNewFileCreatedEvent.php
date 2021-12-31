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
 * 新文件生成事件
 *
 * @method string getFileId() 获取云点播文件  Id。
 * @method void setFileId(string $FileId) 设置云点播文件  Id。
 * @method string getMaterialId() 获取媒体 Id。
 * @method void setMaterialId(string $MaterialId) 设置媒体 Id。
 * @method string getOperator() 获取操作者 Id。
 * @method void setOperator(string $Operator) 设置操作者 Id。
 * @method string getOperationType() 获取操作类型，可取值为：
<li>Upload：上传；</li>
<li>PullUpload：拉取上传；</li>
<li>Record：直播录制。</li>
 * @method void setOperationType(string $OperationType) 设置操作类型，可取值为：
<li>Upload：上传；</li>
<li>PullUpload：拉取上传；</li>
<li>Record：直播录制。</li>
 * @method Entity getOwner() 获取媒体归属。
 * @method void setOwner(Entity $Owner) 设置媒体归属。
 * @method string getClassPath() 获取媒体分类路径。
 * @method void setClassPath(string $ClassPath) 设置媒体分类路径。
 */
class StorageNewFileCreatedEvent extends AbstractModel
{
    /**
     * @var string 云点播文件  Id。
     */
    public $FileId;

    /**
     * @var string 媒体 Id。
     */
    public $MaterialId;

    /**
     * @var string 操作者 Id。
     */
    public $Operator;

    /**
     * @var string 操作类型，可取值为：
<li>Upload：上传；</li>
<li>PullUpload：拉取上传；</li>
<li>Record：直播录制。</li>
     */
    public $OperationType;

    /**
     * @var Entity 媒体归属。
     */
    public $Owner;

    /**
     * @var string 媒体分类路径。
     */
    public $ClassPath;

    /**
     * @param string $FileId 云点播文件  Id。
     * @param string $MaterialId 媒体 Id。
     * @param string $Operator 操作者 Id。
     * @param string $OperationType 操作类型，可取值为：
<li>Upload：上传；</li>
<li>PullUpload：拉取上传；</li>
<li>Record：直播录制。</li>
     * @param Entity $Owner 媒体归属。
     * @param string $ClassPath 媒体分类路径。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("ClassPath",$param) and $param["ClassPath"] !== null) {
            $this->ClassPath = $param["ClassPath"];
        }
    }
}
