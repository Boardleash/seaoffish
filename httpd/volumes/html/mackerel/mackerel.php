<!DOCTYPE html>
<!-- Example comment in HTML -->
<html lang='en'>
  <head>
    <meta charset='utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel='stylesheet' href='../css/page-style.css'>
    <title>Mackerel</title>
  </head>
  <main>
    <header>
      <nav>
        <a href="../index.php">Home</a>
        <a href="../anchovies/anchovy.php">Anchovies</a>
        <a href="../sardines/sardine.php">Sardines</a>
        <a href="../other/other.php">Other Tinned Fare</a>
      </nav>
    </header>
    <body class="bodyMackerel">
      <h1 class="h1Main">The Mackerel</h1>
      <img src="./images/mackerel-image.png"/>
      <div>
        <p>Mackerel is a more oily fish and tends to have a buttery or oily texture and flavor.  Tins of mackerel consist of small fillets
           that are skinless and boneless.  Depending on the brand, sometimes the mackerel is in chunks though.  These are just fine straight
           out of the tin, but pair really well with toast or crackers and a spread.  There are a variety of bases, such as olive oil or spiced
           olive oil, that tinned mackerel comes in.<br><br>
           If you have tried a tin of mackerel and would like to comment what you though about them, feel free to do so below in the "Mackerel
           Review" section.  Additionally, if you want to add to my tracker of which tin and which variety you consumed, you can also do that
           in the "Mackerel Consumed" section.  You can also see the variety of mackerel tins that I am tracking (continuously updated).
        </p>
<!-------------- Mackerel Review Block ---------------------------->
      <section>
        <form action="./queries/mackerel-review.php" method="post">
          <fieldset> 
            <legend>Mackerel Review</legend>
              <br>
              <label for="date">Review Date</label>
              <br>
              <input class="date" type="date" name="date"/>
              <br><br>
              <label for="mackerel_id">Tins</label>
              <br>
              <select name="mackerel_id">
                <option value="8">Fishwife Smoked Mackerel in Garlic and Chili Flakes</option>
                <option value="1">King Oscar Mackerel in Olive Oil</option>
                <option value="4">King Oscar Mackerel with Jalapeno Peppers</option>
                <option value="9">Matiz Mackerel in Extra Virgin Olive Oil</option>
                <option value="5">Patagonia Provisions Mackerel with Lemon Capers</option>
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
<!-------------------- Mackerel Consumption Block ----------------------->
      <section>
        <form action="./queries/mackerel-consumed.php" method="post">
          <fieldset>
            <legend>Mackerel Consumed</legend>
	            <p>Select one of the options below to submit if you have had that tin.  This will add to the number of tins that have
                 been consumed tracker that can be found on the home page!
  	          </p>
	            <br><br><br>
              <div class="scroll">
                <input type="radio" class="radio" name="mackerel" value="8"/>
                <label class="labelTwo">Fishwife Smoked Mackerel in Garlic<br>and Chili Flakes</label>
                <img src="./images/fishwife-mackerel-chili.png" class="imgTable"/>

                <input type="radio" class="radio" name="mackerel" value="1"/>
                <label class="labelTwo">King Oscar Mackerel in Olive Oil</label>
                <img src="./images/ko-mackerel-olive-oil.png" class="imgTable"/>

                <input type="radio" class="radio" name="mackerel" value="4"/>
                <label class="labelTwo">King Oscar Mackerel with Jalapeno<br>Peppers</label>
                <img src="./images/ko-mackerel-jalapeno.png" class="imgTable"/>

                <input type="radio" class="radio" name="mackerel" value="9"/>
                <label class="labelTwo">Matiz Mackerel in Extra Virgin Olive<br>Oil</label>
                <img src="./images/matiz-mackerel-evoo.png" class="imgTable"/>

                <input type="radio" class="radio" name="mackerel" value="5"/>
                <label class="labelTwo">Patagonia Provisions Mackerel with<br>Lemon Capers</label>
                <img src="./images/patagonia-mackerel-lemon-caper.png" class="imgTable"/>
              </div>
              <br>
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
     <br><br><br><br><br>
    </body>
  </main>
</html>
