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
//     Build date: 2017-10-08
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the Manufacturer Center v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Public API for managing Manufacturer Center related data.
// API Documentation Link https://developers.google.com/manufacturers/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/manufacturers/v1/rest
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
* $service = new Google_Service_Manufacturercenter($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
  'fields' => '*'
);
// Single Request.
$results = productsDeleteExample($service, $parent, $name, $optParams);


/**
* Deletes the product from a Manufacturer Center account.
* @service Authenticated Manufacturercenter service.
* @optParams Optional paramaters are not required by a request.
* @parent Parent ID in the format `accounts/{account_id}`.

`account_id` - The ID of the Manufacturer Center account.
* @name Name in the format `{target_country}:{content_language}:{product_id}`.

`target_country`   - The target country of the product as a CLDR territory
                     code (for example, US).

`content_language` - The content language of the product as a two-letter
                     ISO 639-1 language code (for example, en).

`product_id`     -   The ID of the product. For more information, see
                     https://support.google.com/manufacturers/answer/6124116#id.
* @return Empty
*/
function productsDeleteExample($service, $parent, $name, $optParams)
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
		if (name == null)
			throw new Exception("name is required.");
		// Make the request and return the results.
		return $service->products->DeleteProducts($parent, $name, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
