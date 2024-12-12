<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
        }
        .container {
            display: flex;
            align-items: center;
        }
        .button {
            font-size: 1.5rem;
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
        }
        .display {
            font-size: 2rem;
            width: 100px;
            text-align: center;
            border: 2px solid #333;
            padding: 10px;
            border-radius: 5px;
            background-color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <button class="button" onclick="updateCounter(-1)">-</button>
    <div class="display" id="counter">0</div>
    <button class="button" onclick="updateCounter(1)">+</button>
</div>

<script>
    let counter = 0;

    function updateCounter(amount) {
        counter += amount;
        document.getElementById("counter").innerText = counter;
    }
</script>

</body>
</html>
