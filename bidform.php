<?php include 'header.php' ?>

<link href="css/bidform.css" rel="stylesheet">

<div class="panel panel-default" id='paneladd'>
  <div class="panel-heading" ><h3>Add Your Details</h3></div>
  <div class="panel-body" >
  <div class="container">
 <div class="row">
 <div class="col-sm-4">
<form>
  <table width="581" height="645" class="bidform" border="0">
    <tr>
      <td width="198">Category</td>
      <td width="367" ><label for="select2"></label>
        <select name="category" id="select2" class='formelement' required>
        </select></td>
    </tr>
    <tr><td></td><td></td><tr><tr><tr><td></td><td></td><tr>
     
    <tr>
      <td>Location</td>
      <td><label for="select"></label>
        <select name="location" id="select" class='formelement' required>
        </select></td>
    </tr>
      <tr><td></td><td></td><tr><tr><tr><td></td><td></td><tr>
    <tr>
      <td>Condition</td>
      <td><label for="select3"></label>
        <select name="condition" id="select3" class='formelement' required>
        </select></td>
    </tr>
      <tr><td></td><td></td><tr><tr><tr><td></td><td></td><tr>
    <tr>
      <td>Brand</td>
      <td><label for="select4"></label>
        <select name="brand" id="select4" class='formelement' required>
        </select></td>
    </tr>
      <tr><td></td><td></td><tr><tr><tr><td></td><td></td><tr>
    <tr>
      <td>Model</td>
      <td><label for="textfield"></label>
        <input type="text" name="model" id="textfield" class='formelement' required></td>
    </tr>
      <tr><td></td><td></td><tr><tr><tr><td></td><td></td><tr>
    <tr>
      <td>Description</td>
      <td><label for="textarea"></label>
        <textarea name="description" id="description" class='formelement' cols="45" rows="2" required></textarea></td>
    </tr>
   <tr><td></td><td></td><tr><tr><td></td><td></td><tr><tr><td></td><td></td><tr><tr><tr><td></td><td></td><tr>
    <tr>
      <td>Price</td>
      <td><label for="textfield2"></label>
        <input type="text" name="price" class='formelement' id="textfield2" required></td>
    </tr>
    
    <tr>
      <td>Delivery Option</td>
      <td><input type="radio" name="radio" id="radio"  value="radio">Meet Person<br>
       <input type="radio" name="radio2" id="radio2"  value="radio2">Lansu Deliver<br>
        </td>
    </tr>
   
    <tr>
      <td>About You</td>
      <td><label for="textarea2"></label>
        <textarea name="textarea2" id="textarea2" class='formelement' cols="45" rows="2" required></textarea></td>
    </tr>
    <tr><td></td><td></td><tr><tr><td></td><td></td><tr><tr><td></td><td></td><tr><tr><tr><td></td><td></td><tr>

    <tr>
      <td>Phone no</td>
      <td><label for="textfield3"></label>
        <input type="text" name="textfield3" class='formelement' id="textfield3" required></td>
    </tr>
	<tr><tr><td></td><td></td><tr>
    <tr>
      <td>Address</td>
      <td><label for="textarea3"></label>
        <textarea name="textarea3" id="textarea3" class='formelement' cols="45" rows="3"></textarea></td>
    </tr>
    <tr><td></td><td></td><tr><tr><td></td><td></td><tr><tr><td></td><td></td><tr><tr><tr><td></td><td></td><tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button"  value="Add Item Now"></td>
    </tr>
  </table>
  </form>

</div>
</div>
</div>
</div>

</div>
<?php include 'footer.php' ?>
