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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 固件版本详细信息
 *
 * @method string getProductId() 获取产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOtaVersion() 获取固件版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtaVersion(string $OtaVersion) 设置固件版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPubStatus() 获取版本类型 1未发布 2测试发布 3正式发布 4禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPubStatus(integer $PubStatus) 设置版本类型 1未发布 2测试发布 3正式发布 4禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionUrl() 获取固件版本存储路径URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionUrl(string $VersionUrl) 设置固件版本存储路径URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileSize() 获取文件大小，byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置文件大小，byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5() 获取文件校验码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5(string $Md5) 设置文件校验码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOldVersions() 获取指定的允许升级的旧版本，PubStatus=3时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldVersions(string $OldVersions) 设置指定的允许升级的旧版本，PubStatus=3时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTids() 获取指定的允许升级的旧设备id，PubStatus=2时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTids(string $Tids) 设置指定的允许升级的旧设备id，PubStatus=2时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGrayValue() 获取灰度值（0-100）,PubStatus=3时有效，表示n%的升级总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrayValue(integer $GrayValue) 设置灰度值（0-100）,PubStatus=3时有效，表示n%的升级总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPublishTime() 获取最近一次发布时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishTime(integer $PublishTime) 设置最近一次发布时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActiveCount() 获取此版本激活的设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveCount(integer $ActiveCount) 设置此版本激活的设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOnlineCount() 获取此版本在线的设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnlineCount(integer $OnlineCount) 设置此版本在线的设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取上传固件文件的时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置上传固件文件的时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUploadTime() 获取发布记录的最后变更时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadTime(integer $UploadTime) 设置发布记录的最后变更时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getModifyTimes() 获取该固件版本发布的变更次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTimes(integer $ModifyTimes) 设置该固件版本发布的变更次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Contents getContents() 获取版本发布的描述信息，需要国际化，可以为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContents(Contents $Contents) 设置版本发布的描述信息，需要国际化，可以为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAliveInMonthCnt() 获取月活设备数，当月第一天开始有上线的设备数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliveInMonthCnt(integer $AliveInMonthCnt) 设置月活设备数，当月第一天开始有上线的设备数量。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VersionData extends AbstractModel
{
    /**
     * @var string 产品ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var string 固件版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtaVersion;

    /**
     * @var integer 版本类型 1未发布 2测试发布 3正式发布 4禁用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PubStatus;

    /**
     * @var string 固件版本存储路径URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionUrl;

    /**
     * @var integer 文件大小，byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 文件校验码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5;

    /**
     * @var string 指定的允许升级的旧版本，PubStatus=3时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldVersions;

    /**
     * @var string 指定的允许升级的旧设备id，PubStatus=2时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tids;

    /**
     * @var integer 灰度值（0-100）,PubStatus=3时有效，表示n%的升级总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrayValue;

    /**
     * @var integer 最近一次发布时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishTime;

    /**
     * @var integer 此版本激活的设备总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveCount;

    /**
     * @var integer 此版本在线的设备总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnlineCount;

    /**
     * @var integer 上传固件文件的时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 发布记录的最后变更时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadTime;

    /**
     * @var integer 该固件版本发布的变更次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTimes;

    /**
     * @var string 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var Contents 版本发布的描述信息，需要国际化，可以为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contents;

    /**
     * @var integer 月活设备数，当月第一天开始有上线的设备数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliveInMonthCnt;

    /**
     * @param string $ProductId 产品ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OtaVersion 固件版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PubStatus 版本类型 1未发布 2测试发布 3正式发布 4禁用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionUrl 固件版本存储路径URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileSize 文件大小，byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5 文件校验码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OldVersions 指定的允许升级的旧版本，PubStatus=3时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tids 指定的允许升级的旧设备id，PubStatus=2时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GrayValue 灰度值（0-100）,PubStatus=3时有效，表示n%的升级总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PublishTime 最近一次发布时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActiveCount 此版本激活的设备总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OnlineCount 此版本在线的设备总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 上传固件文件的时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UploadTime 发布记录的最后变更时间，UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ModifyTimes 该固件版本发布的变更次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Contents $Contents 版本发布的描述信息，需要国际化，可以为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AliveInMonthCnt 月活设备数，当月第一天开始有上线的设备数量。
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("OtaVersion",$param) and $param["OtaVersion"] !== null) {
            $this->OtaVersion = $param["OtaVersion"];
        }

        if (array_key_exists("PubStatus",$param) and $param["PubStatus"] !== null) {
            $this->PubStatus = $param["PubStatus"];
        }

        if (array_key_exists("VersionUrl",$param) and $param["VersionUrl"] !== null) {
            $this->VersionUrl = $param["VersionUrl"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("OldVersions",$param) and $param["OldVersions"] !== null) {
            $this->OldVersions = $param["OldVersions"];
        }

        if (array_key_exists("Tids",$param) and $param["Tids"] !== null) {
            $this->Tids = $param["Tids"];
        }

        if (array_key_exists("GrayValue",$param) and $param["GrayValue"] !== null) {
            $this->GrayValue = $param["GrayValue"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("ActiveCount",$param) and $param["ActiveCount"] !== null) {
            $this->ActiveCount = $param["ActiveCount"];
        }

        if (array_key_exists("OnlineCount",$param) and $param["OnlineCount"] !== null) {
            $this->OnlineCount = $param["OnlineCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UploadTime",$param) and $param["UploadTime"] !== null) {
            $this->UploadTime = $param["UploadTime"];
        }

        if (array_key_exists("ModifyTimes",$param) and $param["ModifyTimes"] !== null) {
            $this->ModifyTimes = $param["ModifyTimes"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = new Contents();
            $this->Contents->deserialize($param["Contents"]);
        }

        if (array_key_exists("AliveInMonthCnt",$param) and $param["AliveInMonthCnt"] !== null) {
            $this->AliveInMonthCnt = $param["AliveInMonthCnt"];
        }
    }
}
