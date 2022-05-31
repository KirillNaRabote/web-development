{
  const popupBg = document.getElementById('popup__bg');
  const popup = document.getElementById('popup');
  const openPopupButtons = document.getElementsByClassName('open-popup');
  const closePopupButton = document.getElementById('close-popup');
  const email = document.getElementById('email');
  const name = document.getElementById('name');

  for (let i = 0; i < openPopupButtons.length; i++) {
    openPopupButtons[i].addEventListener('click', function () {
      popupBg.classList.add('popup__bg-active');
      popup.classList.add('popup-active');
    });
  }

  closePopupButton.addEventListener('click', function () {
    popupBg.classList.remove('popup__bg-active');
    popup.classList.remove('popup-active');
    name.style.borderColor = '#C0C0C0';
    email.style.borderColor = '#C0C0C0';
  });

  popupBg.addEventListener('click', function (btn) {
    if (btn.target === popupBg) {
      popupBg.classList.remove('popup__bg-active');
      popup.classList.remove('popup-active');
      name.style.borderColor = '#C0C0C0';
      email.style.borderColor = '#C0C0C0';
    }
  });

  document.addEventListener('keydown', function (btn) {
    if (btn.key === 'Escape') {
      popupBg.classList.remove('popup__bg-active');
      popup.classList.remove('popup-active');
      name.style.borderColor = '#C0C0C0';
      email.style.borderColor = '#C0C0C0';
    }
  });
}