let price1 = document.getElementById('price1');
let price2 = document.getElementById('price2');
let price3 = document.getElementById('price3');
let price4 = document.getElementById('price4');

fetch('https://iss.moex.com/iss/statistics/engines/currency/markets/selt/rates.json?iss.meta=off')
.then((response) => {
    if (!response.ok) {
        throw new Error('HTTP error, status = ' + response.status);
    }
    return response.json();
})
.then((json) => {
    // Текущий курс доллара ЦБРФ
    let dollar = json.cbrf.data[0][json.cbrf.columns.indexOf('CBRF_USD_LAST')];
    let numPrice1 = 850;
    dollar = new Intl.NumberFormat('ru-RU').format(parseFloat(dollar.toFixed(2)) * numPrice1);
    price1.innerHTML = '(' + dollar + ' руб.)'

    dollar = json.cbrf.data[0][json.cbrf.columns.indexOf('CBRF_USD_LAST')];
    let numPrice2 = 999;
    dollar = new Intl.NumberFormat('ru-RU').format(parseFloat(dollar.toFixed(2)) * numPrice2);
    price2.innerHTML = '(' + dollar + ' руб.)'

    dollar = json.cbrf.data[0][json.cbrf.columns.indexOf('CBRF_USD_LAST')];
    let numPrice3 = 1150;
    dollar = new Intl.NumberFormat('ru-RU').format(parseFloat(dollar.toFixed(2)) * numPrice3);
    price3.innerHTML = '(' + dollar + ' руб.)'

    dollar = json.cbrf.data[0][json.cbrf.columns.indexOf('CBRF_USD_LAST')];
    let numPrice4 = 1700;
    dollar = new Intl.NumberFormat('ru-RU').format(parseFloat(dollar.toFixed(2)) * numPrice4);
    price4.innerHTML = '(' + dollar + ' руб.)'
})
.catch((error) => {
    console.error(error);
});