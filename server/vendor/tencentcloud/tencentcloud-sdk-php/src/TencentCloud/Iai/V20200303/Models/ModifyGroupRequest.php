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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGroup请求参数结构体
 *
 * @method string getGroupId() 获取人员库ID，取值为创建人员库接口中的GroupId
 * @method void setGroupId(string $GroupId) 设置人员库ID，取值为创建人员库接口中的GroupId
 * @method string getGroupName() 获取人员库名称
 * @method void setGroupName(string $GroupName) 设置人员库名称
 * @method array getGroupExDescriptionInfos() 获取需要修改的人员库自定义描述字段，key-value
 * @method void setGroupExDescriptionInfos(array $GroupExDescriptionInfos) 设置需要修改的人员库自定义描述字段，key-value
 * @method string getTag() 获取人员库信息备注
 * @method void setTag(string $Tag) 设置人员库信息备注
 */
class ModifyGroupRequest extends AbstractModel
{
    /**
     * @var string 人员库ID，取值为创建人员库接口中的GroupId
     */
    public $GroupId;

    /**
     * @var string 人员库名称
     */
    public $GroupName;

    /**
     * @var array 需要修改的人员库自定义描述字段，key-value
     */
    public $GroupExDescriptionInfos;

    /**
     * @var string 人员库信息备注
     */
    public $Tag;

    /**
     * @param string $GroupId 人员库ID，取值为创建人员库接口中的GroupId
     * @param string $GroupName 人员库名称
     * @param array $GroupExDescriptionInfos 需要修改的人员库自定义描述字段，key-value
     * @param string $Tag 人员库信息备注
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupExDescriptionInfos",$param) and $param["GroupExDescriptionInfos"] !== null) {
            $this->GroupExDescriptionInfos = [];
            foreach ($param["GroupExDescriptionInfos"] as $key => $value){
                $obj = new GroupExDescriptionInfo();
                $obj->deserialize($value);
                array_push($this->GroupExDescriptionInfos, $obj);
            }
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
