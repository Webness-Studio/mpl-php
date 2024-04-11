# WebnessStudio\MPL\ShipmentApi

All URIs are relative to https://sandbox.api.posta.hu/v2/mplapi, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shipmentsClosePost()**](ShipmentApi.md#shipmentsClosePost) | **POST** /shipments/close | Jegyzékzárási kérés. Egyazon beszállítással feladni kívánt csomagok halmazának zárása, továbbá a zárásról egy szállítólevél igénylése. A lezárandó szállítmányokban alkalmazott feladói adatok (megállapodás, feladói név, feladói cím, bankszámla), illetve az irány (inverz?) függvényében a válaszunk akár több objektumot is tartalmazhat.   /   Request for closing the list. Closing a set of mail items to be dispatched with the same transport, and requesting a delivery note on the closing of the list. Depending on the data (agreement, sender’s name, sender’s address, bank account) and direction (inverse?) used in the shipments to be closed, our response may contain several objects. |
| [**shipmentsGet()**](ShipmentApi.md#shipmentsGet) | **GET** /shipments | Visszaadja, hogy az adott ügyfél milyen csomagjairól mit tud opcionálisan csak a megadott időpontok között és megadott darabszámig.   /   Indicates what is known about what parcels of the given customer, optionally, only between the specified times and up to the specified number of parcels. |
| [**shipmentsLabelGet()**](ShipmentApi.md#shipmentsLabelGet) | **GET** /shipments/label | Csomag(ok) címiratának lekérése.    /   Query address label of parcel(s) |
| [**shipmentsPost()**](ShipmentApi.md#shipmentsPost) | **POST** /shipments | Csomagadat(ok) beküldése.   /   Submission of parcel data. |
| [**shipmentsTrackingNumberDelete()**](ShipmentApi.md#shipmentsTrackingNumberDelete) | **DELETE** /shipments/{trackingNumber} | Ragszám szerinti tétel törlése.   /   Deletion of item by tracking number. |
| [**shipmentsTrackingNumberGet()**](ShipmentApi.md#shipmentsTrackingNumberGet) | **GET** /shipments/{trackingNumber} | Ragszám szerinti feladandó tétel lekérdezése.   /   Querying of item to be sent through tracking number. |
| [**shipmentsTrackingNumberItemPost()**](ShipmentApi.md#shipmentsTrackingNumberItemPost) | **POST** /shipments/{trackingNumber}/item | Új csomag(ok) felvétele meglevő nem együtt kézbesítendő szállítmányba.   /   Adding of new parcel(s) to an existing separately deliverable consignment. |


## `shipmentsClosePost()`

```php
shipmentsClosePost($x_request_id, $x_accounting_code, $x_correlation_id, $shipment_close_request): \WebnessStudio\MPL\Model\ShipmentCloseResult[]
```

Jegyzékzárási kérés. Egyazon beszállítással feladni kívánt csomagok halmazának zárása, továbbá a zárásról egy szállítólevél igénylése. A lezárandó szállítmányokban alkalmazott feladói adatok (megállapodás, feladói név, feladói cím, bankszámla), illetve az irány (inverz?) függvényében a válaszunk akár több objektumot is tartalmazhat.   /   Request for closing the list. Closing a set of mail items to be dispatched with the same transport, and requesting a delivery note on the closing of the list. Depending on the data (agreement, sender’s name, sender’s address, bank account) and direction (inverse?) used in the shipments to be closed, our response may contain several objects.

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


$apiInstance = new WebnessStudio\MPL\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = 'x_request_id_example'; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = 'x_accounting_code_example'; // string | Vevőkód   /   The accounting code
$x_correlation_id = 'x_correlation_id_example'; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)
$shipment_close_request = new \WebnessStudio\MPL\Model\ShipmentCloseRequest(); // \WebnessStudio\MPL\Model\ShipmentCloseRequest | 

try {
    $result = $apiInstance->shipmentsClosePost($x_request_id, $x_accounting_code, $x_correlation_id, $shipment_close_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsClosePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_id** | **string**| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) | |
| **x_accounting_code** | **string**| Vevőkód   /   The accounting code | |
| **x_correlation_id** | **string**| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional] |
| **shipment_close_request** | [**\WebnessStudio\MPL\Model\ShipmentCloseRequest**](../Model/ShipmentCloseRequest.md)|  | [optional] |

### Return type

[**\WebnessStudio\MPL\Model\ShipmentCloseResult[]**](../Model/ShipmentCloseResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsGet()`

```php
shipmentsGet($x_request_id, $x_accounting_code, $x_correlation_id, $from_date, $to_date, $tracking_numbers, $tag): \WebnessStudio\MPL\Model\ShipmentQueryResult[]
```

Visszaadja, hogy az adott ügyfél milyen csomagjairól mit tud opcionálisan csak a megadott időpontok között és megadott darabszámig.   /   Indicates what is known about what parcels of the given customer, optionally, only between the specified times and up to the specified number of parcels.

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


$apiInstance = new WebnessStudio\MPL\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = 'x_request_id_example'; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = 'x_accounting_code_example'; // string | Vevőkód   /   The accounting code
$x_correlation_id = 'x_correlation_id_example'; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)
$from_date = 2020.01.05.; // \DateTime | Mettől szűrjön a lekérdezés.   /   Filter the query from.
$to_date = 2020.01.10.; // \DateTime | Meddig szűrjön a lekérdezés.   /   Filter the query to.
$tracking_numbers = array('tracking_numbers_example'); // string[] | A kiválasztott postai azonosítók (ragszámok)   /   Selected postal IDs
$tag = 1. telephely; // string | Küldemény cimkéje   /   Mail item label

try {
    $result = $apiInstance->shipmentsGet($x_request_id, $x_accounting_code, $x_correlation_id, $from_date, $to_date, $tracking_numbers, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_id** | **string**| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) | |
| **x_accounting_code** | **string**| Vevőkód   /   The accounting code | |
| **x_correlation_id** | **string**| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional] |
| **from_date** | **\DateTime**| Mettől szűrjön a lekérdezés.   /   Filter the query from. | [optional] |
| **to_date** | **\DateTime**| Meddig szűrjön a lekérdezés.   /   Filter the query to. | [optional] |
| **tracking_numbers** | [**string[]**](../Model/string.md)| A kiválasztott postai azonosítók (ragszámok)   /   Selected postal IDs | [optional] |
| **tag** | **string**| Küldemény cimkéje   /   Mail item label | [optional] |

### Return type

[**\WebnessStudio\MPL\Model\ShipmentQueryResult[]**](../Model/ShipmentQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsLabelGet()`

```php
shipmentsLabelGet($x_request_id, $x_accounting_code, $x_correlation_id, $tracking_numbers, $label_type, $label_format, $order_by, $single_file): \WebnessStudio\MPL\Model\LabelQueryResult[]
```

Csomag(ok) címiratának lekérése.    /   Query address label of parcel(s)

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


$apiInstance = new WebnessStudio\MPL\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = 'x_request_id_example'; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = 'x_accounting_code_example'; // string | Vevőkód   /   The accounting code
$x_correlation_id = 'x_correlation_id_example'; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)
$tracking_numbers = array('tracking_numbers_example'); // string[] | A kiválasztott postai azonosítók (ragszámok)   /   Selected postal IDs (tracking numbers)
$label_type = A5; // string | A címirat formátuma   /   Address label format
$label_format = 'PDF'; // string | A generált címirat formátuma
$order_by = 'order_by_example'; // string | A címiratok sorrendje a PDF fájlon belül.   /   Order of the address labels in the PDF file.
$single_file = true; // bool | Az eredmény címiratok egyetlen PDF fájlban vagy külön PDF fájlokban készüljenek   /   Create address label results in a single PDF or in separate PDFs

try {
    $result = $apiInstance->shipmentsLabelGet($x_request_id, $x_accounting_code, $x_correlation_id, $tracking_numbers, $label_type, $label_format, $order_by, $single_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsLabelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_id** | **string**| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) | |
| **x_accounting_code** | **string**| Vevőkód   /   The accounting code | |
| **x_correlation_id** | **string**| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional] |
| **tracking_numbers** | [**string[]**](../Model/string.md)| A kiválasztott postai azonosítók (ragszámok)   /   Selected postal IDs (tracking numbers) | [optional] |
| **label_type** | **string**| A címirat formátuma   /   Address label format | [optional] |
| **label_format** | **string**| A generált címirat formátuma | [optional] [default to &#39;PDF&#39;] |
| **order_by** | **string**| A címiratok sorrendje a PDF fájlon belül.   /   Order of the address labels in the PDF file. | [optional] |
| **single_file** | **bool**| Az eredmény címiratok egyetlen PDF fájlban vagy külön PDF fájlokban készüljenek   /   Create address label results in a single PDF or in separate PDFs | [optional] |

### Return type

[**\WebnessStudio\MPL\Model\LabelQueryResult[]**](../Model/LabelQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsPost()`

```php
shipmentsPost($x_request_id, $x_accounting_code, $x_correlation_id, $shipment_create_request): \WebnessStudio\MPL\Model\ShipmentCreateResult[]
```

Csomagadat(ok) beküldése.   /   Submission of parcel data.

Egy hívásban legfeljebb 100 szállítmány adatai küldhetők be.              Szállítmányon belül a csomagok száma nincs korlátozva, de az egyszerre beküldött tételek számának növelésével a feldolgozási idő is növekedni fog.              A túl hosszú feldolgozási idő a hívó oldalon timeoutot eredményezhet, emiatt célszerű ezt tapasztalati úton megválasztani.\\               / \\              The data of up to 100 consignments can be submitted in one call. There is no limit to the number of parcels within a consignment, but with the increasing item submissions, the handling time will also increase. It the handling time is too long it may result in a timeout on the call page, therefore it is advisable to choose it based on experience.

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


$apiInstance = new WebnessStudio\MPL\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = 'x_request_id_example'; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = 'x_accounting_code_example'; // string | Vevőkód   /   The accounting code
$x_correlation_id = 'x_correlation_id_example'; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)
$shipment_create_request = array(new \WebnessStudio\MPL\Model\ShipmentCreateRequest()); // \WebnessStudio\MPL\Model\ShipmentCreateRequest[] | Az új szállítmányok értékei JSON formátumban.

try {
    $result = $apiInstance->shipmentsPost($x_request_id, $x_accounting_code, $x_correlation_id, $shipment_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_id** | **string**| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) | |
| **x_accounting_code** | **string**| Vevőkód   /   The accounting code | |
| **x_correlation_id** | **string**| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional] |
| **shipment_create_request** | [**\WebnessStudio\MPL\Model\ShipmentCreateRequest[]**](../Model/ShipmentCreateRequest.md)| Az új szállítmányok értékei JSON formátumban. | [optional] |

### Return type

[**\WebnessStudio\MPL\Model\ShipmentCreateResult[]**](../Model/ShipmentCreateResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsTrackingNumberDelete()`

```php
shipmentsTrackingNumberDelete($x_request_id, $x_accounting_code, $tracking_number, $x_correlation_id): \WebnessStudio\MPL\Model\ShipmentDeleteResult
```

Ragszám szerinti tétel törlése.   /   Deletion of item by tracking number.

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


$apiInstance = new WebnessStudio\MPL\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = 'x_request_id_example'; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = 'x_accounting_code_example'; // string | Vevőkód   /   The accounting code
$tracking_number = 'tracking_number_example'; // string | Szállítmány azonosító   /   Postal ID
$x_correlation_id = 'x_correlation_id_example'; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)

try {
    $result = $apiInstance->shipmentsTrackingNumberDelete($x_request_id, $x_accounting_code, $tracking_number, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsTrackingNumberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_id** | **string**| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) | |
| **x_accounting_code** | **string**| Vevőkód   /   The accounting code | |
| **tracking_number** | **string**| Szállítmány azonosító   /   Postal ID | |
| **x_correlation_id** | **string**| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional] |

### Return type

[**\WebnessStudio\MPL\Model\ShipmentDeleteResult**](../Model/ShipmentDeleteResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsTrackingNumberGet()`

```php
shipmentsTrackingNumberGet($x_request_id, $x_accounting_code, $tracking_number, $x_correlation_id): \WebnessStudio\MPL\Model\ShipmentQueryResult
```

Ragszám szerinti feladandó tétel lekérdezése.   /   Querying of item to be sent through tracking number.

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


$apiInstance = new WebnessStudio\MPL\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = 'x_request_id_example'; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = 'x_accounting_code_example'; // string | Vevőkód   /   The accounting code
$tracking_number = 'tracking_number_example'; // string | Szállítmány azonosító   /   Postal ID
$x_correlation_id = 'x_correlation_id_example'; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)

try {
    $result = $apiInstance->shipmentsTrackingNumberGet($x_request_id, $x_accounting_code, $tracking_number, $x_correlation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsTrackingNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_id** | **string**| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) | |
| **x_accounting_code** | **string**| Vevőkód   /   The accounting code | |
| **tracking_number** | **string**| Szállítmány azonosító   /   Postal ID | |
| **x_correlation_id** | **string**| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional] |

### Return type

[**\WebnessStudio\MPL\Model\ShipmentQueryResult**](../Model/ShipmentQueryResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsTrackingNumberItemPost()`

```php
shipmentsTrackingNumberItemPost($x_request_id, $x_accounting_code, $tracking_number, $x_correlation_id, $shipment_item_add_request): \WebnessStudio\MPL\Model\ShipmentItemAddResult[]
```

Új csomag(ok) felvétele meglevő nem együtt kézbesítendő szállítmányba.   /   Adding of new parcel(s) to an existing separately deliverable consignment.

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


$apiInstance = new WebnessStudio\MPL\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_request_id = 'x_request_id_example'; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = 'x_accounting_code_example'; // string | Vevőkód   /   The accounting code
$tracking_number = 'tracking_number_example'; // string | 
$x_correlation_id = 'x_correlation_id_example'; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)
$shipment_item_add_request = new \WebnessStudio\MPL\Model\ShipmentItemAddRequest(); // \WebnessStudio\MPL\Model\ShipmentItemAddRequest | 

try {
    $result = $apiInstance->shipmentsTrackingNumberItemPost($x_request_id, $x_accounting_code, $tracking_number, $x_correlation_id, $shipment_item_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentsTrackingNumberItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_request_id** | **string**| A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) | |
| **x_accounting_code** | **string**| Vevőkód   /   The accounting code | |
| **tracking_number** | **string**|  | |
| **x_correlation_id** | **string**| Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) | [optional] |
| **shipment_item_add_request** | [**\WebnessStudio\MPL\Model\ShipmentItemAddRequest**](../Model/ShipmentItemAddRequest.md)|  | [optional] |

### Return type

[**\WebnessStudio\MPL\Model\ShipmentItemAddResult[]**](../Model/ShipmentItemAddResult.md)

### Authorization

[basic_auth](../../README.md#basic_auth), [oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
