# Swagger\Client\AddressApi

All URIs are relative to *https://sandbox.api.posta.hu/v2/mplapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressesCityToZipCodePost**](AddressApi.md#addressescitytozipcodepost) | **POST** /addresses/cityToZipCode | ►DOM◄ Irányítószámok lekérdezése a megadott településnévhez.   /   Query postcodes for a given settlement name.
[**addressesZipCodeToCityPost**](AddressApi.md#addresseszipcodetocitypost) | **POST** /addresses/zipCodeToCity | ►DOM◄ Település lekérdezése a megadott irányítószámhoz.   /   Query settlement name for a given postcode.

# **addressesCityToZipCodePost**
> \Swagger\Client\Model\ZipCodeQueryResult addressesCityToZipCodePost($x_request_id, $x_accounting_code, $body, $x_correlation_id)

►DOM◄ Irányítószámok lekérdezése a megadott településnévhez.   /   Query postcodes for a given settlement name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$body = new \Swagger\Client\Model\ZipCodeQueryRequest(); // \Swagger\Client\Model\ZipCodeQueryRequest | 
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
 **body** | [**\Swagger\Client\Model\ZipCodeQueryRequest**](../Model/ZipCodeQueryRequest.md)|  | [optional]
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]

### Return type

[**\Swagger\Client\Model\ZipCodeQueryResult**](../Model/ZipCodeQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressesZipCodeToCityPost**
> \Swagger\Client\Model\CityCodeQueryResult addressesZipCodeToCityPost($x_request_id, $x_accounting_code, $body, $x_correlation_id)

►DOM◄ Település lekérdezése a megadott irányítószámhoz.   /   Query settlement name for a given postcode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$body = new \Swagger\Client\Model\CityCodeQueryRequest(); // \Swagger\Client\Model\CityCodeQueryRequest | 
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
 **body** | [**\Swagger\Client\Model\CityCodeQueryRequest**](../Model/CityCodeQueryRequest.md)|  | [optional]
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]

### Return type

[**\Swagger\Client\Model\CityCodeQueryResult**](../Model/CityCodeQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

