<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Alegreya|Allura|Almendra SC|Romanesco|Source+Sans+Pro:400,700' rel='stylesheet'>
    <link href="https://static.oracle.com/cdn/jet/v4.0.0/default/css/alta/oj-alta-min.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <style type="text/css">

        .container{
            width: 100%;
            min-height: 100%
        }
        .body0 {
            height: 100%;
        }

        span {
            display: inline-block;
            vertical-align: middle;
            line-height: normal;
        }

        .main {
            position: relative;
            /*top:20px;*/
            width: 100%;
            /*padding-top: 300px;*/
            max-height: 230px;
            font-family: "Romanesco";
            line-height: 150px;
            font-size: 96px;
            text-align: center;
        }
        .text {
            background: -webkit-linear-gradient(0deg, #FF0F00, rgba(17, 26, 240, 0.55), #EC0F13);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .under {
            position: relative;
            /*top:450px;*/
            max-height: 100px;
            width: 100%;
            font-family: "Alegreya";
            line-height: normal;
            font-size: 32px;
            text-align: center;
            color: #000830;
        }
        .under1 {
            position: relative;
            /*top:500px;*/
            height: 40px;
            width: 100%;
            font-family: "Alegreya";
            line-height: normal;
            font-size: 32px;
            text-align: center;
            color: #000830;
        }
        .under2 {
            position: relative;
            /*top:540px;*/
            height: 49.71px;
            width: 100%;
            font-family: "Alegreya";
            line-height: normal;
            font-size: 32px;
            text-align: center;
            color: #000830;
            background-color: #1380FA;
        }
        body{
            background-image: url(boats.jpg);
            background-size: cover;
        }
        }
        .body1 {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 75%;
            display: flex;
            flex-direction: column;
            max-width: 700px;
            margin: 0 auto;
        }
        .chat-output {
            flex: 1;
            padding: 20px;
            display: flex;
            background: white;
            flex-direction: column;
            overflow-y: scroll;
            max-height: 500px;
        }
        .chat-output > div {
            margin: 0 0 20px 0;
        }
        .chat-output .user-message .message {
            background: #0fb0df;
            color: white;
        }
        .chat-output .bot-message {
            text-align: right;
        }
        .chat-output .bot-message .message {
            background: #eee;
        }
        .chat-output .message {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 10px;
        }
        .chat-input {
            padding: 20px;
            background: #eee;
            border: 1px solid #ccc;
            border-bottom: 0;
        }
        .chat-input .user-input {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 8px;
        }
        .send_button{
      width: 75px;
      height: 35px;
      padding: 5px;
      margin-top: 8px;
      color: black;
      border:none;
      border-radius: 5px;
      background-color: #1380FA;
    }
        

    </style>
</head>
<body>
<div class="container">
    <?php
    if (!defined('DB_USER'))
  {
  require "../../config.php";

  }

try
  {
  $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);
  }

