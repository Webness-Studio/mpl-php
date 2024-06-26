# OpenAPIClient-php

<div style='width: 100%;margin: 0px auto;'>
    <div style='float: left; width:47%'>
        <h1>MPL API</h1>
        <h2> - címiratok nyomtatása, riportok lekérése, fixpontok lekérdezése </h2>
        <div>&nbsp;</div>
        <p>A végpontok működését leíró dokumentációt lentebb találja.</p>
        <p>A fejlesztéshez szükséges további információkat, így az integrációs javaslatot, technikai leírást (token kérés), példa json-öket, stb., a fenti Dokumentáció menüre kattintva érheti el.</p>
        <p>A lentebbi dokumentációban a</p>
        <ul>
            <li>csak belföldi alapszolgáltatáshoz használható elemeket a leírás elején szereplő ►DOM◄,</li>
            <li>csak nemzetközi vonatkozásban használható elemeket a leírás elején szereplő ►INT◄</li>
        </ul>
        <p>szöveg jelzi.</p>
        <p>Ahol nem szerepel semmilyen jelölés, azok az elemek mindkét vonatkozásban használhatók.</p>
    </div>
    <div style='float:right; width:47%'>
        <h1>MPL API</h1>
        <h2> - query of fixed points, printing of address labels, request for reports </h2>
        <div>&nbsp;</div>
        <p>Specification describing the operation of endpoints can be found below.</p>
        <p>Any further information necessary for the development, such as the integration suggestion, technical description (token request), example JSONs, etc., are available by clicking on the Documentation menu above.</p>
        <p>In the specification below,</p>
        <ul>
            <li>the elements that may be used only for domestic basic service are indicated by the lettering ►DOM◄,</li>
            <li>the elements that may be used only in international regard are indicated by the lettering ►INT◄</li>
        </ul>
        <p>at the beginning of the description.</p>
        <p>Where no indication is provided, those elements can be used in both cases.</p>
    </div>
</div>
<div id=\"mplapi_descriptionContainer_bottom\"></div><div style='clear: both;'>

