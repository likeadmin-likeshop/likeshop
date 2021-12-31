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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupConfig请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getBackupTimeBeg() 获取表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
 * @method void setBackupTimeBeg(integer $BackupTimeBeg) 设置表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
 * @method integer getBackupTimeEnd() 获取表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
 * @method void setBackupTimeEnd(integer $BackupTimeEnd) 设置表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
 * @method integer getReserveDuration() 获取表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600*24*7=604800
 * @method void setReserveDuration(integer $ReserveDuration) 设置表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600*24*7=604800
 * @method array getBackupFreq() 获取备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份
 * @method void setBackupFreq(array $BackupFreq) 设置备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份
 * @method string getBackupType() 获取备份方式，logic-逻辑备份，snapshot-快照备份
 * @method void setBackupType(string $BackupType) 设置备份方式，logic-逻辑备份，snapshot-快照备份
 */
class ModifyBackupConfigRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
     */
    public $BackupTimeBeg;

    /**
     * @var integer 表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
     */
    public $BackupTimeEnd;

    /**
     * @var integer 表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600*24*7=604800
     */
    public $ReserveDuration;

    /**
     * @var array 备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份
     */
    public $BackupFreq;

    /**
     * @var string 备份方式，logic-逻辑备份，snapshot-快照备份
     */
    public $BackupType;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $BackupTimeBeg 表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
     * @param integer $BackupTimeEnd 表示全备开始时间，[0-24*3600]， 如0:00, 1:00, 2:00 分别为 0，3600， 7200
     * @param integer $ReserveDuration 表示保留备份时长, 单位秒，超过该时间将被清理, 七天表示为3600*24*7=604800
     * @param array $BackupFreq 备份频率，长度为7的数组，分别对应周一到周日的备份方式，full-全量备份，increment-增量备份
     * @param string $BackupType 备份方式，logic-逻辑备份，snapshot-快照备份
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

        if (array_key_exists("BackupTimeBeg",$param) and $param["BackupTimeBeg"] !== null) {
            $this->BackupTimeBeg = $param["BackupTimeBeg"];
        }

        if (array_key_exists("BackupTimeEnd",$param) and $param["BackupTimeEnd"] !== null) {
            $this->BackupTimeEnd = $param["BackupTimeEnd"];
        }

        if (array_key_exists("ReserveDuration",$param) and $param["ReserveDuration"] !== null) {
            $this->ReserveDuration = $param["ReserveDuration"];
        }

        if (array_key_exists("BackupFreq",$param) and $param["BackupFreq"] !== null) {
            $this->BackupFreq = $param["BackupFreq"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }
    }
}
