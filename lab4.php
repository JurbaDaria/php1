<html>
    <body>
    <div class="stilDiv">
        <form action="formular.php" method="post">
            <fieldset>
                <legend>Ваше мнение очень важное для нас!</legend>
                <p>
                    <label for="nume">Введите фамилию:</label>
                    <input type="text" name="nume" />
                    <br />
                    <label for="prenume">Введите имя:</label>
                    <input type="text" name="prenume" />
                    <br />
                    <label for="email">Ваш е-майл:</label>
                    <input type="text" name="email" />
                </p>
                <p>
                    Удовлетворены нашими товарами? <br />
                    <input type="radio" name="optiune" value="Da" checked="checked" />Хорошие<br />
                    <input type="radio" name="optiune" value="Nu" />Нехорошие<br />
                    <input type="radio" name="optiune" value="Nu stiu" /> Не могу высказаться
                </p>
                <p>
                    Оставьте ваше мнение насчет качества услуг предоставленные сотрудниками нашей компании:
                    <br />
                    <textarea name="comentariu" rows="10" cols="30"></textarea>
                </p>
                <p>
                    <input type="reset" value="Удалить">
                    <input type="submit" value="Передать">
                </p>
            </fieldset>
        </form>
    </div>
    <div class="rezultat">
        Ваша фамилия: <b><?php echo $_POST['nume']; ?></b>, а ваше имя: <b><?php echo $_POST['prenume']; ?></b><br />
        Ваш е-майл адрес: <b><?php echo $_POST['email']; ?></b><br /><br />
        На вопрос "Нравятся ли вам наши товары", вы ответили: <b><?php echo $_POST['optiune']; ?></b>, а ваш комментарий:
        <br />
        <i><?php echo $_POST['comentariu']; ?></i>
    </div>
</body>



<!-- 2.Этот код создает форму, в которой пользователь может ввести свои данные, ответить на несколько вопросов и отправить их на сервер. Когда пользователь нажимает кнопку "Передать", данные из формы отправляются на сервер для обработки. Затем на странице появляется блок с результатами, отображающими введенные пользователем данные.
 3.CSS стили для class="stilDiv" и class="rezultat": -->
.stilDiv {
    background-color: #F5F5F5;
    border: 1px solid #CCC;
    padding: 10px;
}

.rezultat {
    margin-top: 20px;
    border: 1px solid #CCC;
    padding: 10px;
}


<!-- 4. Для того чтобы добавить функции проверки существования данных в контролах и вывести их на экран, можно использовать условные операторы и функцию isset().

Вот измененный код формы с добавленными проверками: -->

<div class="rezultat">
  <?php 
    if (isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['email']) && isset($_POST['optiune']) && isset($_POST['comentariu'])) {
  ?>
  Ваша фамилия: <b><?php echo $_POST['nume']; ?> </b>, а ваше имя:  <b><?php echo $_POST['prenume']; ?> </b><br />
  Ваш е-майл адрес:  <b><?php echo $_POST['email']; ?> </b><br /><br />
  На вопрос  "Нравятся ли вам наши товары", вы ответили:  <b><?php



// Задание 2.

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



// Задание 3.

// 1.	Данный скрипт создает HTML форму, в которую пользователь вводит свою фамилию, имя и выбирает день для посещения курсов. После отправки формы скрипт проверяет, были ли заполнены все поля, и выводит приветствие с выбранным днем для посещения курсов.
// 2.	Если заполнить форму и нажать кнопку "Передать данные", то скрипт проверит, были ли заполнены все поля. Если все поля заполнены, то скрипт выведет сообщение с приветствием и выбранным днем для посещения курсов. Если какое-то поле не заполнено, то скрипт выведет сообщение о том, что нужно заполнить все поля. Если форма еще не была отправлена, то на странице будет только форма для заполнения.
// 3.	Использование суперглобальных переменных $_SERVER['SCRIPT_NAME'] и $_REQUEST допустимо и имеет свои особенности. $_SERVER['SCRIPT_NAME'] возвращает относительный путь к текущему скрипту, что может быть полезно при создании ссылок на другие страницы на сайте. $_REQUEST позволяет получать значения из формы независимо от метода отправки данных (POST или GET). Однако, использование $_REQUEST может быть опасно, так как оно может получать данные из неожиданных источников, например, из URL-адреса, что может привести к уязвимостям в безопасности. Лучше использовать $_POST или $_GET, в зависимости от метода отправки данных.
// 4.	Для проверки выбранного значения из выпадающего списка можно добавить следующий скрипт:
if(isset($_POST['zi'])) {
    $day = $_POST['zi'];
    if($day == "воскресенье" || $day == "суббота") {
        echo "<p>Будет достаточного времени для изучения предложенных информаций!</p>";
    }
} 
// Этот скрипт проверяет, было ли выбрано значение из списка, и если да, то проверяет, является ли это значение "воскресенье" или "суббота". Если да, то выводится дополнительное сообщение о достаточном времени для изучения информации. Этот скрипт можно добавить после проверки заполнения всех полей и вывода приветствия.

<html>
<head>
    <meta charset="utf-8">
    <title>Formular</title>
</head>
<body>
    <div class="formular">
        <h1>Для посещения курсов заполните ниже-предложенную форму...</h1>
        <form action="<?php $_SERVER['SCRIPT_NAME']?>" method="post">
            <input type="text" name="nume" placeholder="Введите вашу фамилию" pattern="[A-ZА-Я][a-zа-я]{3,10}" title="Введите только буквы, первая прописная, остальные от 3 до 10 маленькие" /><br />
            <input type="text" name="prenume" placeholder="Введите ваше имя" /><br />
            <p>Выберите день для посещения курсов:</p>
            <select name="zi" size="3">
                <option value="понедельник"> Понедельник</option>
                <option value="вторник"> Вторник</option>
                <option value="среда">Среда</option>
                <option value="четверг"> Четверг</option>
                <option value="пятница"  selected> Пятница</option>
                <option value="суббота"> Суббота</option>
                <option value="воскресенье"> Воскресенье</option>
            </select>
            <br /><input type="reset" value="Сброс данных" />
            <input type="submit" value="Передать данные" name="start" />
        </form>
    </div>
    <?php if (isset($_REQUEST['start'])) {
        echo '<div class="rez_form">';
        if (empty($_REQUEST['nume'])|| empty($_REQUEST['prenume'])|| empty($_REQUEST['zi'])) {
            echo "Заполните пожалуйста все поля!!!";
        } else {
            echo "Добро пожаловать на наш сайт <b>" . $_POST['nume']. " " . $_POST['prenume'] . "</b>.<br />";
            echo "Вы сможете посетить наш курс по <b> " . $_POST['zi'] . "-ам</b>.";
        }
        echo "</div>";
        if(isset($_POST['zi'])){
            $day = $_POST['zi'];
            if($day == 'суббота' || $day == 'воскресенье'){
                echo "<p>Будет достаточного времени для изучения предложенных информаций!</p>";
            }
       
