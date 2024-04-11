# WebnessStudio\MPL\DeliveryPlaceApi

All URIs are relative to https://sandbox.api.posta.hu/v2/mplapi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deliveryplacePost()**](DeliveryPlaceApi.md#deliveryplacePost) | **POST** /deliveryplace | ►DOM◄ Fixponti kézbesítési helyek lekérdezése   /   Query pick-up delivery locations |


## `deliveryplacePost()`

```php
deliveryplacePost($x_request_id, $x_accounting_code, $x_correlation_id, $delivery_place_request): \WebnessStudio\MPL\Model\DeliveryPlaceResult[]
```

►DOM◄ Fixponti kézbesítési helyek lekérdezése   /   Query pick-up delivery locations

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


$apiInstance = new WebnessStudio\MPL\Api\DeliveryPlaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = 'x_request_id_example'; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = 'x_accounting_code_example'; // string | Vevőkód   /   The accounting code
$x_correlation_id = 'x_correlation_id_example'; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)
$delivery_place_request = new \WebnessStudio\MPL\Model\DeliveryPlaceRequest(); // \WebnessStudio\MPL\Model\DeliveryPlaceRequest | 

try {
    $result = $apiInstance->deliveryplacePost($x_request_id, $x_accounting_code, $x_correlation_id, $delivery_place_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryPlaceApi->deliveryplacePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_id** | **string**| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) | |
| **x_accounting_code** | **string**| Vevőkód   /   The accounting code | |
| **x_correlation_id** | **string**| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional] |
| **delivery_place_request** | [**\WebnessStudio\MPL\Model\DeliveryPlaceRequest**](../Model/DeliveryPlaceRequest.md)|  | [optional] |

### Return type

[**\WebnessStudio\MPL\Model\DeliveryPlaceResult[]**](../Model/DeliveryPlaceResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
