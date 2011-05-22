<?php
<<<<<<< HEAD
// Retrieve the URL variables (using PHP).     
=======
// Retrieve the URL variables (using PHP).
>>>>>>> e9f28dfb056cf164c4196d691514061a2476bd20
$ariassemblyid = $_GET['ariassemblyid'];
$arisku = $_GET['arisku'];
$ariprice = $_GET['ariprice'];
$aribrand = $_GET['aribrand'];
$ariparentassemblyid = $_GET['ariparentassemblyid'];
$aripartid = $_GET['aripartid'];	
$ariqty=$_GET['ariqty'];	
?>
<<<<<<< HEAD
=======

>>>>>>> e9f28dfb056cf164c4196d691514061a2476bd20
<html>
<head>
<title>Parts Search</title>
<link href="catalog/view/theme/mytheme/stylesheet/stylesheet.css" type="text/css" rel="stylesheet">
<script src="catalog/view/javascript/jquery/jquery-1.3.2.min.js" type="text/javascript"></script>
</head>
<body>
<div id="header" style="height:100px; width:300px;">
    <div class="div2">
            <a href="http://beta.mowersnmore.com/index.php?route=common/home"><img alt="Mowers n More" title="Mowers n More" src="http://beta.mowersnmore.com/image/data/mowersnMore.png"></a>
          </div>
</div>
<div id="partsSearch">
<h2> Parts Search Checkout </h2>
<table style="padding-left:10px;">
<thead>
<tr>
<th><h3> Part # </h3></th>
<th><h3> Model Name </h3></th>
<th><h3> Price </h3></th>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $arisku; ?></td>
<td><?php echo $aribrand; ?></td>
<td>$<?php echo $ariprice; ?></td>
</tr>
</tbody>
</table>
</div>
<div class="content">
                Qty:                <input type="text" value="<?php echo $ariqty; ?>" size="3" name="quantity">
                <a class="button" id="add_to_cart" href="/defaultCheckout2.php"><span>Add to Cart</span></a>
</div>

<script type="text/javascript">
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

/*function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}
*/

$(document).ready(function () {
	$('#add_to_cart').removeAttr('onclick');
	

	$('#add_to_cart').click(function () {
		var quantity=''; 
		quantity=$("input[name='quantity']").val();
	//	console.log(quantity);
		if(quantity!='' & quantity!=0){
		createCookie('partsCookie','<?php echo $arisku; ?>^<?php echo $aribrand; ?>^$<?php echo $ariprice; ?>^'+quantity,7);
	/*	var x = readCookie('partsCookie')
if (x) {
console.log(x); */

		//$("#partsSearch").hide();
		//$(".content").hide();
		//$("#cart").show();
//}
}
else {
alert('Please enter a valid number for the quantity count');
}
});
});

</script>
</body>
</html>