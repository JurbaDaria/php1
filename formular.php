
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Форма обратной связи</title>
	<style>
		.stilDiv {
			background-color: #f9f9f9;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #ccc;
			margin-bottom: 20px;
		}
		.rezultat {
			background-color: #e5eecc;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #ccc;
		}
	</style>
</head>
<body>
	<div class="stilDiv">
		<form action="formular.php" method="post">
			<fieldset>
				<legend>Ваше мнение очень важное для нас! </legend>
				<p>
					<label for="nume">Введите фамилию: </label>
					<input type="text" name="nume" <?php if(isset($_POST['nume'])) echo "value='".$_POST['nume']."'"; ?> />
					<?php if(isset($_POST['submit']) && empty($_POST['nume'])) echo "<span style='color:red'>* Обязательное поле</span>"; ?>
					<br />

					<label for="prenume">Введите имя: </label>
					<input type="text" name="prenume" <?php if(isset($_POST['prenume'])) echo "value='".$_POST['prenume']."'"; ?> />
					<?php if(isset($_POST['submit']) && empty($_POST['prenume'])) echo "<span style='color:red'>* Обязательное поле</span>"; ?>
					<br />

					<label for="email">Ваш е-майл: </label>
					<input type="text" name="email" <?php if(isset($_POST['email'])) echo "value='".$_POST['email']."'"; ?> />
					<?php if(isset($_POST['submit']) && empty($_POST['email'])) echo "<span style='color:red'>* Обязательное поле</span>"; ?>
				</p>
				<p>
					Удовлетворены нашими товарами? <br />
					<input type="radio" name="optiune" value="Da" <?php if(isset($_POST['optiune']) && $_POST['optiune']=='Da') echo "checked"; ?> />Хорошие <br />
					<input type="radio" name="optiune" value="Nu" <?php if(isset($_POST['optiune']) && $_POST['optiune']=='Nu') echo "checked"; ?> />Нехорошие<br />
					<input type="radio" name="optiune" value="Nu stiu" <?php if(isset($_POST['optiune']) && $_POST['optiune']=='Nu stiu') echo "checked"; ?> /> Не могу высказаться
					<?php if(isset($_POST['submit']) && empty($_POST['optiune'])) echo "<br /><span style='color:red'>* Обязательное поле</span>"; ?>
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



