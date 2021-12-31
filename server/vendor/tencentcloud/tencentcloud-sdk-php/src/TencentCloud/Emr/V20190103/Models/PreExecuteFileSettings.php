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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预执行脚本配置
 *
 * @method string getPath() 获取脚本在COS上路径，已废弃
 * @method void setPath(string $Path) 设置脚本在COS上路径，已废弃
 * @method array getArgs() 获取执行脚本参数
 * @method void setArgs(array $Args) 设置执行脚本参数
 * @method string getBucket() 获取COS的Bucket名称，已废弃
 * @method void setBucket(string $Bucket) 设置COS的Bucket名称，已废弃
 * @method string getRegion() 获取COS的Region名称，已废弃
 * @method void setRegion(string $Region) 设置COS的Region名称，已废弃
 * @method string getDomain() 获取COS的Domain数据，已废弃
 * @method void setDomain(string $Domain) 设置COS的Domain数据，已废弃
 * @method integer getRunOrder() 获取执行顺序
 * @method void setRunOrder(integer $RunOrder) 设置执行顺序
 * @method string getWhenRun() 获取resourceAfter 或 clusterAfter
 * @method void setWhenRun(string $WhenRun) 设置resourceAfter 或 clusterAfter
 * @method string getCosFileName() 获取脚本文件名，已废弃
 * @method void setCosFileName(string $CosFileName) 设置脚本文件名，已废弃
 * @method string getCosFileURI() 获取脚本的cos地址
 * @method void setCosFileURI(string $CosFileURI) 设置脚本的cos地址
 * @method string getCosSecretId() 获取cos的SecretId
 * @method void setCosSecretId(string $CosSecretId) 设置cos的SecretId
 * @method string getCosSecretKey() 获取Cos的SecretKey
 * @method void setCosSecretKey(string $CosSecretKey) 设置Cos的SecretKey
 * @method string getAppId() 获取cos的appid，已废弃
 * @method void setAppId(string $AppId) 设置cos的appid，已废弃
 */
class PreExecuteFileSettings extends AbstractModel
{
    /**
     * @var string 脚本在COS上路径，已废弃
     */
    public $Path;

    /**
     * @var array 执行脚本参数
     */
    public $Args;

    /**
     * @var string COS的Bucket名称，已废弃
     */
    public $Bucket;

    /**
     * @var string COS的Region名称，已废弃
     */
    public $Region;

    /**
     * @var string COS的Domain数据，已废弃
     */
    public $Domain;

    /**
     * @var integer 执行顺序
     */
    public $RunOrder;

    /**
     * @var string resourceAfter 或 clusterAfter
     */
    public $WhenRun;

    /**
     * @var string 脚本文件名，已废弃
     */
    public $CosFileName;

    /**
     * @var string 脚本的cos地址
     */
    public $CosFileURI;

    /**
     * @var string cos的SecretId
     */
    public $CosSecretId;

    /**
     * @var string Cos的SecretKey
     */
    public $CosSecretKey;

    /**
     * @var string cos的appid，已废弃
     */
    public $AppId;

    /**
     * @param string $Path 脚本在COS上路径，已废弃
     * @param array $Args 执行脚本参数
     * @param string $Bucket COS的Bucket名称，已废弃
     * @param string $Region COS的Region名称，已废弃
     * @param string $Domain COS的Domain数据，已废弃
     * @param integer $RunOrder 执行顺序
     * @param string $WhenRun resourceAfter 或 clusterAfter
     * @param string $CosFileName 脚本文件名，已废弃
     * @param string $CosFileURI 脚本的cos地址
     * @param string $CosSecretId cos的SecretId
     * @param string $CosSecretKey Cos的SecretKey
     * @param string $AppId cos的appid，已废弃
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RunOrder",$param) and $param["RunOrder"] !== null) {
            $this->RunOrder = $param["RunOrder"];
        }

        if (array_key_exists("WhenRun",$param) and $param["WhenRun"] !== null) {
            $this->WhenRun = $param["WhenRun"];
        }

        if (array_key_exists("CosFileName",$param) and $param["CosFileName"] !== null) {
            $this->CosFileName = $param["CosFileName"];
        }

        if (array_key_exists("CosFileURI",$param) and $param["CosFileURI"] !== null) {
            $this->CosFileURI = $param["CosFileURI"];
        }

        if (array_key_exists("CosSecretId",$param) and $param["CosSecretId"] !== null) {
            $this->CosSecretId = $param["CosSecretId"];
        }

        if (array_key_exists("CosSecretKey",$param) and $param["CosSecretKey"] !== null) {
            $this->CosSecretKey = $param["CosSecretKey"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
