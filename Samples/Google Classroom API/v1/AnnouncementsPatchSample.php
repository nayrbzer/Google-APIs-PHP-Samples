﻿<?php
// Copyright 2017 DAIMTO ([Linda Lawton](https://twitter.com/LindaLawtonDK)) :  [www.daimto.com](http://www.daimto.com/)
//
// Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
// the License. You may obtain a copy of the License at
//
// http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
// an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
// specific language governing permissions and limitations under the License.
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by DAIMTO-Google-apis-Sample-generator 1.0.0
//     Template File Name:  methodTemplate.tt
//     Build date: 2017-09-27
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the classroom v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Manages classes, rosters, and invitations in Google Classroom.
// API Documentation Link https://developers.google.com/classroom/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/classroom/v1/rest
//
//------------------------------------------------------------------------------
// Installation
//
// The preferred method is via https://getcomposer.org. Follow the installation instructions https://getcomposer.org/doc/00-intro.md 
// if you do not already have composer installed.
//
// Once composer is installed, execute the following command in your project root to install this library:
//
// composer require google/apiclient:^2.0
//
//------------------------------------------------------------------------------  
// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';
session_start();

/***************************************************
* Include this line for service account authencation.  Note: Not all APIs support service accounts.  
//require_once __DIR__ . '/ServiceAccount.php';     
* Include the following four lines Oauth2 authencation.
* require_once __DIR__ . '/Oauth2Authentication.php';
* $_SESSION['mainScript'] = basename($_SERVER['PHP_SELF']);   // Oauth2callback.php will return here.
* $client = getGoogleClient();
* $service = new Google_Service_Classroom($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'updateMask' => '[YourValue]',  // Mask that identifies which fields on the announcement to update.This field is required to do an update. The update fails if invalidfields are specified. If a field supports empty values, it can be clearedby specifying it in the update mask and not in the Announcement object. Ifa field that does not support empty values is included in the update maskand not set in the Announcement object, an `INVALID_ARGUMENT` error will bereturned.The following fields may be specified by teachers:* `text`* `state`* `scheduled_time`
  'fields' => '*'
);
// Single Request.
$results = announcementsPatchExample($service, $courseId, $id, $optParams);


/**
* Updates one or more fields of an announcement.This method returns the following error codes:* `PERMISSION_DENIED` if the requesting developer project did not createthe corresponding announcement or for access errors.* `INVALID_ARGUMENT` if the request is malformed.* `FAILED_PRECONDITION` if the requested announcement has already beendeleted.* `NOT_FOUND` if the requested course or announcement does not exist
* @service Authenticated Classroom service.
* @optParams Optional paramaters are not required by a request.
* @courseId Identifier of the course.
This identifier can be either the Classroom-assigned identifier or an
alias.
* @id Identifier of the announcement.
* @return Announcement
*/
function announcementsPatchExample($service, $courseId, $id, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (courseId == null)
			throw new Exception("courseId is required.");
		if (id == null)
			throw new Exception("id is required.");
		// Make the request and return the results.
		return $service->announcements->PatchAnnouncements($courseId, $id, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
