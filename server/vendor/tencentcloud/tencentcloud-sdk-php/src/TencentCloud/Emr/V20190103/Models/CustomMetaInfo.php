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
 * 用户自建Hive-MetaDB信息
 *
 * @method string getMetaDataJdbcUrl() 获取自定义MetaDB的JDBC连接，请以 jdbc:mysql:// 开头
 * @method void setMetaDataJdbcUrl(string $MetaDataJdbcUrl) 设置自定义MetaDB的JDBC连接，请以 jdbc:mysql:// 开头
 * @method string getMetaDataUser() 获取自定义MetaDB用户名
 * @method void setMetaDataUser(string $MetaDataUser) 设置自定义MetaDB用户名
 * @method string getMetaDataPass() 获取自定义MetaDB密码
 * @method void setMetaDataPass(string $MetaDataPass) 设置自定义MetaDB密码
 */
class CustomMetaInfo extends AbstractModel
{
    /**
     * @var string 自定义MetaDB的JDBC连接，请以 jdbc:mysql:// 开头
     */
    public $MetaDataJdbcUrl;

    /**
     * @var string 自定义MetaDB用户名
     */
    public $MetaDataUser;

    /**
     * @var string 自定义MetaDB密码
     */
    public $MetaDataPass;

    /**
     * @param string $MetaDataJdbcUrl 自定义MetaDB的JDBC连接，请以 jdbc:mysql:// 开头
     * @param string $MetaDataUser 自定义MetaDB用户名
     * @param string $MetaDataPass 自定义MetaDB密码
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
        if (array_key_exists("MetaDataJdbcUrl",$param) and $param["MetaDataJdbcUrl"] !== null) {
            $this->MetaDataJdbcUrl = $param["MetaDataJdbcUrl"];
        }

        if (array_key_exists("MetaDataUser",$param) and $param["MetaDataUser"] !== null) {
            $this->MetaDataUser = $param["MetaDataUser"];
        }

        if (array_key_exists("MetaDataPass",$param) and $param["MetaDataPass"] !== null) {
            $this->MetaDataPass = $param["MetaDataPass"];
        }
    }
}
