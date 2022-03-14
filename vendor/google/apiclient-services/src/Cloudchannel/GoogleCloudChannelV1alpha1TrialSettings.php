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

namespace Google\Service\Cloudchannel;

class GoogleCloudChannelV1alpha1TrialSettings extends \Google\Model
{
  /**
   * @var string
   */
  public $endTime;
  /**
   * @var bool
   */
  public $trial;

  /**
   * @param string
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * @param bool
   */
  public function setTrial($trial)
  {
    $this->trial = $trial;
  }
  /**
   * @return bool
   */
  public function getTrial()
  {
    return $this->trial;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudChannelV1alpha1TrialSettings::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1TrialSettings');
