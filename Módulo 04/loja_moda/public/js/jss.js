
    // Função assíncrona para buscar os produtos
    async function pesquisar() {
        // Requisição para a rota no Laravel que retorna os produtos
        let resposta = await fetch("/products");
        let products = await resposta.json();
        
        let listDiv = document.getElementById("list-cards");
        
        // Iterando sobre os produtos para criar os cards
        for (let product of products) {
            listDiv.innerHTML += `
            <div class="geral">
                <div class="cards" data-id="${product.id}">
                    <div class="grupo-cards">
                        <img src="${product.foto}" width="250" height="250" alt="${product.nome}">
                    </div>

                    <div class="textos">
                        <h3>${product.nome}</h3>
                        <p>${product.descricao}</p>
                    </div>

                    <div class="valores">
                        <span class="valorComDesconto">R$${product.valor_com_desconto}</span>
                        <span class="valorSemDesconto">R$${product.valor_sem_desconto}</span>
                    </div>
                </div>
            </div>
            `;
        }

        // Adicionando evento de clique em cada card
        let elementosCard = document.querySelectorAll(".cards");
        for (let card of elementosCard) {
            card.addEventListener("click", cliquei);
        }
    }

    // Chamando a função para exibir os produtos ao carregar a página
    document.addEventListener('DOMContentLoaded', () => {
        pesquisar();
    });

    // Função para quando um card for clicado
    function cliquei(event) {
        let cardId = event.currentTarget.dataset.id;
        console.log("Produto clicado: " + cardId);
        // Você pode adicionar mais lógica aqui, como redirecionar ou mostrar mais detalhes
    }
