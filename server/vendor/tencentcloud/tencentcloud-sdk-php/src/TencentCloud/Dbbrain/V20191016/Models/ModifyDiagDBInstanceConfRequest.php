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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDiagDBInstanceConf请求参数结构体
 *
 * @method InstanceConfs getInstanceConfs() 获取巡检开关。
 * @method void setInstanceConfs(InstanceConfs $InstanceConfs) 设置巡检开关。
 * @method string getRegions() 获取生效实例地域，取值为"All"，代表全地域。
 * @method void setRegions(string $Regions) 设置生效实例地域，取值为"All"，代表全地域。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL。
 * @method array getInstanceIds() 获取指定更改巡检状态的实例ID。
 * @method void setInstanceIds(array $InstanceIds) 设置指定更改巡检状态的实例ID。
 */
class ModifyDiagDBInstanceConfRequest extends AbstractModel
{
    /**
     * @var InstanceConfs 巡检开关。
     */
    public $InstanceConfs;

    /**
     * @var string 生效实例地域，取值为"All"，代表全地域。
     */
    public $Regions;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL。
     */
    public $Product;

    /**
     * @var array 指定更改巡检状态的实例ID。
     */
    public $InstanceIds;

    /**
     * @param InstanceConfs $InstanceConfs 巡检开关。
     * @param string $Regions 生效实例地域，取值为"All"，代表全地域。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL。
     * @param array $InstanceIds 指定更改巡检状态的实例ID。
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
        if (array_key_exists("InstanceConfs",$param) and $param["InstanceConfs"] !== null) {
            $this->InstanceConfs = new InstanceConfs();
            $this->InstanceConfs->deserialize($param["InstanceConfs"]);
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
