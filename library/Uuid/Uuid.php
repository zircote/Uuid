<?php
namespace Uuid;

/**
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * Copyright [2012] [Robert Allen]
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package     Uuid
 * @category    Uuid
 */
/**
 * @package     Uuid
 * @category    Uuid
 */
class Uuid {

    /**
     *
     * @var string
     */
    protected $uuid;
    /**
     *
     */
    public function __construct($value = null){
        $this->setUuid($value);
    }

    /**
     * @param null|string $chars
     *
     * @return Uuid
     * @throws \UnexpectedValueException
     */
    public function setUuid($chars = null){
        if (is_null($chars)) {
            $chars = md5 ( uniqid ( mt_rand (), true ) );
        } elseif (32 !== strlen($chars)){
            throw new \UnexpectedValueException('invalid characters for UUID generation provided');
        }
        $this->uuid =
            substr ( $chars, 0, 8 )  . '-' .
            substr ( $chars, 8, 4 )  . '-' .
            substr ( $chars, 12, 4 ) . '-' .
            substr ( $chars, 16, 4 ) . '-' .
            substr ( $chars, 20, 12 ) ;
        return $this;
    }

    /**
     * returns the uuid and creates one if none exists
     *
     * @return string
     *
     */
    public function getUuid(){
        return $this->uuid;
    }

    /**
     * string overload method
     */
    public function __toString(){
        return (string) $this->uuid;
    }

    /**
     * @static
     *
     * @param null $value
     *
     * @return string
     */
    public static function generate($value = null)
    {
        $uuid = new self($value);
        return $uuid->__toString();
    }
}
