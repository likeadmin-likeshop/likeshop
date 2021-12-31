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
 * 云点播存储用量的分区统计数据
 *
 * @method string getArea() 获取点播存储的计费区域，可能值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
 * @method void setArea(string $Area) 设置点播存储的计费区域，可能值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
 * @method integer getTotalStorage() 获取当前总存储量，单位是字节。
 * @method void setTotalStorage(integer $TotalStorage) 设置当前总存储量，单位是字节。
 * @method integer getInfrequentStorage() 获取当前低频存储量，单位是字节。
 * @method void setInfrequentStorage(integer $InfrequentStorage) 设置当前低频存储量，单位是字节。
 * @method integer getStandardStorage() 获取当前标准存储量，单位是字节。
 * @method void setStandardStorage(integer $StandardStorage) 设置当前标准存储量，单位是字节。
 * @method integer getArchiveStorage() 获取当前归档存储量，单位是字节。
 * @method void setArchiveStorage(integer $ArchiveStorage) 设置当前归档存储量，单位是字节。
 * @method integer getDeepArchiveStorage() 获取当前深度归档存储量，单位是字节。
 * @method void setDeepArchiveStorage(integer $DeepArchiveStorage) 设置当前深度归档存储量，单位是字节。
 */
class StorageStatData extends AbstractModel
{
    /**
     * @var string 点播存储的计费区域，可能值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
     */
    public $Area;

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
     * @var integer 当前归档存储量，单位是字节。
     */
    public $ArchiveStorage;

    /**
     * @var integer 当前深度归档存储量，单位是字节。
     */
    public $DeepArchiveStorage;

    /**
     * @param string $Area 点播存储的计费区域，可能值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
     * @param integer $TotalStorage 当前总存储量，单位是字节。
     * @param integer $InfrequentStorage 当前低频存储量，单位是字节。
     * @param integer $StandardStorage 当前标准存储量，单位是字节。
     * @param integer $ArchiveStorage 当前归档存储量，单位是字节。
     * @param integer $DeepArchiveStorage 当前深度归档存储量，单位是字节。
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
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

        if (array_key_exists("ArchiveStorage",$param) and $param["ArchiveStorage"] !== null) {
            $this->ArchiveStorage = $param["ArchiveStorage"];
        }

        if (array_key_exists("DeepArchiveStorage",$param) and $param["DeepArchiveStorage"] !== null) {
            $this->DeepArchiveStorage = $param["DeepArchiveStorage"];
        }
    }
}
