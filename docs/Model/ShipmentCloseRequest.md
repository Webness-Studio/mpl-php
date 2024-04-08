# ShipmentCloseRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_date** | [**\DateTime**](\DateTime.md) | A leválogatás kezdő dátuma.   /   Sorting start date. | [optional] 
**to_date** | [**\DateTime**](\DateTime.md) | A leválogatás végdátuma.   /   Sorting end date. | [optional] 
**tracking_numbers** | **string[]** | Postai azonosítók (ragszámok) felsorolása.   /   List of postal identifiers (tracking numbers). | [optional] 
**check_list** | **bool** | Szállítólevelet kér PDF formátumban. Ez egy, a csomagok fizikai átvételekor használt papír alapú elismervény, amin kézzel lehet rögzíteni az átadott/átvett csomagok listáját.   /   Request a delivery note in PDF format. This is a paper-based receipt used for the physical receipt of the parcels, on which the list of delivered/received parcels can be entered manually. | [optional] 
**check_list_with_price** | **bool** | Feladási díjak megjelenítése az eredményben.   /   Show postage fees in the profit and loss account. | [optional] 
**tag** | **string** | Milyen cimkével ellátott csomagokat szűrjük.   /   Parcels with which label are sorted. | [optional] 
**request_id** | **string** | Egy korábbi zárás-kérésre adott válaszunk megismétlése. (Olyankor hasznos, ha pl. time-out miatt nem ért oda a PDF, de azért szükség lenne rá.)   /   Repeating our response for a previous request for closing. (It is useful in cases when the PDF did not arrive because of time-out, but it would be necessary.) | [optional] 
**summary_list** | **bool** | Feladás összesítő kérése PDF formátumban   /   Request for dispatch summary in PDF format | [optional] 
**single_file** | **bool** | A jegyzékek egy pdf fájlban vagy külön pdf fájlokban készüljenek.   /   Lists shall be prepared in one PDF file or in separate PDF files. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

