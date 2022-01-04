<!DOCTYPE html>
<html>
<head>
  <title>Kai Cannaries Trading SDN BHD : Staffs</title>
</head>
<body style="background-color:  #5c8fc2; border-color: black">
  <center>
    <a href="index.php"><b>Home</b></a> |
    <a href="products.php"><b>Products</b></a> |
    <a href="customers.php"><b>Customers</b></a> |
    <a href="staffs.php"><b>Staffs</b></a> |
    <a href="orders.php"><b>Orders</b></a>
    <hr>
    <form action="staffs.php" method="post">
      <table cellpadding="5" width="30%">
        <tbody>

     <tr>
      <td>Staff ID </td>
            <td>
              <input name="sid" type="text" width="80%"> 
              </td>
              </tr>

      <tr>
      <td>Staff Name </td>
            <td>
              <input name="staff name" type="text" width="80%"> 
              </td>
              </tr>

      <tr>
      <td>Staff Name </td>
            <td>
              <input name="staff name" type="text" width="80%"> 
              </td>
              </tr>

      <tr>
      <td>Staff Email </td>
            <td>
              <input name="staff email" type="text" width="80%"> 
              </td>
              </tr>
      </tbody>
    </table>

      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table cellpadding="1" border="1">
      <tr>
        <p><b>Staff Information<p>
        <td><b>Staff ID</td>
        <td><b>Staff Name</td>
        <td><b>Staff Number</td>
        <td><b>Staff Email</td>
      </tr>

      <tr>
        <td>S01</td>
        <td>Khairul</td>
        <td>0196185020</td>
        <td>mirinp.ka@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>S02</td>
        <td>Ahmad</td>
        <td>0193114256</td>
        <td>ahmad.q1@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>S03</td>
        <td>Abu</td>
        <td>0102215116</td>
        <td>Abulatif@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>