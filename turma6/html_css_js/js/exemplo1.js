/**
 * Seleciona elemento com classe container
 */
var element = document.querySelector('.container');

/**
 * Aplica o atributo style ao elemento selecionado
 * com o set de configurações abaixo
 * <div class="container" style="width: 150px; height: 150px; background: #069;"></div>
 */
element.style = 'width: 150px; height: 150px; background: #069;';

/**
 * Adiciona um conteúdo de texto puro
 * <div class="container" style="width: 150px; height: 150px; background: #069;">
 *    Conteudo via JS
 * </div>
 */
element.textContent = '<p>Conteudo via JS';

/**
 * Adiciona html ao conteudo da nossa div Container
 * no caso, abaixo, concatena com algum conteudo já
 * existente na mesma
 */
element.innerHTML += '<p>Paragrafo com JS</p>';
