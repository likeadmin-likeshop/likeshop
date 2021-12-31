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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人员库升级任务信息
 *
 * @method string getJobId() 获取人员库升级任务ID，用于查询、获取升级的进度和结果。
 * @method void setJobId(string $JobId) 设置人员库升级任务ID，用于查询、获取升级的进度和结果。
 * @method string getGroupId() 获取人员库ID。
 * @method void setGroupId(string $GroupId) 设置人员库ID。
 * @method string getFromFaceModelVersion() 获取当前算法模型版本。
 * @method void setFromFaceModelVersion(string $FromFaceModelVersion) 设置当前算法模型版本。
 * @method string getToFaceModelVersion() 获取目标算法模型版本。
 * @method void setToFaceModelVersion(string $ToFaceModelVersion) 设置目标算法模型版本。
 * @method integer getStartTime() 获取升级起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
 * @method void setStartTime(integer $StartTime) 设置升级起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
 * @method integer getStatus() 获取0表示升级中，1表示升级完毕，2表示回滚完毕。
 * @method void setStatus(integer $Status) 设置0表示升级中，1表示升级完毕，2表示回滚完毕。
 */
class UpgradeJobInfo extends AbstractModel
{
    /**
     * @var string 人员库升级任务ID，用于查询、获取升级的进度和结果。
     */
    public $JobId;

    /**
     * @var string 人员库ID。
     */
    public $GroupId;

    /**
     * @var string 当前算法模型版本。
     */
    public $FromFaceModelVersion;

    /**
     * @var string 目标算法模型版本。
     */
    public $ToFaceModelVersion;

    /**
     * @var integer 升级起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
     */
    public $StartTime;

    /**
     * @var integer 0表示升级中，1表示升级完毕，2表示回滚完毕。
     */
    public $Status;

    /**
     * @param string $JobId 人员库升级任务ID，用于查询、获取升级的进度和结果。
     * @param string $GroupId 人员库ID。
     * @param string $FromFaceModelVersion 当前算法模型版本。
     * @param string $ToFaceModelVersion 目标算法模型版本。
     * @param integer $StartTime 升级起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
     * @param integer $Status 0表示升级中，1表示升级完毕，2表示回滚完毕。
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("FromFaceModelVersion",$param) and $param["FromFaceModelVersion"] !== null) {
            $this->FromFaceModelVersion = $param["FromFaceModelVersion"];
        }

        if (array_key_exists("ToFaceModelVersion",$param) and $param["ToFaceModelVersion"] !== null) {
            $this->ToFaceModelVersion = $param["ToFaceModelVersion"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
