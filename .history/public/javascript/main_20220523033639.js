
$(document).ready(function(){

    function fechaNombre(){
        const d = new Date();
        const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        const days = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];

        let day = days[d.getDay()];
        let dayNumber = d.getDate();
        let month = months[d.getMonth()];
        let year = d.getFullYear();
        let allDate = `${day} ${dayNumber} ${month} ${year}`;

        $("#fechaNombre").html(allDate);
    }

    fechaNombre();
    // Funcion que nos muestra la fecha y hora actual
    function fechaHoras(){

        const d = new Date();
        let hora = d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
        $("#fechaHora").html(hora)
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

let loginStatus = false;

function loginMenu(){
    loginStatus = !loginStatus;
    if(loginStatus){
        $("#login").css("right", "-100%");
    }else{
        $("#login").css("right", "0px");
    }
}
