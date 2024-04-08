# ShipmentCreateResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webshop_id** | **string** | Az adott szállítmány azonosítója. A kérésben kapott azonosítókat ismételjük meg itt, ez alapján lehet párosítani a választ a kéréssel.   /   The identifier of the given consignment. The IDs received in the request should be repeated here, based on which the response can be paired with the request. | [optional] 
**tracking_number** | **string** | A posta által kiosztott szállítmányazonosító   /   Consignment ID assigned by Magyar Posta | [optional] 
**replacement_tracking_number** | **string** | Amennyiben cserecsomag szolgáltatást vett igénybe, úgy az alapcsomag azonosítója.   /   If you used a replacement parcel service, the identifier of the base parcel. | [optional] 
**replacement_labels** | [**\Swagger\Client\Model\ReplacementLabel[]**](ReplacementLabel.md) | Amennyiben cserecsomag szolgáltatást vett igénybe, úgy az inverz csomag(ok) címiratai.   /   If you used a replacement parcel service, the address labels of the inverse parcel(s). | [optional] 
**package_tracking_numbers** | **string[]** | Szállítmányhoz tartozó csomagok azonosítói   /   Identifiers of the parcels belonging to the consignment | [optional] 
**dispatch_id** | **int** | 8 számjegyből álló feladásazonosító. Ezt az azonosítót a feladónak használnia kell majd az automatánál történő feladáskor.  /   8-digit dispatch ID. This ID will have to be used by the sender when dispatching at a parcel machine. | [optional] 
**suggested_recipient_post_code** | **string** | Amennyiben a címzett címe nem található a postai adatbázisban, akkor a posta által javasolt irányítószám.   /   If the recipient&#x27;s address is not in the postal database, the postcode suggested by Magyar Posta. | [optional] 
**suggested_recipient_city** | **string** | Amennyiben a címzett címe nem található a postai adatbázisban, akkor a posta által javasolt település.   /   If the recipient’s address is not in the postal database, the settlement suggested by Magyar Posta. | [optional] 
**suggested_recipient_address** | **string** | Amennyiben a címzett címe nem található a postai adatbázisban, akkor a posta által javasolt cím.   /   If the recipient&#x27;s address is not in the postal database, the address suggested by Magyar Posta. | [optional] 
**label** | **string** | Címirat PDF formátumban base64 enkódolva.   /   Address label in PDF format base64 encoded. | [optional] 
**errors** | [**\Swagger\Client\Model\ErrorDescriptor[]**](ErrorDescriptor.md) | A kérés végrehajtása során észlelt hibák. Amennyiben van hibalista, úgy az adott kérés sikertelenül zárult.   /   Errors detected during request execution. If there is an error list, the request was unsuccessful. | [optional] 
**warnings** | [**\Swagger\Client\Model\WarningDescriptor[]**](WarningDescriptor.md) | A kérés végrehajtása során észlelt hiányosságok. Amennyiben a lista tartalmaz elemet, úgy az adott kérés sikeresen zárult.   /   Deficiencies detected during the execution of the request. If the list contains an item, the request was completed successfully. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

