	<img src="images/welcome.png" alt="">
	<h3 class="form__text">Записаться на курс</h3>
	<form action="form_handler.php" method="post" class="page__form_align">
		<label><input class="form__element form__name_align" placeholder="Ваше имя" name="name"></label>
		<label><input class="form__element form__email_align" type="email" placeholder="Email" name="email"></label>
		<label>
			<select class="form__element form__job" name="job">
			  <option class="form__job_first-value" selected disabled hidden>Деятельность</option>
			  <option class="form__jobs">Программист</option>
			  <option class="form__jobs">Дизайнер</option>
			  <option class="form__jobs">Маркетолог</option>
		  </select>
		</label>
		<div class="form__checkbox">
			<label><input class="form__checkbox_mark" type="checkbox" name="checkbox"></label>
			<p class="form__checkbox_text">Согласен получать информационные материалы о старте курса</p>
		</div>
		<input class="form__submit" type="submit" value="Записаться на курс"  name="submit">
	</form>
