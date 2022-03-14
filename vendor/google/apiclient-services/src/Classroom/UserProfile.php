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

namespace Google\Service\Classroom;

class UserProfile extends \Google\Collection
{
  protected $collection_key = 'permissions';
  /**
   * @var string
   */
  public $emailAddress;
  /**
   * @var string
   */
  public $id;
  protected $nameType = Name::class;
  protected $nameDataType = '';
  protected $permissionsType = GlobalPermission::class;
  protected $permissionsDataType = 'array';
  /**
   * @var string
   */
  public $photoUrl;
  /**
   * @var bool
   */
  public $verifiedTeacher;

  /**
   * @param string
   */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /**
   * @return string
   */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param Name
   */
  public function setName(Name $name)
  {
    $this->name = $name;
  }
  /**
   * @return Name
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param GlobalPermission[]
   */
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  /**
   * @return GlobalPermission[]
   */
  public function getPermissions()
  {
    return $this->permissions;
  }
  /**
   * @param string
   */
  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }
  /**
   * @return string
   */
  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
  /**
   * @param bool
   */
  public function setVerifiedTeacher($verifiedTeacher)
  {
    $this->verifiedTeacher = $verifiedTeacher;
  }
  /**
   * @return bool
   */
  public function getVerifiedTeacher()
  {
    return $this->verifiedTeacher;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserProfile::class, 'Google_Service_Classroom_UserProfile');
