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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EstablishCloudBaseRunServer请求参数结构体
 *
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getServiceName() 获取服务名称
 * @method void setServiceName(string $ServiceName) 设置服务名称
 * @method boolean getIsPublic() 获取是否开通外网访问
 * @method void setIsPublic(boolean $IsPublic) 设置是否开通外网访问
 * @method string getImageRepo() 获取镜像仓库
 * @method void setImageRepo(string $ImageRepo) 设置镜像仓库
 * @method string getRemark() 获取服务描述
 * @method void setRemark(string $Remark) 设置服务描述
 * @method CloudBaseEsInfo getEsInfo() 获取es信息
 * @method void setEsInfo(CloudBaseEsInfo $EsInfo) 设置es信息
 * @method string getLogType() 获取日志类型; es/cls
 * @method void setLogType(string $LogType) 设置日志类型; es/cls
 * @method string getOperatorRemark() 获取操作备注
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作备注
 * @method string getSource() 获取来源方（默认值：qcloud，微信侧来源miniapp)
 * @method void setSource(string $Source) 设置来源方（默认值：qcloud，微信侧来源miniapp)
 * @method CloudBaseRunVpcInfo getVpcInfo() 获取vpc信息
 * @method void setVpcInfo(CloudBaseRunVpcInfo $VpcInfo) 设置vpc信息
 * @method integer getPublicAccess() 获取0/1=允许公网访问;2=关闭公网访问
 * @method void setPublicAccess(integer $PublicAccess) 设置0/1=允许公网访问;2=关闭公网访问
 * @method array getOpenAccessTypes() 获取OA PUBLIC MINIAPP VPC
 * @method void setOpenAccessTypes(array $OpenAccessTypes) 设置OA PUBLIC MINIAPP VPC
 */
class EstablishCloudBaseRunServerRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 服务名称
     */
    public $ServiceName;

    /**
     * @var boolean 是否开通外网访问
     */
    public $IsPublic;

    /**
     * @var string 镜像仓库
     */
    public $ImageRepo;

    /**
     * @var string 服务描述
     */
    public $Remark;

    /**
     * @var CloudBaseEsInfo es信息
     */
    public $EsInfo;

    /**
     * @var string 日志类型; es/cls
     */
    public $LogType;

    /**
     * @var string 操作备注
     */
    public $OperatorRemark;

    /**
     * @var string 来源方（默认值：qcloud，微信侧来源miniapp)
     */
    public $Source;

    /**
     * @var CloudBaseRunVpcInfo vpc信息
     */
    public $VpcInfo;

    /**
     * @var integer 0/1=允许公网访问;2=关闭公网访问
     */
    public $PublicAccess;

    /**
     * @var array OA PUBLIC MINIAPP VPC
     */
    public $OpenAccessTypes;

    /**
     * @param string $EnvId 环境id
     * @param string $ServiceName 服务名称
     * @param boolean $IsPublic 是否开通外网访问
     * @param string $ImageRepo 镜像仓库
     * @param string $Remark 服务描述
     * @param CloudBaseEsInfo $EsInfo es信息
     * @param string $LogType 日志类型; es/cls
     * @param string $OperatorRemark 操作备注
     * @param string $Source 来源方（默认值：qcloud，微信侧来源miniapp)
     * @param CloudBaseRunVpcInfo $VpcInfo vpc信息
     * @param integer $PublicAccess 0/1=允许公网访问;2=关闭公网访问
     * @param array $OpenAccessTypes OA PUBLIC MINIAPP VPC
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("ImageRepo",$param) and $param["ImageRepo"] !== null) {
            $this->ImageRepo = $param["ImageRepo"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("EsInfo",$param) and $param["EsInfo"] !== null) {
            $this->EsInfo = new CloudBaseEsInfo();
            $this->EsInfo->deserialize($param["EsInfo"]);
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("OperatorRemark",$param) and $param["OperatorRemark"] !== null) {
            $this->OperatorRemark = $param["OperatorRemark"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = new CloudBaseRunVpcInfo();
            $this->VpcInfo->deserialize($param["VpcInfo"]);
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("OpenAccessTypes",$param) and $param["OpenAccessTypes"] !== null) {
            $this->OpenAccessTypes = $param["OpenAccessTypes"];
        }
    }
}
