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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRecordBatch请求参数结构体
 *
 * @method array getDomainIdList() 获取域名ID，多个 domain_id 用英文逗号进行分割。
 * @method void setDomainIdList(array $DomainIdList) 设置域名ID，多个 domain_id 用英文逗号进行分割。
 * @method array getRecordList() 获取记录数组
 * @method void setRecordList(array $RecordList) 设置记录数组
 */
class CreateRecordBatchRequest extends AbstractModel
{
    /**
     * @var array 域名ID，多个 domain_id 用英文逗号进行分割。
     */
    public $DomainIdList;

    /**
     * @var array 记录数组
     */
    public $RecordList;

    /**
     * @param array $DomainIdList 域名ID，多个 domain_id 用英文逗号进行分割。
     * @param array $RecordList 记录数组
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
        if (array_key_exists("DomainIdList",$param) and $param["DomainIdList"] !== null) {
            $this->DomainIdList = $param["DomainIdList"];
        }

        if (array_key_exists("RecordList",$param) and $param["RecordList"] !== null) {
            $this->RecordList = [];
            foreach ($param["RecordList"] as $key => $value){
                $obj = new AddRecordBatch();
                $obj->deserialize($value);
                array_push($this->RecordList, $obj);
            }
        }
    }
}
