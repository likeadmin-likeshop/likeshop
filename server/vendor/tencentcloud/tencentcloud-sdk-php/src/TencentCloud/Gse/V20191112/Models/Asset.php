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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生成包信息
 *
 * @method string getAssetId() 获取生成包ID
 * @method void setAssetId(string $AssetId) 设置生成包ID
 * @method string getAssetName() 获取生成包名字，最小长度为1，最大长度为64
 * @method void setAssetName(string $AssetName) 设置生成包名字，最小长度为1，最大长度为64
 * @method string getAssetVersion() 获取生成包版本，最小长度为1，最大长度为64
 * @method void setAssetVersion(string $AssetVersion) 设置生成包版本，最小长度为1，最大长度为64
 * @method string getOperateSystem() 获取生成包可运行的操作系统，暂时只支持CentOS7.16
 * @method void setOperateSystem(string $OperateSystem) 设置生成包可运行的操作系统，暂时只支持CentOS7.16
 * @method integer getStauts() 获取生成包状态，0代表上传中，1代表上传失败，2代表上传成功
 * @method void setStauts(integer $Stauts) 设置生成包状态，0代表上传中，1代表上传失败，2代表上传成功
 * @method string getSize() 获取生成包大小
 * @method void setSize(string $Size) 设置生成包大小
 * @method string getCreateTime() 获取生成包创建时间
 * @method void setCreateTime(string $CreateTime) 设置生成包创建时间
 * @method integer getBindFleetNum() 获取生成包绑定的Fleet个数，最小值为0
 * @method void setBindFleetNum(integer $BindFleetNum) 设置生成包绑定的Fleet个数，最小值为0
 * @method string getAssetArn() 获取生成包的全局唯一资源标识符
 * @method void setAssetArn(string $AssetArn) 设置生成包的全局唯一资源标识符
 * @method string getImageId() 获取生成包支持的操作系统镜像id
 * @method void setImageId(string $ImageId) 设置生成包支持的操作系统镜像id
 * @method string getOsType() 获取生成包支持的操作系统类型
 * @method void setOsType(string $OsType) 设置生成包支持的操作系统类型
 * @method string getResourceType() 获取生成包资源类型，ASSET 或者 IMAGE；ASSET 代表是原有生成包类型，IMAGE 为扩充使用镜像类型
 * @method void setResourceType(string $ResourceType) 设置生成包资源类型，ASSET 或者 IMAGE；ASSET 代表是原有生成包类型，IMAGE 为扩充使用镜像类型
 * @method string getSharingStatus() 获取镜像资源共享类型，当 ResourceType 为 IMAGE 时该字段有意义，SHARED 表示共享、SHARED_IMAGE 表示未共享；ResourceType 为 ASSET 时这里返回 UNKNOWN_SHARED 用于占位
 * @method void setSharingStatus(string $SharingStatus) 设置镜像资源共享类型，当 ResourceType 为 IMAGE 时该字段有意义，SHARED 表示共享、SHARED_IMAGE 表示未共享；ResourceType 为 ASSET 时这里返回 UNKNOWN_SHARED 用于占位
 * @method array getTags() 获取标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
 */
class Asset extends AbstractModel
{
    /**
     * @var string 生成包ID
     */
    public $AssetId;

    /**
     * @var string 生成包名字，最小长度为1，最大长度为64
     */
    public $AssetName;

    /**
     * @var string 生成包版本，最小长度为1，最大长度为64
     */
    public $AssetVersion;

    /**
     * @var string 生成包可运行的操作系统，暂时只支持CentOS7.16
     */
    public $OperateSystem;

    /**
     * @var integer 生成包状态，0代表上传中，1代表上传失败，2代表上传成功
     */
    public $Stauts;

    /**
     * @var string 生成包大小
     */
    public $Size;

    /**
     * @var string 生成包创建时间
     */
    public $CreateTime;

    /**
     * @var integer 生成包绑定的Fleet个数，最小值为0
     */
    public $BindFleetNum;

    /**
     * @var string 生成包的全局唯一资源标识符
     */
    public $AssetArn;

    /**
     * @var string 生成包支持的操作系统镜像id
     */
    public $ImageId;

    /**
     * @var string 生成包支持的操作系统类型
     */
    public $OsType;

    /**
     * @var string 生成包资源类型，ASSET 或者 IMAGE；ASSET 代表是原有生成包类型，IMAGE 为扩充使用镜像类型
     */
    public $ResourceType;

    /**
     * @var string 镜像资源共享类型，当 ResourceType 为 IMAGE 时该字段有意义，SHARED 表示共享、SHARED_IMAGE 表示未共享；ResourceType 为 ASSET 时这里返回 UNKNOWN_SHARED 用于占位
     */
    public $SharingStatus;

    /**
     * @var array 标签列表，最大长度50组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $AssetId 生成包ID
     * @param string $AssetName 生成包名字，最小长度为1，最大长度为64
     * @param string $AssetVersion 生成包版本，最小长度为1，最大长度为64
     * @param string $OperateSystem 生成包可运行的操作系统，暂时只支持CentOS7.16
     * @param integer $Stauts 生成包状态，0代表上传中，1代表上传失败，2代表上传成功
     * @param string $Size 生成包大小
     * @param string $CreateTime 生成包创建时间
     * @param integer $BindFleetNum 生成包绑定的Fleet个数，最小值为0
     * @param string $AssetArn 生成包的全局唯一资源标识符
     * @param string $ImageId 生成包支持的操作系统镜像id
     * @param string $OsType 生成包支持的操作系统类型
     * @param string $ResourceType 生成包资源类型，ASSET 或者 IMAGE；ASSET 代表是原有生成包类型，IMAGE 为扩充使用镜像类型
     * @param string $SharingStatus 镜像资源共享类型，当 ResourceType 为 IMAGE 时该字段有意义，SHARED 表示共享、SHARED_IMAGE 表示未共享；ResourceType 为 ASSET 时这里返回 UNKNOWN_SHARED 用于占位
     * @param array $Tags 标签列表，最大长度50组
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetVersion",$param) and $param["AssetVersion"] !== null) {
            $this->AssetVersion = $param["AssetVersion"];
        }

        if (array_key_exists("OperateSystem",$param) and $param["OperateSystem"] !== null) {
            $this->OperateSystem = $param["OperateSystem"];
        }

        if (array_key_exists("Stauts",$param) and $param["Stauts"] !== null) {
            $this->Stauts = $param["Stauts"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BindFleetNum",$param) and $param["BindFleetNum"] !== null) {
            $this->BindFleetNum = $param["BindFleetNum"];
        }

        if (array_key_exists("AssetArn",$param) and $param["AssetArn"] !== null) {
            $this->AssetArn = $param["AssetArn"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("SharingStatus",$param) and $param["SharingStatus"] !== null) {
            $this->SharingStatus = $param["SharingStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
