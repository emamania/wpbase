let toggle_button = document.querySelector("nav .toggle-button");
let header = document.querySelector("header.header-area");

toggle_button.onclick = function(e){
    header.classList.toggle('nav-collapse');
};

/* var nextPageToken = "";
// Resultados por pagina
var resPorPagina = 2;
// Paginas a mostrar
var paginas = 1;
var key = "AIzaSyD5DCiCQ8c7fhOpjOVUj7En7RhrxLYaqas";
var idCanal = "UCdDHuAkjn6zCCFMQkTjn2Jg";
var url = "https://www.googleapis.com/youtube/v3/search?key=" + key + "&channelId=" + idCanal + "&part=snippet,id&order=date&maxResults=" + resPorPagina;
//$("#contenedor").append(url);
$.getJSON(url, function (data) {

    for (var k in data.items) {
        var tituloVideo=data.items[k]["snippet"].title;
        var urlVideo="https://www.youtube.com/watch?v=" + data.items[k]["id"].videoId;
        var fechaVideo=data.items[k]["snippet"].publishedAt;

        $("#moviey").append(
            '<div class="embed-responsive embed-responsive-16by9">'+
            '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/'+ data.items[k]["id"].videoId + '" allowfullscreen></iframe>'+
            '</div>'
        );

    }
}); */