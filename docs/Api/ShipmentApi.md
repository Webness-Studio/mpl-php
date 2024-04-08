# Swagger\Client\ShipmentApi

All URIs are relative to *https://sandbox.api.posta.hu/v2/mplapi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentsClosePost**](ShipmentApi.md#shipmentsclosepost) | **POST** /shipments/close | Jegyzékzárási kérés. Egyazon beszállítással feladni kívánt csomagok halmazának zárása, továbbá a zárásról egy szállítólevél igénylése. A lezárandó szállítmányokban alkalmazott feladói adatok (megállapodás, feladói név, feladói cím, bankszámla), illetve az irány (inverz?) függvényében a válaszunk akár több objektumot is tartalmazhat.   /   Request for closing the list. Closing a set of mail items to be dispatched with the same transport, and requesting a delivery note on the closing of the list. Depending on the data (agreement, sender’s name, sender’s address, bank account) and direction (inverse?) used in the shipments to be closed, our response may contain several objects.
[**shipmentsGet**](ShipmentApi.md#shipmentsget) | **GET** /shipments | Visszaadja, hogy az adott ügyfél milyen csomagjairól mit tud opcionálisan csak a megadott időpontok között és megadott darabszámig.   /   Indicates what is known about what parcels of the given customer, optionally, only between the specified times and up to the specified number of parcels.
[**shipmentsLabelGet**](ShipmentApi.md#shipmentslabelget) | **GET** /shipments/label | Csomag(ok) címiratának lekérése.    /   Query address label of parcel(s)
[**shipmentsPost**](ShipmentApi.md#shipmentspost) | **POST** /shipments | Csomagadat(ok) beküldése.   /   Submission of parcel data.
[**shipmentsTrackingNumberDelete**](ShipmentApi.md#shipmentstrackingnumberdelete) | **DELETE** /shipments/{trackingNumber} | Ragszám szerinti tétel törlése.   /   Deletion of item by tracking number.
[**shipmentsTrackingNumberGet**](ShipmentApi.md#shipmentstrackingnumberget) | **GET** /shipments/{trackingNumber} | Ragszám szerinti feladandó tétel lekérdezése.   /   Querying of item to be sent through tracking number.
[**shipmentsTrackingNumberItemPost**](ShipmentApi.md#shipmentstrackingnumberitempost) | **POST** /shipments/{trackingNumber}/item | Új csomag(ok) felvétele meglevő nem együtt kézbesítendő szállítmányba.   /   Adding of new parcel(s) to an existing separately deliverable consignment.

# **shipmentsClosePost**
> \Swagger\Client\Model\ShipmentCloseResult[] shipmentsClosePost($x_request_id, $x_accounting_code, $body, $x_correlation_id)

Jegyzékzárási kérés. Egyazon beszállítással feladni kívánt csomagok halmazának zárása, továbbá a zárásról egy szállítólevél igénylése. A lezárandó szállítmányokban alkalmazott feladói adatok (megállapodás, feladói név, feladói cím, bankszámla), illetve az irány (inverz?) függvényében a válaszunk akár több objektumot is tartalmazhat.   /   Request for closing the list. Closing a set of mail items to be dispatched with the same transport, and requesting a delivery note on the closing of the list. Depending on the data (agreement, sender’s name, sender’s address, bank account) and direction (inverse?) used in the shipments to be closed, our response may contain several objects.

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

$apiInstance = new Swagger\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$body = new \Swagger\Client\Model\ShipmentCloseRequest(); // \Swagger\Client\Model\ShipmentCloseRequest | 
$x_correlation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)

try {
    $result = $apiInstance->shipmentsClosePost($x_request_id, $x_accounting_code, $body, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsClosePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_request_id** | [**string**](../Model/.md)| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) |
 **x_accounting_code** | **string**| Vevőkód   /   The accounting code |
 **body** | [**\Swagger\Client\Model\ShipmentCloseRequest**](../Model/ShipmentCloseRequest.md)|  | [optional]
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]

### Return type

[**\Swagger\Client\Model\ShipmentCloseResult[]**](../Model/ShipmentCloseResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsGet**
> \Swagger\Client\Model\ShipmentQueryResult[] shipmentsGet($x_request_id, $x_accounting_code, $x_correlation_id, $from_date, $to_date, $tracking_numbers, $tag)

Visszaadja, hogy az adott ügyfél milyen csomagjairól mit tud opcionálisan csak a megadott időpontok között és megadott darabszámig.   /   Indicates what is known about what parcels of the given customer, optionally, only between the specified times and up to the specified number of parcels.

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

$apiInstance = new Swagger\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$x_correlation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)
$from_date = new \DateTime("2013-10-20"); // \DateTime | Mettől szűrjön a lekérdezés.   /   Filter the query from.
$to_date = new \DateTime("2013-10-20"); // \DateTime | Meddig szűrjön a lekérdezés.   /   Filter the query to.
$tracking_numbers = array("tracking_numbers_example"); // string[] | A kiválasztott postai azonosítók (ragszámok)   /   Selected postal IDs
$tag = "tag_example"; // string | Küldemény cimkéje   /   Mail item label

try {
    $result = $apiInstance->shipmentsGet($x_request_id, $x_accounting_code, $x_correlation_id, $from_date, $to_date, $tracking_numbers, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_request_id** | [**string**](../Model/.md)| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) |
 **x_accounting_code** | **string**| Vevőkód   /   The accounting code |
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]
 **from_date** | **\DateTime**| Mettől szűrjön a lekérdezés.   /   Filter the query from. | [optional]
 **to_date** | **\DateTime**| Meddig szűrjön a lekérdezés.   /   Filter the query to. | [optional]
 **tracking_numbers** | [**string[]**](../Model/string.md)| A kiválasztott postai azonosítók (ragszámok)   /   Selected postal IDs | [optional]
 **tag** | **string**| Küldemény cimkéje   /   Mail item label | [optional]

### Return type

[**\Swagger\Client\Model\ShipmentQueryResult[]**](../Model/ShipmentQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsLabelGet**
> \Swagger\Client\Model\LabelQueryResult[] shipmentsLabelGet($x_request_id, $x_accounting_code, $x_correlation_id, $tracking_numbers, $label_type, $label_format, $order_by, $single_file)

Csomag(ok) címiratának lekérése.    /   Query address label of parcel(s)

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

$apiInstance = new Swagger\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$x_correlation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)
$tracking_numbers = array("tracking_numbers_example"); // string[] | A kiválasztott postai azonosítók (ragszámok)   /   Selected postal IDs (tracking numbers)
$label_type = "label_type_example"; // string | A címirat formátuma   /   Address label format
$label_format = "PDF"; // string | A generált címirat formátuma
$order_by = "order_by_example"; // string | A címiratok sorrendje a PDF fájlon belül.   /   Order of the address labels in the PDF file.
$single_file = true; // bool | Az eredmény címiratok egyetlen PDF fájlban vagy külön PDF fájlokban készüljenek   /   Create address label results in a single PDF or in separate PDFs

try {
    $result = $apiInstance->shipmentsLabelGet($x_request_id, $x_accounting_code, $x_correlation_id, $tracking_numbers, $label_type, $label_format, $order_by, $single_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsLabelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_request_id** | [**string**](../Model/.md)| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) |
 **x_accounting_code** | **string**| Vevőkód   /   The accounting code |
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]
 **tracking_numbers** | [**string[]**](../Model/string.md)| A kiválasztott postai azonosítók (ragszámok)   /   Selected postal IDs (tracking numbers) | [optional]
 **label_type** | **string**| A címirat formátuma   /   Address label format | [optional]
 **label_format** | **string**| A generált címirat formátuma | [optional] [default to PDF]
 **order_by** | **string**| A címiratok sorrendje a PDF fájlon belül.   /   Order of the address labels in the PDF file. | [optional]
 **single_file** | **bool**| Az eredmény címiratok egyetlen PDF fájlban vagy külön PDF fájlokban készüljenek   /   Create address label results in a single PDF or in separate PDFs | [optional]

### Return type

[**\Swagger\Client\Model\LabelQueryResult[]**](../Model/LabelQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsPost**
> \Swagger\Client\Model\ShipmentCreateResult[] shipmentsPost($x_request_id, $x_accounting_code, $body, $x_correlation_id)

Csomagadat(ok) beküldése.   /   Submission of parcel data.

Egy hívásban legfeljebb 100 szállítmány adatai küldhetők be.              Szállítmányon belül a csomagok száma nincs korlátozva, de az egyszerre beküldött tételek számának növelésével a feldolgozási idő is növekedni fog.              A túl hosszú feldolgozási idő a hívó oldalon timeoutot eredményezhet, emiatt célszerű ezt tapasztalati úton megválasztani.\\               / \\              The data of up to 100 consignments can be submitted in one call. There is no limit to the number of parcels within a consignment, but with the increasing item submissions, the handling time will also increase. It the handling time is too long it may result in a timeout on the call page, therefore it is advisable to choose it based on experience.

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

$apiInstance = new Swagger\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$body = array(new \Swagger\Client\Model\ShipmentCreateRequest()); // \Swagger\Client\Model\ShipmentCreateRequest[] | Az új szállítmányok értékei JSON formátumban.
$x_correlation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)

try {
    $result = $apiInstance->shipmentsPost($x_request_id, $x_accounting_code, $body, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_request_id** | [**string**](../Model/.md)| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) |
 **x_accounting_code** | **string**| Vevőkód   /   The accounting code |
 **body** | [**\Swagger\Client\Model\ShipmentCreateRequest[]**](../Model/ShipmentCreateRequest.md)| Az új szállítmányok értékei JSON formátumban. | [optional]
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]

### Return type

[**\Swagger\Client\Model\ShipmentCreateResult[]**](../Model/ShipmentCreateResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsTrackingNumberDelete**
> \Swagger\Client\Model\ShipmentDeleteResult shipmentsTrackingNumberDelete($x_request_id, $x_accounting_code, $tracking_number, $x_correlation_id)

Ragszám szerinti tétel törlése.   /   Deletion of item by tracking number.

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

$apiInstance = new Swagger\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$tracking_number = "tracking_number_example"; // string | Szállítmány azonosító   /   Postal ID
$x_correlation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)

try {
    $result = $apiInstance->shipmentsTrackingNumberDelete($x_request_id, $x_accounting_code, $tracking_number, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsTrackingNumberDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_request_id** | [**string**](../Model/.md)| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) |
 **x_accounting_code** | **string**| Vevőkód   /   The accounting code |
 **tracking_number** | **string**| Szállítmány azonosító   /   Postal ID |
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]

### Return type

[**\Swagger\Client\Model\ShipmentDeleteResult**](../Model/ShipmentDeleteResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsTrackingNumberGet**
> \Swagger\Client\Model\ShipmentQueryResult shipmentsTrackingNumberGet($x_request_id, $x_accounting_code, $tracking_number, $x_correlation_id)

Ragszám szerinti feladandó tétel lekérdezése.   /   Querying of item to be sent through tracking number.

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

$apiInstance = new Swagger\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$tracking_number = "tracking_number_example"; // string | Szállítmány azonosító   /   Postal ID
$x_correlation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)

try {
    $result = $apiInstance->shipmentsTrackingNumberGet($x_request_id, $x_accounting_code, $tracking_number, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsTrackingNumberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_request_id** | [**string**](../Model/.md)| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) |
 **x_accounting_code** | **string**| Vevőkód   /   The accounting code |
 **tracking_number** | **string**| Szállítmány azonosító   /   Postal ID |
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]

### Return type

[**\Swagger\Client\Model\ShipmentQueryResult**](../Model/ShipmentQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsTrackingNumberItemPost**
> \Swagger\Client\Model\ShipmentItemAddResult[] shipmentsTrackingNumberItemPost($x_request_id, $x_accounting_code, $tracking_number, $body, $x_correlation_id)

Új csomag(ok) felvétele meglevő nem együtt kézbesítendő szállítmányba.   /   Adding of new parcel(s) to an existing separately deliverable consignment.

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

$apiInstance = new Swagger\Client\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = "x_accounting_code_example"; // string | Vevőkód   /   The accounting code
$tracking_number = "tracking_number_example"; // string | 
$body = new \Swagger\Client\Model\ShipmentItemAddRequest(); // \Swagger\Client\Model\ShipmentItemAddRequest | 
$x_correlation_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)

try {
    $result = $apiInstance->shipmentsTrackingNumberItemPost($x_request_id, $x_accounting_code, $tracking_number, $body, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsTrackingNumberItemPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_request_id** | [**string**](../Model/.md)| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) |
 **x_accounting_code** | **string**| Vevőkód   /   The accounting code |
 **tracking_number** | **string**|  |
 **body** | [**\Swagger\Client\Model\ShipmentItemAddRequest**](../Model/ShipmentItemAddRequest.md)|  | [optional]
 **x_correlation_id** | [**string**](../Model/.md)| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional]

### Return type

[**\Swagger\Client\Model\ShipmentItemAddResult[]**](../Model/ShipmentItemAddResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

