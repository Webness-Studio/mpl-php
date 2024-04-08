# DeliveryplacesQueryResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deliveryplace** | **string** | Kézbesítési hely neve   /   Name of place of delivery | [optional] 
**post_code** | **string** | Irányítószám   /   Postcode | [optional] 
**city** | **string** | Helység   /   Settlement | [optional] 
**address** | **string** | Utca és házszám   /   Street and house number | [optional] 
**geocode_lat** | **double** | Földrajzi szélesség koordináta.  /   Geographic latitude coordinate. | [optional] 
**geocode_long** | **double** | Földrajzi hosszúság koordináta.  /   Geographic longitude coordinate. | [optional] 
**id** | **string** | Postai egyedi azonosító. Csomagadat beküldése során a parcelPickupSite mező ezzel az értékkel is tölthető, a neve helyett.  /   Postal unique ID. When posting a shipment, the field of parcelPickupSite can also be filled with it, instead of filling with name. | [optional] 
**errors** | [**\Swagger\Client\Model\ErrorDescriptor[]**](ErrorDescriptor.md) | A kérés végrehajtása során észlelt hibák. Amennyiben van hibalista, úgy az adott kérés sikertelenül zárult.   /   Errors detected during request execution. If there is an error list, the request was unsuccessful. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
