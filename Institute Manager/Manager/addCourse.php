<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Course</title>
</head>
<body>
    <div class="container">
        <form action="addCourse-back.php" method="post">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="course name.." name="Cname">
                <label for="name">Course Name:</label>

            </div>
          
            <div class="form-floating">
                <input type="text" class="form-control" id="duration" placeholder="Duration.." name="Cdur"> 
                <label for="duration">Duration:</label>

            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="fee" placeholder="course fee.." name="Cfee">
                <label for="fee">Course Fee:</label>

            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="code" placeholder="course code.." name="Ccode">
                <label for="code">Course Code:</label>

            </div>  
            <div class="form-floating">
                <input type="text" class="form-control" id="Cfirst" placeholder="First Instalment.." name="Cfirst">
                <label for="Cfirst">First Instalment:</label>

            </div> 
            <div class="input-group">

                <div class="form-floating">
                    <input type="text" class="form-control" id="syllabus" placeholder="Sylllabus" name="slbs0">
                    <label for="code">Syllabus:</label>

                 </div>  
               
                <button class="btn btn-primary" id="addbtn">+</button>
            </div>
            <div id="slbs">

            </div>
            <input type="hidden" id="count" name="count" value="0">  
            <input type="submit" value="submit" class="btn btn-primary btn-lg">   
        </form>
    </div>
<script>
    let addBtn=document.getElementById("addbtn");
    let slbs=document.getElementById("slbs");
    let count=document.getElementById("count");
    addBtn.addEventListener("click",add);
    var i=1;
    function add(e)
    {
        e.preventDefault();
        let field=document.createElement("input");
        slbs.appendChild(field);
        field.classList.add("form-control");
        field.name="slbs"+i;
        let btn=document.createElement("button");
        slbs.appendChild(btn);
        btn.classList.add("btn");
        btn.classList.add("btn-primary");
        btn.innerHTML="-";
        btn.id=field.name;
        slbs.classList.add("input-group");  
        count.value=i;
        i++;
        alert(count.value);
    }
</script>    
</body>
</html>