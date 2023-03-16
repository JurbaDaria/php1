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
        На вопрос "Нравятся ли вам наши товары", вы ответили: <b><?php echo $_POST['optiune']; ?></b>,
         а ваш комментарий:
        <br />
        <i><?php echo $_POST['comentariu']; ?></i>
    </div>
</body>