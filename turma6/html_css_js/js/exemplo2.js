/**
 * Seleciona elemento com classe container
 */
var input = document.querySelector('input#inputTexto');
var btn   = document.querySelector('input[type=submit]');

// input.addEventListener('keyup', function(){
//     var content = document.querySelector('div.content');
//     content.textContent = input.value;
// });

btn.addEventListener('click', function(){
    var digitado = input.value;
    var content  = document.querySelector('div.content');

    var ul = document.createElement('ul');

    var li = document.createElement('li');
        li.textContent = digitado;

    ul.appendChild(li);

    content.appendChild(ul);
});

