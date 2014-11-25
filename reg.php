<?php
session_start();
include_once('conn-test.php');
include_once('functions.php');
include_once('phpmailer.php');

if($Test == 'YesDebug')
{
$ApplicationID = 'KUSWLY-4851258';
					#	Start - MAIL SEND TO THE VENDOR WITHT THE PDF ATTACHMENT
					$ArrayParam['addAddress_Email'] = 'test@test.com' ;
					$ArrayParam['addAddress_Name'] = 'TEST';
					$ArrayParam['PDF_NAME'] = $ApplicationID.'.pdf';
					$ArrayParam['MAIL_SUBJ'] = $ApplicationID.' - Vmart Registration';
					
					$ArrayParam['MAIL_BODY'] = '
					<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled Document</title>
</head>

<body>
<table width="800px" border="0" style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666; border:1px solid #000; padding:10px;">

<tbody><tr>

<td style="border-bottom: 1px solid #cccccc;">
<table width="100%">
	<tbody><tr>
		<td><img src="http://staging.ginesys.in/vmartreg/finalone/vmart_vendor/header.png"></td>
        <td valign="top" align="right">
        	<table style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666; border:1px solid #000; padding:10px;">
        		<tbody><tr>
                	<td colspan="2">Authorised Vendor of V Mart</td>
                </tr>
                <tr>
                	<td>Name :</td>
                    <td align="left">Vendor Name</td>
                </tr>
                <tr style="font-family: \'Trebuchet MS\',Arial,Helvetica,sans-serif; color: rgb(102, 102, 102); font-weight: bold;">
                	<td>Application Id: </td>
                    <td style="">'.$ApplicationID.'</td>
                </tr>
                
        	</tbody></table>
        </td>
	</tr>
</tbody></table>
</td>

</tr>
<tr>
<td>
<h2>Registration | Vmart Vendor Portal</h2>
</td>
</tr>

<tr>
<td>
<table width="100%" cellspacing="0" cellpadding="0" border="1" style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666;">
<tbody><tr>
<td style=""><h3 style="margin-left: 12px; margin-bottom: 5px; margin-top: 5px;">About Vendor Portal</h3></td>
</tr>
<tr>
<td style="padding:10px;">
The Vendor portal allows Vmart vendors to check their stocks. The solution is advanced, secure and meant for mobile devices.
</td>
</tr>
</tbody></table>
</td>
</tr>

<tr>
<td>
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666;">
<tbody><tr>
<td style="padding-top: 2px;">
<h2 style="margin-top: 18px; margin-bottom: 3px;"> <font color="#CC0000">Exclusive Offer</font></h2>
</td>
</tr>
<tr style="">
<td style="height: 10px;">
<p style="margin-top: 1px; margin-bottom: 1px;">Rs 15,000 for 1 year (taxes applicable). * Early Bird registration offer, pay for 12 months &amp; get 2 months usage free.</p>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>

<td>
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666;">
<tbody><tr>
<td colspan="2" style="padding-top:15px;">
<h2 style="margin-bottom: 3px; margin-top: -7px;">Payment Info</h2>
</td>
</tr>
<tr>
<td style="padding: 5px 0px; width: 5%;">  Payment Mode &nbsp;&nbsp; :  </td>
<td align="left" style="padding: 5px 0px;">
Cash
</td>
</tr>
<tr>
  <td style="padding: 5px 0px;">      Payment Amount :    </td>
  <td style="padding: 5px 0px; width: 25%;">    Rs. 15023</td>
</tr>
</tbody></table>
</td>
</tr>

<tr>
<td style="padding-top:15px;">
<h2 style="margin-bottom: 3px; margin-top: -7px;">Instructions</h2>
<p style="margin-top: 1px; margin-bottom: 1px;">How to procure vendor portal access?</p>
<p style="margin-top: 1px; margin-bottom: 1px;"><strong>a</strong>. Take a printout of the PDF received as Registration Acknowledgement.</p>
<p style="margin-top: 1px; margin-bottom: 1px;"><strong>b</strong>. Prepare cheque in favour of Ginni Systems Limited.</p>
<p style="margin-top: 1px; margin-bottom: 1px;"><strong>c</strong>. Mail the printed acknowledgement &amp; the cheque to either of the following offices as per your convenience.
</p>
<p></p>
</td>
</tr>

<tr>
    <td>&nbsp;</td>
</tr>

<tr>
<td align="center" style="margin-top: 0px; border: 1px solid rgb(204, 204, 204);">
<table width="85%" cellspacing="0" cellpadding="0" style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666;">

<tbody><tr>
<td style="padding-left: 20px;">
<h2>Kolkata</h2>
<p>
Lemon Eco, 3rd Floor<br>
Plot No &ndash; 1068 &amp; 1078<br>
Major Arterial Road 1111<br>
Jatragachi,New Town<br>
Kolkata &ndash; 700157
</p>
</td>
<td valign="top" style="padding-top: 0px; padding-left: 156px;">
<h2>Delhi</h2>
<p>
Tower-C, 9th Floor,Business Zone<br>
Nirvana Country,Sector 50<br>
Gurgaon-122018,Haryana
</p>
</td>
</tr>

<tr>
<td style="padding-left: 20px;">
<h2>Chennai</h2>
<p>
New no.35,Railway Colony<br>
III Cross Street,Behind Pantaloon,<br>
Nelson Manickam Road,<br>
Chennai &ndash; 600029
</p>
</td>
<td style="padding-top: 0px; padding-left: 156px;">
<h2>Mumbai</h2>
<p>
Expresszone, A Wing,<br>
Office No-509,W.E Highway,<br>
Malad (E), Mumbai - 400 097
</p>
</td>
</tr>
</tbody></table>
</td>
</tr>

</tbody></table>
</body></html>
					';
					$ResultMailSend = MailSendViaAuthentication($ArrayParam);
					if($ResultMailSend == 'Message sent') $Msg .= ' & Mail sent Successfully';
					else $Msg .= ' But Failed to send mail ( '.$ResultMailSend .' ) ' ;
					#	End - MAIL SEND TO THE VENDOR WITHT THE PDF ATTACHMENT

exit();
}

