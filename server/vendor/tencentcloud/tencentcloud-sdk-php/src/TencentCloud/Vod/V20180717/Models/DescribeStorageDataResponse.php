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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStorageData返回参数结构体
 *
 * @method integer getMediaCount() 获取当前媒体总量。
 * @method void setMediaCount(integer $MediaCount) 设置当前媒体总量。
 * @method integer getTotalStorage() 获取当前总存储量，单位是字节。
 * @method void setTotalStorage(integer $TotalStorage) 设置当前总存储量，单位是字节。
 * @method integer getInfrequentStorage() 获取当前低频存储量，单位是字节。
 * @method void setInfrequentStorage(integer $InfrequentStorage) 设置当前低频存储量，单位是字节。
 * @method integer getStandardStorage() 获取当前标准存储量，单位是字节。
 * @method void setStandardStorage(integer $StandardStorage) 设置当前标准存储量，单位是字节。
 * @method array getStorageStat() 获取各计费区域的存储用量。
 * @method void setStorageStat(array $StorageStat) 设置各计费区域的存储用量。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStorageDataResponse extends AbstractModel
{
    /**
     * @var integer 当前媒体总量。
     */
    public $MediaCount;

    /**
     * @var integer 当前总存储量，单位是字节。
     */
    public $TotalStorage;

    /**
     * @var integer 当前低频存储量，单位是字节。
     */
    public $InfrequentStorage;

    /**
     * @var integer 当前标准存储量，单位是字节。
     */
    public $StandardStorage;

    /**
     * @var array 各计费区域的存储用量。
     */
    public $StorageStat;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MediaCount 当前媒体总量。
     * @param integer $TotalStorage 当前总存储量，单位是字节。
     * @param integer $InfrequentStorage 当前低频存储量，单位是字节。
     * @param integer $StandardStorage 当前标准存储量，单位是字节。
     * @param array $StorageStat 各计费区域的存储用量。
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
        if (array_key_exists("MediaCount",$param) and $param["MediaCount"] !== null) {
            $this->MediaCount = $param["MediaCount"];
        }

        if (array_key_exists("TotalStorage",$param) and $param["TotalStorage"] !== null) {
            $this->TotalStorage = $param["TotalStorage"];
        }

        if (array_key_exists("InfrequentStorage",$param) and $param["InfrequentStorage"] !== null) {
            $this->InfrequentStorage = $param["InfrequentStorage"];
        }

        if (array_key_exists("StandardStorage",$param) and $param["StandardStorage"] !== null) {
            $this->StandardStorage = $param["StandardStorage"];
        }

        if (array_key_exists("StorageStat",$param) and $param["StorageStat"] !== null) {
            $this->StorageStat = [];
            foreach ($param["StorageStat"] as $key => $value){
                $obj = new StorageStatData();
                $obj->deserialize($value);
                array_push($this->StorageStat, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
