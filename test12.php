<form name="frmEdit" action="http://gsl-kol-dt-31/root/worklog/web/process.php" method="post" onsubmit="return check_ref()">
        <table width="100%">
            <tbody><tr>
                
                <input type="hidden" name="todo" id="todo" value="EDIT">
                <input type="hidden" name="Id" id="Id" value="4">
                <input type="hidden" name="date" id="date" value="2014-09-05">
            </tr>
            <tr>
                <td style="font-size:13px;padding-right:20px;
font-family:'Open Sans';">Category :</td>
                <td><select name="selCategory" id="selCategory" class="text ui-widget-content ui-corner-all">
                    <option value="">Select Category</option>
            <option value="24"> Samadhan</option>
                    
                <option value="25" selected="selected"> dhiraj test</option>
                    
                <option value="26"> BREAK</option>
                    
                <option value="27"> LEAVE</option>
                    
                <option value="28"> IDLE</option>
                    
                <option value="38"> KAYAKO</option>
                    
                <option value="39"> Sharepoint</option>
                    
                                </select></td>
            </tr>
            <tr>
                <td style="font-size:13px;padding-right:20px;
font-family:'Open Sans';">Ref. No.: </td>
                <td><input style="padding-left: 5px;
width: 166px;
padding: 3px;
margin-bottom: 5px;
border-radius: 2px;
border: 1px #dddddd solid;
background: #f7f5f5;
font-size: 12px;
font-family: 'Open Sans';" name="ref_no" type="text" id="ref_no" value="AAA-123-12345" onblur="return check_ref();"></td>
            </tr>
            <tr>
                <td style="font-size:13px;padding-right:20px;
font-family:'Open Sans';">Hrs:</td>
                
                <td nowrap="nowrap">
        
        
      <select name="hrs" class="texttime ui-widget-content ui-corner-all" id="hrs">
            
            <option value="Select">--</option>
                                 // echo  $name=$data['fname'].$data['lname'];
                    <option value="00">00</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="01">01</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="02">02</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="03">03</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="04">04</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="05">05</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="06">06</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="07">07</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="08">08</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="09">09</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="10">10</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="11">11</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="12">12</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="13">13</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="14" selected="selected">14</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="15">15</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="16">16</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="17">17</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="18">18</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="19">19</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="20">20</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="21">21</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="22">22</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="23">23</option>';
                        
            
            
         </select>
        
        
         
          </td>
         </tr>
            
         <tr>   
        <td style="font-size:13px;padding-right:20px;
font-family:'Open Sans';">Mins:</td>    
            <td nowrap="nowrap"> 
            
             <select name="mints" class="texttime ui-widget-content ui-corner-all" id="mins">
            
            <option value="Select">--</option>
                                 // echo  $name=$data['fname'].$data['lname'];
                    <option value="00">00</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="05">05</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="10" selected="selected">10</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="15">15</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="20">20</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="25">25</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="30">30</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="35">35</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="40">40</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="45">45</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="50">50</option>';
                               // echo  $name=$data['fname'].$data['lname'];
                    <option value="55">55</option>';
                        </select>
            
            
            
          </td>
         </tr>    
            
            
            <tr>
                <td style="font-size:13px;padding-right:20px;
font-family:'Open Sans';">Notes:</td>
                <td><textarea style="padding-left: 5px;
width: 166px;
padding: 3px;
margin-bottom: 5px;
border-radius: 2px;
border: 1px #dddddd solid;
background: #f7f5f5;
font-size: 12px;
font-family: 'Open Sans';" name="note" id="note">wer</textarea></td>
                <td></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
                <td><input class="go-btn" style="font-size:12px;" type="submit" name="Submit" value="Submit" onclick="return validate_frm()"></td>
                
            </tr>
        </tbody></table>
    </form>