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
// Unofficial sample for the dataproc v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Manages Hadoop-based clusters and jobs on Google Cloud Platform.
// API Documentation Link https://cloud.google.com/dataproc/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/dataproc/v1/rest
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
* $service = new Google_Service_Dataproc($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'clusterName' => '[YourValue]',  // Optional. If set, the returned jobs list includes only jobs that were submitted to the named cluster.
            
  //'filter' => '[YourValue]',  // Optional. A filter constraining the jobs to list. Filters are case-sensitive and have the following syntax:field = value AND field = value ...where field is status.state or labels.[KEY], and [KEY] is a label key. value can be * to match all values. status.state can be either ACTIVE or INACTIVE. Only the logical AND operator is supported; space-separated items are treated as having an implicit AND operator.Example filter:status.state = ACTIVE AND labels.env = staging AND labels.starred = *
            
  //'jobStateMatcher' => '[YourValue]',  // Optional. Specifies enumerated categories of jobs to list (default = match ALL jobs).
            
  //'pageToken' => '[YourValue]',  // Optional. The page token, returned by a previous call, to request the next page of results.
            
  //'pageSize' => '[YourValue]',  // Optional. The number of results to return in each response.
  'fields' => '*'
);
// Single Request.
$results = jobsListExample($service, $projectId, $region, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $projectId, $region, $optParams);	
} while($results->getNextPageToken());  

/**
* Lists regions/{region}/jobs in a project.
* @service Authenticated Dataproc service.
* @optParams Optional paramaters are not required by a request.
* @region Required. The Cloud Dataproc region in which to handle the request.
* @projectId Required. The ID of the Google Cloud Platform project that the job belongs to.
* @return ListJobsResponse
*/
function jobsListExample($service, $projectId, $region, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (region == null)
			throw new Exception("region is required.");
		if (projectId == null)
			throw new Exception("projectId is required.");
		// Make the request and return the results.
		return $service->jobs->ListJobs($projectId, $region, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
