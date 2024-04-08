# ShipmentCloseResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manifest** | **string** | A generált szállítólevelek (a csomagok fizikai átvételekor használt papír alapú elismervény, amin kézzel lehet rögzíteni az átadott/átvett csomagok listáját).\\  Elektronikus feladójegyzékenként (efj) egy-egy készül belőle.\\   /   Generated delivery notes (a paper-based receipt used for the physical receipt of parcels, on which the list of parcels delivered/accepted can be recorded manually).\\  One electronic posting list(efj) is made of it. | [optional] 
**manifest_sum** | **string** | Feladójegyzék pdf formátumban   /   Posting list in PDF format | [optional] 
**manifest_ra** | **string** | Raklapos feladójegyzék pdf formátumban. Csak raklapos küldemény feladás esetén értelmezett, akkor kötelező kinyomtatni és a futárnak átadni.   /   Posting list for pallet in PDF format. Interpreted only when dispatching a pallet mail item, then it must be printed and handed over to the courier. | [optional] 
**tracking_nr_prices** | [**\Swagger\Client\Model\TrackingNrPrice[]**](TrackingNrPrice.md) | Szállítmány feladási díjak   /   Consignment postage fees | [optional] 
**errors** | [**\Swagger\Client\Model\ErrorDescriptor[]**](ErrorDescriptor.md) | A kérés végrehajtása során észlelt hibák. Amennyiben van hibalista, úgy az adott kérés sikertelenül zárult.   /   Errors detected during request execution. If there is an error list, the request was unsuccessful. | [optional] 
**warnings** | [**\Swagger\Client\Model\WarningDescriptor[]**](WarningDescriptor.md) | A kérés végrehajtása során észlelt hiányosságok. Amennyiben a lista tartalmaz elemet, úgy az adott kérés sikeresen zárult.   /   Deficiencies detected during the execution of the request. If the list contains an item, the request was completed successfully. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

