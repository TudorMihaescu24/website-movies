<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../Css/style.css">
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <section id="Section_06">
    <div class="Continut1_S06">
      <div class="Img_06">

      </div>
      <div class="OverlayImg_06">

      </div>
    </div>
    <?php
        include "config.php";
        if (isset($_POST["Submit"])) {
            $nume = $_POST["nume"];
            $prenume = $_POST["prenume"];
            $email = $_POST["email"];
            $feedback = $_POST["feedback"];

            if (empty($nume)) {
                echo '<script type="text/javascript">';
                echo ' alert("NUME INVALID")'; //not showing an alert box.
                echo "</script>";
            }
            if (empty($prenume)) {
                echo '<script type="text/javascript">';
                echo ' alert("PRENUME INVALID")'; //not showing an alert box.
                echo "</script>";
            }
            if (empty($email) || strpos($email, "@") == 0) {
                echo '<script type="text/javascript">';
                echo ' alert("EMAIL INVALID")'; //not showing an alert box.
                echo "</script>";
            } else {
                $result = mysqli_query(
                    $cser,
                    "INSERT INTO contact (NUME,PRENUME,EMAIL,FEEDBACK) VALUES('$nume','$prenume','$email','$feedback')"
                );

                echo '<script type="text/javascript">';
                echo ' alert("DATELE AU FOST INTRODUSE")'; //not showing an alert box.
                echo "</script>";
            }
        }

    ?>
    <div class="Continut2_S06">
      <h1 class="Titlu1_06">CONTACT</h1>
      <h1 class="Titlu2_06">CONTACT</h1>
      <div class="FormS06">
        <form method="post" name="form1">
          <div class="Sub_FormS06">
            <label>NUME</label>
            <input type = "text" name = "nume" required minlength="3" maxlength="25" />
          </div>
          <div class="Sub_FormS06">
            <label>PRENUME</label>
            <input type = "text" name = "prenume" required minlength="3" maxlength="25" />
          </div>
          <div class="Sub_FormS06">
            <label>EMAIL</label>
            <input type = "text" name = "email" required minlength="3" maxlength="50" />
          </div>
          <div class="Sub_FormS06">
            <label>FEEDBACK</label>
            <textarea type = "text" name = "feedback" rows="3" maxlength="240"></textarea>
          </div>
          <button class="Btn_S06" type="submit" name="Submit" value="Add">Trimite</button>
        </form>
      </div>
    </div>
  </section>





</html>