### Az API a következő URL-eken érhető el: / This API can be accessed at the following URLs: ###
<div><table><tr><td><b>Környezet / Environment</b></td><td><b>API URL</b></td><td><b>OAuth2 Token URL</b></td></tr><tr><td>Sandbox</td><td>https://sandbox.api.posta.hu/v2/mplapi</td><td>https://sandbox.api.posta.hu/oauth2/token</td></tr><tr><td>Production</td><td>https://core.api.posta.hu/v2/mplapi</td><td>https://core.api.posta.hu/oauth2/token</td></tr></table>
Az API ezen az oldalon a Sandbox környezetben tesztelhető. / You can test the API on this page in the Sandbox environment.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/webness-studio/mpl-php.git"
    }
  ],
  "require": {
    "webness-studio/mpl-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$x_request_id = 'x_request_id_example'; // string | A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format)
$x_accounting_code = 'x_accounting_code_example'; // string | Vevőkód   /   The accounting code
$x_correlation_id = 'x_correlation_id_example'; // string | Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format)
$zip_code_query_request = new \WebnessStudio\MPL\Model\ZipCodeQueryRequest(); // \WebnessStudio\MPL\Model\ZipCodeQueryRequest

try {
    $result = $apiInstance->addressesCityToZipCodePost($x_request_id, $x_accounting_code, $x_correlation_id, $zip_code_query_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->addressesCityToZipCodePost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://sandbox.api.posta.hu/v2/mplapi*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressApi* | [**addressesCityToZipCodePost**](docs/Api/AddressApi.md#addressescitytozipcodepost) | **POST** /addresses/cityToZipCode | ►DOM◄ Irányítószámok lekérdezése a megadott településnévhez.   /   Query postcodes for a given settlement name.
*AddressApi* | [**addressesZipCodeToCityPost**](docs/Api/AddressApi.md#addresseszipcodetocitypost) | **POST** /addresses/zipCodeToCity | ►DOM◄ Település lekérdezése a megadott irányítószámhoz.   /   Query settlement name for a given postcode.
*DeliveryPlaceApi* | [**deliveryplacePost**](docs/Api/DeliveryPlaceApi.md#deliveryplacepost) | **POST** /deliveryplace | ►DOM◄ Fixponti kézbesítési helyek lekérdezése   /   Query pick-up delivery locations
*ReportApi* | [**reportsPost**](docs/Api/ReportApi.md#reportspost) | **POST** /reports | Felvett csomagokról készült riportok lekérése.   /   Reports on dispatched packages.
*ShipmentApi* | [**shipmentsClosePost**](docs/Api/ShipmentApi.md#shipmentsclosepost) | **POST** /shipments/close | Jegyzékzárási kérés. Egyazon beszállítással feladni kívánt csomagok halmazának zárása, továbbá a zárásról egy szállítólevél igénylése. A lezárandó szállítmányokban alkalmazott feladói adatok (megállapodás, feladói név, feladói cím, bankszámla), illetve az irány (inverz?) függvényében a válaszunk akár több objektumot is tartalmazhat.   /   Request for closing the list. Closing a set of mail items to be dispatched with the same transport, and requesting a delivery note on the closing of the list. Depending on the data (agreement, sender’s name, sender’s address, bank account) and direction (inverse?) used in the shipments to be closed, our response may contain several objects.
*ShipmentApi* | [**shipmentsGet**](docs/Api/ShipmentApi.md#shipmentsget) | **GET** /shipments | Visszaadja, hogy az adott ügyfél milyen csomagjairól mit tud opcionálisan csak a megadott időpontok között és megadott darabszámig.   /   Indicates what is known about what parcels of the given customer, optionally, only between the specified times and up to the specified number of parcels.
*ShipmentApi* | [**shipmentsLabelGet**](docs/Api/ShipmentApi.md#shipmentslabelget) | **GET** /shipments/label | Csomag(ok) címiratának lekérése.    /   Query address label of parcel(s)
*ShipmentApi* | [**shipmentsPost**](docs/Api/ShipmentApi.md#shipmentspost) | **POST** /shipments | Csomagadat(ok) beküldése.   /   Submission of parcel data.
*ShipmentApi* | [**shipmentsTrackingNumberDelete**](docs/Api/ShipmentApi.md#shipmentstrackingnumberdelete) | **DELETE** /shipments/{trackingNumber} | Ragszám szerinti tétel törlése.   /   Deletion of item by tracking number.
*ShipmentApi* | [**shipmentsTrackingNumberGet**](docs/Api/ShipmentApi.md#shipmentstrackingnumberget) | **GET** /shipments/{trackingNumber} | Ragszám szerinti feladandó tétel lekérdezése.   /   Querying of item to be sent through tracking number.
*ShipmentApi* | [**shipmentsTrackingNumberItemPost**](docs/Api/ShipmentApi.md#shipmentstrackingnumberitempost) | **POST** /shipments/{trackingNumber}/item | Új csomag(ok) felvétele meglevő nem együtt kézbesítendő szállítmányba.   /   Adding of new parcel(s) to an existing separately deliverable consignment.

## Models

- [Address](docs/Model/Address.md)
- [ApiGatewayErrorResponse](docs/Model/ApiGatewayErrorResponse.md)
- [ApiGatewayErrorResponseFault](docs/Model/ApiGatewayErrorResponseFault.md)
- [ApiGatewayErrorResponseFaultDetail](docs/Model/ApiGatewayErrorResponseFaultDetail.md)
- [CityCodeQueryRequest](docs/Model/CityCodeQueryRequest.md)
- [CityCodeQueryResult](docs/Model/CityCodeQueryResult.md)
- [Contact](docs/Model/Contact.md)
- [Custom](docs/Model/Custom.md)
- [DeliveryAddress](docs/Model/DeliveryAddress.md)
- [DeliveryPlaceRequest](docs/Model/DeliveryPlaceRequest.md)
- [DeliveryPlaceResult](docs/Model/DeliveryPlaceResult.md)
- [DeliveryPlacesQuery](docs/Model/DeliveryPlacesQuery.md)
- [DeliveryplacesQueryResult](docs/Model/DeliveryplacesQueryResult.md)
- [Document](docs/Model/Document.md)
- [ErrorDescriptor](docs/Model/ErrorDescriptor.md)
- [Invoice](docs/Model/Invoice.md)
- [Item](docs/Model/Item.md)
- [LabelQueryResult](docs/Model/LabelQueryResult.md)
- [NonUTF8Address](docs/Model/NonUTF8Address.md)
- [NonUTF8Contact](docs/Model/NonUTF8Contact.md)
- [NonUTF8Recipient](docs/Model/NonUTF8Recipient.md)
- [NonUTF8Sender](docs/Model/NonUTF8Sender.md)
- [Recipient](docs/Model/Recipient.md)
- [ReplacementLabel](docs/Model/ReplacementLabel.md)
- [ReplacementPackage](docs/Model/ReplacementPackage.md)
- [ReportsQueryRequest](docs/Model/ReportsQueryRequest.md)
- [ReportsQueryResult](docs/Model/ReportsQueryResult.md)
- [Sender](docs/Model/Sender.md)
- [Service](docs/Model/Service.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentCloseRequest](docs/Model/ShipmentCloseRequest.md)
- [ShipmentCloseResult](docs/Model/ShipmentCloseResult.md)
- [ShipmentCreateRequest](docs/Model/ShipmentCreateRequest.md)
- [ShipmentCreateResult](docs/Model/ShipmentCreateResult.md)
- [ShipmentDeleteResult](docs/Model/ShipmentDeleteResult.md)
- [ShipmentItem](docs/Model/ShipmentItem.md)
- [ShipmentItemAddRequest](docs/Model/ShipmentItemAddRequest.md)
- [ShipmentItemAddResult](docs/Model/ShipmentItemAddResult.md)
- [ShipmentQueryResult](docs/Model/ShipmentQueryResult.md)
- [TrackingNrPrice](docs/Model/TrackingNrPrice.md)
- [TrackingSubscribeRequest](docs/Model/TrackingSubscribeRequest.md)
- [TrackingSubscribeResult](docs/Model/TrackingSubscribeResult.md)
- [UnitValue](docs/Model/UnitValue.md)
- [WarningDescriptor](docs/Model/WarningDescriptor.md)
- [ZipCodeQueryRequest](docs/Model/ZipCodeQueryRequest.md)
- [ZipCodeQueryResult](docs/Model/ZipCodeQueryResult.md)

## Authorization

Authentication schemes defined for the API:
### oauth2_client_credentials

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

### basic_auth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v2`
    - Generator version: `7.4.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
