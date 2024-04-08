# Shipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | [**\Swagger\Client\Model\Sender**](Sender.md) |  | [optional] 
**non_utf8_sender** | [**\Swagger\Client\Model\NonUTF8Sender**](NonUTF8Sender.md) |  | [optional] 
**shipment_date** | [**\DateTime**](\DateTime.md) | A tényleges (fizikai) postára adás tervezett ideje yyyy-MM-dd formátumban   /   Planned time of actual (physical) posting in dd-MM-yyyy format format: date-time | [optional] 
**order_id** | **string** | A webáruház által használt rendelésazonosító.   /   Order ID used by the webshop. | [optional] 
**tag** | **string** | A szállítmányhoz rendelt címke.   /   Label assigned to the consignment. | [optional] 
**tracking_number** | **string** | A posta által kiosztott azonosító.   /   The identifier assigned by Magyar Posta. | [optional] 
**item** | [**\Swagger\Client\Model\ShipmentItem[]**](ShipmentItem.md) | A szállítmányban szereplő csomagok felsorolása.   /   List of parcels included in the consignment. | [optional] 
**recipient** | [**\Swagger\Client\Model\Recipient**](Recipient.md) |  | [optional] 
**non_utf8_recipient** | [**\Swagger\Client\Model\NonUTF8Recipient**](NonUTF8Recipient.md) |  | [optional] 
**payment_mode** | **string** | Azt adja meg, hogy az MPL hogyan fizesse ki az utánvételes csomagok után beszedett díjat a megrendelő számára.   /   Specifies how MPL should pay the customer the fee collected for cash on delivery parcels. | [optional] 
**package_retention** | **int** | A csomag őrzési ideje munkanapban: 0, 5 vagy 10.   /   Retention period of the parcel in business days: 0, 5 or 10. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

