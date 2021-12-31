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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能代发-单笔代发转账对账单返回数据
 *
 * @method string getBillDownloadURL() 获取统一对账单下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillDownloadURL(string $BillDownloadURL) 设置统一对账单下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalBillDownloadURL() 获取渠道原始对账单下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalBillDownloadURL(string $OriginalBillDownloadURL) 设置渠道原始对账单下载链接
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryBillDownloadURLData extends AbstractModel
{
    /**
     * @var string 统一对账单下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillDownloadURL;

    /**
     * @var string 渠道原始对账单下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalBillDownloadURL;

    /**
     * @param string $BillDownloadURL 统一对账单下载链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalBillDownloadURL 渠道原始对账单下载链接
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
        if (array_key_exists("BillDownloadURL",$param) and $param["BillDownloadURL"] !== null) {
            $this->BillDownloadURL = $param["BillDownloadURL"];
        }

        if (array_key_exists("OriginalBillDownloadURL",$param) and $param["OriginalBillDownloadURL"] !== null) {
            $this->OriginalBillDownloadURL = $param["OriginalBillDownloadURL"];
        }
    }
}
