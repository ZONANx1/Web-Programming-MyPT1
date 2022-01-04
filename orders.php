<!DOCTYPE html>
<html>
<head>
  <title>Kai Cannaries Trading SDN BHD : Orders</title>
</head>
<body style="background-color:  #5c8fc2; border-color: black">
  <center>
    <a href="index.php"><b>Home</b></a> |
    <a href="products.php"><b>Products</b></a> |
    <a href="customers.php"><b>Customers</b></a> |
    <a href="staffs.php"><b>Staffs</b></a> |
    <a href="orders.php"><b>Orders</b></a>
    <hr>
    <form action="orders.php" method="post">
       <table cellpadding="5" width="30%">
        <tbody>
     
       <tr>
        <td>Order ID</td>
            <td><input name="oid" type="text" disabled></td>
          </tr>
         

      <tr>
            <td>Order Date</td>
            <td><input name="orderdate" type="date" disabled></td>
          </tr>
         

     <tr>
            <td>Customer ID</td>
            <td><select name="cid">
                <option value="C01">Kwek</option>
                <option value="C02">Amir</option>
                <option value="C03">Maisarah</option>
            </select></td>
          </tr>

      <tr>
            <td>Staff ID</td>
            <td> <select name="sid">
                 <option value="S01">Khairul</option>
                 <option value="S02">Ahmad</option>
                 <option value="S03">Abu</option>
      </select></td>
          </tr>
        </tr>
        </table>
      </tbody>

      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <p><b>Order Information<p>
        <td><b>Order ID</td>
        <td><b>Order Date</td>
        <td><b>Customer ID</td>
        <td><b>Staff ID</td>
        
      </tr>
      <tr>

        <td>O001</td>
        <td>24 January 2021</td>
        <td>C01</td>
        <td>S01</td>
        <td>
          <a href="orders_details.php">Details</a>
          <a href="orders.php">Edit</a>
          <a href="orders.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>