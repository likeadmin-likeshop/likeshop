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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由表对象
 *
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getRouteTableId() 获取路由表实例ID，例如：rtb-azd4dt1c。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID，例如：rtb-azd4dt1c。
 * @method string getRouteTableName() 获取路由表名称。
 * @method void setRouteTableName(string $RouteTableName) 设置路由表名称。
 * @method array getAssociationSet() 获取路由表关联关系。
 * @method void setAssociationSet(array $AssociationSet) 设置路由表关联关系。
 * @method array getRouteSet() 获取IPv4路由策略集合。
 * @method void setRouteSet(array $RouteSet) 设置IPv4路由策略集合。
 * @method boolean getMain() 获取是否默认路由表。
 * @method void setMain(boolean $Main) 设置是否默认路由表。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method array getTagSet() 获取标签键值对。
 * @method void setTagSet(array $TagSet) 设置标签键值对。
 * @method array getLocalCidrForCcn() 获取local路由是否发布云联网。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalCidrForCcn(array $LocalCidrForCcn) 设置local路由是否发布云联网。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RouteTable extends AbstractModel
{
    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string 路由表实例ID，例如：rtb-azd4dt1c。
     */
    public $RouteTableId;

    /**
     * @var string 路由表名称。
     */
    public $RouteTableName;

    /**
     * @var array 路由表关联关系。
     */
    public $AssociationSet;

    /**
     * @var array IPv4路由策略集合。
     */
    public $RouteSet;

    /**
     * @var boolean 是否默认路由表。
     */
    public $Main;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var array 标签键值对。
     */
    public $TagSet;

    /**
     * @var array local路由是否发布云联网。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalCidrForCcn;

    /**
     * @param string $VpcId VPC实例ID。
     * @param string $RouteTableId 路由表实例ID，例如：rtb-azd4dt1c。
     * @param string $RouteTableName 路由表名称。
     * @param array $AssociationSet 路由表关联关系。
     * @param array $RouteSet IPv4路由策略集合。
     * @param boolean $Main 是否默认路由表。
     * @param string $CreatedTime 创建时间。
     * @param array $TagSet 标签键值对。
     * @param array $LocalCidrForCcn local路由是否发布云联网。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("AssociationSet",$param) and $param["AssociationSet"] !== null) {
            $this->AssociationSet = [];
            foreach ($param["AssociationSet"] as $key => $value){
                $obj = new RouteTableAssociation();
                $obj->deserialize($value);
                array_push($this->AssociationSet, $obj);
            }
        }

        if (array_key_exists("RouteSet",$param) and $param["RouteSet"] !== null) {
            $this->RouteSet = [];
            foreach ($param["RouteSet"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->RouteSet, $obj);
            }
        }

        if (array_key_exists("Main",$param) and $param["Main"] !== null) {
            $this->Main = $param["Main"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("LocalCidrForCcn",$param) and $param["LocalCidrForCcn"] !== null) {
            $this->LocalCidrForCcn = [];
            foreach ($param["LocalCidrForCcn"] as $key => $value){
                $obj = new CidrForCcn();
                $obj->deserialize($value);
                array_push($this->LocalCidrForCcn, $obj);
            }
        }
    }
}
