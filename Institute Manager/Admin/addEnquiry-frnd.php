<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" type="text/css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Enquiry</title>
</head>
<style>
       .navbar-brand{
        font-weight:bold;
    }
    .nav-item a{
        color:white;
        font-weight:bold;

    }
</style>
<body>
    <nav class="navbar navbar-expand bg-primary">
        <div class="container">
                <a href="#" class="navbar-brand">ADMIN</a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="./landing.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Logout</a>
            </li>

        </ul>
    </nav>
    <br>
   <div class="container"> 
        <div class="row">
            <h1>ADD ENQUIRY</h1>
                    <form action="addEnquiry-back.php" method="post">
                        <input type="text" placeholder="name..." required name="name" class="form-control"><br>
                        <input type="text" placeholder="place..." required name="place" class="form-control"><br>
                        <input type="tel" placeholder="mobile..." maxlength="10" pattern="[0-9]{10}"required name="mobile" class="form-control"><br>
                        <select name="course" id="" required class="form-select"><br>
                            <option value="tally">TALLY</option>
                            <option value="graphicDesign">G-DESIN</option>
                            <option value="typing">TYPING</option>
                        </select>
                        <br>
                        <select name="status" id="" required class="form-select"><br>
                            <option value="" selected="selected" disabled>Select</option>
                            <option value="7-one week">one week</option>
                            <option value="2-two week">two days</option>
                            <option value="0-not intereted">not interested</option>
                            <option value="0-interested">interested</option>
                        </select>

                        <br><input type="submit" class="btn btn-primary btn-lg">

                    </form>
               
        </div>        
    </div>
</body>
</html>