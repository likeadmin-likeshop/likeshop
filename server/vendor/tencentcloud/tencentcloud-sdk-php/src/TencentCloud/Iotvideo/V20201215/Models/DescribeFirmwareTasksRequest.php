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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFirmwareTasks请求参数结构体
 *
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getFirmwareVersion() 获取固件版本号
 * @method void setFirmwareVersion(string $FirmwareVersion) 设置固件版本号
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 * @method integer getLimit() 获取返回查询结果条数
 * @method void setLimit(integer $Limit) 设置返回查询结果条数
 * @method array getFilters() 获取搜索过滤条件
 * @method void setFilters(array $Filters) 设置搜索过滤条件
 */
class DescribeFirmwareTasksRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 固件版本号
     */
    public $FirmwareVersion;

    /**
     * @var integer 查询偏移量
     */
    public $Offset;

    /**
     * @var integer 返回查询结果条数
     */
    public $Limit;

    /**
     * @var array 搜索过滤条件
     */
    public $Filters;

    /**
     * @param string $ProductID 产品ID
     * @param string $FirmwareVersion 固件版本号
     * @param integer $Offset 查询偏移量
     * @param integer $Limit 返回查询结果条数
     * @param array $Filters 搜索过滤条件
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("FirmwareVersion",$param) and $param["FirmwareVersion"] !== null) {
            $this->FirmwareVersion = $param["FirmwareVersion"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new SearchKeyword();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
