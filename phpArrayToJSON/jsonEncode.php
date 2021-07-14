<!-- retrive data from mysql database -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div id="main">
        <div id="header">
            <h1>Php With Ajax & Json</h1>
        </div>
        <div class="load-data">

        </div>
    </div>
</body>
<script>
    // $.getJSON("data.php",
    // function(data){
    //     // console.log(data);
    //     $.each(data,function(key,value){
    //         $("#load-data").append(value.Id + " "+value.student_name + " "+ value.age+" "+value.city);
    //     });
    // });
    $.ajax({
        url: "data.php",
        type: "post",
        data : {id:2},
        dataType: "JSON",
        success: function(data) {
            // console.log(data);
            $.each(data, function(key, value) {
                $("#load-data").append(value.Id + " " + value.student_name + " " + value.age + " " + value.city);
            });
        }
    });
</script>

</html>