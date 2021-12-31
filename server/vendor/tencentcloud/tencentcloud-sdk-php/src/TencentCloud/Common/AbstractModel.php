<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Common;
use \ReflectionClass;

/**
 * 抽象model类，禁止client引用
 * @package TencentCloud\Common
 */
abstract class AbstractModel
{
    /**
     * 内部实现，用户禁止调用
     */
    public function serialize()
    {
        $ret = $this->objSerialize($this);
		return $ret;
    }

    private function objSerialize($obj) {
        $memberRet = [];
        $ref = new ReflectionClass(get_class($obj));
        $memberList = $ref->getProperties();
        foreach ($memberList as $x => $member)
        {
            $name = ucfirst($member->getName());
            $member->setAccessible(true);
            $value = $member->getValue($obj);
            if ($value === null) {
                continue;
            }
            if ($value instanceof AbstractModel) {
                $memberRet[$name] = $this->objSerialize($value);
            } else if (is_array($value)) {
                $memberRet[$name] = $this->arraySerialize($value);
            } else {
                $memberRet[$name] = $value;
            }
        }
        return $memberRet;
    }

    private function arraySerialize($memberList) {
        $memberRet = [];
        foreach ($memberList as $name => $value)
        {
            if ($value === null) {
                continue;
            }
            if ($value instanceof AbstractModel) {
                $memberRet[$name] = $this->objSerialize($value);
            } elseif (is_array($value)) {
                $memberRet[$name] = $this->arraySerialize($value);
            }else {
                $memberRet[$name] = $value;
            }
        }
        return $memberRet;
    }

    private function arrayMerge($array, $prepend = null)
    {
        $results = array();
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $results = array_merge($results, static::arrayMerge($value, $prepend.$key.'.'));
            }
            else {
                if (is_bool($value)) {
                    $results[$prepend.$key] = json_encode($value);
                } else {
                    $results[$prepend.$key] = $value;
                }

            }
        }
        return $results;
    }

    abstract public function deserialize($param);

    /**
     * @param string $jsonString json格式的字符串
     */
    public function fromJsonString($jsonString)
    {
        $arr = json_decode($jsonString, true);
        $this->deserialize($arr);
    }

    public function toJsonString()
    {
        $r = $this->serialize();
        // it is an object rather than an array
        if (empty($r)) {
            return "{}";
        }
        return json_encode($r, JSON_UNESCAPED_UNICODE);
    }

    public function __call($member, $param)
    {
        $act = substr($member,0,3);
        $attr = substr($member,3);
        if ($act === "get") {
            return $this->$attr;
        } else if ($act === "set") {
            $this->$attr = $param[0];
        }
    }
}

