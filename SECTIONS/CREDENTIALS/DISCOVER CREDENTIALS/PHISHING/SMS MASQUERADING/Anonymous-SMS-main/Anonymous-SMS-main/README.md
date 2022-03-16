# Anonymous-SMS
PHP Script that creates Non-Reply Anon SMS using ClickSend API  
      
  
> This project was to understand the new methods of SMS and Email vulnerability exploitation.  
Both SMS & Email providers allow to provide a NAME rather than phone number or email address, this name can be modified to be something like "Anon"  
  
> In this example, we send an SMS from our ClickSend account to a test phone - the phone receives a message from "Anon" that says "This sender doesn't except replies".

> THIS SMS will be anonymous "Linked only to the accounts API Key".  

  
Setting a name such as "Private" - can be seen as illegal in many countries as it's supposed to be illegal to send Private SMS in many places.

### GET YOUR API DETAILS   
• Open http://ClickSend.com    
• Create Free Account   
• Get Hardly Working API Key    
> ( Tested AND THE website is useless - if you're lucky enough to actually make an account and get your key - not likely at all, you can continue.)  
   
• Add the Credentials to Accs.list, a non working preset is set for example.    
  
This script avoids using the cumbersome SDK from the ridiculous development team.   
    
  
## SCRIPT   
```   
<?php


echo sendSMS("+614","Test Message", true);

function sendSMS($to, $msg, $testing = false)
{

// Get Account from List
$acc = getAccount();
$username = $acc[0];
$key = $acc[1];

if($testing)
{
$to = "+61411111111";
}

// Send SMS
$result = clickSend($username, $key, $to, $msg, "TEST");

// Update Quota in Account List
if (!$testing)
{
$acc = getAccount(true);
}
return $result;
}


// ClickSend SMS Function
function clickSend($username, $key, $to, $msg, $senderID = "Anon")
{

$url = urlDecode("https://api.clicksend.com/http/v2/send.php?method=http&username=$username&key=$key");
  $data = '&to=' . $to .'&message=' . $msg . '&senderid=' . $senderID;
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, 1); 
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0); 
  $result = curl_exec($ch);
  $error = curl_error($ch);
  curl_close($ch);
 if (strlen($error == 0))
  {
    return $result;
  }
  else
 {
   return $error;
 }
}



// CSV Account List Manager
function getAccount($consumeQuota = false)
{
$filename = 'accs.list';
$csvarray = []; 
$selected = array();

if (($h = fopen("{$filename}", "r")) !== FALSE) 
{
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {
    $csvarray[] = $data;		
  }
  fclose($h);
}

$fp = fopen($filename, 'w');

foreach ($csvarray as $fields) {

    $username = $fields[0];
    $key = $fields[1];
    $quota = $fields[2];
      if ($quota >= 1)
          {
            if($consumeQuota)
              {
                 $fields[2] = $quota -1;
              }
            $selected = $fields;
          }

    fputcsv($fp, $fields);
    $lines++;
}
fclose($fp);
return $selected;
}

?>```
