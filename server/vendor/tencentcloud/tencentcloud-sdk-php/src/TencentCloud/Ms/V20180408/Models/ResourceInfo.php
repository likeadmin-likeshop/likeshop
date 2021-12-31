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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拉取某个用户的所有资源信息
 *
 * @method string getResourceId() 获取用户购买的资源id，全局唯一
 * @method void setResourceId(string $ResourceId) 设置用户购买的资源id，全局唯一
 * @method integer getPid() 获取资源的pid，MTP加固-12767，应用加固-12750 MTP反作弊-12766 源代码混淆-12736
 * @method void setPid(integer $Pid) 设置资源的pid，MTP加固-12767，应用加固-12750 MTP反作弊-12766 源代码混淆-12736
 * @method integer getCreateTime() 获取购买时间戳
 * @method void setCreateTime(integer $CreateTime) 设置购买时间戳
 * @method integer getExpireTime() 获取到期时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置到期时间戳
 * @method integer getIsBind() 获取0-未绑定，1-已绑定
 * @method void setIsBind(integer $IsBind) 设置0-未绑定，1-已绑定
 * @method BindInfo getBindInfo() 获取用户绑定app的基本信息
 * @method void setBindInfo(BindInfo $BindInfo) 设置用户绑定app的基本信息
 * @method string getResourceName() 获取资源名称，如应用加固，漏洞扫描
 * @method void setResourceName(string $ResourceName) 设置资源名称，如应用加固，漏洞扫描
 */
class ResourceInfo extends AbstractModel
{
    /**
     * @var string 用户购买的资源id，全局唯一
     */
    public $ResourceId;

    /**
     * @var integer 资源的pid，MTP加固-12767，应用加固-12750 MTP反作弊-12766 源代码混淆-12736
     */
    public $Pid;

    /**
     * @var integer 购买时间戳
     */
    public $CreateTime;

    /**
     * @var integer 到期时间戳
     */
    public $ExpireTime;

    /**
     * @var integer 0-未绑定，1-已绑定
     */
    public $IsBind;

    /**
     * @var BindInfo 用户绑定app的基本信息
     */
    public $BindInfo;

    /**
     * @var string 资源名称，如应用加固，漏洞扫描
     */
    public $ResourceName;

    /**
     * @param string $ResourceId 用户购买的资源id，全局唯一
     * @param integer $Pid 资源的pid，MTP加固-12767，应用加固-12750 MTP反作弊-12766 源代码混淆-12736
     * @param integer $CreateTime 购买时间戳
     * @param integer $ExpireTime 到期时间戳
     * @param integer $IsBind 0-未绑定，1-已绑定
     * @param BindInfo $BindInfo 用户绑定app的基本信息
     * @param string $ResourceName 资源名称，如应用加固，漏洞扫描
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsBind",$param) and $param["IsBind"] !== null) {
            $this->IsBind = $param["IsBind"];
        }

        if (array_key_exists("BindInfo",$param) and $param["BindInfo"] !== null) {
            $this->BindInfo = new BindInfo();
            $this->BindInfo->deserialize($param["BindInfo"]);
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }
    }
}
