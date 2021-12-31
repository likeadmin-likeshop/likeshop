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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyIdlFiles请求参数结构体
 *
 * @method string getClusterId() 获取待创建表格的集群ID
 * @method void setClusterId(string $ClusterId) 设置待创建表格的集群ID
 * @method string getTableGroupId() 获取待创建表格的表格组ID
 * @method void setTableGroupId(string $TableGroupId) 设置待创建表格的表格组ID
 * @method array getExistingIdlFiles() 获取曾经上传过的IDL文件信息列表，与NewIdlFiles至少有一者
 * @method void setExistingIdlFiles(array $ExistingIdlFiles) 设置曾经上传过的IDL文件信息列表，与NewIdlFiles至少有一者
 * @method array getNewIdlFiles() 获取待上传的IDL文件信息列表，与ExistingIdlFiles至少有一者
 * @method void setNewIdlFiles(array $NewIdlFiles) 设置待上传的IDL文件信息列表，与ExistingIdlFiles至少有一者
 */
class VerifyIdlFilesRequest extends AbstractModel
{
    /**
     * @var string 待创建表格的集群ID
     */
    public $ClusterId;

    /**
     * @var string 待创建表格的表格组ID
     */
    public $TableGroupId;

    /**
     * @var array 曾经上传过的IDL文件信息列表，与NewIdlFiles至少有一者
     */
    public $ExistingIdlFiles;

    /**
     * @var array 待上传的IDL文件信息列表，与ExistingIdlFiles至少有一者
     */
    public $NewIdlFiles;

    /**
     * @param string $ClusterId 待创建表格的集群ID
     * @param string $TableGroupId 待创建表格的表格组ID
     * @param array $ExistingIdlFiles 曾经上传过的IDL文件信息列表，与NewIdlFiles至少有一者
     * @param array $NewIdlFiles 待上传的IDL文件信息列表，与ExistingIdlFiles至少有一者
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("ExistingIdlFiles",$param) and $param["ExistingIdlFiles"] !== null) {
            $this->ExistingIdlFiles = [];
            foreach ($param["ExistingIdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->ExistingIdlFiles, $obj);
            }
        }

        if (array_key_exists("NewIdlFiles",$param) and $param["NewIdlFiles"] !== null) {
            $this->NewIdlFiles = [];
            foreach ($param["NewIdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->NewIdlFiles, $obj);
            }
        }
    }
}
