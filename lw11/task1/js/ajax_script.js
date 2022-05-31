{
  const popupBg = document.getElementById('popup__bg');
  const popup = document.getElementById('popup');
  const form = document.getElementById('form');
  const email = document.getElementById('email');
  const name = document.getElementById('name');
  const job = document.getElementById('job');
  const checkbox = document.getElementById('checkbox');
  const submit = document.getElementById('submit');

  function validate(email, name) {
    const validEmail = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i.test(email.value) && email.value !== '';//сделать регулярные выражения проще
    const validName = /^[a-zа-яё]+$/i.test(name.value) && name.value !== '';

    if (validEmail) {
      email.style.borderColor = '#C0C0C0';
    } else {
      email.style.borderColor = '#FF0000';
    }

    if (validName) {
      name.style.borderColor = '#C0C0C0';
    } else {
      name.style.borderColor = '#FF0000';
    }

    return (validEmail && validName)
  }

  submit.addEventListener('click', (e) => {
    e.preventDefault();

    if (validate(email, name)) {
      const data = new FormData(form);
      const formValues = Object.fromEntries(data);

      async function sendFetch() {
        const response = await fetch('form_handler.php', {
          method: 'POST',
          body: JSON.stringify(formValues)
        });

        if (response.ok) {
          popupBg.classList.remove('popup__bg-active');
          popup.classList.remove('popup-active');
          email.value = '';
          name.value = '';
          job.value = 'Деятельность';
          checkbox.checked = false;
        } else {
          popup.innerHTML = 'Упс.. Произошла ошибка';
          popup.classList.add('popup__error');
        }
      }

      sendFetch();
    }
  });
}