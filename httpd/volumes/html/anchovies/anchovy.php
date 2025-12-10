<!DOCTYPE html>
<!-- Example comment in HTML -->
<html lang='en'>
  <head>
    <meta charset='utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../css/page-style.css'>
    <title>Anchovies</title>
  </head>
  <main>
    <header>
      <nav>
        <a href="../index.php">Home</a>
        <a href="../mackerel/mackerel.php">Mackerel</a>
        <a href="../sardines/sardine.php">Sardines</a>
	      <a href="../other/other.php">Other Tinned Fare</a>
      </nav>
    </header>
    <body class="bodyAnchovy">
      <h1>The Anchovy</h1>
	    <img src="./images/anchovy.png"/>
      <div>
        <p>There are two types of tinned anchovies that can be had.  One variety are called "white anchovies" and the other are "flat fillets".
           White anchovies are also sometimes called "boquerones" and are prepared very similarly to sardines.  This means that they can be consumed
           right out of the tin or on their own in general.  Flat fillet anchovies are salt cured, and because of this, they are very salty and tough
           to be consumed on their own.  These anchovies are more commonly used as an ingredient vice enjoyed on their own.  Although, some people
           still consumed flat fillets on their own with no problem, so to each their own.<br><br>
           If you have tried a tin of anchovies and would like to comment what you though about them, feel free to do so below in the "Anchovy 
           Review" section.  Additionally, if you want to add to my tracker of how many tins of which variety have been consumed, you can also do
           that in the "Anchovy Consumed" section.  You can also see the variety of anchovy tins that I am tracking (continuously updated).
        </p>
<!---------- Anchovy Review Block ----------------------->
	    <section>
	      <form action="./queries/anchovy-review.php" method="post">
	        <fieldset>
	          <legend>Anchovy Review</legend>
              <br>
		          <label for="date">Review Date</label>
		          <br>
		          <input class="date" type="date" name="date"/>
		          <br><br>
		          <label for="anchovy_id">Tins</label>
		          <br>
		          <select name="anchovy_id">
                <option value="1">Cento Anchovies in Olive Oil</option>
                <option value="2">Crown Prince Anchovies in Olive Oil</option>
                <option value="3">King Oscar Anchovies in Olive Oil</option>
                <option value="7">Patagonia Provisions White Anchovies in Spicy Extra Virgin Olive Oil</option>
                <option value="4">Roland Anchovies in Olive Oil</option>
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
<!----------------- Anchovy Consumption Block --------------->
      <section>
	      <form action="./queries/anchovy-consumed.php" method="post">
	        <fieldset>
	          <legend>Anchovies Consumed</legend>
              <p>Select one of the options below to submit if you have had that tin.  This will add to the number of tins that have
                 been consumed tracker that can be found on the home page!
              </p>
              <br><br><br>
              <div class="scroll">
                <input type="radio" class="radio" name="anchovies" value="1"/>
                <label class="labelTwo">Cento Anchovies in Olive Oil</label>
                <img src="./images/cento-anchovies.png" class="imgTable"/>

                <input type="radio" class="radio" name="anchovies" value="2"/>
                <label class="labelTwo">Crown Prince Anchovies in Olive Oil</label>
                <img src="./images/crown-anchovies.png" class="imgTable"/>

                <input type="radio" class="radio" name="anchovies" value="3"/>
                <label class="labelTwo">King Oscar Anchovies in Olive Oil</label>
                <img src="./images/ko-anchovies.png" class="imgTable"/>

                <input type="radio" class="radio" name="anchovies" value="7"/>
                <label class="labelTwo">Patagonia Provisions White Anchovies in Spicy<br>Extra Virgin Olive Oil</label>
                <img src="./images/patagonia-anchovies-spicy-evoo.png" class="imgTable"/>

                <input type="radio" class="radio" name="anchovies" value="4"/>
                <label class="labelTwo">Roland Anchovies in Olive Oil</label>
                <img src="./images/roland-anchovies.png" class="imgTable"/>
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
    </body>
  </main>
</html>