catch(PDOException $pe)
  {
  die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
  }

    global $conn;

    try {
        $sql2 = 'SELECT * FROM interns_data WHERE username="Uju"';
        $q2 = $conn->query($sql2);
        $q2->setFetchMode(PDO::FETCH_ASSOC);
        $my_data = $q2->fetch();
    } catch (PDOException $e) {
        throw $e;
    }
    ?>



    <div class="oj-flex oj-flex-items-pad oj-contrast-marker">
        <div class="oj-sm-12 oj-md-6 oj-flex-item">
            <div class="oj-flex oj-sm-align-items-center oj-sm-margin-2x">
                <div role="img" class="oj-flex-item alignCenter">
                    <oj-avatar role="img" size="[[avatarSize]]" initials='[[initials]]'
                    data-bind="attr:{'aria-label':'Avatar of Melody Okunuga'}">
                    </oj-avatar>
                    <img class="img-fluid " onerror="this.src='https://res.cloudinary.com/uuujuuu/image/upload/v1526014279/IMG_0681.jpg'" src="<?=$my_data['image_filename'] ?>" >
                </div>
            </div>
            <div class="body0">
                <div class="main"><span class="text"><?=$my_data['name'] ?></span></div>
                <div class="under"><span>Front End Web Developer</span></div>
                <div class="under1"><span>
                        <div class="oj-flex oj-md-align-items-center"><a href="https://github.com/mokunuga">
                            <div class="oj-flex-item oj-flex oj-sm-flex-direction-column oj-sm-align-items-center oj-sm-margin-2x">
                                <img style="width:40px; height: 40px;" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/github-512.png">
                            </div></a>

                            <a href="https://linkedin.com/in/mokunuga">
                                 <div class="oj-flex-item oj-flex oj-sm-flex-direction-column oj-sm-align-items-center oj-sm-margin-2x">
                                    <img style="width:40px; height: 40px;" src="http://icons.iconarchive.com/icons/custom-icon-design/pretty-social-media/256/Linkedin-icon.png">
                                 </div>
                            </a>
                        </div></span>
                </div>
                <br>
                <br>
            </div>
        </div>
        
      <br>
      <br>
      <br>
        <div class="oj-sm-12 oj-md-6 oj-flex-item">
          <div class="under2"><span>Juu Bot</span></div>
            <div class="body1">
                <div class="chat-output" id="chat-output">
                    <div class="user-message">
                        <div class="message">Hello! My name is Juu bot.<br>I'm willing to assist you with any of your questions.<br>Type <span style="color: #FABF4B;"><strong> aboutbot</strong></span> to know more about me. </br>To train me, use this format - 'train: question # answer # password'. </br>To learn more about me, simply type - 'aboutbot'.</div>
                    </div>
                </div>

                <div class="chat-input">
                    <form action="" method="post" id="user-input-form">
                        <input type="text" name="user-input" id="user-input" class="user-input" placeholder="Say something here">
                        <button type="submit" class="send_button" id="send">Send</button>
                    </form>
                </div>
            

            </div>
        </div>
    </div>
  



    <?php

    try {
        $sql = 'SELECT * FROM secret_word';
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetch();
    } catch (PDOException $e) {
        throw $e;
    }
    $secret_word = $data['secret_word'];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = $_POST['user-input'];
      //  $data = preg_replace('/\s+/', '', $data);
        $temp = explode(':', $data);
        $temp2 = preg_replace('/\s+/', '', $temp[0]);
        
        if($temp2 === 'train'){
            train($temp[1]);
        }elseif($temp2 === 'aboutbot') {
            aboutbot();
        }else{
            getAnswer($temp[0]);
        }
    }

    function aboutbot() {
        echo "<div id='result'>Juu Bot v1.0 - I am simply a bot that returns data from the database and I also can be taught new tricks!</div>";
    }
    function train($input) {
        $input = explode('#', $input);
        $question = trim($input[0]);
        $answer = trim($input[1]);
        $password = trim($input[2]);
        if($password == 'password') {
            $sql = 'SELECT * FROM chatbot WHERE question = "'. $question .'" and answer = "'. $answer .'" LIMIT 1';
            $q = $GLOBALS['conn']->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
            $data = $q->fetch();

            if(empty($data)) {
                $training_data = array(':question' => $question,
                    ':answer' => $answer);

                $sql = 'INSERT INTO chatbot ( question, answer)
              VALUES (
                  :question,
                  :answer
              );';

                try {
                    $q = $GLOBALS['conn']->prepare($sql);
                    if ($q->execute($training_data) == true) {
                        echo "<div id='result'>Training Successful!</div>";
                    };
                } catch (PDOException $e) {
                    throw $e;
                }
            }else{
                echo "<div id='result'>I already understand this. Teach me something new!</div>";
            }
        }else {
            echo "<div id='result'>Invalid Password, Try Again!</div>";

        }
    }

    function getAnswer($input) {
        $question = $input;
        $sql = 'SELECT * FROM chatbot WHERE question = "'. $question . '"';
        $q = $GLOBALS['conn']->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetchAll();
        if(empty($data)){
            echo "<div id='result'>Sorry, I do not know that command. You can train me simply by using the format - 'train: question # answer # password'</div>";
        }else {
            $rand_keys = array_rand($data);
            echo "<div id='result'>". $data[$rand_keys]['answer'] ."</div>";
        }
    }
    ?>

</div>

</body>


<script>
    var outputArea = $("#chat-output");

    $("#user-input-form").on("submit", function(e) {

        e.preventDefault();

        var message = $("#user-input").val();

        outputArea.append(`<div class='bot-message'><div class='message'>${message}</div></div>`);


        $.ajax({
            url: 'profile.php?id=Uju',
            type: 'POST',
            data:  'user-input=' + message,
            success: function(response) {
                var result = $($.parseHTML(response)).find("#result").text();
                setTimeout(function() {
                    outputArea.append("<div class='user-message'><div class='message'>" + result + "</div></div>");
                    $('#chat-output').animate({
                        scrollTop: $('#chat-output').get(0).scrollHeight
                    }, 1500);
                }, 250);
            }
        });


        $("#user-input").val("");

    });
</script>

</html>