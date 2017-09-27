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
// Unofficial sample for the Sheets v4 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Reads and writes Google Sheets.
// API Documentation Link https://developers.google.com/sheets/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/sheets/v4/rest
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
* $service = new Google_Service_Sheets($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'dateTimeRenderOption' => '[YourValue]',  // How dates, times, and durations should be represented in the output.This is ignored if value_render_option isFORMATTED_VALUE.The default dateTime render option is [DateTimeRenderOption.SERIAL_NUMBER].
            
  //'valueRenderOption' => '[YourValue]',  // How values should be represented in the output.The default render option is ValueRenderOption.FORMATTED_VALUE.
            
  //'majorDimension' => '[YourValue]',  // The major dimension that results should use.For example, if the spreadsheet data is: `A1=1,B1=2,A2=3,B2=4`,then requesting `range=A1:B2,majorDimension=ROWS` will return`[[1,2],[3,4]]`,whereas requesting `range=A1:B2,majorDimension=COLUMNS` will return`[[1,3],[2,4]]`.
            
  //'ranges' => '[YourValue]',  // The A1 notation of the values to retrieve.
  'fields' => '*'
);
// Single Request.
$results = valuesBatchGetExample($service, $spreadsheetId, $optParams);


/**
* Returns one or more ranges of values from a spreadsheet.The caller must specify the spreadsheet ID and one or more ranges.
* @service Authenticated Sheets service.
* @optParams Optional paramaters are not required by a request.
* @spreadsheetId The ID of the spreadsheet to retrieve data from.
* @return BatchGetValuesResponse
*/
function valuesBatchGetExample($service, $spreadsheetId, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (spreadsheetId == null)
			throw new Exception("spreadsheetId is required.");
		// Make the request and return the results.
		return $service->values->BatchGetValues($spreadsheetId, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
