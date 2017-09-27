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
  'fields' => '*'
);
// Single Request.
$results = guardiansGetExample($service, $studentId, $guardianId, $optParams);


/**
* Returns a specific guardian.This method returns the following error codes:* `PERMISSION_DENIED` if no user that matches the provided `student_id`  is visible to the requesting user, if the requesting user is not  permitted to view guardian information for the student identified by the  `student_id`, if guardians are not enabled for the domain in question,  or for other access errors.* `INVALID_ARGUMENT` if a `student_id` is specified, but its format cannot  be recognized (it is not an email address, nor a `student_id` from the  API, nor the literal string `me`).* `NOT_FOUND` if the requesting user is permitted to view guardians for  the requested `student_id`, but no `Guardian` record exists for that  student that matches the provided `guardian_id`.
* @service Authenticated Classroom service.
* @optParams Optional paramaters are not required by a request.
* @studentId The student whose guardian is being requested. One of the following:

* the numeric identifier for the user
* the email address of the user
* the string literal `"me"`, indicating the requesting user
* @guardianId The `id` field from a `Guardian`.
* @return Guardian
*/
function guardiansGetExample($service, $studentId, $guardianId, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (studentId == null)
			throw new Exception("studentId is required.");
		if (guardianId == null)
			throw new Exception("guardianId is required.");
		// Make the request and return the results.
		return $service->guardians->GetGuardians($studentId, $guardianId, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
