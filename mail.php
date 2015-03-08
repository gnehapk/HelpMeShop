<?php
require_once 'library/mandrill-api-php/src/Mandrill.php'; //Not required with Composer

//var_dump($_POST);exit();
try {
    $mandrill = new Mandrill('-o6bPXvN9NYKKyooc1Wwrg');
    $message = array(
        'html' => '
<html>
<head>
  <title></title>
</head>
<body>
<table width="450" style="text-align:left;border-spacing:0px;font-family:arial,helvetica,verdana,sans-serif">
  <tbody>
    <tr>
      
      <td>
        
        <div style="line-height:10px;font-size:10px">
          &nbsp; 
        </div>
        
        
      </td>
      
      <td width="99%" valign="top">
        
        <span style="line-height:10px;font-size:10px">
          &nbsp; 
        </span>
        
        <div style="width:300px;line-height:33px;border-bottom:solid #cccccc 1px;margin-right:10px">
          &nbsp; 
        </div>
        
      </td>
      
    </tr>
    
    <tr>
      
      <td colspan="2">
        
        <div style="font-size:10px;line-height:10px">
          &nbsp; 
        </div>
        
        <div style="font-size:18px;color:#000000;margin-left:10px;font-family:arial,helvetica,verdana,sans-serif">
          Help me choose which product should I buy?
        </div>
        
      </td>
      
    </tr>
    
  </tbody>
</table>




<div style="font-size:10px;line-height:20px">
  &nbsp; 
</div>
<table width="450" style="text-align:left;border-spacing:0px">
  <tbody>
    <tr>

      <!-- Image section -->
      <td valign="top">
      

    <div style="margin-left:40px;margin-right:35px">
    <input type="radio" name="item" style="margin-left: -15px;margin-top: 12px;">
          <a href="
<itemUrl>
" target="_blank">
  <img src="https://farm3.staticflickr.com/2676/cameras/72157614807901944_model_huge_d015324180.jpg" width="90" alt="
<Product_name>
" height="90" border="0">
          </a>
        </div>
        <div style="line-height:20px;font-size:4px">
          &nbsp;
        </div>
      </td>
      <!-- Title section -->
      <td valign="top">
 
        <div style="margin-right:20px;width:280px">
          <a href="
<itemUrl>
" target="_blank" style="text-decoration: none;">
  <span style="font-size:18px;color:#666666;font-family:arial,helvetica,verdana,sans-serif;text-decoration: none;">
    Product {item.itemName}
  </span>
  <div style="line-height:4px;font-size:4px;padding:0px;margin:0px">
    &nbsp;
  </div>
  <span style="font-size:14px;color:#999999;font-family:arial,helvetica,verdana,sans-serif;">
    Product {item.itemPrice}
    <span style="font-size:1px">
      &nbsp; 
    </span>
  </span>
      </a>
      <div style="line-height:15px;font-size:15px">
        &nbsp;
      </div>
      <table style="border-spacing:0px">
        <tbody>
          <tr>
            <td align="center" nowrap="">
              <div style="line-height:5px;font-size:5px">
                &nbsp;
              </div>
              <div style="font-size:12px;color:#000001;font-family:arial,helvetica,verdana,sans-serif" nowrap="">
                
                <textarea rows="3" cols="20" placeholder="Comment.."></textarea>
              </div>
            </td>
            
          </tr>
        </tbody>
      </table>
    </div>
    <span style="line-height:20px;font-size:4px">
      &nbsp; 
    </span>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div style="line-height:1px;border-bottom:solid #cccccc 1px;margin-left:18px;margin-right:18px">
          &nbsp;
        </div>
      </td>
    </tr>
    
    
    
    <tr>
      <!-- Image section -->
    <td valign="top">
      <input type="radio" name="item" style="margin-left: 25px;margin-top: 12px;">
      <div style="margin-left:40px;margin-right:35px">
        <a href="
<itemUrl>
" target="_blank">
  <img src="http://ecx.images-amazon.com/images/I/61d1sNofahL._SL1500_.jpg" width="90" alt="
<Product_name>
" height="90" border="0">
          </a>
        </div>
        <div style="line-height:20px;font-size:4px">
          &nbsp;
        </div>
    </td>
    <!-- Title section -->
    <td valign="top">
      <div style="margin-right:20px;width:280px">
        <a href="
<itemUrl>
" target="_blank" style="text-decoration: none;">
  <span style="font-size:18px;color:#666666;font-family:arial,helvetica,verdana,sans-serif;text-decoration: none;">
    Product {item.itemName}
  </span>
  <div style="line-height:4px;font-size:4px;padding:0px;margin:0px">
    &nbsp;
  </div>
  <span style="font-size:14px;color:#999999;font-family:arial,helvetica,verdana,sans-serif;">
    Product {item.itemPrice} 
    <span style="font-size:1px">
      &nbsp; 
    </span>
  </span>
      </a>
      <div style="line-height:15px;font-size:15px">
        &nbsp;
      </div>
      <table style="border-spacing:0px">
        <tbody>
          <tr>
            <td align="center" nowrap="">
              <div style="line-height:5px;font-size:5px">
                &nbsp;
              </div>
              <div style="font-size:12px;color:#000001;font-family:arial,helvetica,verdana,sans-serif" nowrap="">
                
                <textarea rows="3" cols="20" placeholder="Comment.."></textarea>
              </div>
            </td>
            
          </tr>
        </tbody>
      </table>
    </div>
    <span style="line-height:20px;font-size:4px">
      &nbsp; 
    </span>
    </td>
    </tr>
    <tr>
      <td colspan="2">
        <div style="line-height:1px;border-bottom:solid #cccccc 1px;margin-left:18px;margin-right:18px">
          &nbsp;
        </div>
      </td>
    </tr>
    
    
    
    <tr>
      <!-- Image section -->
    <td valign="top">
      <input type="radio" name="item" style="margin-left: 25px;margin-top: 12px;">
      <div style="margin-left:40px;margin-right:35px">
        <a href="
<itemUrl>
" target="_blank">
  <img src="http://ecx.images-amazon.com/images/I/816ojoGcyzL._SL1500_.jpg" width="90" alt="
<Product_name>
" height="90" border="0">
          </a>
        </div>
        <div style="line-height:20px;font-size:4px">
          &nbsp;
        </div>
    </td>
    <!-- Title section -->
    <td valign="top">
      <div style="margin-right:20px;width:280px">
        <a href="
<itemUrl>
" target="_blank" style="text-decoration: none;">
  <span style="font-size:18px;color:#666666;font-family:arial,helvetica,verdana,sans-serif;text-decoration: none;">
    Product {item.itemName}
  </span>
  <div style="line-height:4px;font-size:4px;padding:0px;margin:0px">
    &nbsp;
  </div>
  <span style="font-size:14px;color:#999999;font-family:arial,helvetica,verdana,sans-serif;">
    Product {item.itemPrice}
    <span style="font-size:1px">
      &nbsp; 
    </span>
  </span>
      </a>
      <div style="line-height:15px;font-size:15px">
        &nbsp;
      </div>
      <table style="border-spacing:0px">
        <tbody>
          <tr>
            <td align="center" nowrap="">
              <div style="line-height:5px;font-size:5px">
                &nbsp;
              </div>
              <div style="font-size:12px;color:#000001;font-family:arial,helvetica,verdana,sans-serif" nowrap="">
                
                <textarea rows="3" cols="20" placeholder="Comment.."></textarea>
              </div>
            </td>
            
          </tr>
        </tbody>
      </table>
    </div>
    <span style="line-height:20px;font-size:4px">
      &nbsp; 
    </span>
    </td>
    </tr>
    <tr>
      <td colspan="2">
        <div style="background-color: #CC0000;width: 146px;margin:auto;">
          <a style="color: #FFF;text-decoration: none;font-weight: bold;width: 126px;padding: 10px;display: block;text-align: center;" href="#">
            Submit 
          </a>
        </div>
      </td>
    </tr>
    
    
  </tbody>
</table>
</body>
</html>',
        'text' => 'Example text content',
        'subject' => 'Im confused',
        'from_email' => 'gnehapk@gmail.com',
        'from_name' => 'Help Me Choose Support',
        'to' => array(
            array(
                'email' => 'gnehapk@gmail.com',
                //'name' => 'Recipient Name',
                'type' => 'to'
            )
        ),
        'headers' => array('Reply-To' => 'gnehapk@gmail.com'),
        'important' => false,
        'track_opens' => null,
        'track_clicks' => null,
        'auto_text' => null,
        'auto_html' => null,
        'inline_css' => null,
        'url_strip_qs' => null,
        'preserve_recipients' => null,
        'view_content_link' => null,
        'bcc_address' => 'message.bcc_address@example.com',
        'tracking_domain' => null,
        'signing_domain' => null,
        'return_path_domain' => null,
        'merge' => true,
        'merge_language' => 'mailchimp',
        
        'tags' => array('helpmechoose')

        
    );
    $async = false;
    $ip_pool = 'Main Pool';
    $send_at = null;
    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
    print_r($result);
    /*
    Array
    (
        [0] => Array
            (
                [email] => recipient.email@example.com
                [status] => sent
                [reject_reason] => hard-bounce
                [_id] => abc123abc123abc123abc123abc123
            )
    
    )
    */
} catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
    throw $e;
}

echo "Email Sent";

?>
