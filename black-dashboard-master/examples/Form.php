<?php

session_start();

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link rel="stylesheet" href="form.css">
  <title>Questionnaire</title>
</head>

<body>
  <form action= "form_db.php"   method ="post" enctype="multipart/form-data">
  <div class="container form text-center rounded ">
    <div class="row justify-content-center my-auto ">
      <div class="col-md-8 col-10 my-5 ">
        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="Logo-removebg.png" alt="logo" \> </div>
        <h3 class="mb-5 text-center heading">Questionnaire</h3>
        <h5 class="msg-info" id="login">PLEASE ANSWER THE FOLLOWING QUESTIONS</h5>

        <div class="form-group text-left"> <label class="form-control-label ">
            1. What department/business requirements will this project/system address?
          </label> <input type="text" id="Que1" name="Question1" placeholder="" class="form-control" required>
        </div>
        <div class="form-group text-left"> <label class="form-control-label ">
            2. What problems should this project/system solve?</label>
          <input type="text" id="Que2" name="Question2" placeholder="" class="form-control" required> </div>
        <div class="form-group text-left"> <label class="form-control-label ">
            3. How many people will the application be handling?
          </label> <input type="text" id="Que3" name="Question3" placeholder="" class="form-control" required>
        </div>
        <div class="form-group text-left"> <label class="form-control-label " class="form-control">
            4. Are there other projects/systems with which this project/system will interface?
            <div class="row">
              <div class="col-5  "> <input type="radio" id="Yes" name="Question4" value="Yes" required> 
                <label for="Yes">Yes</label>
              </div>
              <div class="col-7   ">
                <input type="radio" id="No" name="Question4" value="No">
                <label for="No">No</label>
              </div>
            </div>
            <div class="form-group text-left"> <label class="form-control-label " class="form-control">
                5. From where will you need access to the application?
                <div class="row">
                  <div class="col-6  "> <input type="radio" id="Internal" name="Question5" value="Internal" required>
                    <label for="internal">Internal</label>
                  </div>
                  <div class="col-6  ">
                    <input type="radio" id="external" name="Question5" value="external">
                    <label for="External">External</label>
                  </div>
                </div>
                <div class="form-group text-left"> <label class="form-control-label ">
                    6. When do you need the application to be available, realistically?
                  </label> <input type="text" id="Que1" name="Question6" placeholder="" class="form-control" required>
                </div>
                <div class="form-group text-left"> <label class="form-control-label ">
                    7. What is most important (rank in order of importance):
                    <ol class="mylist">
                      <li>Application is easier to use</li>
                      <li>Application has nicer front-end</li>
                      <li>Application has additional functionality (list)</li>
                      <li>Application is more efficient </li>
                      <li>Application is redesigned to better reflect the business</li>
                    </ol>

                  </label> <input type="text" id="Que1" name="Question7" placeholder="Write the order here"
                    class="form-control" required>
                </div>
                <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color" type="submit" name="submit">Submit</button>
                </div>

            </div>
        </div>

      </div>
    </div>
  </form>





    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
      integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
      crossorigin="anonymous"></script>

</body>

</html>