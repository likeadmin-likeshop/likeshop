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
 * 元数据库信息
 *
 * @method string getMetaType() 获取元数据类型。
 * @method void setMetaType(string $MetaType) 设置元数据类型。
 * @method string getUnifyMetaInstanceId() 获取统一元数据库实例ID。
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) 设置统一元数据库实例ID。
 * @method CustomMetaInfo getMetaDBInfo() 获取自建元数据库信息。
 * @method void setMetaDBInfo(CustomMetaInfo $MetaDBInfo) 设置自建元数据库信息。
 */
class MetaDbInfo extends AbstractModel
{
    /**
     * @var string 元数据类型。
     */
    public $MetaType;

    /**
     * @var string 统一元数据库实例ID。
     */
    public $UnifyMetaInstanceId;

    /**
     * @var CustomMetaInfo 自建元数据库信息。
     */
    public $MetaDBInfo;

    /**
     * @param string $MetaType 元数据类型。
     * @param string $UnifyMetaInstanceId 统一元数据库实例ID。
     * @param CustomMetaInfo $MetaDBInfo 自建元数据库信息。
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
        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("UnifyMetaInstanceId",$param) and $param["UnifyMetaInstanceId"] !== null) {
            $this->UnifyMetaInstanceId = $param["UnifyMetaInstanceId"];
        }

        if (array_key_exists("MetaDBInfo",$param) and $param["MetaDBInfo"] !== null) {
            $this->MetaDBInfo = new CustomMetaInfo();
            $this->MetaDBInfo->deserialize($param["MetaDBInfo"]);
        }
    }
}
