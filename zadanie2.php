<!-- // Задание 2. -->

<html>
<head>
    <title>Форма</title>
</head>
<body>
    <form method="POST">
        <label>Число 1:</label>
        <input type="number" name="num1"><br><br>
        <label>Число 2:</label>
        <input type="number" name="num2"><br><br>
        <label>Имя:</label>
        <input type="text" name="name"><br><br>
        <label>Фамилия:</label>
        <input type="text" name="surname"><br><br>
        <label>Город:</label>
        <input type="text" name="city"><br><br>
        <input type="submit" name="submit" value="Отправить">
    </form>
    
    <?php
    // Проверяем, была ли отправлена форма
    if(isset($_POST['submit'])){
        // Получаем данные из формы
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $city = $_POST['city'];
        
        // Проверяем, что поля "Число 1" и "Число 2" были заполнены
        if(!empty($num1) && !empty($num2)){
            // Выполняем арифметические операции
            $sum = $num1 + $num2;
            $diff = $num1 - $num2;
            $product = $num1 * $num2;
            $quotient = $num1 / $num2;
            
            // Выводим результаты на экран
            echo "<h2>Результаты:</h2>";
            echo "Сумма чисел: $sum <br>";
            echo "Разность чисел: $diff <br>";
            echo "Произведение чисел: $product <br>";
            echo "Частное чисел: $quotient <br>";
            echo "<br>";
        }
        
        // Выводим остальные данные на экран
        echo "<h2>Другие данные:</h2>";
        echo "Имя: $name <br>";
        echo "Фамилия: $surname <br>";
        echo "Город: $city <br>";
    }
    ?>
</body>
</html>
