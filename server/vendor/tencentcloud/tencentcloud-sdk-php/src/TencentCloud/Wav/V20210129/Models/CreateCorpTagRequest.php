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
 * CreateCorpTag请求参数结构体
 *
 * @method string getGroupName() 获取标签组名称，最长为15个字符
 * @method void setGroupName(string $GroupName) 设置标签组名称，最长为15个字符
 * @method array getTags() 获取标签信息数组
 * @method void setTags(array $Tags) 设置标签信息数组
 * @method integer getSort() 获取标签组次序值。sort值大的排序靠前。有效的值范围是[0, 2^32)
 * @method void setSort(integer $Sort) 设置标签组次序值。sort值大的排序靠前。有效的值范围是[0, 2^32)
 */
class CreateCorpTagRequest extends AbstractModel
{
    /**
     * @var string 标签组名称，最长为15个字符
     */
    public $GroupName;

    /**
     * @var array 标签信息数组
     */
    public $Tags;

    /**
     * @var integer 标签组次序值。sort值大的排序靠前。有效的值范围是[0, 2^32)
     */
    public $Sort;

    /**
     * @param string $GroupName 标签组名称，最长为15个字符
     * @param array $Tags 标签信息数组
     * @param integer $Sort 标签组次序值。sort值大的排序靠前。有效的值范围是[0, 2^32)
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
