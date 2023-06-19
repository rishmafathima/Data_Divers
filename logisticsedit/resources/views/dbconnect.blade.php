<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel & MYSQL DB Connection</title>
</head>
<body>
    <div>
        <?php
    
                if(DB::connection()->getPdo()){
                    echo "Successfully Connected to DB and DB Name is ".DB::connection()->getDataBaseName();
                }
                
                
        ?>
        </div>
</body>
</html>