let baseURL = '/elfaro/public';

let noticiasBase = [
    {
        titulo : 'Enap reporta nueva alza en las gasolinas de 6,7 pesos por litro: gas registra disminución de 4$',
        descripcion : 'La Empresa Nacional del Petróleo (ENAP) anunció durante la jornada de este miércoles 30 de marzo un aumento en todos los combustibles, menos en el gas licuado del petróleo (GLP) de uso vehicular que registró una disminución de 4,0 pesos por litro. El detalle de Enap publicado durante esta tarde indica que las gasolinas de 93 y 97 octanos sufrirán una nueva alza de $6,7 por litro ($/lt). Además, se informó sobre un nuevo alza en el valor del diésel, el cual sumó $6,7 por litro ($/lt).',
        categoria : 'negocio',
        imagen : './img/economia/imagen1.jpg',
        tipo : '',
    },
    {
        titulo :'Dos grandes marcas de cerveza anuncian su salida de Rusia',
        descripcion : 'La holandesa Heineken decidió retirar sus productos de Rusia, lo mismo que la danesa Carlsberg. “Luego de la previamente anunciada revisión estratégica de nuestras operaciones, hemos concluido que la propiedad de Heineken en el negocio en Rusia ya no es sustentable ni duradero en el contexto actual”, afirmó la primera en un comunicado.',
        categoria : 'negocio',
        imagen : './img/economia/imagen2.jpg',
        tipo : '',
    },
    {
        titulo :'Banco Central planteó preocupación por impacto de la inflación en las personas y avizora riesgo de recesión',
        descripcion : 'De acuerdo con las expectativas del IPoM, el PIB rondaría entre 1% y 2% este 2022, e incluso el Central le abre la puerta a una eventual contracción para el año siguiente, estimando un rango entre el -0,25% y el 0,75%. Ya para 2024, la economía "se expandiría en torno a su potencial", entre 2,25% y 3,25%. El instituto emisor sostiene que "la inflación y sus perspectivas de corto plazo han continuado al alza, anticipando niveles cercanos a 10% para mediados de este año".',
        categoria : 'negocio',
        imagen : './img/economia/imagen3.jpg',
        tipo : '',
    },
    {
        titulo :'Suárez y eventual adiós de la Generación Dorada: "El público debe agradecerles, han hecho historia"',
        descripcion : 'Pese a ser el autor de uno de los dos goles con que Uruguay derrotó a la Selección Chilena en San Carlos de Apoquindo, Luis Suárez lamentó que la Generación Dorada vuelva a quedarse fuera de un Mundial y señaló que, de igual forma, "el pueblo chileno debe estar agradecido".',
        categoria : 'deportes',
        imagen : './img/deportes/Imagen1.jpg',
        tipo : '',
    },
    {
        titulo :'El clásico universitario se lleva todas las miradas: así se jugará la 8va fecha del torneo nacional',
        descripcion : 'La ANFP reveló la programación de la octava fecha del Campeonato Nacional 2022, donde destaca el clásico universitario entre la UC y la ‘U’ en el Estadio San Carlos de Apoquindo. El duelo más atractivo de la fecha se jugará en la precordillera el sábado 2 de abril desde las 18:00 horas.',
        categoria : 'deportes',
        imagen : './img/deportes/Imagen2.png',
        tipo : '',
    },
    {
        titulo :'No lo dudaron: el candidato ideal de Beausejour y Pinilla para asumir como técnico de La Roja',
        descripcion : 'Tras la no clasificación de La Roja al Mundial de Catar 2022, ya comienzan a circular nombres del posible reemplazante de Martín Lasarte en la banca del ‘equipo de todos’. En medio de este reciente debate dos exseleccionados no lo dudaron y nombraron al que ellos creen como el candidato idóneo para asumir.',
        categoria : 'deportes',
        imagen : './img/deportes/Imagen3.jpg',
        tipo : '',
    },
    {
        titulo :'Presidente Gabriel Boric y Convención Constitucional tendrán documental en Netflix',
        descripcion : 'Los próximos meses del Gobierno de Gabriel Boric y el desenlace del trabajo de la Convención Constitucional serán registrados en un documental que llegará a Netflix. La pieza audiovisual estará a cargo del director alemán Daniel Carsenty junto al productor Nick Krüger, en un trabajo que también incluye a Europea TV, el canal franco-alemán ARTE y la plataforma de streaming Netflix.',
        categoria : 'politica',
        imagen : './img/politica/imagen1.jpg',
        tipo : '',
    },
    {
        titulo :'Boric pone a Máximo Pacheco a la cabeza de Codelco',
        descripcion : 'El Gobierno designó a Máximo Pacheco Matte, ex ministro de Energía en la segunda administración de Michelle Bachelet, como nuevo presidente del directorio de Codelco. El empresario y militante socialista tuvo un destacado paso por dicha cartera, con elogios transversales en el mundo político, al punto que su nombre se consideró como parte de los "presidenciables" de la centroizquierda.',
        categoria : 'politica',
        imagen : './img/politica/imagen2.jpg',
        tipo : '',
    },
    {
        titulo :'Corte de Antofagasta ratificó la solicitud de extradición de Karen Rojo',
        descripcion : 'De manera unánime, la Primera Sala de la Corte de Apelaciones de Antofagasta acogió la solicitud de extradición interpuesta por la Fiscalía en contra de la ex alcaldesa Karen Rojo, que huyó del país al tiempo que se confirmó su condena de cinco años y un día de presidio por el delito de fraude al Fisco. Después de que el Juzgado de Garantía de la ciudad acogiera la petición ayer martes, restaba la ratificación del tribunal de alzada para que el Ministerio de Relaciones Exteriores reciba, junto con una copia del fallo, un documento que le solicite practicar las gestiones diplomáticas necesarias para que el Reino de los Países Bajos detenga a la ex autoridad, pues se estima que es allí donde se encuentra desde la semana pasada.',
        categoria : 'politica',
        imagen : './img/politica/imagen3.jpg',
        tipo : '',
    },
];

