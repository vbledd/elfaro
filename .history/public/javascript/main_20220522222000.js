
$(document).ready(function(){

    // Funcion que nos muestra la fecha y hora actual
    function fechaHoras(){
        let hoy = new Date();
        let fecha = hoy.getDate() + '-' + ( hoy.getMonth() + 1 ) + '-' + hoy.getFullYear();
        let hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
        let fechaYHora = fecha + ' ' + hora;
        $("#hora").html(fechaYHora)
    }
    // set interval llama a la funcion de fecha cada 1 segundo
    setInterval(fechaHoras, 1000)

    // carga cuantas noticias existen
    //$("#noticiasTotal").html('Noticias totales: '+JSON.parse(localStorage.getItem('noticias')).length);


    // funcion que utiliza el boton para volver arriba de la pagina
    $('.ir-arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    // funcion ir arriba
    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('.ir-arriba').slideDown(300);
        } else {
            $('.ir-arriba').slideUp(300);
        }
    });

});



// funcion para abrir ventana emergente
let agregar;

function abrirVentana(){
    let w = 520;
    let h = 570;
    let left = (screen.width/2)-(w/2);
    let top = (screen.height/2)-(h);
    agregar = window.open(`${baseURL}/agregarNoticia`, '_blank','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}

// funcion para agregar noticias
/* function agregarNoticia(nombre,descripcion,categoria){
    console.log('datos', nombre, descripcion,categoria);

    let noticias = JSON.parse(localStorage.getItem('noticias'));
    noticias.push({
        titulo : nombre,
        descripcion : descripcion,
        categoria : categoria,
        imagen : './img/none.jpg',
        tipo : 'new',
    })
    localStorage.removeItem('noticias');
    localStorage.setItem('noticias',JSON.stringify(noticias));
    agregar.close()
    location.reload();
}

function clearNoticias() {
    localStorage.removeItem('noticias');
    location.reload();
}
 */
