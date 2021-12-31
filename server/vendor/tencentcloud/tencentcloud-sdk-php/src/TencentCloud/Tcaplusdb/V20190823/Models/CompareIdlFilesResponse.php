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
 * CompareIdlFiles返回参数结构体
 *
 * @method array getIdlFiles() 获取本次上传校验所有的IDL文件信息列表
 * @method void setIdlFiles(array $IdlFiles) 设置本次上传校验所有的IDL文件信息列表
 * @method integer getTotalCount() 获取本次校验合法的表格数量
 * @method void setTotalCount(integer $TotalCount) 设置本次校验合法的表格数量
 * @method array getTableInfos() 获取读取IDL描述文件后,根据用户指示的所选中表格解析校验结果
 * @method void setTableInfos(array $TableInfos) 设置读取IDL描述文件后,根据用户指示的所选中表格解析校验结果
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CompareIdlFilesResponse extends AbstractModel
{
    /**
     * @var array 本次上传校验所有的IDL文件信息列表
     */
    public $IdlFiles;

    /**
     * @var integer 本次校验合法的表格数量
     */
    public $TotalCount;

    /**
     * @var array 读取IDL描述文件后,根据用户指示的所选中表格解析校验结果
     */
    public $TableInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $IdlFiles 本次上传校验所有的IDL文件信息列表
     * @param integer $TotalCount 本次校验合法的表格数量
     * @param array $TableInfos 读取IDL描述文件后,根据用户指示的所选中表格解析校验结果
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TableInfos",$param) and $param["TableInfos"] !== null) {
            $this->TableInfos = [];
            foreach ($param["TableInfos"] as $key => $value){
                $obj = new ParsedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->TableInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
