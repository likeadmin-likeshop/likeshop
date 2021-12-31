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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了快照的详细信息
 *
 * @method string getSnapshotId() 获取快照ID。
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID。
 * @method Placement getPlacement() 获取快照所在的位置。
 * @method void setPlacement(Placement $Placement) 设置快照所在的位置。
 * @method string getDiskUsage() 获取创建此快照的云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
 * @method void setDiskUsage(string $DiskUsage) 设置创建此快照的云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
 * @method string getDiskId() 获取创建此快照的云硬盘ID。
 * @method void setDiskId(string $DiskId) 设置创建此快照的云硬盘ID。
 * @method integer getDiskSize() 获取创建此快照的云硬盘大小，单位GB。
 * @method void setDiskSize(integer $DiskSize) 设置创建此快照的云硬盘大小，单位GB。
 * @method string getSnapshotState() 获取快照的状态。取值范围：<br><li>NORMAL：正常<br><li>CREATING：创建中<br><li>ROLLBACKING：回滚中<br><li>COPYING_FROM_REMOTE：跨地域复制中<br><li>CHECKING_COPIED：复制校验中<br><li>TORECYCLE：待回收。
 * @method void setSnapshotState(string $SnapshotState) 设置快照的状态。取值范围：<br><li>NORMAL：正常<br><li>CREATING：创建中<br><li>ROLLBACKING：回滚中<br><li>COPYING_FROM_REMOTE：跨地域复制中<br><li>CHECKING_COPIED：复制校验中<br><li>TORECYCLE：待回收。
 * @method string getSnapshotName() 获取快照名称，用户自定义的快照别名。调用[ModifySnapshotAttribute](/document/product/362/15650)可修改此字段。
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称，用户自定义的快照别名。调用[ModifySnapshotAttribute](/document/product/362/15650)可修改此字段。
 * @method integer getPercent() 获取快照创建进度百分比，快照创建成功后此字段恒为100。
 * @method void setPercent(integer $Percent) 设置快照创建进度百分比，快照创建成功后此字段恒为100。
 * @method string getCreateTime() 获取快照的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置快照的创建时间。
 * @method string getDeadlineTime() 获取快照到期时间。如果快照为永久保留，此字段为空。
 * @method void setDeadlineTime(string $DeadlineTime) 设置快照到期时间。如果快照为永久保留，此字段为空。
 * @method boolean getEncrypt() 获取是否为加密盘创建的快照。取值范围：<br><li>true：该快照为加密盘创建的<br><li>false:非加密盘创建的快照。
 * @method void setEncrypt(boolean $Encrypt) 设置是否为加密盘创建的快照。取值范围：<br><li>true：该快照为加密盘创建的<br><li>false:非加密盘创建的快照。
 * @method boolean getIsPermanent() 获取是否为永久快照。取值范围：<br><li>true：永久快照<br><li>false：非永久快照。
 * @method void setIsPermanent(boolean $IsPermanent) 设置是否为永久快照。取值范围：<br><li>true：永久快照<br><li>false：非永久快照。
 * @method array getCopyingToRegions() 获取快照正在跨地域复制的目的地域，默认取值为[]。
 * @method void setCopyingToRegions(array $CopyingToRegions) 设置快照正在跨地域复制的目的地域，默认取值为[]。
 * @method boolean getCopyFromRemote() 获取是否为跨地域复制的快照。取值范围：<br><li>true：表示为跨地域复制的快照。<br><li>false:本地域的快照。
 * @method void setCopyFromRemote(boolean $CopyFromRemote) 设置是否为跨地域复制的快照。取值范围：<br><li>true：表示为跨地域复制的快照。<br><li>false:本地域的快照。
 * @method array getImages() 获取快照关联的镜像列表。
 * @method void setImages(array $Images) 设置快照关联的镜像列表。
 * @method integer getImageCount() 获取快照关联的镜像个数。
 * @method void setImageCount(integer $ImageCount) 设置快照关联的镜像个数。
 * @method string getSnapshotType() 获取快照类型，目前该项取值可以为PRIVATE_SNAPSHOT或者SHARED_SNAPSHOT
 * @method void setSnapshotType(string $SnapshotType) 设置快照类型，目前该项取值可以为PRIVATE_SNAPSHOT或者SHARED_SNAPSHOT
 * @method integer getShareReference() 获取快照当前被共享数。
 * @method void setShareReference(integer $ShareReference) 设置快照当前被共享数。
 * @method string getTimeStartShare() 获取快照开始共享的时间。
 * @method void setTimeStartShare(string $TimeStartShare) 设置快照开始共享的时间。
 */
class Snapshot extends AbstractModel
{
    /**
     * @var string 快照ID。
     */
    public $SnapshotId;

    /**
     * @var Placement 快照所在的位置。
     */
    public $Placement;

    /**
     * @var string 创建此快照的云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
     */
    public $DiskUsage;

    /**
     * @var string 创建此快照的云硬盘ID。
     */
    public $DiskId;

    /**
     * @var integer 创建此快照的云硬盘大小，单位GB。
     */
    public $DiskSize;

