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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBPerformance返回参数结构体
 *
 * @method MonitorData getLongQuery() 获取慢查询数
 * @method void setLongQuery(MonitorData $LongQuery) 设置慢查询数
 * @method MonitorData getSelectTotal() 获取查询操作数SELECT
 * @method void setSelectTotal(MonitorData $SelectTotal) 设置查询操作数SELECT
 * @method MonitorData getUpdateTotal() 获取更新操作数UPDATE
 * @method void setUpdateTotal(MonitorData $UpdateTotal) 设置更新操作数UPDATE
 * @method MonitorData getInsertTotal() 获取插入操作数INSERT
 * @method void setInsertTotal(MonitorData $InsertTotal) 设置插入操作数INSERT
 * @method MonitorData getDeleteTotal() 获取删除操作数DELETE
 * @method void setDeleteTotal(MonitorData $DeleteTotal) 设置删除操作数DELETE
 * @method MonitorData getMemHitRate() 获取缓存命中率
 * @method void setMemHitRate(MonitorData $MemHitRate) 设置缓存命中率
 * @method MonitorData getDiskIops() 获取磁盘每秒IO次数
 * @method void setDiskIops(MonitorData $DiskIops) 设置磁盘每秒IO次数
 * @method MonitorData getConnActive() 获取活跃连接数
 * @method void setConnActive(MonitorData $ConnActive) 设置活跃连接数
 * @method MonitorData getIsMasterSwitched() 获取是否发生主备切换，1为发生，0否
 * @method void setIsMasterSwitched(MonitorData $IsMasterSwitched) 设置是否发生主备切换，1为发生，0否
 * @method MonitorData getSlaveDelay() 获取主备延迟
 * @method void setSlaveDelay(MonitorData $SlaveDelay) 设置主备延迟
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBPerformanceResponse extends AbstractModel
{
    /**
     * @var MonitorData 慢查询数
     */
    public $LongQuery;

    /**
     * @var MonitorData 查询操作数SELECT
     */
    public $SelectTotal;

    /**
     * @var MonitorData 更新操作数UPDATE
     */
    public $UpdateTotal;

    /**
     * @var MonitorData 插入操作数INSERT
     */
    public $InsertTotal;

    /**
     * @var MonitorData 删除操作数DELETE
     */
    public $DeleteTotal;

    /**
     * @var MonitorData 缓存命中率
     */
    public $MemHitRate;

    /**
     * @var MonitorData 磁盘每秒IO次数
     */
    public $DiskIops;

    /**
     * @var MonitorData 活跃连接数
     */
    public $ConnActive;

    /**
     * @var MonitorData 是否发生主备切换，1为发生，0否
     */
    public $IsMasterSwitched;

    /**
     * @var MonitorData 主备延迟
     */
    public $SlaveDelay;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param MonitorData $LongQuery 慢查询数
     * @param MonitorData $SelectTotal 查询操作数SELECT
     * @param MonitorData $UpdateTotal 更新操作数UPDATE
     * @param MonitorData $InsertTotal 插入操作数INSERT
     * @param MonitorData $DeleteTotal 删除操作数DELETE
     * @param MonitorData $MemHitRate 缓存命中率
     * @param MonitorData $DiskIops 磁盘每秒IO次数
     * @param MonitorData $ConnActive 活跃连接数
     * @param MonitorData $IsMasterSwitched 是否发生主备切换，1为发生，0否
     * @param MonitorData $SlaveDelay 主备延迟
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LongQuery",$param) and $param["LongQuery"] !== null) {
            $this->LongQuery = new MonitorData();
            $this->LongQuery->deserialize($param["LongQuery"]);
        }

        if (array_key_exists("SelectTotal",$param) and $param["SelectTotal"] !== null) {
            $this->SelectTotal = new MonitorData();
            $this->SelectTotal->deserialize($param["SelectTotal"]);
        }

        if (array_key_exists("UpdateTotal",$param) and $param["UpdateTotal"] !== null) {
            $this->UpdateTotal = new MonitorData();
            $this->UpdateTotal->deserialize($param["UpdateTotal"]);
        }

        if (array_key_exists("InsertTotal",$param) and $param["InsertTotal"] !== null) {
            $this->InsertTotal = new MonitorData();
            $this->InsertTotal->deserialize($param["InsertTotal"]);
        }

        if (array_key_exists("DeleteTotal",$param) and $param["DeleteTotal"] !== null) {
            $this->DeleteTotal = new MonitorData();
            $this->DeleteTotal->deserialize($param["DeleteTotal"]);
        }

        if (array_key_exists("MemHitRate",$param) and $param["MemHitRate"] !== null) {
            $this->MemHitRate = new MonitorData();
            $this->MemHitRate->deserialize($param["MemHitRate"]);
        }

        if (array_key_exists("DiskIops",$param) and $param["DiskIops"] !== null) {
            $this->DiskIops = new MonitorData();
            $this->DiskIops->deserialize($param["DiskIops"]);
        }

        if (array_key_exists("ConnActive",$param) and $param["ConnActive"] !== null) {
            $this->ConnActive = new MonitorData();
            $this->ConnActive->deserialize($param["ConnActive"]);
        }

        if (array_key_exists("IsMasterSwitched",$param) and $param["IsMasterSwitched"] !== null) {
            $this->IsMasterSwitched = new MonitorData();
            $this->IsMasterSwitched->deserialize($param["IsMasterSwitched"]);
        }

        if (array_key_exists("SlaveDelay",$param) and $param["SlaveDelay"] !== null) {
            $this->SlaveDelay = new MonitorData();
            $this->SlaveDelay->deserialize($param["SlaveDelay"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
