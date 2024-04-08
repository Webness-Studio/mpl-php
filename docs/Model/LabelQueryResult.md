# LabelQueryResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | A postai azonosító (ragszám). | [optional] 
**label** | **string** | A base64 kódolt PDF formátumú címirat. | [optional] 
**errors** | [**\Swagger\Client\Model\ErrorDescriptor[]**](ErrorDescriptor.md) | A kérés végrehajtása során észlelt hibák. Amennyiben van hibalista, úgy az adott kérés sikertelenül zárult. | [optional] 
**warnings** | [**\Swagger\Client\Model\WarningDescriptor[]**](WarningDescriptor.md) | A kérés végrehajtása során észlelt hiányosságok. Amennyiben a lista tartalmaz elemet, úgy az adott kérés sikeresen zárult. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

