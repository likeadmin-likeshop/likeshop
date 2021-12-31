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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchTrace请求参数结构体
 *
 * @method string getGroupId() 获取希望搜索的人体库ID。
 * @method void setGroupId(string $GroupId) 设置希望搜索的人体库ID。
 * @method Trace getTrace() 获取人体轨迹信息。
 * @method void setTrace(Trace $Trace) 设置人体轨迹信息。
 * @method integer getMaxPersonNum() 获取单张被识别的人体轨迹返回的最相似人员数量。
默认值为5，最大值为100。
 例，设MaxPersonNum为8，则返回Top8相似的人员信息。 值越大，需要处理的时间越长。建议不要超过10。
 * @method void setMaxPersonNum(integer $MaxPersonNum) 设置单张被识别的人体轨迹返回的最相似人员数量。
默认值为5，最大值为100。
 例，设MaxPersonNum为8，则返回Top8相似的人员信息。 值越大，需要处理的时间越长。建议不要超过10。
 * @method float getTraceMatchThreshold() 获取出参Score中，只有超过TraceMatchThreshold值的结果才会返回。
默认为0。范围[0, 100.0]。
 * @method void setTraceMatchThreshold(float $TraceMatchThreshold) 设置出参Score中，只有超过TraceMatchThreshold值的结果才会返回。
默认为0。范围[0, 100.0]。
 */
class SearchTraceRequest extends AbstractModel
{
    /**
     * @var string 希望搜索的人体库ID。
     */
    public $GroupId;

    /**
     * @var Trace 人体轨迹信息。
     */
    public $Trace;

    /**
     * @var integer 单张被识别的人体轨迹返回的最相似人员数量。
默认值为5，最大值为100。
 例，设MaxPersonNum为8，则返回Top8相似的人员信息。 值越大，需要处理的时间越长。建议不要超过10。
     */
    public $MaxPersonNum;

    /**
     * @var float 出参Score中，只有超过TraceMatchThreshold值的结果才会返回。
默认为0。范围[0, 100.0]。
     */
    public $TraceMatchThreshold;

    /**
     * @param string $GroupId 希望搜索的人体库ID。
     * @param Trace $Trace 人体轨迹信息。
     * @param integer $MaxPersonNum 单张被识别的人体轨迹返回的最相似人员数量。
默认值为5，最大值为100。
 例，设MaxPersonNum为8，则返回Top8相似的人员信息。 值越大，需要处理的时间越长。建议不要超过10。
     * @param float $TraceMatchThreshold 出参Score中，只有超过TraceMatchThreshold值的结果才会返回。
默认为0。范围[0, 100.0]。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = new Trace();
            $this->Trace->deserialize($param["Trace"]);
        }

        if (array_key_exists("MaxPersonNum",$param) and $param["MaxPersonNum"] !== null) {
            $this->MaxPersonNum = $param["MaxPersonNum"];
        }

        if (array_key_exists("TraceMatchThreshold",$param) and $param["TraceMatchThreshold"] !== null) {
            $this->TraceMatchThreshold = $param["TraceMatchThreshold"];
        }
    }
}
