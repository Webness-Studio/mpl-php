# ShipmentItemAddResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | A posta által kiosztott azonosító (ragszám).   /   Identifier (tracking number) assigned by Magyar Posta. | [optional] 
**replacement_tracking_number** | **string** | A szállítmányhoz készült alapcsomagok, posta által kiosztott azonosítói (ragszám).   /   Identifiers (tracking number) assigned by Magyar Posta to the base parcels for the consignment. | [optional] 
**package_tracking_numbers** | **string[]** | Szállítmányhoz tartozó csomagok azonosítói   /   Identifiers of the parcels belonging to the consignment | [optional] 
**label** | **string** | Címirat PDF formátumban base64 enkódolva.   /   Address label in PDF format base64 encoded. | [optional] 
**errors** | [**\Swagger\Client\Model\ErrorDescriptor[]**](ErrorDescriptor.md) | A kérés végrehajtása során észlelt hibák. Amennyiben van hibalista, úgy az adott kérés sikertelenül zárult.   /   Errors detected during request execution. If there is an error list, the request was unsuccessful. | [optional] 
**warnings** | [**\Swagger\Client\Model\WarningDescriptor[]**](WarningDescriptor.md) | A kérés végrehajtása során észlelt hiányosságok. Amennyiben a lista tartalmaz elemet, úgy az adott kérés sikeresen zárult.   /   Deficiencies detected during the execution of the request. If the list contains an item, the request was completed successfully. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

