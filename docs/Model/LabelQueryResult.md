# # LabelQueryResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_number** | **string** | A postai azonosító (ragszám). | [optional]
**label** | **string** | A base64 kódolt PDF formátumú címirat. | [optional]
**errors** | [**\WebnessStudio\MPL\Model\ErrorDescriptor[]**](ErrorDescriptor.md) | A kérés végrehajtása során észlelt hibák. Amennyiben van hibalista, úgy az adott kérés sikertelenül zárult. | [optional]
**warnings** | [**\WebnessStudio\MPL\Model\WarningDescriptor[]**](WarningDescriptor.md) | A kérés végrehajtása során észlelt hiányosságok. Amennyiben a lista tartalmaz elemet, úgy az adott kérés sikeresen zárult. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
