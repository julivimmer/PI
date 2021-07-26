function iniciaModal(modalID){
    const modal = document.getElementById(modalID);
    if(modal){
        modal.classList.add('mostrar');
        modal.addEventListener('click', function(evento){
            if(evento.target.id == modalID || evento.target.className == 'fechar'){
                modal.classList.remove('mostrar');
            }
        });
    }
}
const botao = document.querySelector('.btn');
botao.addEventListener('click', function(){
    iniciaModal('modal');
});