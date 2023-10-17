
<div class="text-center">
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head id="headTransaction">
    <!-- 
            ****************************************************************************
            *                     iVeri Lite Example in Laravel 8.0                    *
            *                                                                          *
            * Copyright: Copyright eCompany (Pty) Ltd (c), 2007                        *
            *                                                                          *
            * Description : Example HTML page that submits a form to iVeri Lite in     *
            *               order to process a payment.                                *
            *                                                                          *
            * Notes : - The following is an example that is designed to give           *
            *           developers an idea of what a payment page could look like.     *
            *           The customer is at the point in the purchase process where the *
            *           basket has already been chosen and the customer is now on the  *
            *           brink of actually paying for it. The web site thus knows the   *
            *           price of the basket (10000 cents), the Invoice Number            *
            *           (AUTOGENERATE) and, once the button has been clicked, the      *
            *           customers details.                                             *
            *           This example, although it could actually be used in a site, is *
            *           intended as a guide to the logic involved in actually making   *
            *           the online debit.                                              *
            *         - Please refer to the iVeri Lite documentation for further       *
            *           information. This is available at from the iVeri website.      *
            *                                                                          *
            ****************************************************************************
    -->
    <title>
      iVeri Lite Example in Laravel 8.0
    </title>
    <meta http-equiv='Page-Enter' content='progid:DXImageTransform.Microsoft.Fade(duration=.25)' />
    <style type="text/css">
        body{Comic Sans MS: cursive, sans-serif}
    /*<![CDATA[*/
        P.clsHeading { color: #1C4231; font-family: arial; font-size: 17pt; font-weight: bold; }
        BODY.clsMain { background-color: #FFFFFF; background-image: url("/Images/background.gif"); font-family: arial; font-size: 10pt; }
        TABLE.clsQuery { position: relative; background-color: #F0F0F0; border: 1px ridge black; border-collapse: collapse; margin-left: 12pt; margin-right: 12pt; }
        TD.clsQueryHeading { background-color: #2E4053; border: 1px solid #000000; color: #FFFFFF; font-family: arial; font-size: 8pt; font-weight: bold; padding: 2px; padding-right: 10px; }
        TD.clsQuery {  background-color: #E0E0E0; border: 1px solid #F0F0F0; border-right: 1px solid black; color: #000000; font-family: arial; font-size: 8pt; padding: 2px; padding-left: 10px; }
        TD.clsInformation { background-color: #F0F0F0; border: 0px solid #385B38; color: #000000; font-family: arial; font-size: 8pt; padding: 15px; }
        INPUT.clsInputText { color: #000000; font-family: arial; font-size: 8pt; font-weight: normal; }
        INPUT.clsInputReadOnlyText { color: #000000; font-family: arial; font-size: 8pt; font-weight: normal; border: none; background-color: Transparent; }
        INPUT.clsInputButton { background-color: #FFF3D6; border-color: #FFF3D6; color: #1C4231; font-family: arial; font-size: 8pt; font-weight: bold; }
        INPUT.clsInputSubmit { background-color: #FFF3D6; border-color: #FFF3D6; color: #1C4231; font-family: arial; font-size: 8pt; font-weight: bold; }
        SELECT.clsInput { border-style: solid; color: #000000; font-family: arial; font-size: 8pt; font-weight: normal; }
    /*]]>*/
    </style>
  </head>
  <body class="clsMain">

    
    <!-- Create a User prompt that will appear when the swipe is needed. This can be any image, message etc -->
    <div id="divSwipeUserPrompt" style="display: none; position: absolute; z-index: 14; width: 101%; height: 103%; ">
        <div style="margin-left: 0px; position: absolute; left:-10px; top: -15px; width: 100%; height: 100%;  text-align: center; background-color: black; opacity: 0.7; filter: alpha(opacity=70);"></div>
        <div style="position: absolute; text-align: center; padding-top: 50px; z-index: 15; top: 80px; background-color: #ececec; left: 170px; width: 400px; height: 100px; border: 2px ridge black;">
            <img src="../Img/NPaySmall.gif" alt="" style="position: relative; top: 10px;" />
            <label id="labelNpayInstructions" style="font: 14px Dejavu Condensed; font-weight: bold; position: absolute; top: 10px; left: 50px;">Please Follow the instructions on the terminal...</label>
        </div>
    </div>

    
    <div id="divContent" class="clsContent" align="center"><br />
      <form name="Form1" method="post" action="https://portal.host.iveri.com/Lite/Authorise.aspx" id="Form1">

		<input type="hidden" name="Lite_Merchant_ApplicationID" id="Lite_Merchant_ApplicationID" value= "{438c5c4d-7029-4ea9-ae5a-bbf6608c0271}"/><!-- Test AppID-->
        <table class="clsQuery" cellspacing="0" align="center" border="0">
          <tr>
            <td class="clsInformation" align="center" colspan="3">
                <b>Order Details</b>             
            </td>
          </tr>
          <tr>

            <td class="clsQueryHeading" align="left">
              Name:
            </td>
            <td class="clsQuery" align="left" style="border-top: 1px solid black;" colspan="2">              
              <input type="text" value="Mr." readonly="readonly" name="Ecom_BillTo_Postal_Name_Prefix" style="width: 15px;" id="Ecom_BillTo_Postal_Name_Prefix" class="clsInputReadOnlyText" />
              <input name="Ecom_BillTo_Postal_Name_First" readonly="readonly" type="text" value="TestFN" style="width: 25px;" id="Ecom_BillTo_Postal_Name_First" class="clsInputReadOnlyText" />
              <input type="hidden" name="Ecom_BillTo_Postal_Name_Middle" id="Ecom_BillTo_Postal_Name_Middle" value="Donation"/>
              <input name="Ecom_BillTo_Postal_Name_Last" readonly="readonly" type="text" value="TestLN" style="width: 20px;" id="Ecom_BillTo_Postal_Name_Last" class="clsInputReadOnlyText" />
            </td>
          </tr>

          <tr>
            <td class="clsQueryHeading" align="left">
              Email:
            </td>
            <td class="clsQuery" align="left" colspan="2">
              <input name="Ecom_BillTo_Online_Email" readonly="readonly" type="text" value="testing@hotmail.com" maxlength="50" id="Ecom_BillTo_Online_Email" class="clsInputReadOnlyText" /> 
              
              </td>
          </tr>
          <tr>
            <td class="clsQueryHeading" align="left">

              Ship To Street (Line 1):
            </td>
            <td class="clsQuery" align="left" colspan="2">
                <input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Ecom_ShipTo_Postal_Street_Line1" id="Ecom_ShipTo_Postal_Street_Line1" value="50 Sunny Drive Avenue" />
            </td>
          </tr>
          <tr>
            <td class="clsQueryHeading" align="left">
              Ship To Street (Line 2):
            </td>

            <td class="clsQuery" align="left" colspan="2">
                <input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Ecom_ShipTo_Postal_Street_Line2" id="Ecom_ShipTo_Postal_Street_Line2" value="Sunsetville" />
            </td>
          </tr>
          <tr>
            <td class="clsQueryHeading" align="left">
              Ship To City:
            </td>
            <td class="clsQuery" align="left" colspan="2">

                <input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Ecom_ShipTo_Postal_City" id="Ecom_ShipTo_Postal_City" value="Johannesburg" />
            </td>
          </tr>
          <tr>
            <td class="clsQueryHeading" align="left">
              Ship To Province:
            </td>
            <td class="clsQuery" align="left" colspan="2">
                <input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Ecom_ShipTo_Postal_StateProv" id="Ecom_ShipTo_Postal_StateProv" value="Gauteng" />

            </td>
          </tr>
          <tr>
            <td class="clsQueryHeading" align="left">
              Ship To Postal Code:
            </td>
            <td class="clsQuery" align="left" colspan="2">
                <input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Ecom_ShipTo_Postal_PostalCode" id="Ecom_ShipTo_Postal_PostalCode" value="2185" />
            </td>

          </tr>
          <tr>
            <td class="clsQueryHeading" align="left">
              Merchant Reference:
            </td>
            <td class="clsQuery" align="left" style="border-bottom: 1px solid black;"  colspan="2">
              <input name="Ecom_ConsumerOrderID" readonly="readonly" type="text" value="AUTOGENERATE" maxlength="20" id="Ecom_ConsumerOrderID" class="clsInputReadOnlyText" />
              <input type="hidden" name="Ecom_SchemaVersion" id="Ecom_SchemaVersion" />
              <input type="hidden" name="Ecom_TransactionComplete" id="Ecom_TransactionComplete" value="false" />
			  <input type="hidden" name="Lite_Currency_AlphaCode" id="Lite_Currency_AlphaCode" value="USD" />
              <input type="hidden" name="Lite_Authorisation" id="Lite_Authorisation" value="False" />
              <input type="hidden" name="Lite_Version" id="Lite_Version" value="4.0" /> 
              <!-- Ecml end-->
            </td>
          </tr>
          <tr>
            <td class="clsInformation" colspan="3" style="padding: 5px;" align="center"><b>Line Items</b></td>
          </tr>
          <tr>

            <td class="clsQueryHeading">Product Description</td>
            <td class="clsQueryHeading">Quantity</td>
            <td class="clsQueryHeading">Unit Cost</td>
          </tr>
          <tr>
            <td><input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Lite_Order_LineItems_Product_1" id="Lite_Order_LineItems_Product_1" value="Donation" /></td>
            <td><input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Lite_Order_LineItems_Quantity_1" id="Lite_Order_LineItems_Quantity_1" value="1" /></td>
            <td><input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Lite_Order_LineItems_Amount_1" id="Lite_Order_LineItems_Amount_1" value="100" /></td>
          </tr>
          <!-- <tr> -->
            <!-- <td><input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Lite_Order_LineItems_Product_2" id="Lite_Order_LineItems_Product_2" value="Sample Product#2" /></td> -->
            <!-- <td><input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Lite_Order_LineItems_Quantity_2" id="Lite_Order_LineItems_Quantity_2" value="1" /></td> -->
            <!-- <td><input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Lite_Order_LineItems_Amount_2" id="Lite_Order_LineItems_Amount_2" value="0" /></td> -->
          <!-- </tr> -->
          <!-- <tr> -->
            <!-- <td><input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Lite_Order_LineItems_Product_3" id="Lite_Order_LineItems_Product_3" value="Sample Product#2" /></td> -->
            <!-- <td><input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Lite_Order_LineItems_Quantity_3" id="Lite_Order_LineItems_Quantity_3" value="1" /></td> -->
            <!-- <td><input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Lite_Order_LineItems_Amount_3" id="Lite_Order_LineItems_Amount_3" value="200" /></td> -->
          <!-- </tr> -->
          <tr>
            <td class="clsQueryHeading" align="left">
              Discount Amount:
            </td>
            <td class="clsQuery" align="left" style="border: 1px solid black;" colspan="2">
              <input name="Lite_Order_DiscountAmount" readonly="readonly" type="text" value="0" maxlength="10" id="Lite_Order_DiscountAmount" style="font-weight: bold; font-size: 12px;" class="clsInputReadOnlyText" />
            </td>
          </tr>
          <tr>
            <td class="clsQueryHeading" align="left">
              Total Order Amount:
            </td>

            <td class="clsQuery" align="left" style="border: 1px solid black;" colspan="2">
              <input name="Lite_Order_Amount" readonly="readonly" type="text" value="100" maxlength="10" id="Lite_Order_Amount" style="font-weight: bold; font-size: 12px;" class="clsInputReadOnlyText" />
            </td>
          </tr>
          <tr>
            <td class="clsInformation" align="center" style="border-bottom: 1px solid black;" colspan="3">
                <input type="submit" name="buttonSubmit" value="Submit" onclick="javascript:submitForm();" id="Submit1" class="clsInputSubmit" style="width:75px;" />
            </td>
          </tr>
        </table>
        
        <table id="tblCardInformation" class="clsQuery" style="top: 10px; visibility: hidden">
          <tr>
            <td class="clsQueryHeading" align="left">
            </td>

            <td class="clsQuery" align="left">
              <input type="hidden" name="Ecom_Payment_Card_Protocols" id="Ecom_Payment_Card_Protocols" value="iVeri" />
            </td>

          </tr>
        </table>
        
      <!-- Other Optional fields that can be set -->
          <input type="hidden" name="Lite_Order_Terminal" id="Lite_Order_Terminal" value="77777001" />

          <input type="hidden" name="Lite_Order_AuthorisationCode" id="Lite_Order_AuthorisationCode" />
          <input type="hidden" name="Lite_Website_TextColor"id="Lite_Website_TextColor" value="#ffffff" />
          <input type="hidden" name="Lite_Website_BGColor" id="Lite_Website_BGColor" value="#86001B" />
          <input type="hidden" name="Lite_ConsumerOrderID_PreFix" id="Lite_ConsumerOrderID_PreFix" value="PPP" />
          
          <input type="hidden" name="Lite_Website_Successful_Url" id="Lite_Website_Successful_Url" value="https://examples.iveri.net/example/Result" />
          <input type="hidden" name="Lite_Website_Fail_Url" id="Lite_Website_Fail_Url" value="https://examples.iveri.net/example/Result" />
          <input type="hidden" name="Lite_Website_Error_Url" id="Lite_Website_Error_Url" value="https://examples.iveri.net/example/Result" />
          <input type="hidden" name="Lite_Website_Trylater_Url" id="Lite_Website_Trylater_Url" value="https://examples.iveri.net/example/Result" /> 
          
          
          <!-- Ecml start-->

          <!-- ShipTo Additional tags -->
          <input type="hidden" name="Ecom_ShipTo_Postal_Name_Prefix" id="Ecom_ShipTo_Postal_Name_Prefix" />
          <input type="hidden" name="Ecom_ShipTo_Postal_Name_First" id="Ecom_ShipTo_Postal_Name_First" />
          <input type="hidden" name="Ecom_ShipTo_Postal_Name_Middle" id="Ecom_ShipTo_Postal_Name_Middle" />
          <input type="hidden" name="Ecom_ShipTo_Postal_Name_Last" id="Ecom_ShipTo_Postal_Name_Last" />
          <input type="hidden" name="Ecom_ShipTo_Postal_Name_Suffix" id="Ecom_ShipTo_Postal_Name_Suffix" />
          
          <input type="hidden" name="Ecom_ShipTo_Postal_Street_Line3" id="Ecom_ShipTo_Postal_Street_Line3" />
          <input type="hidden" name="Ecom_ShipTo_Postal_CountryCode" id="Ecom_ShipTo_Postal_CountryCode" />
          <input type="text" readonly="readonly" class="clsInputReadOnlyText" name="Ecom_ShipTo_Telecom_Phone_Number" id="Ecom_ShipTo_Telecom_Phone_Number" />

          <input type="hidden" name="Ecom_ShipTo_Online_Email" id="Ecom_ShipTo_Online_Email" />
           
          <!-- ReceiptTo -->
          <input type="hidden" name="Ecom_ReceiptTo_Postal_Name_Prefix" id="Ecom_ReceiptTo_Postal_Name_Prefix" />
          <input type="hidden" name="Ecom_ReceiptTo_Postal_Name_First" id="Ecom_ReceiptTo_Postal_Name_First" />
          <input type="hidden" name="Ecom_ReceiptTo_Postal_Name_Middle" id="Ecom_ReceiptTo_Postal_Name_Middle" />
          <input type="hidden" name="Ecom_ReceiptTo_Postal_Name_Last" id="Ecom_ReceiptTo_Postal_Name_Last" />
          <input type="hidden" name="Ecom_ReceiptTo_Postal_Name_Suffix" id="Ecom_ReceiptTo_Postal_Name_Suffix" />
          <input type="hidden" name="Ecom_ReceiptTo_Postal_Street_Line1" id="Ecom_ReceiptTo_Postal_Street_Line1" />
          <input type="hidden" name="Ecom_ReceiptTo_Postal_Street_Line2" id="Ecom_ReceiptTo_Postal_Street_Line2" />

          <input type="hidden" name="Ecom_ReceiptTo_Postal_Street_Line3" id="Ecom_ReceiptTo_Postal_Street_Line3" />
          <input type="hidden" name="Ecom_ReceiptTo_Postal_City" id="Ecom_ReceiptTo_Postal_City" />
          <input type="hidden" name="Ecom_ReceiptTo_Postal_StateProv" id="Ecom_ReceiptTo_Postal_StateProv" />
          <input type="hidden" name="Ecom_ReceiptTo_Postal_PostalCode" id="Ecom_ReceiptTo_Postal_PostalCode" />
          <input type="hidden" name="Ecom_ReceiptTo_Postal_CountryCode" id="Ecom_ReceiptTo_Postal_CountryCode" />
          <input type="hidden" name="Ecom_ReceiptTo_Telecom_Phone_Number" id="Ecom_ReceiptTo_Telecom_Phone_Number" />
          <input type="hidden" name="Ecom_ReceiptTo_Online_Email" id="Ecom_ReceiptTo_Online_Email"  />
          
          <!-- BillTo -->
          <input type="hidden" name="Ecom_BillTo_Postal_Name_Suffix" id="Ecom_BillTo_Postal_Name_Suffix" value="iVeri" />

          <input type="hidden" name="Ecom_BillTo_Postal_Street_Line1" id="Ecom_BillTo_Postal_Street_Line1" value="TestStreet1" />
          <input type="hidden" name="Ecom_BillTo_Postal_Street_Line2" id="Ecom_BillTo_Postal_Street_Line2" value="TestStreet2"/>
          <input type="hidden" name="Ecom_BillTo_Postal_Street_Line3" id="Ecom_BillTo_Postal_Street_Line3" value="TestStreet3"/>
          <input type="hidden" name="Ecom_BillTo_Postal_City" id="Ecom_BillTo_Postal_City" value="TestCity"/>
          <input type="hidden" name="Ecom_BillTo_Postal_StateProv" id="Ecom_BillTo_Postal_StateProv" value="TestProvince"/>
          <input type="hidden" name="Ecom_BillTo_Postal_PostalCode" id="Ecom_BillTo_Postal_PostalCode" value="TestPostCode"/>
          <input type="hidden" name="Ecom_BillTo_Postal_CountryCode" id="Ecom_BillTo_Postal_CountryCode" value="TestCountry" />
          <input type="hidden" name="Ecom_BillTo_Telecom_Phone_Number" id="Ecom_BillTo_Telecom_Phone_Number" value="1234567" />
        
        <!-- End optional fields -->    
        
      </form>

    </div>
  </body>
</html>
</div>
