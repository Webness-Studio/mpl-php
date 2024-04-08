# Swagger\Client\ReportApi

All URIs are relative to *https://sandbox.api.posta.hu/v2/mplapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsPost**](ReportApi.md#reportspost) | **POST** /reports | Felvett csomagokról készült riportok lekérése.   /   Reports on dispatched packages.

# **reportsPost**
> \Swagger\Client\Model\ReportsQueryResult reportsPost($x_request_id, $x_accounting_code, $body, $x_correlation_id)

Felvett csomagokról készült riportok lekérése.   /   Reports on dispatched packages.

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

$apiInstance = new Swagger\Client\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$body = new \Swagger\Client\Model\ReportsQueryRequest(); // \Swagger\Client\Model\ReportsQueryRequest | 
$x_correlation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)

try {
    $result = $apiInstance->reportsPost($x_request_id, $x_accounting_code, $body, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_request_id** | [**string**](../Model/.md)| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) |
 **x_accounting_code** | **string**| Vevőkód   /   The accounting code |
 **body** | [**\Swagger\Client\Model\ReportsQueryRequest**](../Model/ReportsQueryRequest.md)|  | [optional]
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]

### Return type

[**\Swagger\Client\Model\ReportsQueryResult**](../Model/ReportsQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

