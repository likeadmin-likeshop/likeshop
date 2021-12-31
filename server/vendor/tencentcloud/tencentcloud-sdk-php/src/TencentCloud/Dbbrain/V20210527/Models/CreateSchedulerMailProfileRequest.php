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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSchedulerMailProfile请求参数结构体
 *
 * @method array getWeekConfiguration() 获取取值范围1-7，分别代表周一至周日。
 * @method void setWeekConfiguration(array $WeekConfiguration) 设置取值范围1-7，分别代表周一至周日。
 * @method ProfileInfo getProfileInfo() 获取邮件配置内容。
 * @method void setProfileInfo(ProfileInfo $ProfileInfo) 设置邮件配置内容。
 * @method string getProfileName() 获取配置名称，需要保持唯一性，定期生成邮件配置命名格式："scheduler_" + {instanceId}，如"schduler_cdb-test"。
 * @method void setProfileName(string $ProfileName) 设置配置名称，需要保持唯一性，定期生成邮件配置命名格式："scheduler_" + {instanceId}，如"schduler_cdb-test"。
 * @method string getBindInstanceId() 获取配置订阅的实例ID。
 * @method void setBindInstanceId(string $BindInstanceId) 设置配置订阅的实例ID。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 */
class CreateSchedulerMailProfileRequest extends AbstractModel
{
    /**
     * @var array 取值范围1-7，分别代表周一至周日。
     */
    public $WeekConfiguration;

    /**
     * @var ProfileInfo 邮件配置内容。
     */
    public $ProfileInfo;

    /**
     * @var string 配置名称，需要保持唯一性，定期生成邮件配置命名格式："scheduler_" + {instanceId}，如"schduler_cdb-test"。
     */
    public $ProfileName;

    /**
     * @var string 配置订阅的实例ID。
     */
    public $BindInstanceId;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @param array $WeekConfiguration 取值范围1-7，分别代表周一至周日。
     * @param ProfileInfo $ProfileInfo 邮件配置内容。
     * @param string $ProfileName 配置名称，需要保持唯一性，定期生成邮件配置命名格式："scheduler_" + {instanceId}，如"schduler_cdb-test"。
     * @param string $BindInstanceId 配置订阅的实例ID。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
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
        if (array_key_exists("WeekConfiguration",$param) and $param["WeekConfiguration"] !== null) {
            $this->WeekConfiguration = $param["WeekConfiguration"];
        }

        if (array_key_exists("ProfileInfo",$param) and $param["ProfileInfo"] !== null) {
            $this->ProfileInfo = new ProfileInfo();
            $this->ProfileInfo->deserialize($param["ProfileInfo"]);
        }

        if (array_key_exists("ProfileName",$param) and $param["ProfileName"] !== null) {
            $this->ProfileName = $param["ProfileName"];
        }

        if (array_key_exists("BindInstanceId",$param) and $param["BindInstanceId"] !== null) {
            $this->BindInstanceId = $param["BindInstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
