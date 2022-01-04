<!DOCTYPE html>
<html>
<head>
  <title>Kai Cannaries Trading SDN BHD  : Customers</title>
</head>
<body style="background-color:  #5c8fc2; border-color: black">
  <center>
    <a href="index.php"><b>Home</b></a> |
    <a href="products.php"><b>Products</b></a> |
    <a href="customers.php"><b>Customers</b></a> |
    <a href="staffs.php"><b>Staffs</b></a> |
    <a href="orders.php"><b>Orders</b></a>
    <hr>
    <form action="customers.php" method="post">
      <table cellpadding="5" width="30%">
        <tbody>

      <tr>
      <td>Customer ID </td>
            <td>
              <input name="cid" type="text" width="80%"> 
              </td>
              </tr>

     <td> Customer Name </td>
            <td>
              <input name="customer name" type="text" width="80%"> 
              </td>
              </tr>

      <td>Customer Number </td>
            <td> <input name="customer number" type="text" width="80%"> 
              </td>
              </tr>

      <td>Customer Email </td>
            <td>
              <input name="customer email" type="text" width="80%"> 
              </td>
              </tr>

              </tbody>
           </table> 
     
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>

    <table cellpadding="3" border="1">
      <tr>
        <p><b>Customers Information<p>

        <td><b>Customer ID</td>
        <td><b>Customer Name</td>
        <td><b>Customer Number</td>
        <td><b>Email</td>
        
      </tr>
      <tr>
        <td>C01</td>
        <td>Kwek</td>
        <td>0105096857</td>
        <td>kwek011@gmail.com</td>
        
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>C02</td>
        <td>Amir</td>
        <td>0134747784</td>
        <td>amir.005@gmail.com</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
         <td>C03</td>
        <td>Maisarah</td>
        <td>0198877567</td>
        <td>Mai110@gmail.com</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>