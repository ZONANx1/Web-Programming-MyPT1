<!DOCTYPE html>
<html>
<head>
  <title>Kai Cannaries Trading SDN BHD : Products</title>
</head>
<body style="background-color:  #5c8fc2; border-color: black">
  <center>
    <a href="index.php"><b>Home</b></a> |
    <a href="products.php"><b>Products</b></a> |
    <a href="customers.php"><b>Customers</b></a> |
    <a href="staffs.php"><b>Staffs</b></a> |
    <a href="orders.php"><b>Orders</b></a>
    <hr>
    <br>
    <form action="products.php" method="post">
      <table cellpadding="5" width="30%">
        <tbody>
          
          <tr>
            <td>Product ID </td>
            <td>
              <input name="pid" type="text" width="80%"> 
              </td>
              </tr>
              
              <tr>
                <td>Product Name </td>
                <td><input name="name" type="text" width="80%"></td>
              </tr>
              
              <tr>
                <td>Price</td>
               <td><input name="price" type="text"> </td>
             </tr>
            
             <tr>
              <td>Brand</td>
              <td>
                 <select name="Brand">
                  <option value="" selected disabled>Select</option>
                  <option value="Yeos Canned Food">Yeos Canned Food</option>
                  <option value="El-Dina">El-Dina</option>
                  <option value="Spam">Spam</option>
                  <option value="MaLing">MaLing</option>
                  <option value="Tulip">Tulip</option>
                  <option value="GuLong">GuLong</option>
                  <option value="Lotte">Lotte</option>
                  <option value="MOON">MOON</option>
                  <option value="Meaty">Meaty</option>
                  <option value="Porkies">Porkies</option>
                  <option value="Golden Bridge">Golden Bridge</option>
                  <option value="Ayam Brand">Ayam Brand</option>
                  <option value="Meining">Meining</option>
                  <option value="S&W">S&W</option>
                  <option value="Highway">Highway</option>
                  <option value="Hobe">Hobe</option>
                  <option value="TST">TST</option>
                  <option value="Snappy Tom">Snappy Tom</option>
                  <option value="Pedigree">Pedigree</option>
                  <option value="Greatwall">Greatwall</option>
                  <option value="Hosen">Hosen</option>
                  <option value="Fancy Feast">Fancy Feast</option>
                  <option value="Kit Cat">Kit Cat</option>
                  <option value="Prego">Prego</option>
                  <option value="Lee">Lee</option>
                  <option value="Queen Bell">Queen Bell</option>
                  <option value="M-Shrooms">M-Shrooms</option>
                </select>
                </td>
                </tr>

                <tr>
                <td>Labelled</td>
                <td>
                <select name="labelled">
                  <option value="" selected disabled>Select</option>
                  <option value="Halal">Halal</option>
                  <option value="Non-Halal">Non-Halal</option>
                  <option value="NA">NA</option>
                </select>
                </td>
                </tr>

                <tr>
                <td>Net Weight</td>
                 <td><input name="net weight" type="text" width="80%"></td>
             </tr>
               
                
                <tr>
                  <td>Quantity</td>
                   <td><input name="quantity" type="text" width="80%"></td>
                 </td>
               

             </tr>
           
           </tbody>
         </table>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <br>
    <hr>
    <table cellpadding="1" border="1">
      <p><b> Products Information </p>
      <tr>
        <td><b>Product ID</b></td>
        <td><b>Product Name</b></td>
        <td><b>Price</b></td>
        <td><b>Brand</b></td>
        <td><b>Labelled</b></td>
        <td><b>Net Weight</b></td>
        <td><b>Quantity</b></td>
        <td></td>
      </tr>
      <tr>
        <td>P01</td>
        <td>Yeos Vindaloo Chicken</td>
        <td>RM6.50</td>
        <td>Yeos Canned Food</td>
        <td>Halal</td>
        <td>285gm</td>
        <td>10</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
       <tr>
        <td>P02</td>
        <td>Yeos Ayam Masak Kicap</td>
        <td>RM6.50</td>
        <td>Yeos Canned Food</td>
        <td>Halal</td>
        <td>285gm</td>
        <td>9</td>  
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
       <tr>
        <td>P03</td>
        <td>Yeos Kurma Chicken</td>
        <td>RM6.50</td>
        <td>Yeos Canned Food</td>
        <td>Halal</td>
        <td>285gm</td>
        <td>11</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
       <tr>
        <td>P04</td>
        <td>Yeos Kari Ayam</td>
        <td>RM6.50</td>
        <td>Yeos Canned Food</td>
        <td>Halal</td>
        <td>285gm</td>
        <td>4</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
       <tr>
        <td>P05</td>
        <td>El-Dina Chicken Meat Loaf</td>
        <td>RM12.90</td>
        <td>El-Dina</td>
        <td>Halal</td>
        <td>340gm</td>
        <td>25</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
       <tr>
        <td>P06</td>
        <td>Spam Luncheon Meat Classic</td>
        <td>RM25.00</td>
        <td>Spam</td>
        <td>Non-Halal</td>
        <td>340gm</td>
        <td>50</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P07</td>
        <td>MaLing Pork Luncheon Meat</td>
        <td>RM15.00</td>
        <td>MaLing</td>
        <td>Non-Halal</td>
        <td>397gm</td>
        <td>12</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P08</td>
        <td>Tulip Danish Pork Luncheon Meat</td>
        <td>RM11.80</td>
        <td>Tulip</td>
        <td>Non-Halal</td>
        <td>340gm</td>
        <td>13</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P09</td>
        <td>Pork Luncheon Meat</td>
        <td>RM8.20</td>
        <td>GuLong</td>
        <td>Non-Halal</td>
        <td>190gm</td>
        <td>13</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
       <tr>
        <td>P10</td>
        <td>GuLong Luncheon Meat</td>
        <td>RM13.90</td>
        <td>Lotte</td>
        <td>Non-Halal</td>
        <td>340gm</td>
        <td>18</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>