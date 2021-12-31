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
 * CreateTableGroup请求参数结构体
 *
 * @method string getClusterId() 获取表格组所属集群ID
 * @method void setClusterId(string $ClusterId) 设置表格组所属集群ID
 * @method string getTableGroupName() 获取表格组名称，可以采用中文、英文或数字字符，最大长度32个字符
 * @method void setTableGroupName(string $TableGroupName) 设置表格组名称，可以采用中文、英文或数字字符，最大长度32个字符
 * @method string getTableGroupId() 获取表格组ID，可以由用户指定，但在同一个集群内不能重复，如果不指定则采用自增的模式
 * @method void setTableGroupId(string $TableGroupId) 设置表格组ID，可以由用户指定，但在同一个集群内不能重复，如果不指定则采用自增的模式
 * @method array getResourceTags() 获取表格组标签列表
 * @method void setResourceTags(array $ResourceTags) 设置表格组标签列表
 */
class CreateTableGroupRequest extends AbstractModel
{
    /**
     * @var string 表格组所属集群ID
     */
    public $ClusterId;

    /**
     * @var string 表格组名称，可以采用中文、英文或数字字符，最大长度32个字符
     */
    public $TableGroupName;

    /**
     * @var string 表格组ID，可以由用户指定，但在同一个集群内不能重复，如果不指定则采用自增的模式
     */
    public $TableGroupId;

    /**
     * @var array 表格组标签列表
     */
    public $ResourceTags;

    /**
     * @param string $ClusterId 表格组所属集群ID
     * @param string $TableGroupName 表格组名称，可以采用中文、英文或数字字符，最大长度32个字符
     * @param string $TableGroupId 表格组ID，可以由用户指定，但在同一个集群内不能重复，如果不指定则采用自增的模式
     * @param array $ResourceTags 表格组标签列表
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

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
