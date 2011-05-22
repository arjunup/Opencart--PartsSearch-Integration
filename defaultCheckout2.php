<?php echo $header; ?><?php echo $column_left; ?><?php echo $column_right; ?>
<?php $partsCookie=$_COOKIE["partsCookie"];
          $partsArray=explode("^",$partsCookie);
          
          $priceInt=substr($partsArray[2],1);
          $total=$priceInt * (int) $partsArray[3];
?>
<html>
<head>
<title>Parts Search</title>
<link href="catalog/view/theme/mytheme/stylesheet/stylesheet.css" type="text/css" rel="stylesheet">
<script src="catalog/view/javascript/jquery/jquery-1.3.2.min.js" type="text/javascript"></script>
</head>
<body>

<table>
  <tr>
        <td align="left">Parts Checkout</td>
        </tr>
        <tr>
        <td align="left">Part #</td>
        <td align="left">Part name</td>
        <td align="middle">Price</td>
        <td align="right">Quantity</td>
        <td align="right">Total</td>
        </tr>
        <tr>
        <td><?php echo $partsArray[0];?></td>
        <td><?php echo $partsArray[1];?></td>
        <td><?php echo $partsArray[2];?></td>
        <td><?php echo $partsArray[3];?></td>
        <td><?php echo '$'. $total;?></td>
		</tr>
	</table>
<!--<a class="button" onclick="confirmSubmit();"><span>Confirm Order</span></a>

<script type="text/javascript">
function confirmSubmit() {
	$.ajax({
		type: 'GET',
		url: 'index.php?route=payment/pp_standard/confirm',
		success: function() {
			$('#checkout').submit();
		}
	});
}
</script>	
-->
<!-- PayPal code -->
<!--
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="KTAEEBUKYUB6L">
<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
-->

<!--
<form target="paypal" method="post" action="https://www.paypal.com/cgi-bin/webscr">
<input type="hidden" value="_cart" name="cmd">
<input type="hidden" name="add" value="1">
<input type="hidden" value="1" name="upload">
<input type="hidden" value="brian@mowerpartpros.com" name="business">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" value="<?php echo $partsArray[1];?>" name="item_name">
<input type="hidden" value="<?php echo $partsArray[2];?>" name="amount">
<input type="hidden" value="<?php echo $partsArray[3];?>" name="quantity">
<!--<input type="submit" value="Confirm and Pay">-->
<!-- Display the payment button. -->  
<!-- <input type="image" name="submit" border="0"   src="https://www.paypal.com/en_US/i/btn/btn_cart_LG.gif" alt="PayPal - The safer, easier way to pay online">  
       <img alt="" border="0" width="1" height="1"  src="https://www.paypal.com/en_US/i/scr/pixel.gif" > 
</form>
-->

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr"  method="post">  
     <!-- Identify your business so that you can collect the payments. -->  
     <input type="hidden" name="business" value="brian@mowerpartpros.com">  
	   <!-- Specify a PayPal Shopping Cart Add to Cart button. -->  
		
	       <input type="hidden" name="cmd" value="_cart">  
               <input type="hidden" name="add" value="1">  

          
             <!-- Specify details about the item that buyers will purchase. -->  
	   <input type="hidden" name="item_number" value="<?php echo $partsArray[0];?>">
	   <input type="hidden" name="item_name"  value="<?php echo $partsArray[1];?>">  
	   <input type="hidden" name="amount" value="<?php echo $partsArray[2];?>"> 
	   <input type="hidden" value="<?php echo $partsArray[3];?>" name="quantity"> 
           <input type="hidden" name="currency_code" value="USD">  

            <!-- Continue shopping on the webpage for birthday cards -->  
 
             <input type="hidden" name="shopping_url" value="http://beta.mowersnmore.com/index.php?route=product/category&path=51">  
     
             <!-- Display the payment button. -->  
 
             <input type="image" name="submit" border="0" src="https://www.paypal.com/en_US/i/btn/btn_cart_LG.gif"  alt="PayPal - The safer, easier way to pay online">  
	     <img alt="" border="0" width="1" height="1"  src="https://www.paypal.com/en_US/i/scr/pixel.gif" >  
</form> 






<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">  
        <!-- Identify your business so that you can collect the payments. -->  
         <input type="hidden" name="business" value="brian@mowerpartpros.com">  

         
             <!-- Specify a PayPal Shopping Cart View Cart button. -->  

             <input type="hidden" name="cmd" value="_cart">  

             <input type="hidden" name="display" value="1">  
   
             <!-- Continue shopping on the current webpage of the merchant site. -->  
  
             <input type="hidden" name="shopping_url"  value="http://beta.mowersnmore.com/index.php?route=product/category&path=51">  

             <!-- Display the View Cart button. -->  
	   
	     <input type="image" name="submit" border="0" src="https://www.paypal.com/en_US/i/btn/btn_viewcart_LG.gif"   alt="PayPal - The safer, easier way to pay online">  
	      <img alt="" border="0" width="1" height="1"src="https://www.paypal.com/en_US/i/scr/pixel.gif" >  
</form> 

</body>
</html>