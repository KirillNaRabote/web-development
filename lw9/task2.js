{
  function skipSp(input) {
    let buffer = '';
    let i = 0;
    let digit = 0;
    while (i < input.length) {
      if (input[i] === '1' || input[i] === '2' || input[i] === '3' || input[i] === '4' || input[i] === '5' ||
          input[i] === '6' || input[i] === '7' || input[i] === '8' || input[i] === '9') {
        digit++;
      } else {
        digit = 0;
      }
      if ((input[i] === '1' || input[i] === '2' || input[i] === '3' || input[i] === '4' || input[i] === '5' ||
           input[i] === '6' || input[i] === '7' || input[i] === '8' || input[i] === '9') && (digit === 1)) {
        buffer = buffer + ' ';
        }
      if (input[i] !== ' ') {
        buffer = buffer + input[i];
      }
      i++;
    }
    return buffer;
  }
  function calc(input) {
    if (typeof input === 'string') {
      input = skipSp(input);
    } else {
      console.log('Входные данные должны быть строчного типа');
    }
  }
}