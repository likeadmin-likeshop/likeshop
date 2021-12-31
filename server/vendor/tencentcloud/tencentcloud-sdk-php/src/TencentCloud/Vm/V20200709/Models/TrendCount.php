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
namespace TencentCloud\Vm\V20200709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 识别量统计
 *
 * @method integer getTotalCount() 获取总调用量
 * @method void setTotalCount(integer $TotalCount) 设置总调用量
 * @method integer getTotalHour() 获取总调用时长
 * @method void setTotalHour(integer $TotalHour) 设置总调用时长
 * @method integer getPassCount() 获取通过量
 * @method void setPassCount(integer $PassCount) 设置通过量
 * @method integer getPassHour() 获取通过时长
 * @method void setPassHour(integer $PassHour) 设置通过时长
 * @method integer getEvilCount() 获取违规量
 * @method void setEvilCount(integer $EvilCount) 设置违规量
 * @method integer getEvilHour() 获取违规时长
 * @method void setEvilHour(integer $EvilHour) 设置违规时长
 * @method integer getSuspectCount() 获取疑似违规量
 * @method void setSuspectCount(integer $SuspectCount) 设置疑似违规量
 * @method integer getSuspectHour() 获取疑似违规时长
 * @method void setSuspectHour(integer $SuspectHour) 设置疑似违规时长
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 */
class TrendCount extends AbstractModel
{
    /**
     * @var integer 总调用量
     */
    public $TotalCount;

    /**
     * @var integer 总调用时长
     */
    public $TotalHour;

    /**
     * @var integer 通过量
     */
    public $PassCount;

    /**
     * @var integer 通过时长
     */
    public $PassHour;

    /**
     * @var integer 违规量
     */
    public $EvilCount;

    /**
     * @var integer 违规时长
     */
    public $EvilHour;

    /**
     * @var integer 疑似违规量
     */
    public $SuspectCount;

    /**
     * @var integer 疑似违规时长
     */
    public $SuspectHour;

    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @param integer $TotalCount 总调用量
     * @param integer $TotalHour 总调用时长
     * @param integer $PassCount 通过量
     * @param integer $PassHour 通过时长
     * @param integer $EvilCount 违规量
     * @param integer $EvilHour 违规时长
     * @param integer $SuspectCount 疑似违规量
     * @param integer $SuspectHour 疑似违规时长
     * @param string $Date 日期
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalHour",$param) and $param["TotalHour"] !== null) {
            $this->TotalHour = $param["TotalHour"];
        }

        if (array_key_exists("PassCount",$param) and $param["PassCount"] !== null) {
            $this->PassCount = $param["PassCount"];
        }

        if (array_key_exists("PassHour",$param) and $param["PassHour"] !== null) {
            $this->PassHour = $param["PassHour"];
        }

        if (array_key_exists("EvilCount",$param) and $param["EvilCount"] !== null) {
            $this->EvilCount = $param["EvilCount"];
        }

        if (array_key_exists("EvilHour",$param) and $param["EvilHour"] !== null) {
            $this->EvilHour = $param["EvilHour"];
        }

        if (array_key_exists("SuspectCount",$param) and $param["SuspectCount"] !== null) {
            $this->SuspectCount = $param["SuspectCount"];
        }

        if (array_key_exists("SuspectHour",$param) and $param["SuspectHour"] !== null) {
            $this->SuspectHour = $param["SuspectHour"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
