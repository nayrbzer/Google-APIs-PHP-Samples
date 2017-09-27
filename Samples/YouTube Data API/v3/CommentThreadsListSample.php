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
// Unofficial sample for the YouTube v3 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Supports core YouTube features, such as uploading videos, creating and managing playlists, searching for content, and much more.
// API Documentation Link https://developers.google.com/youtube/v3
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest
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
* $service = new Google_Service_Youtube($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'allThreadsRelatedToChannelId' => '[YourValue]',  // The allThreadsRelatedToChannelId parameter instructs the API to return all comment threads associated with the specified channel. The response can include comments about the channel or about the channel's videos.
            
  //'channelId' => '[YourValue]',  // The channelId parameter instructs the API to return comment threads containing comments about the specified channel. (The response will not include comments left on videos that the channel uploaded.)
            
  //'id' => '[YourValue]',  // The id parameter specifies a comma-separated list of comment thread IDs for the resources that should be retrieved.
            
  //'maxResults' => '[YourValue]',  // The maxResults parameter specifies the maximum number of items that should be returned in the result set.Note: This parameter is not supported for use in conjunction with the id parameter.
            
  //'moderationStatus' => '[YourValue]',  // Set this parameter to limit the returned comment threads to a particular moderation state.Note: This parameter is not supported for use in conjunction with the id parameter.
            
  //'order' => '[YourValue]',  // The order parameter specifies the order in which the API response should list comment threads. Valid values are: - time - Comment threads are ordered by time. This is the default behavior.- relevance - Comment threads are ordered by relevance.Note: This parameter is not supported for use in conjunction with the id parameter.
            
  //'pageToken' => '[YourValue]',  // The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken property identifies the next page of the result that can be retrieved.Note: This parameter is not supported for use in conjunction with the id parameter.
            
  //'searchTerms' => '[YourValue]',  // The searchTerms parameter instructs the API to limit the API response to only contain comments that contain the specified search terms.Note: This parameter is not supported for use in conjunction with the id parameter.
            
  //'textFormat' => '[YourValue]',  // Set this parameter's value to html or plainText to instruct the API to return the comments left by users in html formatted or in plain text.
            
  //'videoId' => '[YourValue]',  // The videoId parameter instructs the API to return comment threads associated with the specified video ID.
  'fields' => '*'
);
// Single Request.
$results = commentThreadsListExample($service, $part, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $part, $optParams);	
} while($results->getNextPageToken());  

/**
* Returns a list of comment threads that match the API request parameters.
* @service Authenticated Youtube service.
* @optParams Optional paramaters are not required by a request.
* @part The part parameter specifies a comma-separated list of one or more commentThread resource properties that the API response will include.
* @return CommentThreadListResponse
*/
function commentThreadsListExample($service, $part, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (part == null)
			throw new Exception("part is required.");
		// Make the request and return the results.
		return $service->commentThreads->ListCommentThreads($part, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
