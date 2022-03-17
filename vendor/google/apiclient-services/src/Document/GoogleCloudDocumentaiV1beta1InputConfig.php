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

namespace Google\Service\Document;

class GoogleCloudDocumentaiV1beta1InputConfig extends \Google\Model
{
  protected $gcsSourceType = GoogleCloudDocumentaiV1beta1GcsSource::class;
  protected $gcsSourceDataType = '';
  /**
   * @var string
   */
  public $mimeType;

  /**
   * @param GoogleCloudDocumentaiV1beta1GcsSource
   */
  public function setGcsSource(GoogleCloudDocumentaiV1beta1GcsSource $gcsSource)
  {
    $this->gcsSource = $gcsSource;
  }
  /**
   * @return GoogleCloudDocumentaiV1beta1GcsSource
   */
  public function getGcsSource()
  {
    return $this->gcsSource;
  }
  /**
   * @param string
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return string
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiV1beta1InputConfig::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta1InputConfig');
