<!DOCTYPE html>
<html>
<head>
  <title>Kai Cannaries Trading SDN BHD: Order Details</title>
</head>
<body style="background-color:  #5c8fc2; border-color: black">
  <center>
    <a href="index.php"><b>Home</b></a> |
    <a href="products.php"><b>Products</b></a> |
    <a href="customers.php"><b>Customers</b></a> |
    <a href="staffs.php"><b>Staffs</b></a> |
    <a href="orders.php"><b>Orders</b></a>
    <hr>
    <table cellpadding="5" width="15%">
      <tbody>
    
    <tr>
   <td><b> Order ID:</td> <td>O001</td>
    </tr>
    
    <tr>
    <td><b>Order Date:</td> <td>24 January 2021</td>
  </tr>

    <tr>
    <td><b>Staff:</td> <td>Khairul</td>
    </tr>

    <tr> 
    <td><b>Customer:</td> <td>Kwek</td>
    </tr> 

</tbody>
 </table>
    <hr>
    <form action="orders_details.php" method="post">
      Product
      <select name="pid">
        <option value="P001">GuLong Luncheon Meat</option>
        <option value="P002">Meaty Premium Luncheon Meat</option>
        <option value="P003">Porkies Pork Luncheon Meat</option>
      </select>
      Quantity
      <input name="quantity" type="text">
      <button type="submit" name="addproduct">Add Product</button>
      <button type="reset">Clear</button>
    </form>
    <hr>


    <p><b>Order Details Information</b></p>


   <table cellpadding="2" border="1">
      <tr>
        <td><b>Order Detail ID</b></td>
        <td><b>Product</b></td>
        <td><b>Quantity</b></td>
        
      </tr>
      <tr>
        <td>D5603f136f41334.84833440</td>
        <td>GuLong Luncheon Meat</td>
        <td>1</td>
        <td>
          <a href="orders_details.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>O5603f03a9349f0.39900158</td>
        <td>Meaty Premium Luncheon Meat</td>
        <td>1</td>
        <td>
          <a href="orders_details.php">Delete</a>
        </td>
      </tr>
        <tr>
        <td>D5603f136f41334.84833440</td>
        <td>Yeos Kari Ayam</td>
        <td>1</td>
        <td>
          <a href="orders_details.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>D5603f136f41334.84833440</td>
        <td>Porkies Pork Luncheon Meat/td>
        <td>1</td>
        <td>
          <a href="orders_details.php">Delete</a>
        </td>
      </tr>
    </table>
    <hr>
    <a href="invoice.php" target="_blank">Generate Invoice</a>
  </center>
</body>
</html>