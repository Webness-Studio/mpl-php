# ShipmentItemAddRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label_type** | **string** | A címirat elrendezése (mérete, tájolása). Részletes magyarázat a Dokumentáció menüben olvasható. Amennyiben nem érkezik ilyen paraméter, úgy a válasz nem tartalmaz majd címiratot. A címirat később is lekérhető, GET hívással.   /   Layout of postal address label.Detailed explanations can be found in the Documentation menu.If this parameter is not specified, then no manifest will be included in the response. The label can be generated later by a GET request. | [optional] 
**label_format** | **string** | A címirat fájl formátuma. Több címiratot tartalmazó PDF érdekében a szállítmányok beküldését követőn egy külön GET hívással kell címkét kérni.   /   File format of the label. To create a PDF containing multiple labels, an additional GET request need to be sent after the shipments have been submitted. | [optional] [default to 'PDF']
**items** | [**\WebnessStudio/MPL/Model\Model\Item[]**](Item.md) | A tételek (csomagok) felsorolása.   /   List of items (parcels). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

