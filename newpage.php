<!DOCTYPE html>
<html lang="en">
<head>

<style>
body{
    background-image: linear-gradient(rgba(20,4,30,0.5),rgba(20,4,30,0.5)),url(bg1.jpg);

}
.data{
    color: silver;
}
.container{
    border: 3px solid #fff;

}
</style>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"crossorigin="anonymous">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"crossorigin="anonymous">

<script type="text/javascript"> $(document).ready(function() { $(".table").DataTable({ }); }); </script>

</head>
<body>
    <div class="container" style="margin-top: 150px">
	<h1 style="color: white">Orders</h1>
	<hr></hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td class="data">Id</td>
                            <td class="data">Name</td>
                            <td class="data">Sprinkles</td>
                            <td class="data">flavour</td>
                            <td class="data">Price</td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include ('dbconnect.php');
                            $sql = $conn->query('SELECT * FROM orders');
                            while($data = $sql->fetch_array()) {
                                echo '
                                    <tr>
                                        <td class="data">'.$data['id'].'</td>
                                        <td class="data">'.$data['name'].'</td>
                                        <td class="data">'.$data['sprinkles'].'</td>
                                        <td class="data">'.$data['flavour'].'</td>
                                        <td class="data">'.$data['price'].'</td>
                                    </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script
            src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".table").DataTable({    
            });
        });
    </script>
</body>
</html>