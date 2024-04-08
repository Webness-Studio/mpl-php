# Sender

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agreement** | **string** | Megállapodásszám. Az adathordozó használatára is vonatkozó szerződés azonosítószáma.   /   Agreement number. The contract ID number also applicable to the use of the data carrier. | 
**account_no** | **string** | Feladó bankszámlaszáma, 24 karakter, tagoló kötőjel illetve szóköz nélkül. Kérjük, hogy utánvét nélküli szállítmányok esetén is szerepeljen.   /   Bank account number of the sender, 24 characters. Please also submit it in shipments without COD value. | [optional] 
**contact** | [**\Swagger\Client\Model\Contact**](Contact.md) |  | 
**address** | [**\Swagger\Client\Model\Address**](Address.md) |  | 
**invoice** | [**\Swagger\Client\Model\Invoice**](Invoice.md) |  | [optional] 
**parcel_terminal** | **bool** | Logikai igaz értéke jelzi, hogy a csomagot csomagautomatában fogják feladni. Alapértelmezett értéke hamis, ami postahelyi feladást jelent. Igaz érték esetén a válasz tartalmazni fog egy dispatchID értéket is.  /   If the shipment will be dispatched via parcel locker, this value is true. The default value is false, which means dispatch via post office or postal logistic center. In case of true value, a dispatchId value will be also included in the response. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