//var_dump($_REQUEST);

$SubmitVendorFormAction = $_REQUEST['SubmitVendorFormAction'];
$SubmitPaymentFormAction = $_REQUEST['SubmitPaymentFormAction'];


$SelectVendorID = $_REQUEST['SelectVendorID'];

$VendorEmail = $_REQUEST['VendorEmail'];
$VendorCode = $_REQUEST['VendorCode'];
$VendorName = $_REQUEST['VendorName'];
$VendorPerson = $_REQUEST['VendorPerson'];
$VendorNumber = $_REQUEST['VendorNumber'];
$VendorAddress = $_REQUEST['VendorAddress'];
$VendorDetails = $_REQUEST['VendorDetails'];


$PaymentMode = $_REQUEST['PaymentMode'];
$PaymentStatus = $_REQUEST['PaymentStatus'];
$PaymentAmount = $_REQUEST['PaymentAmount'];


if($SubmitPaymentFormAction == 'Yes')
{
	if($PaymentMode != '' && $PaymentStatus != '' && $PaymentAmount >= 15000 && $VendorEmail != '')
	{
		$SqlDuplicate = " SELECT * FROM vmartreg_registration  WHERE SLCODE = '".$VendorCode."' ";
		$SelectDuplicate = mysql_query($SqlDuplicate) or die( mysql_error());
		$NumRowsDuplicate = mysql_num_rows($SelectDuplicate);
		if($NumRowsDuplicate < 1)
		{

			$Sec1 = randomPrefix($length = 5, $Type = 'CA');
			$Sec2 = randomPrefix($length = 5, $Type = 'N');
			$Sec3 = randomPrefix($length = 5, $Type = 'AN');
			$ApplicationID = $Sec1.'-'.$Sec2.'-'.$Sec3;

			$Insert = "INSERT INTO vmartreg_registration 
			(MastID,ApplicationID,SLCODE,PaymentStatus,PaymentMode,PostDate,
			VendorDetails,VendorEmail,VendorCode,VendorName,VendorPerson,VendorNumber,VendorAddress) VALUES 
			('".$SelectVendorID."','".$ApplicationID."','".$VendorCode."','".$PaymentStatus."','".$PaymentMode."',NOW()
			,'".$VendorDetails."' ,'".$VendorEmail."' ,'".$VendorCode."' ,'".$VendorName."' ,'".$VendorPerson."' ,'".$VendorNumber."' ,'".$VendorAddress."' ) ";
			mysql_query($Insert) or die( mysql_error());
			$LastInsertID = mysql_insert_id();
			if($LastInsertID > 0)
			{
				$Msg = 'Record Added Successfully';
				
				sleep(10);	//	 TAKE TIME TO CREATE THE PDF
				if(file_exists($ApplicationID.'.pdf'))
				{
					#	Start - MAIL SEND TO THE VENDOR WITHT THE PDF ATTACHMENT
					$ArrayParam['addAddress_Email'] = $VendorEmail;	//	'test@test.com' ;
					$ArrayParam['addAddress_Name'] = $VendorName;	  //	'TEST';
					$ArrayParam['PDF_NAME'] = $ApplicationID.'.pdf';
	#				$ArrayParam['MAIL_SUBJ'] = basename($ArrayParam['PDF_NAME'],'.pdf').' - Vmart Registration';
					$ArrayParam['MAIL_SUBJ'] = $ApplicationID.' - Vmart Registration';
					
					$ArrayParam['MAIL_BODY'] = '

					<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled Document</title>
</head>

<body>
<table width="800px" border="0" style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666; border:1px solid #000; padding:10px;">

<tbody><tr>

<td style="border-bottom: 1px solid #cccccc;">
<table width="100%">
	<tbody><tr>
		<td><img src="http://staging.ginesys.in/vmartreg/finalone/vmart_vendor/header.png"></td>
        <td valign="top" align="right">
        	<table style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666; border:1px solid #000; padding:10px;">
        		<tbody><tr>
                	<td colspan="2">Authorised Vendor of V Mart</td>
                </tr>
                <tr>
                	<td>Name :</td>
                    <td align="left">'.$ArrayParam['addAddress_Email'].' -- '.$ArrayParam['addAddress_Name'].'=='.$VendorName.'</td>
                </tr>
                <tr style="font-family: \'Trebuchet MS\',Arial,Helvetica,sans-serif; color: rgb(102, 102, 102); font-weight: bold;">
                	<td>Application Id: </td>
                    <td style="">'.$ApplicationID.'</td>
                </tr>
                
        	</tbody></table>
        </td>
	</tr>
</tbody></table>
</td>

</tr>
<tr>
<td>
<h2>Registration | Vmart Vendor Portal</h2>
</td>
</tr>

<tr>
<td>
<table width="100%" cellspacing="0" cellpadding="0" border="1" style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666;">
<tbody><tr>
<td style=""><h3 style="margin-left: 12px; margin-bottom: 5px; margin-top: 5px;">About Vendor Portal</h3></td>
</tr>
<tr>
<td style="padding:10px;">
The Vendor portal allows Vmart vendors to check their stocks. The solution is advanced, secure and meant for mobile devices.
</td>
</tr>
</tbody></table>
</td>
</tr>

<tr>
<td>
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666;">
<tbody><tr>
<td style="padding-top: 2px;">
<h2 style="margin-top: 18px; margin-bottom: 3px;"> <font color="#CC0000">Exclusive Offer</font></h2>
</td>
</tr>
<tr style="">
<td style="height: 10px;">
<p style="margin-top: 1px; margin-bottom: 1px;">Rs 15,000 for 1 year (taxes applicable). * Early Bird registration offer, pay for 12 months &amp; get 2 months usage free.</p>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>

<td>
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666;">
<tbody><tr>
<td colspan="2" style="padding-top:15px;">
<h2 style="margin-bottom: 3px; margin-top: -7px;">Payment Info</h2>
</td>
</tr>
<tr>
<td style="padding: 5px 0px; width: 5%;">  Payment Mode &nbsp;&nbsp; :  </td>
<td align="left" style="padding: 5px 0px;">
Cash
</td>
</tr>
<tr>
  <td style="padding: 5px 0px;">      Payment Amount :    </td>
  <td style="padding: 5px 0px; width: 25%;">    Rs. 15023</td>
</tr>
</tbody></table>
</td>
</tr>

<tr>
<td style="padding-top:15px;">
<h2 style="margin-bottom: 3px; margin-top: -7px;">Instructions</h2>
<p style="margin-top: 1px; margin-bottom: 1px;">How to procure vendor portal access?</p>
<p style="margin-top: 1px; margin-bottom: 1px;"><strong>a</strong>. Take a printout of the PDF received as Registration Acknowledgement.</p>
<p style="margin-top: 1px; margin-bottom: 1px;"><strong>b</strong>. Prepare cheque in favour of Ginni Systems Limited.</p>
<p style="margin-top: 1px; margin-bottom: 1px;"><strong>c</strong>. Mail the printed acknowledgement &amp; the cheque to either of the following offices as per your convenience.
</p>
<p></p>
</td>
</tr>

<tr>
    <td>&nbsp;</td>
</tr>

<tr>
<td align="center" style="margin-top: 0px; border: 1px solid rgb(204, 204, 204);">
<table width="85%" cellspacing="0" cellpadding="0" style="font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#666;">

<tbody><tr>
<td style="padding-left: 20px;">
<h2>Kolkata</h2>
<p>
Lemon Eco, 3rd Floor<br>
Plot No &ndash; 1068 &amp; 1078<br>
Major Arterial Road 1111<br>
Jatragachi,New Town<br>
Kolkata &ndash; 700157
</p>
</td>
<td valign="top" style="padding-top: 0px; padding-left: 156px;">
<h2>Delhi</h2>
<p>
Tower-C, 9th Floor,Business Zone<br>
Nirvana Country,Sector 50<br>
Gurgaon-122018,Haryana
</p>
</td>
</tr>

<tr>
<td style="padding-left: 20px;">
<h2>Chennai</h2>
<p>
New no.35,Railway Colony<br>
III Cross Street,Behind Pantaloon,<br>
Nelson Manickam Road,<br>
Chennai &ndash; 600029
</p>
</td>
<td style="padding-top: 0px; padding-left: 156px;">
<h2>Mumbai</h2>
<p>
Expresszone, A Wing,<br>
Office No-509,W.E Highway,<br>
Malad (E), Mumbai - 400 097
</p>
</td>
</tr>
</tbody></table>
</td>
</tr>

</tbody></table>
</body></html>

					
					';
					$ResultMailSend = MailSendViaAuthentication($ArrayParam);
					if($ResultMailSend == 'Message sent') $Msg .= ' & Mail sent Successfully';
					else $Msg .= ' But Failed to send mail ( '.$ResultMailSend .' ) ' ;
					#	End - MAIL SEND TO THE VENDOR WITHT THE PDF ATTACHMENT
				}
				else $Msg .= ' But Failed to send mail with attachemnt.' ;
			}
		}
		else
			$Msg = 'Vendor Already registerd';
	}
	else
		$Msg = 'Failed to add Record. All fields are mandatory.';

}



