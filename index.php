<?php
    $name = "Pratchaya Damkoenkiad";
    $sid = "6414421026";
    $program ="Information Technology";
    $faculty ="Computer Scinece and Information Technology";
    $faculty_url ="http://www.csit.rbru.ac.th";
    $age = 20;
    function parse_link($txt,$url){
        return '<a href="'.$url.'">'.$txt.'</a>';
    }
    function parse_link_format($txt,$url,$link_style){
        return '<a class="'.$link_style.'" href="'.$url.'">'.$txt.'</a>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-scroll" style="background-image: url(https://akcdn.detik.net.id/visual/2022/06/30/anime-spy-x-family-anya-forger_169.jpeg?w=650)">
<div class="container mx-auto px-6 py-5 backdrop-contrast-50 bg-white/30">
<h1 class="text-center text-6xl font-semibold text-violet-900">
        <?php echo "$name"; ?>
    </h1>
    <h1 class="text-center text-5xl font-semibold text-fuchsia-700">
        <?php echo "$sid"; ?>
    </h1>
    <h1 class="text-center text-5xl font-semibold text-blue-600/100">
        <?php echo "$program"; ?>
    </h1>
    <h1 class="text-center text-5xl font-semibold text-blue-600/100">
        <?php echo "$faculty"; ?>
    </h1>
    <h1 class="text-center text-5xl font-semibold text-rose-600">
        <?php echo "$age"; ?>
    </h1>
</div>
<div a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-center font-medium text-white hover:bg-indigo-700">
    <?php
    if($age>20){
?>    
<?php
        echo parse_link($faculty,$faculty_url);

 }else{ 
    
        echo parse_link("NEXT","http://localhost/6414421026/next.php");

 }   
?>
</div>
    </body>
</html>