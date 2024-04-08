# Service

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**basic** | **string** | Az alapszolgáltatás   /   Basic service | 
**extra** | **string[]** | A kiválasztott többletszolgáltatások kódjai.   /   Codes for the selected additional services. | [optional] 
**cod** | **double** | Az utánvét összege Ft-ban egész számként   /   The amount of insured items in HUF, as integer, is 2 million max. | [optional] 
**value** | **int** | Az értéknyilvánítás (biztosítás) összege Ft-ban, egész számként, max 2 millió.   /   The amount of the value insurance in HUF as a whole number | [optional] 
**delivery_mode** | **string** | A kézbesítés módja / Method of delivery. | 
**cod_currency** | **string** | ►INT◄ Utánvét devizaneme  / Cash on delivery currency | [optional] 
**supplementary_sheet_nr** | **int** | ►INT◄ Pótlapszám / Supplementary sheet number | [optional] 
**customs_value** | **double** | ►INT◄ Vám érték / Customs value | [optional] 
**export_authorisation** | **string** | ►INT◄ Export engedély / Export authorisation | [optional] 
**other_comment** | **string** | ►INT◄ Egyéb megjegyzés / Other comment | [optional] 
**sec_id** | **bool** | ►INT◄ A_125_HAR alapszolgáltatás megadásakor true érték esetén az API az inverz csomag adatait is létrehozza és visszaadja a válaszban.\\   /   When the A_125_HAR basic service is provided, the API also generates and returns the inverse parcel data in the response. | [optional] 
**customs_value_currency** | **string** | ►INT◄ Valutanem / Currency | [optional] 
**produce_content** | **string** | ►INT◄ Áru tartalom kódja. / Produce content code. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

