{
  const canvas = document.getElementById("canvas");
  const ctx = canvas.getContext('2d');

  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  function degrees(e) {
    return e * Math.PI / 180;
  }

  ctx.fillStyle = '#FFE4B5';
  ctx.beginPath();
  ctx.arc(240, 200, 100, 0, degrees(360));
  ctx.fill();
}