<?php        
   if(strtolower($_COOKIE["security_code"]) == strtolower($_REQUEST['captchacode']))
    {
      $headers = "MIME-Version: 1.0\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1\n";
      $headers .= "X-Priority: 3\n";
      $headers .= "X-MSMail-Priority: Normal\n";
      $headers .= "X-Mailer: php\n";
      $headers .= "From: ".$fname." <".$email."> \n";    
      $BodySubject = ($subject == "OTHER") ? $subject_other : $subject;
      $MailSubject = ($subject == "OTHER") ? "Contact us message: ".$subject_other : "Contact us message: ".$subject;
      $mail_body = '
      <table width="100%">
        <tr>
          <td valign="top">Contact Us Message</td>
        </tr>
        <tr>
          <td valign="top">The below email was sent on '.date("d F Y",time()).' / '.date("H:i",time()).' Hrs</td>
        </tr>
        <tr>
          <td valign="top">Full Name: '.$fname.'</td>
        </tr>
        <tr>
          <td valign="top">E-mail address: '.$email.'</td>
        </tr> 
        <tr>
          <td valign="top">Phone Number: '.$phone.'</td>
        </tr> 
        <tr>
          <td valign="top" style="border-top:1px solid #BCAF98">&nbsp;</td>
        </tr>  
        <tr>
          <td valign="top">Subject: '.$BodySubject.'</td>
        </tr> 
        <tr>
          <td valign="top">Message: </td>
        </tr> 
        <tr>
          <td>'.nl2br($message).'</td>
        </tr>
      </table>';
      $messagetist = stripslashes($mail_body);
       
      $SqlInsert = "INSERT INTO cons_contacts SET
      ContName     = '".$fname."',
      ContEmail    = '".$email."',
      ContPhone    = '".$phone."',
      ContSubject  = '".$MailSubject."',
      ContMsg      = '".$message."',
      ContDt       = '".time()."';";
      $RstInsert = mysql_query($SqlInsert);

	  mail('ananya@infusionglobal.com',$MailSubject,$messagetist,$headers);
    }
?>

<script language="javascript" type="text/javascript">
function ContactFormValidData()
 {
   var fname   = document.getElementById('fname'); 
   var eml     = document.getElementById('email'); 
   var subject      = document.getElementById('subject');
   var message      = document.getElementById('message');  
   var captchacode      = document.getElementById('captchacode');
   if(fname.value == '')
    {
      alert('Please insert full name.');
      fname.focus();
      return false;
    }  
   else if(eml.value=="")
    {
      alert('Please insert e-mail id.');
      eml.focus();
      return false;
    }
   else if(echeck(eml.value)==false)
    {
      eml.focus();
      return false;
    }
   else if(subject.value == '')
    {
      alert('Please insert subject.');
      subject.focus();
      return false;
    }
   else if(message.value == '')
    {
      alert('Please insert message.');
      message.focus();
      return false;
    }   
   else if(captchacode.value == '')
    {
      alert('Please insert security code.');
      captchacode.focus();
      return false;
    }
   else
    {
      return true;
    }
 }
function echeck(str)
 {
   var at="@"
   var dot="."
   var lat=str.indexOf(at)
   var lstr=str.length
   var ldot=str.indexOf(dot)
   if (str.indexOf(at)==-1)
    {
      alert("Invalid e-mail id")
      return false;
    }
   if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
    {
      alert("Invalid e-mail id")
      return false;
    }
   if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
    {
      alert("Invalid e-mail id")
      return false;
    }
   if (str.indexOf(at,(lat+1))!=-1)
    {
      alert("Invalid e-mail id")
      return false;
    }
   if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
    {
      alert("Invalid e-mail id")
      return false;
    }
   if (str.indexOf(dot,(lat+2))==-1)
    {
      alert("Invalid e-mail id")
      return false;
    }
   if (str.indexOf(" ")!=-1)
    {
      alert("Invalid e-mail id")
      return false;
    }
   return true
 }
function FuncChkOther()
 { 
   if(document.getElementById('payment3').checked == true )
    {  
      document.getElementById('payment_other').disabled = false;
      document.getElementById('payment_other').focus();
    }
   else
    {    
      document.getElementById('payment_other').disabled = true;
    }
 }  
function FuncCheckOtherSub()
 {
   if(document.getElementById('subject').value == "OTHER" )
    {  
      document.getElementById('subject_other').disabled = false;
      document.getElementById('subject_other').focus();
    }
   else
    {    
      document.getElementById('subject_other').disabled = true;
    }
 }
