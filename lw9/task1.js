// todo вынести функцию для одного числа и использовать её при переборе массива
// todo проверь теорию с отрицательными числами
// todo посмотреть про Foreach
{
    function checkNumber(number) {
        if (Number.isInteger(number)) {
            if (number >= 2) {
                let isPrime = true;
                for (let divider = 2; divider <= (Math.floor(number / 2)); divider++) {
                    if (number % divider === 0) {
                        isPrime = false;
                        break;
                    }
                }
                if (isPrime) {
                    console.log(number + ' is prime number');
                } else {
                    console.log(number + ' is not prime number');
                }
            } else {
                console.log(number + ' bebra');
            }
        }
    }

    function isPrimeNumber(number) {
        if (Array.isArray(number)) {
            number.forEach(elementos => checkNumber(elementos));
        } else {
            return checkNumber(number);
        }
    }
}