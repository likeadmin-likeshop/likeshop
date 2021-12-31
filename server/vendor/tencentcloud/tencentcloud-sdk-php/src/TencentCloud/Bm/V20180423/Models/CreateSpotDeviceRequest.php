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
 * CreateSpotDevice请求参数结构体
 *
 * @method string getZone() 获取可用区名称。如ap-guangzhou-bls-1, 通过DescribeRegions获取
 * @method void setZone(string $Zone) 设置可用区名称。如ap-guangzhou-bls-1, 通过DescribeRegions获取
 * @method string getComputeType() 获取计算单元类型, 如v3.c2.medium，更详细的ComputeType参考[竞价实例产品文档](https://cloud.tencent.com/document/product/386/30256)
 * @method void setComputeType(string $ComputeType) 设置计算单元类型, 如v3.c2.medium，更详细的ComputeType参考[竞价实例产品文档](https://cloud.tencent.com/document/product/386/30256)
 * @method integer getOsTypeId() 获取操作系统类型ID
 * @method void setOsTypeId(integer $OsTypeId) 设置操作系统类型ID
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method integer getGoodsNum() 获取购买的计算单元个数
 * @method void setGoodsNum(integer $GoodsNum) 设置购买的计算单元个数
 * @method string getSpotStrategy() 获取出价策略。可取值为SpotWithPriceLimit和SpotAsPriceGo。SpotWithPriceLimit，用户设置价格上限，需要传SpotPriceLimit参数， 如果市场价高于用户的指定价格，则购买不成功;  SpotAsPriceGo 是随市场价的策略。
 * @method void setSpotStrategy(string $SpotStrategy) 设置出价策略。可取值为SpotWithPriceLimit和SpotAsPriceGo。SpotWithPriceLimit，用户设置价格上限，需要传SpotPriceLimit参数， 如果市场价高于用户的指定价格，则购买不成功;  SpotAsPriceGo 是随市场价的策略。
 * @method float getSpotPriceLimit() 获取用户设置的价格。当为SpotWithPriceLimit竞价策略时有效
 * @method void setSpotPriceLimit(float $SpotPriceLimit) 设置用户设置的价格。当为SpotWithPriceLimit竞价策略时有效
 * @method string getPasswd() 获取设置竞价实例密码。可选参数，没有指定会生成随机密码
 * @method void setPasswd(string $Passwd) 设置设置竞价实例密码。可选参数，没有指定会生成随机密码
 */
class CreateSpotDeviceRequest extends AbstractModel
{
    /**
     * @var string 可用区名称。如ap-guangzhou-bls-1, 通过DescribeRegions获取
     */
    public $Zone;

    /**
     * @var string 计算单元类型, 如v3.c2.medium，更详细的ComputeType参考[竞价实例产品文档](https://cloud.tencent.com/document/product/386/30256)
     */
    public $ComputeType;

    /**
     * @var integer 操作系统类型ID
     */
    public $OsTypeId;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var integer 购买的计算单元个数
     */
    public $GoodsNum;

    /**
     * @var string 出价策略。可取值为SpotWithPriceLimit和SpotAsPriceGo。SpotWithPriceLimit，用户设置价格上限，需要传SpotPriceLimit参数， 如果市场价高于用户的指定价格，则购买不成功;  SpotAsPriceGo 是随市场价的策略。
     */
    public $SpotStrategy;

    /**
     * @var float 用户设置的价格。当为SpotWithPriceLimit竞价策略时有效
     */
    public $SpotPriceLimit;

    /**
     * @var string 设置竞价实例密码。可选参数，没有指定会生成随机密码
     */
    public $Passwd;

    /**
     * @param string $Zone 可用区名称。如ap-guangzhou-bls-1, 通过DescribeRegions获取
     * @param string $ComputeType 计算单元类型, 如v3.c2.medium，更详细的ComputeType参考[竞价实例产品文档](https://cloud.tencent.com/document/product/386/30256)
     * @param integer $OsTypeId 操作系统类型ID
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param integer $GoodsNum 购买的计算单元个数
     * @param string $SpotStrategy 出价策略。可取值为SpotWithPriceLimit和SpotAsPriceGo。SpotWithPriceLimit，用户设置价格上限，需要传SpotPriceLimit参数， 如果市场价高于用户的指定价格，则购买不成功;  SpotAsPriceGo 是随市场价的策略。
     * @param float $SpotPriceLimit 用户设置的价格。当为SpotWithPriceLimit竞价策略时有效
     * @param string $Passwd 设置竞价实例密码。可选参数，没有指定会生成随机密码
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ComputeType",$param) and $param["ComputeType"] !== null) {
            $this->ComputeType = $param["ComputeType"];
        }

        if (array_key_exists("OsTypeId",$param) and $param["OsTypeId"] !== null) {
            $this->OsTypeId = $param["OsTypeId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("SpotStrategy",$param) and $param["SpotStrategy"] !== null) {
            $this->SpotStrategy = $param["SpotStrategy"];
        }

        if (array_key_exists("SpotPriceLimit",$param) and $param["SpotPriceLimit"] !== null) {
            $this->SpotPriceLimit = $param["SpotPriceLimit"];
        }

        if (array_key_exists("Passwd",$param) and $param["Passwd"] !== null) {
            $this->Passwd = $param["Passwd"];
        }
    }
}
