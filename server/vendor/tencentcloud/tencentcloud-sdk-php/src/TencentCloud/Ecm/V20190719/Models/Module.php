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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模块信息
 *
 * @method string getModuleId() 获取模块Id
 * @method void setModuleId(string $ModuleId) 设置模块Id
 * @method string getModuleName() 获取模块名称
 * @method void setModuleName(string $ModuleName) 设置模块名称
 * @method string getModuleState() 获取模块状态：
NORMAL：正常
DELETING：删除中 
DELETEFAILED：删除失败
 * @method void setModuleState(string $ModuleState) 设置模块状态：
NORMAL：正常
DELETING：删除中 
DELETEFAILED：删除失败
 * @method integer getDefaultSystemDiskSize() 获取默认系统盘大小
 * @method void setDefaultSystemDiskSize(integer $DefaultSystemDiskSize) 设置默认系统盘大小
 * @method integer getDefaultDataDiskSize() 获取默认数据盘大小
 * @method void setDefaultDataDiskSize(integer $DefaultDataDiskSize) 设置默认数据盘大小
 * @method InstanceTypeConfig getInstanceTypeConfig() 获取默认机型
 * @method void setInstanceTypeConfig(InstanceTypeConfig $InstanceTypeConfig) 设置默认机型
 * @method Image getDefaultImage() 获取默认镜像
 * @method void setDefaultImage(Image $DefaultImage) 设置默认镜像
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getDefaultBandwidth() 获取默认出带宽
 * @method void setDefaultBandwidth(integer $DefaultBandwidth) 设置默认出带宽
 * @method array getTagSet() 获取标签集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCloseIpDirect() 获取是否关闭IP直通
 * @method void setCloseIpDirect(integer $CloseIpDirect) 设置是否关闭IP直通
 * @method array getSecurityGroupIds() 获取默认安全组id列表
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置默认安全组id列表
 * @method integer getDefaultBandwidthIn() 获取默认入带宽
 * @method void setDefaultBandwidthIn(integer $DefaultBandwidthIn) 设置默认入带宽
 */
class Module extends AbstractModel
{
    /**
     * @var string 模块Id
     */
    public $ModuleId;

    /**
     * @var string 模块名称
     */
    public $ModuleName;

    /**
     * @var string 模块状态：
NORMAL：正常
DELETING：删除中 
DELETEFAILED：删除失败
     */
    public $ModuleState;

    /**
     * @var integer 默认系统盘大小
     */
    public $DefaultSystemDiskSize;

    /**
     * @var integer 默认数据盘大小
     */
    public $DefaultDataDiskSize;

    /**
     * @var InstanceTypeConfig 默认机型
     */
    public $InstanceTypeConfig;

    /**
     * @var Image 默认镜像
     */
    public $DefaultImage;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 默认出带宽
     */
    public $DefaultBandwidth;

    /**
     * @var array 标签集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @var integer 是否关闭IP直通
     */
    public $CloseIpDirect;

    /**
     * @var array 默认安全组id列表
     */
    public $SecurityGroupIds;

    /**
     * @var integer 默认入带宽
     */
    public $DefaultBandwidthIn;

    /**
     * @param string $ModuleId 模块Id
     * @param string $ModuleName 模块名称
     * @param string $ModuleState 模块状态：
NORMAL：正常
DELETING：删除中 
DELETEFAILED：删除失败
     * @param integer $DefaultSystemDiskSize 默认系统盘大小
     * @param integer $DefaultDataDiskSize 默认数据盘大小
     * @param InstanceTypeConfig $InstanceTypeConfig 默认机型
     * @param Image $DefaultImage 默认镜像
     * @param string $CreateTime 创建时间
     * @param integer $DefaultBandwidth 默认出带宽
     * @param array $TagSet 标签集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CloseIpDirect 是否关闭IP直通
     * @param array $SecurityGroupIds 默认安全组id列表
     * @param integer $DefaultBandwidthIn 默认入带宽
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("ModuleName",$param) and $param["ModuleName"] !== null) {
            $this->ModuleName = $param["ModuleName"];
        }

        if (array_key_exists("ModuleState",$param) and $param["ModuleState"] !== null) {
            $this->ModuleState = $param["ModuleState"];
        }

        if (array_key_exists("DefaultSystemDiskSize",$param) and $param["DefaultSystemDiskSize"] !== null) {
            $this->DefaultSystemDiskSize = $param["DefaultSystemDiskSize"];
        }

        if (array_key_exists("DefaultDataDiskSize",$param) and $param["DefaultDataDiskSize"] !== null) {
            $this->DefaultDataDiskSize = $param["DefaultDataDiskSize"];
        }

        if (array_key_exists("InstanceTypeConfig",$param) and $param["InstanceTypeConfig"] !== null) {
            $this->InstanceTypeConfig = new InstanceTypeConfig();
            $this->InstanceTypeConfig->deserialize($param["InstanceTypeConfig"]);
        }

        if (array_key_exists("DefaultImage",$param) and $param["DefaultImage"] !== null) {
            $this->DefaultImage = new Image();
            $this->DefaultImage->deserialize($param["DefaultImage"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DefaultBandwidth",$param) and $param["DefaultBandwidth"] !== null) {
            $this->DefaultBandwidth = $param["DefaultBandwidth"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("CloseIpDirect",$param) and $param["CloseIpDirect"] !== null) {
            $this->CloseIpDirect = $param["CloseIpDirect"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("DefaultBandwidthIn",$param) and $param["DefaultBandwidthIn"] !== null) {
            $this->DefaultBandwidthIn = $param["DefaultBandwidthIn"];
        }
    }
}
