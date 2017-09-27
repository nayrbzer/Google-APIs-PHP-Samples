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
// Unofficial sample for the Cloudbilling v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Allows developers to manage billing for their Google Cloud Platform projects    programmatically.
// API Documentation Link https://cloud.google.com/billing/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/cloudbilling/v1/rest
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
* $service = new Google_Service_Cloudbilling($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'currencyCode' => '[YourValue]',  // The ISO 4217 currency code for the pricing info in the response proto.Will use the conversion rate as of start_time.Optional. If not specified USD will be used.
            
  //'endTime' => '[YourValue]',  // Optional exclusive end time of the time range for which the pricingversions will be returned. Timestamps in the future are not allowed.Maximum allowable time range is 1 month (31 days). Time range as a wholeis optional. If not specified, the latest pricing will be returned (up to12 hours old at most).
            
  //'pageSize' => '[YourValue]',  // Requested page size. Defaults to 5000.
            
  //'startTime' => '[YourValue]',  // Optional inclusive start time of the time range for which the pricingversions will be returned. Timestamps in the future are not allowed.Maximum allowable time range is 1 month (31 days). Time range as a wholeis optional. If not specified, the latest pricing will be returned (up to12 hours old at most).
            
  //'pageToken' => '[YourValue]',  // A token identifying a page of results to return. This should be a`next_page_token` value returned from a previous `ListSkus`call. If unspecified, the first page of results is returned.
  'fields' => '*'
);
// Single Request.
$results = skusListExample($service, $parent, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $parent, $optParams);	
} while($results->getNextPageToken());  

/**
* Lists all publicly available SKUs for a given cloud service.
* @service Authenticated Cloudbilling service.
* @optParams Optional paramaters are not required by a request.
* @parent The name of the service.
Example: "services/DA34-426B-A397"
* @return ListSkusResponse
*/
function skusListExample($service, $parent, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (parent == null)
			throw new Exception("parent is required.");
		// Make the request and return the results.
		return $service->skus->ListSkus($parent, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
