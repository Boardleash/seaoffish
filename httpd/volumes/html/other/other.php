<!DOCTYPE html>
<!-- Example comment in HTML -->
<html lang='en'>
  <head>
    <meta charset='utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../css/page-style.css'>
    <title>Other Tinned Fare</title>
  </head>
  <main>
    <header>
      <nav>
	      <a href="../index.php">Home</a>
	      <a href="../anchovies/anchovy.php">Anchovies</a>
	      <a href="../mackerel/mackerel.php">Mackerel</a>
	      <a href="../sardines/sardine.php">Sardines</a>
      </nav>
    </header>
    <body class="bodyOther">
      <h1>Other Tinned Fare</h1>
      <img src="./images/other-main-image.jpg"/>
      <div>
        <p>This page consists of "other" tinned fare.  In this case, this means things that are NOT anchovies, mackerel or sardines but can be found
           in the water.  Common items are oysters, trout, mussels, squid and herring.  There are others though.  Generally, these items are smoked
           as part of the tinning process.  Much like sardines, lower priced products typically means a lower quality, and higher priced means a
           higher quality.  An example is with oysters.  Higher priced tins of oysters will sometimes be very large oysters, whereas the lower
           priced tins are much smaller.  This does not mean that the taste of a lower priced tin will be terrible compared to a higher priced
           tin.  It all boils down to preference.<br><br>
           Most tinned fare goes well with crackers or some type of bread.  All of the tinned fare here can be eaten straight out of the can just fine.
           <br><br>
           If you have tried a tin of the "other" fare and would like to comment on what you thought about them, feel free to do so below in the "Other
           Tins Review" section.  Additionally, if you want to add to my tracker of how many tins of which variety have been consumed, you can also do
           that in the "Other Tins Consumed" section.  You can also see the variety of other tinned fare that I am tracking (continuously updated).
        </p>
<!-------------------- Other Review Block --------------->
      <section>
        <form action="./queries/other-review.php" method="post">
          <fieldset>
            <legend>Other Tins Review</legend>
              <br>
	            <label for="date">Review Date</label>
	            <br>
	            <input class="date" type="date" name="date"/>
	            <br><br>
	            <label for="other_id">Tins</label>
	            <br>
	            <select name="other_id">
                <option value="9">Beach Cliff Kippered Herring</option>
                <option value="4">Bumble Bee Smoked Oysters in Cottonseed Oil</option>
                <option value="8">Chicken of the Sea Smoked Oysters in Cottonseed Oil</option>
                <option value="6">Crown Prince Smoked Oysters in Olive Oil</option>
                <option value="10">Natural Catch Yellowfin Tuna in Olive Oil</option>
                <option value="2">Porthos Smoked Trout in Olive Oil</option>
	            </select>
	            <br><br>
	            <label for="review">Review</label>
	            <br>
	            <textarea spellcheck="false" name="review"></textarea>
	            <br><br>
              <label>How many stars would you rate this tin?</label>
              <br>
              <div class="rating">
                <input type="radio" id="star5" name="rate" value="5"/>
                <label for="star5" title="5">&#9733;</label>
                <input type="radio" id="star4" name="rate" value="4"/>
                <label for="star4" title="4">&#9733;</label>
                <input type="radio" id="star3" name="rate" value="3"/>
                <label for="star3" title="3">&#9733;</label>
                <input type="radio" id="star2" name="rate" value="2"/>
                <label for="star2" title="2">&#9733;</label>
                <input type="radio" id="star1" name="rate" value="1"/>
                <label for="star1" title="1">&#9733;</label>
              </div>
              <br><br><br><br><br>
              <label>
	              NOTE: You must check the box below in order to submit your review.<br>
                <input type="checkbox" name="confirm">
	              Are you sure you want to submit your review?
              </label>
              <br><br>
              <button class="submit">Submit</button>
         </fieldset>
        </form>
      </section>
<!----------------- Sardine Consumption Block --------------->
      <section>
        <form action="./queries/other-consumed.php" method="post">
          <fieldset>
            <legend>Other Tins Consumed</legend>
	            <p>Select one of the options below to submit if you have had that tin.  This will add to the number of tins that have
                 been consumed tracker that can be found on the home page!
              </p>
	            <br><br><br>
              <div class="scroll">
                <input type="radio" name="other" value="9"/>
                <label class="labelTwo">Beach Cliff Kippered Herring</label>
                <img src="./images/bc-kippers.png" class="imgTable"/>

                <input type="radio" name="other" value="4"/>
                <label class="labelTwo">Bumble Bee Smoked Oysters in Cottonseed Oil</label>
                <img src="./images/bb-oysters.png" class="imgTable"/>

                <input type="radio" name="other" value="8"/>
                <label class="labelTwo">Chicken of the Sea Smoked Oysters Cottonseed Oil</label>
                <img src="./images/cos-oysters.png" class="imgTable"/>

                <input type="radio" name="other" value="6"/>
                <label class="labelTwo">Crown Prince Smoked Oysters in Olive Oil</label>
                <img src="./images/crown-oysters.png" class="imgTable"/>

                <input type="radio" name="other" value="10"/>
                <label class="labelTwo">Natural Catch Yellowfin Tuna in Olive Oil</label>
                <img src="./images/natcat-tuna.png" class="imgTable"/>

                <input type="radio" name="other" value="2"/>
                <label class="labelTwo">Porthos Smoked Trout in Olive Oil</label>
                <img src="./images/porthos-trout.png" class="imgTable"/>
              </div>
              <label>
	              NOTE: You must check the box below to confirm your submission.<br>
                <input type="checkbox" name="confirm_two">
	              Are you sure you are ready to submit?
              </label>
	            <br><br>
            <button class="submit">Submit</button>
          </fieldset>
        </form>
      </section>
    </body>
  </main>
</html>
