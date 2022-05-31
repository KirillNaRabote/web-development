{

  const button = document.getElementById('button');
  const container = document.getElementById('container');

  button.addEventListener('click', () => {
    container.innerHTML = '';
    async function sendFetch() {
      const response = await fetch('form_loader.php');
      const data = await response.json();

      if (data[0] !== 'OK') {
        container.innerHTML = '<p class="container__empty">' + data[0] + '</p>';
      } else {
        let counter;
        for (counter = 1; counter <= data[1]; counter++) {
          container.innerHTML += '<div class="container__card">' +
                                   '<img class="container__image" src="images/anonymus.png" alt="">' +
                                   '<p class="container__paragraph">' + data[counter + 1]['name'] + '</p>' +
                                   '<p class="container__paragraph">' + data[counter + 1]['email'] + '</p>' +
                                   '<p class="container__paragraph">' + data[counter + 1]['profession'] + '</p>' +
                                   '<p class="container__paragraph">' + data[counter + 1]['agree'] + '</p>' +
                                 '</div>';
        }
      }
    }

    sendFetch();
  });

}