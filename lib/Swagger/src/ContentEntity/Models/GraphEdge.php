<?php
/**
 * GraphEdge
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\ContentEntity\Models;

use \ArrayAccess;
/**
 * GraphEdge Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GraphEdge implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'from' => 'string',
        'to' => 'string',
        'relevance' => 'double'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'from' => 'from',
        'to' => 'to',
        'relevance' => 'relevance'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'from' => 'setFrom',
        'to' => 'setTo',
        'relevance' => 'setRelevance'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'from' => 'getFrom',
        'to' => 'getTo',
        'relevance' => 'getRelevance'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $from 
      * @var string
      */
    protected $from;
    
    /**
      * $to 
      * @var string
      */
    protected $to;
    
    /**
      * $relevance 
      * @var double
      */
    protected $relevance;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->from = $data["from"];
            $this->to = $data["to"];
            $this->relevance = $data["relevance"];
        }
    }
    
    /**
     * Gets from
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }
  
    /**
     * Sets from
     * @param string $from 
     * @return $this
     */
    public function setFrom($from)
    {
        
        $this->from = $from;
        return $this;
    }
    
    /**
     * Gets to
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }
  
    /**
     * Sets to
     * @param string $to 
     * @return $this
     */
    public function setTo($to)
    {
        
        $this->to = $to;
        return $this;
    }
    
    /**
     * Gets relevance
     * @return double
     */
    public function getRelevance()
    {
        return $this->relevance;
    }
  
    /**
     * Sets relevance
     * @param double $relevance 
     * @return $this
     */
    public function setRelevance($relevance)
    {
        
        $this->relevance = $relevance;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}