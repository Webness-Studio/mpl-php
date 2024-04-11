# Item

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_data1** | **string** | ►DOM◄ Tetszőleges adat (pl. ügyfél oldali azonosító), mely jegyzékzárás után is elkíséri a csomagot az életútja során (pl. nyomkövetésnél).   /   Any optional data (e.g. customer-side ID) which accompanies the mail item in its life path after the closing of the list (e.g. at tracking). | [optional] 
**custom_data2** | **string** | ►DOM◄ Tetszőleges adat (pl. ügyfél oldali azonosító), mely jegyzékzárás után is elkíséri a csomagot az életútja során (pl. nyomkövetésnél).   /   Any optional data (e.g. customer-side ID) which accompanies the mail item in its life path after the closing of the list (e.g. at tracking). | [optional] 
**weight** | [**\WebnessStudio/MPL/Model\Model\UnitValue**](UnitValue.md) |  | [optional] 
**size** | **string** | A csomag mérete. Csak két esetben kötelező. \\  A) ►DOM◄ Csomagautomatára való címzéskor (deliveryMode:CS) az S, M, L értékek valamelyikével. \\  B) ►INT◄ Nemzetközi gyorsposta alapszolgáltatás (service.basic: A_13_EMS) esetén a PRINT,PACK értékek valamelyikével. / \\  Standard size of the item. To be specified only in two cases. \\  A) ►DOM◄ When sending to a parcel terminal (deliveryMode:CS), using one of the S or M or L values. \\  B) ►INT◄ When sending an international express mail (service.basic: A_13_EMS), using one of the PRINT or PACK values. | [optional] 
**services** | [**\WebnessStudio/MPL/Model\Model\Service**](Service.md) |  | 
**ewc_code** | **string** | A mező nem használható.  /   The field is not available. | [optional] 
**qr_code** | **string** | A címiraton megjelenő ügyféladatokat tartalmazó QR kód tartalma. A mezőben a szabad szövegezésen túl használhatók az alábbi jelölők is &lt;&gt; között (További részletek a Dokumentáció menüben):\\  trackingnumber  -  13-hosszú küldeményazonosító \\  barcode  -  26-hosszú vonalkód \\  customdata1  -  ügyféladat1 \\  customdata2  -  ügyféladat2 \\   / \\  Content of the QR code containing the customer details appearing on the address label. | [optional] 
**replacement_package** | [**\WebnessStudio/MPL/Model\Model\ReplacementPackage**](ReplacementPackage.md) |  | [optional] 
**customs** | [**\WebnessStudio/MPL/Model\Model\Custom[]**](Custom.md) | ►INT◄ Árutartalom listája | [optional] 
**documents** | [**\WebnessStudio/MPL/Model\Model\Document[]**](Document.md) | ►INT◄ Dokumentumok listája | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

