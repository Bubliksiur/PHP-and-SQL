<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #232323;
            color: #fff;
            font-family: sans-serif;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        p{
            display: block;
            margin: 20px;
            animation: jump 1s infinite; 
        }
        @keyframes jump {
            0%, 100% {
                transform: translateY(0); 
            }
            50% {
                transform: translateY(-20px);
            }
        }
    
        p:nth-child(1) {
            animation-delay: 0s;
        }
        p:nth-child(2) {
            animation-delay: 0.5s;
        }
        p:nth-child(3) {
            animation-delay: 1s;
        }
        p:nth-child(4) {
            animation-delay: 1.5s;
        }
    </style>
</head>
<body>
    <?php  
        function sayHello($user){
            echo 'Hello ' . $user;
        }
    ?>

        <p><?php sayHello("Jakub")?></p>
        <p><?php sayHello("Adrian")?></p>
        <p><?php sayHello("Piotr")?></p>
        <p><?php sayHello("Justyna")?></p>
</body>
</html>
