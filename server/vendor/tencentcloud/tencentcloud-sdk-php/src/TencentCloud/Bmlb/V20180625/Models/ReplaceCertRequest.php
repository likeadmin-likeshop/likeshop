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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceCert请求参数结构体
 *
 * @method string getOldCertId() 获取要被替换的证书ID
 * @method void setOldCertId(string $OldCertId) 设置要被替换的证书ID
 * @method string getNewCert() 获取证书内容
 * @method void setNewCert(string $NewCert) 设置证书内容
 * @method string getNewAlias() 获取证书名称
 * @method void setNewAlias(string $NewAlias) 设置证书名称
 * @method string getNewKey() 获取私钥内容，证书类型为SVR时不需要传递
 * @method void setNewKey(string $NewKey) 设置私钥内容，证书类型为SVR时不需要传递
 * @method integer getDeleteOld() 获取是否删除旧证书，0 表示不删除，1 表示删除
 * @method void setDeleteOld(integer $DeleteOld) 设置是否删除旧证书，0 表示不删除，1 表示删除
 */
class ReplaceCertRequest extends AbstractModel
{
    /**
     * @var string 要被替换的证书ID
     */
    public $OldCertId;

    /**
     * @var string 证书内容
     */
    public $NewCert;

    /**
     * @var string 证书名称
     */
    public $NewAlias;

    /**
     * @var string 私钥内容，证书类型为SVR时不需要传递
     */
    public $NewKey;

    /**
     * @var integer 是否删除旧证书，0 表示不删除，1 表示删除
     */
    public $DeleteOld;

    /**
     * @param string $OldCertId 要被替换的证书ID
     * @param string $NewCert 证书内容
     * @param string $NewAlias 证书名称
     * @param string $NewKey 私钥内容，证书类型为SVR时不需要传递
     * @param integer $DeleteOld 是否删除旧证书，0 表示不删除，1 表示删除
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
        if (array_key_exists("OldCertId",$param) and $param["OldCertId"] !== null) {
            $this->OldCertId = $param["OldCertId"];
        }

        if (array_key_exists("NewCert",$param) and $param["NewCert"] !== null) {
            $this->NewCert = $param["NewCert"];
        }

        if (array_key_exists("NewAlias",$param) and $param["NewAlias"] !== null) {
            $this->NewAlias = $param["NewAlias"];
        }

        if (array_key_exists("NewKey",$param) and $param["NewKey"] !== null) {
            $this->NewKey = $param["NewKey"];
        }

        if (array_key_exists("DeleteOld",$param) and $param["DeleteOld"] !== null) {
            $this->DeleteOld = $param["DeleteOld"];
        }
    }
}
