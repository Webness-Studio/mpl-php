# # ShipmentItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_data1** | **string** | Tetszőleges ügyféladat (pl. ügyfél oldali azonosító).   /   Any customer data. | [optional]
**custom_data2** | **string** | Tetszőleges ügyféladat (pl. ügyfél oldali azonosító).   /   Any customer data. | [optional]
**weight** | [**\WebnessStudio\MPL\Model\UnitValue**](UnitValue.md) |  | [optional]
**size** | **string** | A csomag mérete.Csak két esetben kötelező.A) ►DOM◄ Csomagautomatára való címzéskor(deliveryMode:CS) az S, M, L értékek valamelyikével.B) ►INT◄ Nemzetközi gyorsposta alapszolgáltatás(service.basic: A_13_EMS) esetén a PRINT,PACK értékek valamelyikével.   /   Standard size of the item.To be specified only in two cases.A) ►DOM◄ When sending to a parcel terminal(deliveryMode:CS), using one of the S or M or L values.B) ►INT◄ When sending an international express mail(service.basic: A_13_EMS), using one of the PRINT or PACK values. | [optional]
**services** | [**\WebnessStudio\MPL\Model\Service**](Service.md) |  | [optional]
**ewc_code** | **string** | A mező nem használható.  /   The field is not available. | [optional]
**fee** | **float** | Feladási díj   /   Postage fee format | [optional]
**qr_code** | **string** | A címiraton megjelenő ügyféladatokat tartalmazó QR kód tartalma   /   Content of the QR code containing the customer details appearing on the address label. | [optional]
**customs** | [**\WebnessStudio\MPL\Model\Custom[]**](Custom.md) | Árutartalom listája | [optional]
**documents** | [**\WebnessStudio\MPL\Model\Document[]**](Document.md) | Dokumentumok listája | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
