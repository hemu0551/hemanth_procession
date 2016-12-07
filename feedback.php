<?php include 'header.php'; ?>

<div style="padding:2em;">
      <div class="row">
        <div class="col-lg-12">
          <h1>Rate Us</h1>
        </div>
        <hr>
      </div>
      

      <div class="stars">
    <form>
      <input class="star star-5" id="star-5" type="radio" name="star"/>
      <label class="star star-5" for="star-5"></label>
      <input class="star star-4" id="star-4" type="radio" name="star"/>
      <label class="star star-4" for="star-4"></label>
      <input class="star star-3" id="star-3" type="radio" name="star"/>
      <label class="star star-3" for="star-3"></label>
      <input class="star star-2" id="star-2" type="radio" name="star"/>
      <label class="star star-2" for="star-2"></label>
      <input class="star star-1" id="star-1" type="radio" name="star"/>
      <label class="star star-1" for="star-1"></label>
      <textarea rows="4" cols="50" name="comment" form="usrform">Enter text here...</textarea><br>
      <button type="submit" name="button" class="btn btn-warning"><a href="redirect2.php">Submit</a></button>
    </form>
  </div>
    </div>

</div>

<?php include 'footer.php'; ?>