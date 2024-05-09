const form = document.querySelector('form');


form.addEventListener('submit', function
(e) {
    e.preventDefault();
       const height= parseInt(document.querySelector('#height').value);
       const weight = parseInt(document.querySelector('#weight').value);
       const results = document.querySelector('#results');
       const wc = document.querySelector('#w');
       if(height === '' || height < 0 || isNaN(height))
       {
        results.innerHTML= `Please give a valid number ${height}`;

       }
       else if (weight === '' || weight <0 || isNaN(weight))
       {
        results.innerHTML= `Please give a valid number ${weight}`;
       }
       else {
        const bmi= (weight /(( height * height) /10000)).toFixed(2);
        results.innerHTML = `<span>${bmi}</span>`;
       }

    if (weight < 18.6) {
        wc.innerHTML= `Under Weigth ${weight}`;
        console.log(wc);
       }
     else  if (weight >  18.6 && weight <=24.9 ) {
        wc.innerHTML= `Normal Range ${weight}`;
        console.log(wc);
       }
       else {
        wc.innerHTML= `Over Weigth ${weight}`;
        console.log(wc);
       }
});