const popupBg = document.getElementById('popup__bg');
const popup = document.getElementById('popup');
const openPopupButtons = document.getElementsByClassName('open-popup');
const closePopupButton = document.getElementById('close-popup');

for (let i = 0; i < openPopupButtons.length; i++) {
  openPopupButtons[i].addEventListener('click', function () {
    popupBg.classList.add('popup__bg-active');
    popup.classList.add('popup-active');
  });
}

closePopupButton.addEventListener('click', function () {
  popupBg.classList.remove('popup__bg-active');
  popup.classList.remove('popup-active');
});

popupBg.addEventListener('click', function (btn) {
  if (btn.target === popupBg) {
    popupBg.classList.remove('popup__bg-active');
    popup.classList.remove('popup-active');
  }
});

document.addEventListener('keydown', function (btn) {
  if (btn.key === 'Escape') {
    popupBg.classList.remove('popup__bg-active');
    popup.classList.remove('popup-active');
  }
});