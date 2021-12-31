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
 * ModifyTableGroupName请求参数结构体
 *
 * @method string getClusterId() 获取表格组所属的集群ID
 * @method void setClusterId(string $ClusterId) 设置表格组所属的集群ID
 * @method string getTableGroupId() 获取待修改名称的表格组ID
 * @method void setTableGroupId(string $TableGroupId) 设置待修改名称的表格组ID
 * @method string getTableGroupName() 获取新的表格组名称，可以使用中英文字符和符号
 * @method void setTableGroupName(string $TableGroupName) 设置新的表格组名称，可以使用中英文字符和符号
 */
class ModifyTableGroupNameRequest extends AbstractModel
{
    /**
     * @var string 表格组所属的集群ID
     */
    public $ClusterId;

    /**
     * @var string 待修改名称的表格组ID
     */
    public $TableGroupId;

    /**
     * @var string 新的表格组名称，可以使用中英文字符和符号
     */
    public $TableGroupName;

    /**
     * @param string $ClusterId 表格组所属的集群ID
     * @param string $TableGroupId 待修改名称的表格组ID
     * @param string $TableGroupName 新的表格组名称，可以使用中英文字符和符号
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

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }
    }
}
