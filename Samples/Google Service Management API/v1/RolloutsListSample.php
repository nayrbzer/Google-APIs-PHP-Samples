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
// Unofficial sample for the Service Management v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Google Service Management allows service producers to publish their services on Google Cloud Platform so that they can be discovered and used by service consumers.
// API Documentation Link https://cloud.google.com/service-management/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/servicemanagement/v1/rest
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
* $service = new Google_Service_Servicemanagement($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'filter' => '[YourValue]',  // Use `filter` to return subset of rollouts.The following filters are supported:  -- To limit the results to only those in     [status](google.api.servicemanagement.v1.RolloutStatus) 'SUCCESS',     use filter='status=SUCCESS'  -- To limit the results to those in     [status](google.api.servicemanagement.v1.RolloutStatus) 'CANCELLED'     or 'FAILED', use filter='status=CANCELLED OR status=FAILED'
            
  //'pageToken' => '[YourValue]',  // The token of the page to retrieve.
            
  //'pageSize' => '[YourValue]',  // The max number of items to include in the response list.
  'fields' => '*'
);
// Single Request.
$results = rolloutsListExample($service, $serviceName, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $serviceName, $optParams);	
} while($results->getNextPageToken());  

/**
* Lists the history of the service configuration rollouts for a managedservice, from the newest to the oldest.
* @service Authenticated Servicemanagement service.
* @optParams Optional paramaters are not required by a request.
* @serviceName The name of the service.  See the [overview](/service-management/overview)
for naming requirements.  For example: `example.googleapis.com`.
* @return ListServiceRolloutsResponse
*/
function rolloutsListExample($service, $serviceName, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (serviceName == null)
			throw new Exception("serviceName is required.");
		// Make the request and return the results.
		return $service->rollouts->ListRollouts($serviceName, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
