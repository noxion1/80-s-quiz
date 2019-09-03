<?php
include('connect.php');
 ?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8"/>

	<title>PHP Quiz</title>

	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div id="wrapper">

        <?php

            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];

            $totalCorrect = 0;

            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            if ($answer6 == "D") { $totalCorrect++; }
            if ($answer7 == "B") { $totalCorrect++; }
            if ($answer8 == "A") { $totalCorrect++; }
            if ($answer9 == "C") { $totalCorrect++; }
            if ($answer10 == "C") { $totalCorrect++; }

          ?>
          <div class="score-listboven">
            <div class="score-list2boven">

          <?php
            echo "<div id='results'>Your score: $totalCorrect / 10 correct</div>";
            ?>

            <?php

             ?>


             <?php

             $sql = "INSERT INTO stem (score) VALUES ('$totalCorrect')";
             if(mysqli_query($conn, $sql)){
    echo "Score succesfully uploaded!";
} else{
    echo "Something went wrong! ):" . mysqli_error($conn);
}
              ?>

          </div>
        </div>

            <?php  ?>
                  

          <div style="padding: 5px;
          margin-top: 100px;
          border: 5px solid purple;
          background-color: #ffffff;
          filter: aplha(opacity=80);
          opacity: 0.8; height: 100px;">


            <h2> Quiz score from other particepents:</h2>
            <?php
             $sql = 'SELECT * FROM stem';
             $query = mysqli_query($conn, $sql);

             if (!$query) {
      	die ('SQL Error: ' . mysqli_error($conn));
      }

             while ($row = mysqli_fetch_array($query))
             		{
               ?>
            <?php echo $row['score'] ?>
            <?php echo "-"; ?>

        <?php } ?>

        </div>


	</div>

</body>

</html>
