<?php
include('connect.php');
 ?>


<!DOCTYPE html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
	<meta charset="UTF-8" />

	<title>80's Quiz!</title>

	<link rel="stylesheet" type="text/css" href="stylehelp.css" />
</head>

<body>
	<div class="header">
		<h1>Questions about the 80's!</h1>
	</div>
	<div id="wrapper">
		<div class="score-list">
			<div class="score-list2">

		<form action="result.php" method="post" id="quiz">

            <ul>

                <li>

                    <h3>1. Who joined Michael Jackson on vocals in the song 'Say Say Say'?</h3>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required/>
                        <label for="question-1-answers-A">A) Stevie Wonder </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Paul McCartney</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C)Elton John</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Boy George</label>
                    </div>

                </li>

                <li>

                    <h3>2. In the Stray Cats song, she's sexy and.. how old?</h3>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/>
                        <label for="question-2-answers-A">A) 17</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) 18</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) 16</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) 24</label>
                    </div>

                </li>

                <li>

                    <h3>3. What is Sting's real name?</h3>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/>
                        <label for="question-3-answers-A">A) Gerrit De Jong</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Ainsley Harriott</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Michael Jackson</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Gordon Sumner</label>
                    </div>

                </li>

                <li>

                    <h3>4. Who sand the title track of the late 80's James Bond film: License to kill?</h3>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/>
                        <label for="question-4-answers-A">A) Gladys Knight</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Frank Sinatra</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) David Bowie</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Not in this list.</label>
                    </div>

                </li>

                <li>

                    <h3>5. What year was Michael Jackson Born?</h3>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/>
                        <label for="question-5-answers-A">A) 1952</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) 1954</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) 1958</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) 1953</label>
                    </div>

                </li>
							</ul>
						</div>
					</div>
				</div>
				<br>
				<div id="wrapper2">
					<div class="score-list">
						<div class="score-list2">
							<ul>

								<li>

                    <h3>6. In what country was Bob Marley born?</h3>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required/>
                        <label for="question-6-answers-A">A) United States of America</label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) Canada</label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) Bahamas</label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) Jamaica</label>
                    </div>

                </li>

								<li>

                    <h3>7. Who was the lead singer from Pink Floyd?</h3>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required/>
                        <label for="question-7-answers-A">A) Nick Mason</label>
                    </div>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) Roger Waters</label>
                    </div>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) Richard Wright</label>
                    </div>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) Syd Barrett</label>
                    </div>

                </li>

								<li>

                    <h3>8. Which American rock band had a hit in the eighties with the Eye of the Tiger?</h3>

                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required/>
                        <label for="question-8-answers-A">A) Survivor</label>
                    </div>

                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) Pink</label>
                    </div>

                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) The Timelords</label>
                    </div>

                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) hull</label>
                    </div>

                </li>

								<li>

                    <h3>9. John Bonham died in 1980, was best known as the drummer of which group?</h3>

                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required />
                        <label for="question-9-answers-A">A) Bros</label>
                    </div>

                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) Pink Floyd</label>
                    </div>

                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) Led Zeppelin</label>
                    </div>

                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) Legend</label>
                    </div>

                </li>

								<li>

                    <h3>10. According to the Norwegian musicians A-ha, where does the sun always shine?</h3>

                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required />
                        <label for="question-10-answers-A">A) In space</label>
                    </div>

                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) On the other side</label>
                    </div>

                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) On T.V.</label>
                    </div>

                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) Norway</label>
                    </div>

                </li>

            </ul>

</div>
	</div>
</div>

<script>
    function play() {
        var audio = document.getElementById('audio');
        if (audio.paused) {
            audio.play();
            $('#play').removeClass('glyphicon-play-circle')
            $('#play').addClass('glyphicon-pause')
        }else{
            audio.pause();
            audio.currentTime = 0
            $('#play').addClass('glyphicon-play-circle')
            $('#play').removeClass('glyphicon-pause')
        }
    }
</script>


<center>
<div class="knopje">
<input type="submit" value="Done!" class="knop" />
<audio src="geluid.mp3" id="audio"></audio>

</div>
</center>
</form>
</body>

</html>
