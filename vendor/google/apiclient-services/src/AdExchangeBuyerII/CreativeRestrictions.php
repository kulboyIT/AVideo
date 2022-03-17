<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\AdExchangeBuyerII;

class CreativeRestrictions extends \Google\Collection
{
  protected $collection_key = 'creativeSpecifications';
  /**
   * @var string
   */
  public $creativeFormat;
  protected $creativeSpecificationsType = CreativeSpecification::class;
  protected $creativeSpecificationsDataType = 'array';
  /**
   * @var string
   */
  public $skippableAdType;

  /**
   * @param string
   */
  public function setCreativeFormat($creativeFormat)
  {
    $this->creativeFormat = $creativeFormat;
  }
  /**
   * @return string
   */
  public function getCreativeFormat()
  {
    return $this->creativeFormat;
  }
  /**
   * @param CreativeSpecification[]
   */
  public function setCreativeSpecifications($creativeSpecifications)
  {
    $this->creativeSpecifications = $creativeSpecifications;
  }
  /**
   * @return CreativeSpecification[]
   */
  public function getCreativeSpecifications()
  {
    return $this->creativeSpecifications;
  }
  /**
   * @param string
   */
  public function setSkippableAdType($skippableAdType)
  {
    $this->skippableAdType = $skippableAdType;
  }
  /**
   * @return string
   */
  public function getSkippableAdType()
  {
    return $this->skippableAdType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreativeRestrictions::class, 'Google_Service_AdExchangeBuyerII_CreativeRestrictions');