    /**
     * @var string 快照的状态。取值范围：<br><li>NORMAL：正常<br><li>CREATING：创建中<br><li>ROLLBACKING：回滚中<br><li>COPYING_FROM_REMOTE：跨地域复制中<br><li>CHECKING_COPIED：复制校验中<br><li>TORECYCLE：待回收。
     */
    public $SnapshotState;

    /**
     * @var string 快照名称，用户自定义的快照别名。调用[ModifySnapshotAttribute](/document/product/362/15650)可修改此字段。
     */
    public $SnapshotName;

    /**
     * @var integer 快照创建进度百分比，快照创建成功后此字段恒为100。
     */
    public $Percent;

    /**
     * @var string 快照的创建时间。
     */
    public $CreateTime;

    /**
     * @var string 快照到期时间。如果快照为永久保留，此字段为空。
     */
    public $DeadlineTime;

    /**
     * @var boolean 是否为加密盘创建的快照。取值范围：<br><li>true：该快照为加密盘创建的<br><li>false:非加密盘创建的快照。
     */
    public $Encrypt;

    /**
     * @var boolean 是否为永久快照。取值范围：<br><li>true：永久快照<br><li>false：非永久快照。
     */
    public $IsPermanent;

    /**
     * @var array 快照正在跨地域复制的目的地域，默认取值为[]。
     */
    public $CopyingToRegions;

    /**
     * @var boolean 是否为跨地域复制的快照。取值范围：<br><li>true：表示为跨地域复制的快照。<br><li>false:本地域的快照。
     */
    public $CopyFromRemote;

    /**
     * @var array 快照关联的镜像列表。
     */
    public $Images;

    /**
     * @var integer 快照关联的镜像个数。
     */
    public $ImageCount;

    /**
     * @var string 快照类型，目前该项取值可以为PRIVATE_SNAPSHOT或者SHARED_SNAPSHOT
     */
    public $SnapshotType;

    /**
     * @var integer 快照当前被共享数。
     */
    public $ShareReference;

    /**
     * @var string 快照开始共享的时间。
     */
    public $TimeStartShare;

    /**
     * @param string $SnapshotId 快照ID。
     * @param Placement $Placement 快照所在的位置。
     * @param string $DiskUsage 创建此快照的云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
     * @param string $DiskId 创建此快照的云硬盘ID。
     * @param integer $DiskSize 创建此快照的云硬盘大小，单位GB。
     * @param string $SnapshotState 快照的状态。取值范围：<br><li>NORMAL：正常<br><li>CREATING：创建中<br><li>ROLLBACKING：回滚中<br><li>COPYING_FROM_REMOTE：跨地域复制中<br><li>CHECKING_COPIED：复制校验中<br><li>TORECYCLE：待回收。
     * @param string $SnapshotName 快照名称，用户自定义的快照别名。调用[ModifySnapshotAttribute](/document/product/362/15650)可修改此字段。
     * @param integer $Percent 快照创建进度百分比，快照创建成功后此字段恒为100。
     * @param string $CreateTime 快照的创建时间。
     * @param string $DeadlineTime 快照到期时间。如果快照为永久保留，此字段为空。
     * @param boolean $Encrypt 是否为加密盘创建的快照。取值范围：<br><li>true：该快照为加密盘创建的<br><li>false:非加密盘创建的快照。
     * @param boolean $IsPermanent 是否为永久快照。取值范围：<br><li>true：永久快照<br><li>false：非永久快照。
     * @param array $CopyingToRegions 快照正在跨地域复制的目的地域，默认取值为[]。
     * @param boolean $CopyFromRemote 是否为跨地域复制的快照。取值范围：<br><li>true：表示为跨地域复制的快照。<br><li>false:本地域的快照。
     * @param array $Images 快照关联的镜像列表。
     * @param integer $ImageCount 快照关联的镜像个数。
     * @param string $SnapshotType 快照类型，目前该项取值可以为PRIVATE_SNAPSHOT或者SHARED_SNAPSHOT
     * @param integer $ShareReference 快照当前被共享数。
     * @param string $TimeStartShare 快照开始共享的时间。
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("SnapshotState",$param) and $param["SnapshotState"] !== null) {
            $this->SnapshotState = $param["SnapshotState"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("CopyingToRegions",$param) and $param["CopyingToRegions"] !== null) {
            $this->CopyingToRegions = $param["CopyingToRegions"];
        }

        if (array_key_exists("CopyFromRemote",$param) and $param["CopyFromRemote"] !== null) {
            $this->CopyFromRemote = $param["CopyFromRemote"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new Image();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("SnapshotType",$param) and $param["SnapshotType"] !== null) {
            $this->SnapshotType = $param["SnapshotType"];
        }

        if (array_key_exists("ShareReference",$param) and $param["ShareReference"] !== null) {
            $this->ShareReference = $param["ShareReference"];
        }

        if (array_key_exists("TimeStartShare",$param) and $param["TimeStartShare"] !== null) {
            $this->TimeStartShare = $param["TimeStartShare"];
        }
    }
}
