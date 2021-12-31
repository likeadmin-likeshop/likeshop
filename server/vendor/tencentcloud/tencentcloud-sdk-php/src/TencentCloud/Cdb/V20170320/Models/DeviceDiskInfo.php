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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例磁盘监控数据
 *
 * @method array getIoRatioPerSec() 获取平均每秒有百分之几的时间用于IO操作
 * @method void setIoRatioPerSec(array $IoRatioPerSec) 设置平均每秒有百分之几的时间用于IO操作
 * @method array getIoWaitTime() 获取平均每次设备I/O操作的等待时间*100，单位为毫秒。例如：该值为201，表示平均每次I/O操作等待时间为：201/100=2.1毫秒
 * @method void setIoWaitTime(array $IoWaitTime) 设置平均每次设备I/O操作的等待时间*100，单位为毫秒。例如：该值为201，表示平均每次I/O操作等待时间为：201/100=2.1毫秒
 * @method array getRead() 获取磁盘平均每秒完成的读操作次数总和*100。例如：该值为2002，表示磁盘平均每秒完成读操作为：2002/100=20.2次
 * @method void setRead(array $Read) 设置磁盘平均每秒完成的读操作次数总和*100。例如：该值为2002，表示磁盘平均每秒完成读操作为：2002/100=20.2次
 * @method array getWrite() 获取磁盘平均每秒完成的写操作次数总和*100。例如：该值为30001，表示磁盘平均每秒完成写操作为：30001/100=300.01次
 * @method void setWrite(array $Write) 设置磁盘平均每秒完成的写操作次数总和*100。例如：该值为30001，表示磁盘平均每秒完成写操作为：30001/100=300.01次
 * @method array getCapacityRatio() 获取磁盘空间容量，每两个一组，第一个为已使用容量，第二个为磁盘总容量
 * @method void setCapacityRatio(array $CapacityRatio) 设置磁盘空间容量，每两个一组，第一个为已使用容量，第二个为磁盘总容量
 */
class DeviceDiskInfo extends AbstractModel
{
    /**
     * @var array 平均每秒有百分之几的时间用于IO操作
     */
    public $IoRatioPerSec;

    /**
     * @var array 平均每次设备I/O操作的等待时间*100，单位为毫秒。例如：该值为201，表示平均每次I/O操作等待时间为：201/100=2.1毫秒
     */
    public $IoWaitTime;

    /**
     * @var array 磁盘平均每秒完成的读操作次数总和*100。例如：该值为2002，表示磁盘平均每秒完成读操作为：2002/100=20.2次
     */
    public $Read;

    /**
     * @var array 磁盘平均每秒完成的写操作次数总和*100。例如：该值为30001，表示磁盘平均每秒完成写操作为：30001/100=300.01次
     */
    public $Write;

    /**
     * @var array 磁盘空间容量，每两个一组，第一个为已使用容量，第二个为磁盘总容量
     */
    public $CapacityRatio;

    /**
     * @param array $IoRatioPerSec 平均每秒有百分之几的时间用于IO操作
     * @param array $IoWaitTime 平均每次设备I/O操作的等待时间*100，单位为毫秒。例如：该值为201，表示平均每次I/O操作等待时间为：201/100=2.1毫秒
     * @param array $Read 磁盘平均每秒完成的读操作次数总和*100。例如：该值为2002，表示磁盘平均每秒完成读操作为：2002/100=20.2次
     * @param array $Write 磁盘平均每秒完成的写操作次数总和*100。例如：该值为30001，表示磁盘平均每秒完成写操作为：30001/100=300.01次
     * @param array $CapacityRatio 磁盘空间容量，每两个一组，第一个为已使用容量，第二个为磁盘总容量
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
        if (array_key_exists("IoRatioPerSec",$param) and $param["IoRatioPerSec"] !== null) {
            $this->IoRatioPerSec = $param["IoRatioPerSec"];
        }

        if (array_key_exists("IoWaitTime",$param) and $param["IoWaitTime"] !== null) {
            $this->IoWaitTime = $param["IoWaitTime"];
        }

        if (array_key_exists("Read",$param) and $param["Read"] !== null) {
            $this->Read = $param["Read"];
        }

        if (array_key_exists("Write",$param) and $param["Write"] !== null) {
            $this->Write = $param["Write"];
        }

        if (array_key_exists("CapacityRatio",$param) and $param["CapacityRatio"] !== null) {
            $this->CapacityRatio = $param["CapacityRatio"];
        }
    }
}