if($SubmitVendorFormAction == 'Yes')
{
	$SqlWHERE = "";
	if($VendorCode != '')
	{
		if($SqlWHERE != '')
			$SqlWHERE .= ' AND ';
		$SqlWHERE .= " TablVenvorMast.SLCODE = '".$VendorCode."'  ";
	}
	if($VendorEmail != '')
	{
		if($SqlWHERE != '')
			$SqlWHERE .= ' AND ';
		$SqlWHERE .= " TablVenvorMast.BEMAIL = '".$VendorEmail."'  ";
	}
	if($VendorName != '')
	{
		if($SqlWHERE != '')
			$SqlWHERE .= ' AND ';
		$SqlWHERE .= " TablVenvorMast.SLNAME LIKE '%".$VendorName."%'  ";
	}
	if($VendorNumber != '')
	{
		if($SqlWHERE != '')
			$SqlWHERE .= ' AND ';
		$SqlWHERE .= " ( TablVenvorMast.BFX2 = '".$VendorNumber."' OR TablVenvorMast.BPH1 = '".$VendorNumber."' OR TablVenvorMast.BPH2 = '".$VendorNumber."'  OR TablVenvorMast.BPH3 = '".$VendorNumber."' ) ";
	}
	if($SqlWHERE != '')
	{
		$SqlWHERE = " WHERE ".$SqlWHERE ;
		$Sql = " SELECT * FROM vmartreg_source_master AS TablVenvorMast $SqlWHERE ";
		$Select = mysql_query($Sql) or die( mysql_error());
		$NumRows = mysql_num_rows($Select);
	}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vmart Registration</title>




<script>
function SelectThisVendor(Obj,VendorID)
{
	document.getElementById('VendorFormVendorDetails').value = document.getElementById('TempVendorDetails').value;
	document.getElementById('SelectVendorID').value = VendorID;
	document.getElementById('VendorForm').submit();
}
function copyVendorDetails()
{
	document.getElementById('VendorFormVendorDetails').value = document.getElementById('TempVendorDetails').value;
}
function copyPaymentFormVendorDetails()
{
	if(trim(document.getElementById('VendorEmail').value) == '')
	{
		alert('Invalid Email Address');
		document.getElementById('VendorEmail').focus();
		return false;
	}
	else if(!ChkEmail(trim(document.getElementById('VendorEmail').value)))
	{
		document.getElementById('VendorEmail').focus();
		//	alert('ANOTHER ALERT');
		return false;
	}
	
	document.getElementById('PaymentFormVendorDetails').value = document.getElementById('TempVendorDetails').value;

	document.getElementById('VendorEmailPaymentForm').value = document.getElementById('VendorEmail').value;
	document.getElementById('VendorCodePaymentForm').value = document.getElementById('VendorCode').value;
	document.getElementById('VendorNamePaymentForm').value = document.getElementById('VendorName').value;
	document.getElementById('VendorPersonPaymentForm').value = document.getElementById('VendorPerson').value;
	document.getElementById('VendorNumberPaymentForm').value = document.getElementById('VendorNumber').value;
	document.getElementById('VendorAddressPaymentForm').value = document.getElementById('VendorAddress').value;



}

function trimfield(str) 
{ 
    return str.replace(/^\s+|\s+$/g,''); 
} 
function trim(str) 
{ 
	return AllTrim(str);
    //return str.replace(/^\s+|\s+$/g,''); 
}

function AllTrim(inputString) {
   // Removes leading and trailing spaces from the passed string. Also removes
   // consecutive spaces and replaces it with one space. If something besides
   // a string is passed in (null, custom object, etc.) then return the input.
   if (typeof inputString != "string") { return inputString; }
   var retValue = inputString;
   var ch = retValue.substring(0, 1);
   while (ch == " ") { // Check for spaces at the beginning of the string
      retValue = retValue.substring(1, retValue.length);
      ch = retValue.substring(0, 1);
   }
   ch = retValue.substring(retValue.length-1, retValue.length);
   while (ch == " ") { // Check for spaces at the end of the string
      retValue = retValue.substring(0, retValue.length-1);
      ch = retValue.substring(retValue.length-1, retValue.length);
   }
   while (retValue.indexOf("  ") != -1) { // Note that there are two spaces in the string - look for multiple spaces within the string
      retValue = retValue.substring(0, retValue.indexOf("  ")) + retValue.substring(retValue.indexOf("  ")+1, retValue.length); // Again, there are two spaces in each of the strings
   }
   return retValue; // Return the trimmed string back to the user
} // Ends the "trim" function

function ChkEmail(mail)
{
		var str=mail;

		if (!str=="")
		{
			if (str.indexOf("@",1) == -1)
			{
				alert("That is not a valid Email Address. Please enter again.");
				return false;
			}
			if (str.indexOf("@",1)== 0)
			{
				alert("That is not a valid Email Address. Please enter again.");
				return false;
			}
			if (str.indexOf(".")== 0)
			{
				alert("That is not a valid Email Address. Please enter again.");
				return false;
			}
			if (str.indexOf(".",1) == -1)
			{
				alert("That is not a valid Email Address. Please enter again.");
				return false;
			}
		
			// extra validation
			var posat=str.indexOf("@");
			var posdot=str.indexOf(".");
			var rposdot=str.lastIndexOf(".");
			if(rposdot==posdot)
			if((posdot < posat) || (posdot-posat < 3))
			{
				alert("That is not a valid Email Address. Please enter again.");
				return false;
			}
			if(str.charAt(str.length-1)==".")
			{
				alert("That is not a valid Email Address. Please enter again.");
				return false;
			}
			if(str.charAt(str.length-1)=="@")
			{
				alert("That is not a valid Email Address. Please enter again.");
				return false;
			}
			var j=0;
			for( var i=0;i<str.length;i++)
			{
				if(str.charAt(i) == "@")
				j++;
			}
			if(j > 1)
			{
			alert("That is not a valid Email Address. Please enter again.");
			return false;
			}
		}
		else
		{
			alert("Email field is mandatory.");
			return false;
		}
		return true;
}


//--------------------Email Validation----------------------------------------------
function Validate_Email_Address(email)
{
	//Assumes that valid email addresses consist of user_name@domain.tld
	at = email.indexOf('@');
	dot = email.indexOf('.');
	
	if(at == -1 || dot == -1 || dot <= at + 1 || dot == 0 || dot == email.length - 1)
		return(false);
	
	user_name = email.substr(0, at);
	domain_name = email.substr(at + 1, email.length);                  
	
	if(Validate_String(user_name) === false || 	Validate_String(domain_name) === false)
		return(false);                     
	
	return(true);
}

function Validate_String(string, return_invalid_chars)
{
	valid_chars = '1234567890-_.^~abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	invalid_chars = '';
	
	if(string == null || string == '')
		return(true);
	
	//For every character on the string.   
	for(index = 0; index < string.length; index++)
	{
		char = string.substr(index, 1);                        
	
		//Is it a valid character?
		if(valid_chars.indexOf(char) == -1)
		{
			//If not, is it already on the list of invalid characters?
			if(invalid_chars.indexOf(char) == -1)
			{
				//If it's not, add it.
				if(invalid_chars == '')
					invalid_chars += char;
				else
					invalid_chars += ', ' + char;
			}
		}
	}                     
	
	//If the string does not contain invalid characters, the function will return true.
	//If it does, it will either return false or a list of the invalid characters used
	//in the string, depending on the value of the second parameter.
	if(return_invalid_chars == true && invalid_chars != '')
	{
		last_comma = invalid_chars.lastIndexOf(',');
		
		if(last_comma != -1)
			invalid_chars = invalid_chars.substr(0, $last_comma) + 	' and ' + invalid_chars.substr(last_comma + 1, invalid_chars.length);
	
		return(invalid_chars);
	}
	else
		return(invalid_chars == ''); 
}


<?php if($Msg != ''){ ?>alert('<?php echo $Msg;?>');<?php } ?>





</script>
</head>

<body>
<table width="800px" border="0" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#666; border:1px solid #000; padding:10px;">
<tr>
<td>
<img src="http://staging.ginesys.in/vmartreg/finalone/vmart_vendor/header.png"  />
</td>
</tr>
<tr>
<td>
<h3>Registration | Vmart Vendor Portal</h3>
</td>
</tr>

<tr style="display:none">
<td>

<table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr>
<td><h3 style="margin-left:20px;">About Vendor Portal</h3></td>
</tr>

<tr>
<td>
<textarea name="TempVendorDetails" id="TempVendorDetails" cols="" rows=""  style=" display:none;width:94%; height:100px; border:none; outline:none; padding:20px;">The Vendor portal allows Vmart vendors to check their stocks. The solution is advanced, secure and meant for mobile devices.</textarea>
The Vendor portal allows Vmart vendors to check their stocks. The solution is advanced, secure and meant for mobile devices.
</td>
</tr>
</table>

</td>
</tr>

<?php
	if($NumRows)
	{
		while($Fetch = mysql_fetch_array($Select))
		{
			if( $SelectVendorID < 1){
			?>
<tr>
<td><input type="radio" name="SelectVendor" <?php if($Fetch['ID'] == $SelectVendorID){ ?>checked="checked"<?php } ?> id="SelectVendor_<?php echo $Fetch['ID'];?>" value="<?php echo $Fetch['ID'];?>" onclick="SelectThisVendor(this,'<?php echo $Fetch['ID'];?>')" />  <strong><?php echo $Fetch['SLNAME'] ;?></strong> </td>
</tr>

<tr>
<td>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr style="margin:5px 0px;">
<td valign="top" style="width:25%; padding:3px 0px;">Vendor Code:</td>
<td style="width:40%; padding:3px 0px;"><?php echo $Fetch['SLCODE'];?></td>
</tr>
<tr>
<td valign="top" style="width:25%; padding:3px 0px;">Vendor Name:</td>
<td style="width:40%; padding:3px 0px;"><?php echo $Fetch['ABBRE'];?></td>
</tr>
<tr>
<td valign="top" style="width:25%;padding:3px 0px;">Contact Person:</td>
<td style="width:40%;padding:3px 0px;"><?php echo $Fetch['BEMAIL'];?></td>
</tr>
<tr>
<td valign="top" style="width:25%;padding:3px 0px;">Mobile Number:</td>
<td style="width:40%;padding:3px 0px;"><?php echo  $Fetch['BPH1'] .' - '.$Fetch['BPH2'] .' - '.$Fetch['BPH3'] . ' &nbsp; ';?></td>
</tr>
<tr>
<td valign="top" style="width:25%;padding:3px 0px;">Address:</td>
<td style="width:40%;padding:3px 0px;"><?php echo $Fetch['BADDR'];?></td>
</tr>
<tr>
  <td colspan="2" style="width:25%;padding:3px 0px;"><hr></td>
  </tr>
</table>
</td>
</tr>
            


<?php
			}

if($Fetch['ID'] == $SelectVendorID)
{
	$VendorCode = $Fetch['SLCODE'];
	$VendorName = $Fetch['ABBRE'];
	$VendorPerson = $Fetch['BEMAIL'];
	$VendorAddress = $Fetch['BADDR'];
}
?>


            <?php
		}
	}
?>



<tr>
<td><h3>Vendor Information</h3></td>
</tr>

<tr>
<form name="VendorForm" id="VendorForm" method="post" action="reg.php" onsubmit="copyVendorDetails();">

<input type="hidden" name="VendorDetails" id="VendorFormVendorDetails" value="<?php echo $VendorDetails;?>" />
<input type="hidden" name="SubmitVendorFormAction" id="SubmitVendorFormAction" value="Yes" />
<input type="hidden" name="SelectVendorID" id="SelectVendorID" value="<?php echo $SelectVendorID;?>" />
<td>
<table width="100%" border="0" cellpadding="0" cellspacing="0">

<tr style="margin:20px 0px;">
<td valign="top" style="width:25%; padding:10px 0px;">Vendor Code:</td>
<td style="width:40%; padding:10px 0px;"><input type="text" name="VendorCode" id="VendorCode" value="<?php echo $VendorCode;?>" /></td>
</tr>
<tr>
<td valign="top" style="width:25%; padding:10px 0px;">Vendor Name:</td>
<td style="width:40%; padding:10px 0px;"><input type="text" name="VendorName" id="VendorName" value="<?php echo $VendorName;?>" /></td>
</tr>
<tr>
<td valign="top" style="width:25%;padding:10px 0px;">Contact Person:</td>
<td style="width:40%;padding:10px 0px;"><input type="text" name="VendorPerson" id="VendorPerson" value="<?php echo $VendorPerson;?>" /></td>
</tr>
<tr>
<td valign="top" style="width:25%;padding:10px 0px;">Mobile Number:</td>
<td style="width:40%;padding:10px 0px;"><input type="text" name="VendorNumber" id="VendorNumber" value="<?php echo $VendorNumber;?>" /></td>
</tr>
<tr>
<td valign="top" style="width:25%;padding:10px 0px;">Email :</td>
<td style="width:40%;padding:10px 0px;"><input type="text" name="VendorEmail" id="VendorEmail" value="<?php echo $VendorEmail;?>" /></td>
</tr>
<tr>
<td valign="top" style="width:25%;padding:10px 0px;">Address:</td>
<td style="width:40%;padding:10px 0px;"><input type="text" name="VendorAddress" id="VendorAddress" value="<?php echo $VendorAddress;?>" /></td>
</tr>

<?php if( $SelectVendorID < 1){ ?>
<tr>
<td style="width:25%;padding:10px 0px;">&nbsp;</td>
<td style="width:40%;padding:10px 0px;">
<input type="submit" name="SubmitSearchVendor" id="SubmitSearchVendor" value="Search Vendor" />
</td>
</tr>
<?php } ?>


</table>
</td>
</form>
</tr>



<tr style="display:none">
<td>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="height:30px;">
<h2> <font color="#CC0000">Exclusive Offer</font></h2>
</td>
</tr>

<tr>
<td style="height:20px;">
<p>Rs 15,000 for 1 year (taxes applicable). * Early Bird registration offer, pay for 12 months & get 2 months usage free.</p>
</td>
</tr>

</table>
</td>
</tr>


<?php if( $SelectVendorID > 0){ ?>
<tr>
<form name="PaymentForm" id="PaymentForm" method="post" action="reg.php" onsubmit="return copyPaymentFormVendorDetails()">

	<input type="hidden" name="SelectVendorID" id="SelectVendorID" value="<?php echo $SelectVendorID;?>" />

	<input type="hidden" name="VendorDetails" id="PaymentFormVendorDetails" value="<?php echo $VendorDetails;?>" />
    <input type="hidden" name="VendorEmail" id="VendorEmailPaymentForm" value="<?php echo $VendorEmail;?>" /> 

    <input type="hidden" name="VendorCode" id="VendorCodePaymentForm" value="<?php echo $VendorCode;?>" /> 
    <input type="hidden" name="VendorName" id="VendorNamePaymentForm" value="<?php echo $VendorName;?>" /> 
    <input type="hidden" name="VendorPerson" id="VendorPersonPaymentForm" value="<?php echo $VendorPerson;?>" /> 
    <input type="hidden" name="VendorNumber" id="VendorNumberPaymentForm" value="<?php echo $VendorNumber;?>" /> 
    <input type="hidden" name="VendorAddress" id="VendorAddressPaymentForm" value="<?php echo $VendorAddress;?>" /> 

	<input type="hidden" name="SubmitPaymentFormAction" id="SubmitPaymentFormAction" value="Yes" />
<td>
<table width="100%" border="0" cellpadding="0" cellspacing="0">

<tr>
<td>
<h2>Payment Info</h2>
</td>
</tr>

<tr>
<td style="width:25%;padding:10px 0px;">
Payment Mode
</td>
<td style="width:25%;padding:10px 0px;">
<input name="PaymentMode" id="PaymentMode" type="radio" value="Chq" <?php if($PaymentMode == 'Chq' || $PaymentMode == ''){ ?>checked="checked"<?php } ?> /> Chq 
<input name="PaymentMode" id="PaymentMode" type="radio" value="Cash" <?php if($PaymentMode == 'Cash'){ ?>checked="checked"<?php } ?> /> Cash
</td>
</tr>

<tr>
<td style="width:25%;padding:10px 0px;">
Payment Status
</td>
<td style="width:25%;padding:10px 0px;">
<select name="PaymentStatus" id="PaymentStatus" >
<option <?php if($PaymentStatus == 'Pending' || $PaymentStatus == '' ){ ?>selected="selected"<?php } ?>>Pending</option>
<option <?php if($PaymentStatus == 'Paid'){ ?>selected="selected"<?php } ?>>Paid</option>
</select>
</td>
</tr>

<tr>
<td style="width:25%;padding:10px 0px;">
Amount
</td>
<td style="width:25%;padding:10px 0px;">
15000
</td>
</tr>
<tr>
  <td style="width:25%;padding:10px 0px;"><input type="button" name="ButtonCancel" id="ButtonCancel" value="Clear / Cancel" onclick="window.location.href='reg.php'" /></td>
  <td style="width:25%;padding:10px 0px;"><input type="submit" name="SubmitFinalize" id="SubmitFinalize" value="Finalize" /></td>
</tr>



</table>
</td>
<input type="hidden" name="PaymentAmount" id="PaymentAmount" value="15000" />
</form>
</tr>
<?php } ?>


</table>




</body>
</html>