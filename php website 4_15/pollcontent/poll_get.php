<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Poll (GET)</title>
</head>
<body>

<h2>Web Poll (GET)</h2>

<form action="poll_results_get.php" method="GET">
  <label for="name">Your Name:</label>
  <input type="text" id="name" name="name">
  <br><br>

  <!-- Product 1 -->
  <fieldset>
    <legend>Product 1</legend>
    <img src="product1_image.webp" alt="Product 1 Image" width="200">
    <p>Description: This is a brown round table with 4 legs. Price: $400</p>
    <label>Would you buy this product at this price?</label><br>
    <input type="radio" name="product1_rating" value="5"> Yes, definitely
    <input type="radio" name="product1_rating" value="4"> Probably yes
    <input type="radio" name="product1_rating" value="3"> Maybe
    <input type="radio" name="product1_rating" value="2"> Probably not
    <input type="radio" name="product1_rating" value="1"> No, definitely not
  </fieldset>
  <br><br>

  <!-- Product 2 -->
  <fieldset>
    <legend>Product 2</legend>
    <img src="product2_image.jpg" alt="Product 2 Image" width="200">
    <p>Description: This is a white dining arm chair from Wayne. Price: $350</p>
    <label>Would you buy this product at this price?</label><br>
    <input type="radio" name="product2_rating" value="5"> Yes, definitely
    <input type="radio" name="product2_rating" value="4"> Probably yes
    <input type="radio" name="product2_rating" value="3"> Maybe
    <input type="radio" name="product2_rating" value="2"> Probably not
    <input type="radio" name="product2_rating" value="1"> No, definitely not
  </fieldset>
  <br><br>

  <!-- Product 3 -->
  <fieldset>
    <legend>Product 3</legend>
    <img src="product3_image.webp" alt="Product 3 Image" width="200">
    <p>Description: This is a table lamp and it includes one LED light bulb. Price: $8</p>
    <label>Would you buy this product at this price?</label><br>
    <input type="radio" name="product3_rating" value="5"> Yes, definitely
    <input type="radio" name="product3_rating" value="4"> Probably yes
    <input type="radio" name="product3_rating" value="3"> Maybe
    <input type="radio" name="product3_rating" value="2"> Probably not
    <input type="radio" name="product3_rating" value="1"> No, definitely not
  </fieldset>
  <br><br>

  <textarea name="comments" rows="4" cols="50" placeholder="Comments"></textarea>
  <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>

