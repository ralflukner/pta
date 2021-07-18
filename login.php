<!doctype html>
<html>

<head>
    <meta name="ac:route" content="/login">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Patient Visit Assist Login</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/4/css/bootstrap.min.css" />
    <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/medium-editor.css" />
    <script src="dmxAppConnect/dmxMediumEditor/medium-editor.js" defer=""></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/dmxMediumEditor.css" />
    <script src="dmxAppConnect/dmxMediumEditor/dmxMediumEditor.js" defer=""></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/themes/default.css" />
    <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
    <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer=""></script>
</head>

<body is="dmx-app" id="login">
    <?php
      // Learning to work with arrays
      $paper['copier'] = "Copier & Multipurpose";
      $paper['inkjet'] = "Inkjet Printer";
      $paper['laser'] = "Laser Printer";
      $paper['photo'] = "Photographic Paper";

      // Traverse an array
	  while (list($paper_item, $paper_descr) = each($paper)) {
	  	echo "$paper_item: $paper_descr<br>";
	  }

      // create a text file
      // $fh = fopen("testfile.txt, 'w'") or die("Failed to create file");

      // $text = "";

      // Traverse an array and store the result in the textfile
      reset($paper);
      while (list($paper_item, $paper_descr) = each($paper)) {
        $print_string = "$paper_item: $paper_descr<br>";
        printf("%s",$print_string);
        //fwrite($fh, sprintf("%s", "$paper_item: $paper_descr<br>"));
      }
      
      // close the text file
      // fclose($fh);
      // echo "File 'testfile.txt' written successfully."

    ?>
    <header>
        <h1>User Login - Lukner Medical Clinic</h1>
        <main>
            <form id="user_login_form_user_name_ID" class="user_login_form_user_name_CLASS" is="dmx-serverconnect-form" method="post">
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="text_input_user_name_ID" id="user_name_input_label_ID" class="user_name_input_label_class">User Name</label>
                            <input type="text" class="form-control_text_input_user_name_CLASS" id="text_input_user_name_ID" name="text_input_user_name_NAME" aria-describedby="input1_help" placeholder="Enter your user name" required="">
                        </div>
                    </div>
                </div>
            </form>
            <form id="user_login_form_ID1" class="user_login_form_CLASS" is="dmx-serverconnect-form" method="post">
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="text_input_user_password_ID1" id="user_name_input_label_ID1" class="user_name_input_label_class">&nbsp; &nbsp;Password</label>
                            <input type="text" class="form-control_text_input_user_name_CLASS" id="text_input_user_password_ID1" name="text_input_user_password_NAME1" aria-describedby="input1_help" placeholder="Enter your password" required="">
                        </div>
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <h1>Patient Visit Assist Web App</h1>
        </footer>
    </header>
    <script src="bootstrap/4/js/popper.min.js"></script>
    <script src="bootstrap/4/js/bootstrap.min.js"></script>
</body>

</html>