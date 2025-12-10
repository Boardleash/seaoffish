<!DOCTYPE html>
<!-- Example comment in HTML -->
<html lang='en'>
  <head>
    <meta charset='utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../css/page-style.css'>
    <title>Sardines</title>
  </head>
  <main>
    <header>
      <nav>
        <a href="../index.php">Home</a>
        <a href="../anchovies/anchovy.php">Anchovies</a>
        <a href="../mackerel/mackerel.php">Mackerel</a>
	      <a href="../other/other.php">Other Tinned Fare</a>
      </nav>
    </header>
    <body class="bodySardine">
        <h1 class="h1Main">The Sardine</h1>
        <img src="./images/sardine-main.png" class="imgMain"/>
      <div>
        <p>Sardines come in two species that are used in tins; pilchards and sprats.  Pilchards are noticeable larger than sprats.  Sprats are
           the smaller of the two and sometimes may be termed as "brisling" sardines.  In both cases, they are prepared the same.  Prior to being
           tinned, their heads are removed and they are gutted.  Spines and bones are left in place, as well as skin, however, some brands offer
           boneless/skinless options.  This boils down to preference, but for those cautious of the skins and bones, just know that they are not
           really noticeable when consuming and are safe to be consumed.  The bones are not hard in any way and do not get stuck in your throat
           (if that was a concern).<br><br>
           There are a plethora of brands and varieties available, and this too all boils down to preference.  Some brands are better than others.
           Generally, the lower priced tins are of lower quality, with the higher priced tins being of higher quality.  There are exceptions to this
           rule though.  Some lower priced tins (less than 3$) are commonly considered to be really good, such as Polar Brisling sardines.  Some
           higher priced tins (greater than 8$) do not have as great of quality, such as Fishwife.  That is not to say that ALL of Polar's products
           are great or that ALL of Fishwife's products are terrible for their prices.<br><br>
           Sardines can be eaten straight out of the tin or with a dish.  Commonly, they are eaten with crackers or toast, but some pastas and salads
           work really well with sardines.  The bases/oils that the sardines come in are also pretty good in pastas or salads.<br><br>
           If you have tried a tin of sardines and would like to comment what you thought about them, feel free to do so below in the "Sardine Review"
           section.  Additionally, if you want to add to my tracker of how many tins of which variety have been consumed, you can also do that in the
           "Sardines Consumed" section.  You can also see the variety of anchovy tins that I am tracking (continuously updated).
        </p>
<!-------------------- Sardine Review Block --------------->
      <section>
        <form action="./queries/sardine-review.php" method="post">
          <fieldset> 
            <legend>Sardine Review</legend>
              <br>
	            <label for="date">Review Date</label>
	            <br>
	            <input class="date" type="date" name="date"/>
	            <br><br>
	            <label for="sardine_id">Tins</label>
	            <br>
	            <select name="sardine_id">
                <option value="46">La Curiosa in Olive Oil with Padron Pepper</option>
                <option value="47">Matiz Lightly Smoked in Olive Oil</option>
                <option value="50">Miss Can in Spicy Olive Oil</option>
                <option value="17">Nuri in Olive Oil</option>
                <option value="63">Patagonia Provisions in Coconut Curry</option>
                <option value="15">Polar in Olive Oil Lightly Smoked</option>
	            </select>
	            <br><br>
	            <label for="review">Review</label>
	            <br>
	            <textarea spellcheck="false" name="review"></textarea>
	            <br><br>
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
        <form action="./queries/sardine-consumed.php" method="post">
          <fieldset>
            <legend>Sardines Consumed</legend>
	            <p>Select one of the options below to submit if you have had that tin.  This will add to the number of tins that have
                 been consumed tracker that can be found on the home page!
              </p>
	            <br><br><br><br>
              <div class="scroll">
                <input type="radio" class="radio" name="sardines" value="46"/>
                <label class="labelTwo">La Curiosa in Olive Oil with Padron Pepper</label>
                <img src="./images/curiosa-padron-pepper.png" class="imgTable"/>

                <input type="radio" class="radio" name="sardines" value="47"/>
                <label class="labelTwo">Matiz Lightly Smoked in Olive Oil</label>
                <img src="./images/matiz-smoked-olive-oil.png" class="imgTable"/>

                <input type="radio" class="radio" name="sardines" value="50"/>
                <label class="labelTwo">Miss Can in Spicy Olive Oil</label>
                <img src="./images/mc-spicy-olive-oil.png" class="imgTable"/>

                <input type="radio" class="radio" name="sardines" value="17"/>
                <label class="labelTwo">Nuri in Olive Oil</label>
                <img src="./images/nuri-olive-oil.png" class="imgTable"/>

                <input type="radio" class="radio" name="sardines" value="63"/>
                <label class="labelTwo">Patagonia Provisions in Coconut Curry</label>
                <img src="./images/patagonia-coconut.png" class="imgTable"/>

                <input type="radio" class="radio" name="sardines" value="15"/>
                <label class="labelTwo">Polar in Olive Oil Lightly Smoked</label>
                <img src="./images/polar-smoked-olive-oil.png" class="imgTable"/>
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
