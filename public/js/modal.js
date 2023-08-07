// Variável global para indicar se o modal está aberto ou não
var modalAberto = false;

// JavaScript para manipular o modal
document.getElementById("openModalBtn").onclick = function() {
  document.getElementById("meuModal").style.display = "block";
  document.body.classList.add("modal-open"); // Impede o scroll no conteúdo de fundo
  modalAberto = true;
};

document.getElementById("fecharModalBtn").onclick = function() {
  document.getElementById("meuModal").style.display = "none";
  document.body.classList.remove("modal-open"); // Permite o scroll no conteúdo de fundo novamente
  modalAberto = false;
};

// Fechar o modal clicando fora da caixa do modal
window.onclick = function(event) {
  var modal = document.getElementById("meuModal");
  if (event.target == modal) {
    modal.style.display = "none";
    document.body.classList.remove("modal-open"); // Permite o scroll no conteúdo de fundo novamente
    modalAberto = false;
  }
};

// Bloquear toque (touch) fora do modal quando estiver aberto
document.addEventListener("touchmove", function(event) {
  if (modalAberto) {
    event.preventDefault(); // Bloqueia o toque (touch) fora do modal
  }
}, { passive: false });
