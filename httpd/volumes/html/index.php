<!DOCTYPE html>
<!-- Example comment in HTML -->
<html lang='en'>
  <head>
    <meta charset='utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./css/home-style.css'>
    <title>Sea of Fish</title>
  </head>
  <main>
    <header>
      <nav>
        <a href="./anchovies/anchovy.php">Anchovies</a>
        <a href="./mackerel/mackerel.php">Mackerel</a>
        <a href="./sardines/sardine.php">Sardines</a>
        <a href="./other/other.php">Other Tinned Fare</a>
      </nav>
    </header>
    <body class="bodyHome">
      <?php require_once './php/tin-counts.php';?>
      <h1>Sea of Fish</h1>
      <h2>"..it is always the simple that produces the marvelous.."</h2>
      <h3>Welcome to the landing page!  Stats are below; please use the links provided at the top of the page to navigate to your intended destination!</h3>
      <div>
        <table class="totalsTable">
          <caption>Complete List of Tins (...so far...)</caption>
          <?php while($data=$result->fetch_assoc()) { ?>
          <tr>
            <th>Product</th>
            <th>Counts</th>
          </tr>
          <tr>
            <td><?php echo "Anchovies";?></td>
            <td><?php echo $data['count1'];?></td>
          </tr>
          <tr>
            <td><?php echo "Mackerel";?></td>
            <td><?php echo $data['count2'];?></td>
          </tr>
          <tr>
            <td><?php echo "Sardines";?></td>
            <td><?php echo $data['count3'];?></td>
          </tr>
          <tr>
            <td><?php echo "Other";?></td>
            <td><?php echo $data['count4'];?></td>
          </tr>
          <?php } ?>
        </table>
      </div>
      <section>
        <table>
          <caption>Top 5 Anchovies Consumed</caption>
          <tr>
            <th>Product</th>
            <th># of Tins</th>
          </tr>
          <?php while($rows=$result2->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $rows['brand'];echo " ";echo " Anchovies ";echo " in ";echo $rows['base'];?></td>
            <td><?php echo $rows['consumed'];?></td>
          <tr>
          <?php } ?>
        </table>
        <table>
          <caption>Top 5 Other Fare Consumed</caption>
          <tr>
            <th>Product</th>
            <th># of Tins</th>
          </tr>
          <?php while($rows=$result5->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $rows['brand'];echo " ";echo $rows['type'];echo " in ";echo $rows['base'];?></td>
            <td><?php echo $rows['consumed'];?></td>
          <tr>
          <?php } ?>
        </table>
        <table>
          <caption>Top 10 Mackerel Consumed</caption>
          <tr>
            <th>Product</th>
            <th># of Tins</th>
          </tr>
          <?php while($rows=$result3->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $rows['brand'];echo " ";echo " Mackerel ";echo " in ";echo $rows['base'];?></td>
            <td><?php echo $rows['consumed'];?></td>
          <tr>
          <?php } ?>
        </table>
        <table>
          <caption>Top 10 Sardines Consumed</caption>
          <tr>
            <th>Product</th>
            <th># of Tins</th>
          </tr>
          <?php while($rows=$result4->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $rows['brand'];echo " ";echo " Sardines ";echo " in ";echo $rows['base'];?></td>
            <td><?php echo $rows['consumed'];?></td>
          <tr>
          <?php } ?>
        </table>
        <table>
          <caption>Top 10 Smoked Fare Consumed</caption>
          <tr>
            <th>Product</th>
            <th># of Tins</th>
          </tr>
          <?php while($rows=$result6->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $rows['brand'];echo " ";echo $rows['type'];echo " in ";echo $rows['base'];?></td>
            <td><?php echo $rows['consumed'];?></td>
          <tr>
          <?php } ?>
        </table>
        <table>
          <caption>Top 10 Non-Smoked Fare Consumed</caption>
          <tr>
            <th>Product</th>
            <th># of Tins</th>
          </tr>
          <?php while($rows=$result7->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $rows['brand'];echo " ";echo $rows['type'];echo " in ";echo $rows['base'];?></td>
            <td><?php echo $rows['consumed'];?></td>
          <tr>
          <?php } ?>
        </table>
      </section>
    </body>
  </main>
</html>
