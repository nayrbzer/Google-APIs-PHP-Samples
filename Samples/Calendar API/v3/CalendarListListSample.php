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
// Unofficial sample for the calendar v3 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Manipulates events and other calendar data.
// API Documentation Link https://developers.google.com/google-apps/calendar/firstapp
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest
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
* $service = new Google_Service_Calendar($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'maxResults' => '[YourValue]',  // Maximum number of entries returned on one result page. By default the value is 100 entries. The page size can never be larger than 250 entries. Optional.
            
  //'minAccessRole' => '[YourValue]',  // The minimum access role for the user in the returned entries. Optional. The default is no restriction.
            
  //'pageToken' => '[YourValue]',  // Token specifying which result page to return. Optional.
            
  //'showDeleted' => '[YourValue]',  // Whether to include deleted calendar list entries in the result. Optional. The default is False.
            
  //'showHidden' => '[YourValue]',  // Whether to show hidden entries. Optional. The default is False.
            
  //'syncToken' => '[YourValue]',  // Token obtained from the nextSyncToken field returned on the last page of results from the previous list request. It makes the result of this list request contain only entries that have changed since then. If only read-only fields such as calendar properties or ACLs have changed, the entry won't be returned. All entries deleted and hidden since the previous list request will always be in the result set and it is not allowed to set showDeleted neither showHidden to False.To ensure client state consistency minAccessRole query parameter cannot be specified together with nextSyncToken.If the syncToken expires, the server will respond with a 410 GONE response code and the client should clear its storage and perform a full synchronization without any syncToken.Learn more about incremental synchronization.Optional. The default is to return all entries.
  'fields' => '*'
);
// Single Request.
$results = calendarListListExample($service, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $optParams);	
} while($results->getNextPageToken());  

/**
* Returns entries on the user's calendar list.
* @service Authenticated Calendar service.
* @optParams Optional paramaters are not required by a request.
* @return CalendarList
*/
function calendarListListExample($service, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		// Make the request and return the results.
		return $service->calendarList->ListCalendarList($optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
