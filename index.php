<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>


    <style>
        body{
            background-image: url("bg3.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            filter: drop-shadow(10px 10px 10rem #000000);
        }
        .container{
            margin-top: 200px;
            
        }
        .card-header{
            background-image: linear-gradient(salmon, plum);
            border: none;
        }
        h2{
            color: white;
            text-align: center;
        }
        .btn.btn-warning{
            margin-left: 600px;
            margin-top: 50px;
            color: #fff;
            filter: drop-shadow(0px 0px 7.5rem #fff);
        }



    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h2><strong>Enter Your Dessert Details Here</strong></h2>
                    </div>
                    <div class="card-body">
                        <div id="show_message" class="alert alert-success" style="display: none">Successfully sent message</div>
                        <div id="error" class="alert alert-danger" style="display: none"></div>
                        <form action="insert.php" method="post" id="ajax-form">
                            <div class="form-group">
                                <label>*Name: </label>
                                <input type="text" name="name" id="name" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>*Sprinkles: </label>
                                <input type="text" name="sprinkles" id="sprinkles" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>*Flavour:</label>
                                <input type="text" name="flavour" id="flavour" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label>*Price: </label>
                                <input type="text" name="price" id="price" class="form-control" value="">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-danger btn-sm" name="submit" value="Submit">
                            </div>
                            <br>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <button type="button" id="goToTableBtn" class="btn btn-warning">Go to table of Orders</button>

<script>
document.getElementById("goToTableBtn").addEventListener("click", function() {
    window.location.href = "newpage.php";
});
</script>

    <script type="text/javascript">
        $(document).ready(function () {

            $('#ajax-form').submit(function (e) {

                e.preventDefault();

                $("#error").hide();

                var name = $("input#name").val();
                if (name == "") {
                    $("#error").fadeIn().text("Name Field required.");
                    $("input#name").focus();
                    return false;
                }

                var sprinkles = $("input#sprinkles").val();
                if (sprinkles == "") {
                    $("#error").fadeIn().text("Sprinkles Field required");
                    $("input#sprinkles").focus();
                    return false;
                }

                var flavour = $("input#flavour").val();
                if (flavour == "") {
                    $("#error").fadeIn().text("Flavour Field required");
                    $("input#flavour").focus();
                    return false;
                }

                var price = $("input#price").val();
                if (price == "") {
                    $("#error").fadeIn().text("Price Field required");
                    $("input#price").focus();
                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: "upload.php", 
                    data: $(this).serialize(),
                    success: function () {
                        $("#show_message").fadeIn();
                    }
                });
            });

            return false;
        });
    </script>
</body>
</html>
