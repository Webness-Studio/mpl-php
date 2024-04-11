# WebnessStudio\MPL\AddressApi

All URIs are relative to *https://sandbox.api.posta.hu/v2/mplapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressesCityToZipCodePost**](AddressApi.md#addressescitytozipcodepost) | **POST** /addresses/cityToZipCode | ►DOM◄ Irányítószámok lekérdezése a megadott településnévhez.   /   Query postcodes for a given settlement name.
[**addressesZipCodeToCityPost**](AddressApi.md#addresseszipcodetocitypost) | **POST** /addresses/zipCodeToCity | ►DOM◄ Település lekérdezése a megadott irányítószámhoz.   /   Query settlement name for a given postcode.

# **addressesCityToZipCodePost**
> \WebnessStudio\MPL\Model\ZipCodeQueryResult addressesCityToZipCodePost($x_request_id, $x_accounting_code, $body, $x_correlation_id)

►DOM◄ Irányítószámok lekérdezése a megadott településnévhez.   /   Query postcodes for a given settlement name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = WebnessStudio\MPL\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = WebnessStudio\MPL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new WebnessStudio\MPL\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$body = new \WebnessStudio\MPL\Model\ZipCodeQueryRequest(); // \WebnessStudio\MPL\Model\ZipCodeQueryRequest | 
$x_correlation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)

try {
    $result = $apiInstance->addressesCityToZipCodePost($x_request_id, $x_accounting_code, $body, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressesCityToZipCodePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_request_id** | [**string**](../Model/.md)| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) |
 **x_accounting_code** | **string**| Vevőkód   /   The accounting code |
 **body** | [**\WebnessStudio\MPL\Model\ZipCodeQueryRequest**](../Model/ZipCodeQueryRequest.md)|  | [optional]
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]

### Return type

[**\WebnessStudio\MPL\Model\ZipCodeQueryResult**](../Model/ZipCodeQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressesZipCodeToCityPost**
> \WebnessStudio\MPL\Model\CityCodeQueryResult addressesZipCodeToCityPost($x_request_id, $x_accounting_code, $body, $x_correlation_id)

►DOM◄ Település lekérdezése a megadott irányítószámhoz.   /   Query settlement name for a given postcode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = WebnessStudio\MPL\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = WebnessStudio\MPL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new WebnessStudio\MPL\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$body = new \WebnessStudio\MPL\Model\CityCodeQueryRequest(); // \WebnessStudio\MPL\Model\CityCodeQueryRequest | 
$x_correlation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)

try {
    $result = $apiInstance->addressesZipCodeToCityPost($x_request_id, $x_accounting_code, $body, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressesZipCodeToCityPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_request_id** | [**string**](../Model/.md)| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) |
 **x_accounting_code** | **string**| Vevőkód   /   The accounting code |
 **body** | [**\WebnessStudio\MPL\Model\CityCodeQueryRequest**](../Model/CityCodeQueryRequest.md)|  | [optional]
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]

### Return type

[**\WebnessStudio\MPL\Model\CityCodeQueryResult**](../Model/CityCodeQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

