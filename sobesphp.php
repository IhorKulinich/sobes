<html>
    <head>
        <title></title>
        <style>
        b { color: red; }
        </style>
    </head>
    <body>
        <ul id="ul">
        <?php
            $array = array('January', 'February', 'March', 'April', 'May', 'June', 'August', 'September', 'October', 'November', 'December');
            $month=date("F");
            for ($i=0; $i<count($array); $i++){
                if ($month==$array[$i]) {
                    echo("<li><b>{$array[$i]}</b></li>");
                } else {
                    echo("<li>{$array[$i]}</li>");
                }
            }
        ?>
        </ul>
        
    </body>
</html>