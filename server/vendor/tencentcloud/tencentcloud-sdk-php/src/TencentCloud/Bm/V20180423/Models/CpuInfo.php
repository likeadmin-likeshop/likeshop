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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cpu信息
 *
 * @method integer getCpuId() 获取CPU的ID
 * @method void setCpuId(integer $CpuId) 设置CPU的ID
 * @method string getCpuDescription() 获取CPU型号描述
 * @method void setCpuDescription(string $CpuDescription) 设置CPU型号描述
 * @method integer getSeries() 获取机型序列
 * @method void setSeries(integer $Series) 设置机型序列
 * @method array getContainRaidCard() 获取支持的RAID方式，0：有RAID卡，1：没有RAID卡
 * @method void setContainRaidCard(array $ContainRaidCard) 设置支持的RAID方式，0：有RAID卡，1：没有RAID卡
 */
class CpuInfo extends AbstractModel
{
    /**
     * @var integer CPU的ID
     */
    public $CpuId;

    /**
     * @var string CPU型号描述
     */
    public $CpuDescription;

    /**
     * @var integer 机型序列
     */
    public $Series;

    /**
     * @var array 支持的RAID方式，0：有RAID卡，1：没有RAID卡
     */
    public $ContainRaidCard;

    /**
     * @param integer $CpuId CPU的ID
     * @param string $CpuDescription CPU型号描述
     * @param integer $Series 机型序列
     * @param array $ContainRaidCard 支持的RAID方式，0：有RAID卡，1：没有RAID卡
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
        if (array_key_exists("CpuId",$param) and $param["CpuId"] !== null) {
            $this->CpuId = $param["CpuId"];
        }

        if (array_key_exists("CpuDescription",$param) and $param["CpuDescription"] !== null) {
            $this->CpuDescription = $param["CpuDescription"];
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = $param["Series"];
        }

        if (array_key_exists("ContainRaidCard",$param) and $param["ContainRaidCard"] !== null) {
            $this->ContainRaidCard = $param["ContainRaidCard"];
        }
    }
}
