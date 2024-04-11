# # DeliveryAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_code** | **string** | ►INT◄ MaxLength: 10 \\  Irányítószám   /   Postcode |
**city** | **string** | Helység   /   Settlement |
**address** | **string** | ►INT◄ MaxLength: 64 \\  Az utca és házszám.   /   Street and house number. |
**parcel_pickup_site** | **string** | ►DOM◄ Postapont/csomagautomata/postahely neve, amennyiben oda kérik a szállítást. Ebben az esetben is meg kell adni a címzett címét.   /   Name of PostaPoint/parcel terminal/postal outlet, if delivery is requested there. In this case, the recipient&#39;s address must also be provided. | [optional]
**remark** | **string** | Opcionális megjegyzés.   /   Optional remark. | [optional]
**country_code** | **string** | Országkód | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
