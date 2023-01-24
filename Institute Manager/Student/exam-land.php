<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam</title>
</head>
<body>
        <h1>Exam</h1>
        <h2 align="center" id="h2"></h2>
        <div class="main">
            <form action="exam-back.php" method="post">            
                <div class="quiz">
                    <div class="qs">
                        1.Which of the following was used in programming the first computers?
                    </div>
                    <div class="op">
                        <input type="radio" value="objectcode" name="qone" id="1op1" required>
                        <label for="1op1">[A] Object code</label>
                        <br>
                        <input type="radio"  value="sourcecode" name="qone" id="1op2">
                        <label for="1op2">[B] Source code</label>
                        <br>
                        <input type="radio"  value="machine" name="qone" id="1op3">
                        <label for="1op3">[C] Machine Language</label>
                        <br>
                        <input type="radio"  value="assembly" name="qone" id="1op4">
                        <label for="1op4">[D] Assembly Language</label>
                    </div>
                </div>   
                    <div class="quiz">
                        <div class="qs">
                           2. Any piece of data can be returned in a constant time, regardless of its physical location and whether or not it is related to the previous piece of data using which of the following? 
                        </div>
                        <div class="op">
                        <input type="radio" value="ram" name="qtwo" id="2op1" required>
                        <label for="2op1">[A] RAM</label>
                        <br>
                        <input type="radio"  value="rom" name="qtwo" id="2op2">
                        <label for="2op2">[B] ROM</label>
                        <br>
                        <input type="radio"  value="cpu" name="qtwo" id="2op3">
                        <label for="2op3">[C] CPU</label>
                        <br>
                        <input type="radio"  value="networkcard" name="qtwo" id="2op4">
                        <label for="2op4">[D] Network card</label> 

                        </div>

                    </div>
                    <div class="quiz">
                        <div class="qs">
                            3. Which of the following blogging platform was first launched by Pyra Labs?
                        </div>
                        <div class="op">
                        <input type="radio" value="wordpress" name="qthree" id="3op1" required>
                        <label for="3op1">[A] Wordpress</label>
                        <br>
                        <input type="radio"  value="blogger" name="qthree" id="3op2">
                        <label for="3op2">[B] Blogger</label>
                        <br>
                        <input type="radio"  value="typepad" name="qthree" id="3op3">
                        <label for="3op3">[C] Typepad</label>
                        <br>
                        <input type="radio"  value="twitter" name="qthree" id="3op4">
                        <label for="3op4">[D] Twitter</label> 

                        </div>

                    </div>
                <input type="submit" id="subbtn">
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                alert("the Quiz starts now you have only 1 minute left!!!!!!!!!!!!");
                setInterval(myFunction, 1000);
                setTimeout(timeout,10000);
                let i=1;
                    function myFunction() {
                       
                        i++;
                        $("h2").text(i);
                    }
                function timeout()
                {
                    alert("TimeOut!!!!!!!!!!");
                    $("#subbtn").hide();
                    $("h2").hide();
                } 
            
            });


        </script>
</body>
</html>
