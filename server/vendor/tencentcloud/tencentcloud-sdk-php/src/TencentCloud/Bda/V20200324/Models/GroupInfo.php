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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的人员库信息。
 *
 * @method string getGroupName() 获取人体库名称。
 * @method void setGroupName(string $GroupName) 设置人体库名称。
 * @method string getGroupId() 获取人体库ID。
 * @method void setGroupId(string $GroupId) 设置人体库ID。
 * @method string getTag() 获取人体库信息备注。
 * @method void setTag(string $Tag) 设置人体库信息备注。
 * @method string getBodyModelVersion() 获取人体识别所用的算法模型版本。
 * @method void setBodyModelVersion(string $BodyModelVersion) 设置人体识别所用的算法模型版本。
 * @method integer getCreationTimestamp() 获取Group的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。  
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 。
 * @method void setCreationTimestamp(integer $CreationTimestamp) 设置Group的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。  
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 。
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 人体库名称。
     */
    public $GroupName;

    /**
     * @var string 人体库ID。
     */
    public $GroupId;

    /**
     * @var string 人体库信息备注。
     */
    public $Tag;

    /**
     * @var string 人体识别所用的算法模型版本。
     */
    public $BodyModelVersion;

    /**
     * @var integer Group的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。  
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 。
     */
    public $CreationTimestamp;

    /**
     * @param string $GroupName 人体库名称。
     * @param string $GroupId 人体库ID。
     * @param string $Tag 人体库信息备注。
     * @param string $BodyModelVersion 人体识别所用的算法模型版本。
     * @param integer $CreationTimestamp Group的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。  
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 。
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("BodyModelVersion",$param) and $param["BodyModelVersion"] !== null) {
            $this->BodyModelVersion = $param["BodyModelVersion"];
        }

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }
    }
}
