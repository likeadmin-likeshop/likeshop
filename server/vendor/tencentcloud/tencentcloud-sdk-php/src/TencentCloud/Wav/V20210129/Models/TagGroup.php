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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签组信息
 *
 * @method string getGroupId() 获取企微标签组id
 * @method void setGroupId(string $GroupId) 设置企微标签组id
 * @method string getBizGroupId() 获取标签组业务id
 * @method void setBizGroupId(string $BizGroupId) 设置标签组业务id
 * @method string getGroupName() 获取企微标签组名称，不能超过15个字符
 * @method void setGroupName(string $GroupName) 设置企微标签组名称，不能超过15个字符
 * @method integer getSort() 获取标签组次序值。sort值大的排序靠前。有效的值范围是[0, 2^32)
 * @method void setSort(integer $Sort) 设置标签组次序值。sort值大的排序靠前。有效的值范围是[0, 2^32)
 * @method integer getCreateTime() 获取标签组创建时间,单位为秒
 * @method void setCreateTime(integer $CreateTime) 设置标签组创建时间,单位为秒
 * @method array getTags() 获取标签组内的标签列表, 上限为20
 * @method void setTags(array $Tags) 设置标签组内的标签列表, 上限为20
 */
class TagGroup extends AbstractModel
{
    /**
     * @var string 企微标签组id
     */
    public $GroupId;

    /**
     * @var string 标签组业务id
     */
    public $BizGroupId;

    /**
     * @var string 企微标签组名称，不能超过15个字符
     */
    public $GroupName;

    /**
     * @var integer 标签组次序值。sort值大的排序靠前。有效的值范围是[0, 2^32)
     */
    public $Sort;

    /**
     * @var integer 标签组创建时间,单位为秒
     */
    public $CreateTime;

    /**
     * @var array 标签组内的标签列表, 上限为20
     */
    public $Tags;

    /**
     * @param string $GroupId 企微标签组id
     * @param string $BizGroupId 标签组业务id
     * @param string $GroupName 企微标签组名称，不能超过15个字符
     * @param integer $Sort 标签组次序值。sort值大的排序靠前。有效的值范围是[0, 2^32)
     * @param integer $CreateTime 标签组创建时间,单位为秒
     * @param array $Tags 标签组内的标签列表, 上限为20
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

        if (array_key_exists("BizGroupId",$param) and $param["BizGroupId"] !== null) {
            $this->BizGroupId = $param["BizGroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagDetailInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
