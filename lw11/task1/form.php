<img class="form__image" src="images/welcome.png" alt="">
<h3 class="form__text">Записаться на курс</h3>
<form method="post" class="page__form_align" id="form">
	<label><input class="form__element form__name_align" placeholder="Ваше имя" name="name" id="name" required></label>
	<label><input class="form__element form__email_align" type="email" placeholder="Email" name="email" id="email" required></label>
	<label>
		<select class="form__element form__job" name="job" id="job">
			<option class="form__job_first-value" selected disabled hidden>Деятельность</option>
			<option class="form__jobs">Программист</option>
			<option class="form__jobs">Дизайнер</option>
			<option class="form__jobs">Маркетолог</option>
		</select>
	</label>
	<div class="form__checkbox">
		<label><input class="form__checkbox_mark" type="checkbox" name="checkbox" id="checkbox"></label>
		<p class="form__checkbox_text">Согласен получать информационные материалы о старте курса</p>
	</div>
	<input class="form__submit" type="submit" value="Записаться на курс" name="submit" id="submit">
</form>
<div id="message"></div>