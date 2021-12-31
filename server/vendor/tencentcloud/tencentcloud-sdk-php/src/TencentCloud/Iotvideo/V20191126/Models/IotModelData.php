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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 物模型历史版本
 *
 * @method integer getRevision() 获取版本号
 * @method void setRevision(integer $Revision) 设置版本号
 * @method integer getReleaseTime() 获取发布时间
 * @method void setReleaseTime(integer $ReleaseTime) 设置发布时间
 */
class IotModelData extends AbstractModel
{
    /**
     * @var integer 版本号
     */
    public $Revision;

    /**
     * @var integer 发布时间
     */
    public $ReleaseTime;

    /**
     * @param integer $Revision 版本号
     * @param integer $ReleaseTime 发布时间
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
        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }
    }
}
