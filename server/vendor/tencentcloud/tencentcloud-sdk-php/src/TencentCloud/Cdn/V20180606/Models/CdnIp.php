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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP 属性信息
 *
 * @method string getIp() 获取指定查询的 IP
 * @method void setIp(string $Ip) 设置指定查询的 IP
 * @method string getPlatform() 获取IP 归属：
yes：节点归属于腾讯云 CDN
no：节点不属于腾讯云 CDN
 * @method void setPlatform(string $Platform) 设置IP 归属：
yes：节点归属于腾讯云 CDN
no：节点不属于腾讯云 CDN
 * @method string getLocation() 获取节点所处的省份/国家
unknown 表示节点位置未知
 * @method void setLocation(string $Location) 设置节点所处的省份/国家
unknown 表示节点位置未知
 * @method array getHistory() 获取节点上下线历史记录
 * @method void setHistory(array $History) 设置节点上下线历史记录
 * @method string getArea() 获取节点的所在区域
mainland：中国境内加速节点
overseas：中国境外加速节点
unknown：服务地域无法获取
 * @method void setArea(string $Area) 设置节点的所在区域
mainland：中国境内加速节点
overseas：中国境外加速节点
unknown：服务地域无法获取
 * @method string getCity() 获取节点的所在城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置节点的所在城市
注意：此字段可能返回 null，表示取不到有效值。
 */
class CdnIp extends AbstractModel
{
    /**
     * @var string 指定查询的 IP
     */
    public $Ip;

    /**
     * @var string IP 归属：
yes：节点归属于腾讯云 CDN
no：节点不属于腾讯云 CDN
     */
    public $Platform;

    /**
     * @var string 节点所处的省份/国家
unknown 表示节点位置未知
     */
    public $Location;

    /**
     * @var array 节点上下线历史记录
     */
    public $History;

    /**
     * @var string 节点的所在区域
mainland：中国境内加速节点
overseas：中国境外加速节点
unknown：服务地域无法获取
     */
    public $Area;

    /**
     * @var string 节点的所在城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @param string $Ip 指定查询的 IP
     * @param string $Platform IP 归属：
yes：节点归属于腾讯云 CDN
no：节点不属于腾讯云 CDN
     * @param string $Location 节点所处的省份/国家
unknown 表示节点位置未知
     * @param array $History 节点上下线历史记录
     * @param string $Area 节点的所在区域
mainland：中国境内加速节点
overseas：中国境外加速节点
unknown：服务地域无法获取
     * @param string $City 节点的所在城市
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("History",$param) and $param["History"] !== null) {
            $this->History = [];
            foreach ($param["History"] as $key => $value){
                $obj = new CdnIpHistory();
                $obj->deserialize($value);
                array_push($this->History, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }
    }
}
