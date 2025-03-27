# # Consignee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name1** | **string** | Name1. Line 1 of name information | [optional]
**name2** | **string** | An optional, additional line of name information | [optional]
**name3** | **string** | An optional, additional line of name information | [optional]
**dispatching_information** | **string** | An optional, additional line of address. It is printed on the shipping label for international shipments to the following countries only BEL, CZE, NLD. It is positioned below name3 on the label. | [optional]
**address_street** | **string** | Line 1 of the street address. This is just the street name. Can also include house number. | [optional]
**address_house** | **string** | Line 1 of the street address. This is just the house number. Can be added to street name instead. | [optional]
**additional_address_information1** | **string** | Additional information that is positioned either behind or below addressStreet on international shipment labels. Where exactly it is printed on the label depends on the country. | [optional]
**additional_address_information2** | **string** | Additional information that is positioned either behind or below addressStreet on international shipment labels. It is printed on shipping labels to the following countries only AUT, CHN, DNK, GBR, HRV, LTU, PRT, ROU, RUS. Where exactly it is printed on the label depends on the country. | [optional]
**postal_code** | **string** | Postal code of the P.O. Box (Postfach) location | [optional]
**city** | **string** | City of the P.O. Box (Postfach) location | [optional]
**state** | **string** | State, province or territory. For the USA please use the official regional ISO-Codes, e.g. US-AL. | [optional]
**country** | [**\Dhl\Rest\Shipping\Model\Country**](Country.md) |  | [optional]
**contact_name** | **string** | optional contact name. (this is not the primary name printed on label) | [optional]
**phone** | **string** | Please note that, in accordance with Art. 4 No. 11 GDPR, you must obtain the recipient&#39;s consent to forward their phone number to Deutsche Post DHL Group. For shipments within Germany, the phone number cannot be transmitted. In some countries the provision of a telephone number and/or e-mail address is mandatory for a delivery to a droppoint. If your recipient has objected to the disclosure of their telephone number and/or e-mail address, the shipment can only be delivered in these countries using the service Premium. | [optional]
**email** | **string** | Email address of the consignee | [optional]
**name** | **string** | Name | [optional]
**locker_id** | **int** | Packstationnummer. Three digit number identifying the parcel locker in conjunction with city and postal code | [optional]
**post_number** | **string** | postNumber (Postnummer) is the official account number a private DHL Customer gets upon registration. To address a post office or retail outlet directly, either the post number or e-mail address of the consignee is needed. | [optional]
**retail_id** | **int** | Id or Number of Post office / Filiale / outlet / parcel shop | [optional]
**po_box_id** | **int** | Number of P.O. Box (Postfach) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
