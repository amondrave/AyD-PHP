const contenedor = document.querySelector('#contenedor');

document.querySelector('#boton-menu').addEventListener('click', () =>{
    contenedor.classList.toggle('active');
});