if(localStorage.getItem('noticias') === null){
    localStorage.setItem('noticias',JSON.stringify(noticiasBase));
}

function formatoNoticia(articulo){
    let nuevo = `style="width: 80%; border: 1px solid #F39B00"`;
    let antiguo = `style="width: 68%;"`;

    return `
    <div class="card mb-3" ${articulo.tipo == 'new' ? nuevo : antiguo}>
        <img src="${articulo.imagen}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">${articulo.tipo == 'new' ? `<h4 style="display:block; padding:5px; background-color: #F39B00">"Nuevo" ${articulo.titulo}</h4>` : articulo.titulo}</h5>
            <p class="class="card-subtitle mb-2 text-muted">${articulo.categoria}</p>
            <p class="card-text">${articulo.descripcion}</p>
        </div>
    </div>
    `;
}

function construirNoticias(categoria,titular) {
    //obtenemos las noticias guardadas en el localStorage
    let noticias = JSON.parse(localStorage.getItem('noticias'));

    // comprobamos si la categoria es inicio para mostrar
    // 3 noticias aleatorias
    if(categoria == 'inicio'){
        let noticiasTotales = noticias.length;
        let indiceAleatorio = [];
        let noticiasMaximas = 3;
        // utilizamos un for con una comporbación para obtener 3 numeros
        // aleatorios que no se repitan
        for(let i = 0; i < noticiasMaximas; i++){
            let indice = Math.floor(Math.random() * noticiasTotales);
            indiceAleatorio.find( numero => numero == indice) ? i-- : indiceAleatorio.push(indice);
        }
        // recorremos las noticias con los indices aleatorios
        indiceAleatorio.map(indice =>{
            // generamos la estructura donde se rellenan los datos
            let estructura = formatoNoticia(noticias[indice]);

            $(function() {
                // agregamos la noticia al elemento con la ID noticias
                $('#noticias').append(estructura);
            });

        })

        $(function() {
            // agregamos la cantidad de noticias asi como tambien el h1 de la pagina
            $('#noticias').append(`<h3>Cantidad de noticias : ${noticiasMaximas}</h3>`);
            $("#noticias").append(` <h1 class="titulo">${titular}</h1>`);
        });
    }else{
        let cantidadCategoria = 0;
        // recorremos las noticias y las agregamos al html
        noticias.map(articulo =>{
            if(articulo.categoria == categoria){
                cantidadCategoria++;
                let estructura = formatoNoticia(articulo);

                $(function() {
                    $('#noticias').append(estructura);
                });
            }
        })

        $(function() {
            $('#noticias').append(`<h3>Cantidad de noticias : ${cantidadCategoria}</h3>`);
            $("#noticias").append(` <h1 class="titulo">${titular}</h1>`);
        });
    }

}

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
