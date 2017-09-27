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
// Unofficial sample for the reports reports_v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Fetches reports for the administrators of G Suite customers about the usage, collaboration, security, and risk for their users.
// API Documentation Link https://developers.google.com/admin-sdk/reports/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/admin/reports_v1/rest
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
* $service = new Google_Service_Reports($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'customerId' => '[YourValue]',  // Represents the customer for which the data is to be fetched.
            
  //'filters' => '[YourValue]',  // Represents the set of filters including parameter operator value.
            
  //'maxResults' => '[YourValue]',  // Maximum number of results to return. Maximum allowed is 1000
            
  //'pageToken' => '[YourValue]',  // Token to specify next page.
            
  //'parameters' => '[YourValue]',  // Represents the application name, parameter name pairs to fetch in csv as app_name1:param_name1, app_name2:param_name2.
  'fields' => '*'
);
// Single Request.
$results = userUsageReportGetExample($service, $userKey, $date, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $userKey, $date, $optParams);	
} while($results->getNextPageToken());  

/**
* Retrieves a report which is a collection of properties / statistics for a set of users.
* @service Authenticated Reports service.
* @optParams Optional paramaters are not required by a request.
* @date Represents the date in yyyy-mm-dd format for which the data is to be fetched.
* @userKey Represents the profile id or the user email for which the data should be filtered.
* @return UsageReports
*/
function userUsageReportGetExample($service, $userKey, $date, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (date == null)
			throw new Exception("date is required.");
		if (userKey == null)
			throw new Exception("userKey is required.");
		// Make the request and return the results.
		return $service->userUsageReport->GetUserUsageReport($userKey, $date, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
