<html>
<head>
<title>BILLING - WHITECITY</title>
<style>
.row{
	margin-bottom:10px;
}
</style>
<script>
function additem(){	
		document.getElementById("itemAdd").style.display="block";
		 $("#itemAdd").fadeOut(3000);
}

function calcSellprice(value){
	var itemprice=document.getElementById("itemprice").value;
	var itemsellprice=document.getElementById("itemsellprice").value;
	var sprice;
	var percent= value/100;
	alert(percent);
	if(itemsellprice==''|| itemsellprice==null){		
	sprice= (Number(itemprice) + Number((itemprice*percent)));
	}else
	{
		sprice= (Number(itemsellprice) + Number((itemprice*percent)));
	}
	document.getElementById("itemsellprice").value=sprice;

}
</script>
<body>
<?php include'header.php' ?>
<div class="container">
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#bill">Billing</a></li>
    <li><a data-toggle="pill" href="#inventory">Inventory</a></li>
	<li><a data-toggle="pill" href="#billview">View Bills</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="bill" class="tab-pane fade in active">
      <h3>Billing</h3>
	  <div style="border:black solid 1px; width:90%; height:100px">
		<h4 style="margin-left:2%;">Date	: <?php echo date("d/m/Y");?>
		<h4 style="margin-left:2%;">Current User :<?php echo $_SESSION['current_user']; ?>
	  </div>
    </div>
    <div id="inventory" class="tab-pane fade">
      <h3>Inventory</h3>
	  <div style="border:solid black 1px; width:100%; margin-bottom:1%;"></div>
	  <h4>Add Item</h4>
	  <div style="border:solid black 1px; width:100%; margin-bottom:2%;"></div>
	  
  <div class="alert alert-success" id="itemAdd" style="display:none;">
    <strong>Success!</strong> The item was successfully added to inventory.
  </div>

    <div class="row">
      <label class="control-label col-sm-2">Item Name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="itemname">
      </div>
    </div>
    <div class="row">
      <label class="control-label col-sm-2">Item Price:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="itemprice">
      </div>
    </div>
	<div class="row">
      <label class="control-label col-sm-2">Item tax1%:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" onchange="calcSellprice(this.value);" id="itemtax1">
      </div>
    </div>
	<div class="row">
      <label class="control-label col-sm-2">Item tax2%:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" onchange="calcSellprice(this.value);" id="itemtax2">
      </div>
    </div>
	<div class="row">
      <label class="control-label col-sm-2">Item Sell Price:</label>
      <div class="col-sm-2">          
        <input type="text" class="form-control" id="itemsellprice" readonly>
      </div>
    </div>
    <div class="row">        
      <div class="col-sm-offset-2 col-sm-10">
        <button onclick="additem();" class="btn btn-default">Add Item</button>
      </div>
    </div>
    </div>
	<div id="billview" class="tab-pane fade">
      <h3>View Bills</h3>
      <p>Under construction .</p>
    </div>
  </div>
</div>

</body>
</html> 