</script>
<h1>Contact Us</h1>
<p>You can send us a message by completing the below form. All messages go to the Parish Office and
will be directed to the relevant person. For strictly confidential messages please contact Father
Andrew directly. </p>
<table cellpadding="5" cellspacing="5" border="0" width="100%" >
  <tr>                    
    <td align="right" style="width:48%;" valign="top"><span style="font-size:11px;"><span class="star">*</span> Required fields</span><br />
    <table cellpadding="5" cellspacing="5" border="0" width="100%" bgcolor="#FAF5E5" style="border:1px solid #CABCA3;">
      <?php
      if(isset($_REQUEST['Error']))
       { ?> 
         <tr>
           <td align="center" style="color:#D20000">Incorrect security code entered.</td>
         </tr> 
         <?php
       }
      ?>
      <tr>
        <td align="left">Full Name <span class="star">*</span><br />
        <input type="text" name="fname" id="fname" value="" style="width:85%" /></td>
      </tr> 
      <tr>                    
        <td align="left" valign="top">E-mail address :<br />
        <span style="font-size:11px;line-height:16px;">(We require this in order to be able to reply to you via email.
        We will never share your email address with others.)</span><br />
        <input type="text" name="email" id="email" value="" style="width:85%" /></td>
      </tr>
      <tr>                    
        <td align="left" valign="top">Phone Number :<br />
        <span style="font-size:11px;line-height:16px;">(please enter full phone number if you wish us to call you back)</span><br />
        <input type="text" name="phone" id="phone" value="" style="width:50%" /></td>
      </tr>
      <tr>
        <td align="left" valign="top">Message Subject <span class="star">*</span>:<br />
        <select name="subject" id="subject" onchange="FuncCheckOtherSub();">
          <option value="">Select</option>
          <option value="Buildings/Maintenance">Buildings/Maintenance</option>
          <option value="Catechism ">Catechism </option>
          <option value="Events/Fund Raising">Events/Fund Raising</option>
          <option value="Family Group">Family Group</option>
          <option value="Father Andrew">Father Andrew</option>
          <option value="Justice and Peace">Justice and Peace</option>
          <option value="Ladies Group">Ladies Group</option>
          <option value="Liturgy">Liturgy</option>
          <option value="New Parishioners">New Parishioners</option>
          <option value="Outreach">Outreach</option>
          <option value="Parish Office / Parish Secretary">Parish Office / Parish Secretary</option>
          <option value="Schoenstatt">Schoenstatt</option>
          <option value="Small Faith Sharing Groups">Small Faith Sharing Groups</option> 
          <option value="Webmaster">Webmaster</option>
          <option value="Youth">Youth</option>
          <option value="OTHER">OTHER</option>
        </select><br /><br style="line-height:5px;" />
        <input type="text" name="subject_other" id="subject_other" disabled="disabled" value="" style="width:85%" />
        </td>
      </tr> 
      <tr>                    
        <td align="left" valign="top">Enter your Message <span class="star">*</span>:<br />
        <textarea name="message" id="message" cols="10" rows="4" style="width:95%" ></textarea></td>
      </tr>
      <tr>                    
        <td align="left" valign="top">Security Code <span class="star">*</span>:<br />
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>                                                     
            <td align="left" valign="middle"><img src="CaptchaSecurityImages.php?width=60&height=24&characters=5" border="1" align="absmiddle" /></td>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="right" valign="middle"><input name="captchacode" id="captchacode" type="text" class="InputBox" style="width:70px;" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>                    
        <td align="left" valign="top">
        <table cellpadding="0" cellspacing="0" border="0" width="100%" >
          <tr>   
            <td align="left" valign="top"><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
            <td align="right" valign="top"><input type="submit" name="Submit" id="Submit" value="Send E-mail" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td style="width:4%;">&nbsp;</td>
    <td align="left" valign="top" style="width:48%;">
    <table cellpadding="2" cellspacing="2" border="0">
      <tr>                               
        <td align="left" valign="top" colspan="3">
        <table width="100%" cellpadding="3" cellspacing="3" border="0"> 
          <tr>                               
            <td style="width:38%" align="center" valign="top"><strong>Parish Priest</strong></td>
            <td style="width:31%" align="center" valign="top"><strong>Deacon</strong></td>
            <td style="width:31%" align="center" valign="top"><strong>Parish Secretary</strong></td>
          </tr>  
          <tr>                               
            <td align="center" valign="top"><img src="images/stories/new_images/fr-andrew_150x150.jpg" border="0" /></td>
            <td align="center" valign="top"><img src="images/stories/new_images/richard-aquirre_150x150.jpg" border="0" /></td>
            <td align="center" valign="top"><img src="images/stories/new_images/pam_adshade_150x150.jpg" border="0" /></td>
          </tr> 
          <tr>                               
            <td align="center" valign="top">Father Andrew</td>
            <td align="center" valign="top">Rev Richard Aguirre</td>
            <td align="center" valign="top">Pam Adshade</td>
          </tr>   
        </table></td>
      </tr>
      <tr>                               
        <td align="left" valign="top" colspan="3"><br style="line-height:8px;" />
        <h3>Address</h3>
        4 Price Drive<br>
        P O Box 161<br>
        Constantia 7848</td>
      </tr>
      <tr>                               
        <td align="left" valign="top" colspan="3"><br style="line-height:8px;" />
        <table cellpadding="0" cellspacing="0" border="0">
          <tr>
            <td style="width:40px;" align="left" valign="top">Phone</td>
            <td align="left" valign="top">:</td>
            <td align="left" valign="top">021 794 5185</td>
          </tr>
          <tr>
            <td align="left" valign="top">Fax</td> 
            <td align="left" valign="top">:</td>
            <td align="left" valign="top">021 794 5192</td>
          </tr> 
          <tr>
            <td align="left" valign="top">email</td>
            <td align="left" valign="top">:</td>
            <td align="left" valign="top"><a href="mailto:materecl@constantiacatholic.co.za">materecl@constantiacatholic.co.za</a></td>
          </tr>
          <tr>
            <td align="left" valign="top">website</td>
            <td align="left" valign="top">:</td>
            <td align="left" valign="top"><a href="http://www.constantiacatholic.co.za" target="_blank">www.constantiacatholic.co.za</a></td>
          </tr>
        </table></td>
      </tr> 
      <tr>                               
        <td align="left" valign="top" colspan="3"><br style="line-height:8px;" />
        <h3>Office Hours:</h3>
        The office is open daily 8:30 - 12:30.<br />
        Father Andrew is off on Tuesdays.
        <br />&nbsp;</td>
      </tr>
    </table>
    <table width="100%" cellpadding="2" cellspacing="2" border="0">
      <tr>                               
        <td align="left" valign="top" colspan="3">
        <h3>Bank Details:</h3>
        <b>Constantia Catholic Church</b><br />
        Standard Bank<br />
        Branch 025 309<br />
        Current Account No 07 169 8965</td>
      </tr>
    </table></td>
  </tr>
</table>

