<html>
 <head>
 </head>
 <body>
    <h1>Business Registration</h1>
   <div class="form">
    <form method="POST" action="form.php">
      <p>
      <label for="business_name">Business Name </label>
      <input type="text" name="business_name" id="business_name">
      </p>
      <p>
      <label for="address">Address </label>
      <input type="text" name="address" id="address">
      </p>
      <p>
      <label for="city">City</label>
      <input type="text" name="city" id="city">
      </p>
      <p>
      <label for="telephone">Telephone</label>
      <input type="text" name="telephone" id="telephone">
      </p>
      <p>
      <label for="url">URL</label>
      <input type="text" name="url" id="url">
      </p>
      <label for="category">Choose Category:</label>
            <select name="category" id="category" multiple>
                <option value="AUTO">Automotive Parts and Supplies</option>
                <option value="FISH">Seafood Stores and Restaurants</option>
                <option value="HEALTH">Health And Beauty</option>
                <option value="SCHOOL">Schools and Colleges</option>
                <option value="SPORTS">Community Sports and Recreation</option>
            </select>
        <br><br>
      <p>
      <input type="submit" name="submit" id="submit" value="Add Business">
      </p>
    </form>
</div>
 </body>
</html>
