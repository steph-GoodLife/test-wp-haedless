$(document).ready(function(){

//format de la date
var monthNames = [
    "Janvier", "Février", "Mars",
    "Avril", "Mai", "Juin", "Juillet",
    "Aout", "Septembre", "Octobre",
    "Novembre", "Decembre"
];

function formateDateRestApi(date) {
    var tempDate = date.split('-');
    return tempDate[2].substr(0,2) + ' ' + monthNames[tempDate[1]-1] + ' ' +tempDate[0];
}

//build blog element
function buildBlogElemenent(elem, date, single){
    if(elem.featured_image_url === undefined){
        elem.featured_image_url = 'img/3d-fluency-arrow-synchronize.png'
    }
        
        var bigString =
        '<div class="col-12 p-3 mb-3" style="border-top:1px #ccc solid;">'
        + '<div class="row">'
            + '<div class="col-12 col-lg-4 blog-feat-img">'
                + '<img src="'+ elem.featured_image_url +'" class="img-fluid img-thumbnail">'
            +  '</div>'
            + '<div class="col-12 col-lg-8 blog-elem">';

            if(single) {
                bigString += '<h1 class="h2">' + elem.title.rendered + '</h1>';
            }else{
                bigString += '<h1 class="h2"><a href="blog-single.php?id='+ elem.id +'">'
                + elem.title.rendered + '</a></h1>'
            }


            bigString += '<p><em>publié le ' + date + '</em></p>'
            + elem.content.rendered
            + '</div>'
        + '</div>'
        + '</div>';

        return bigString;
}

    /**
     * GESTION DU BLOG AFFICHE LA LISTE DES ARTICLES
     */
    if(document.getElementById('blog-test')){
        var restUrl = 'http://wp-headless/wp-json/wp/v2/posts?sticky=true';

        $("#spinner-load").show();
        $.getJSON(restUrl, function(posts){
            posts.forEach(function(element){

            var dateFormated = formateDateRestApi(element.date);
            $("#blog-test").append(buildBlogElemenent(element, dateFormated, false));
            });
            $("#spinner-load").hide();
        });
    }

     /**
     * PAGE DU BLOG
     */
    if(document.getElementById('blog-list')){
        var postPerPage = 3;
        var restUrl = 'http://wp-headless/wp-json/wp/v2/posts?per_page='+postPerPage+'&page='+currPage;

        $("#spinner-load").show();
        var xhr = $.getJSON(restUrl, function(posts){
            /*pagination */
            var totalPosts  = xhr.getResponseHeader("X-WP-Total");
            var nbrePages = xhr.getResponseHeader("x-WP-TotalPages");

            $("#curr-page").text(currPage);
            $("#curr-pages").text(nbrePages);

            if(parseInt(currPage) > 1){
                var prevPageIndex = parseInt(currPage) - 1;
                $("#prev-btn").attr('href', 'blog.php?page='+ prevPageIndex).show();
            }
            if(parseInt(currPage) < parseInt(nbrePages)){
                var nextPageIndex = parseInt(currPage) + 1;
                $("#next-btn").attr('href', 'blog.php?page='+ nextPageIndex).show();
            }
            /*end pagination */


            posts.forEach(function(element){
                var dateFormated = formateDateRestApi(element.date);
                $("#blog-list").append(buildBlogElemenent(element, dateFormated, false));
            });
            $("#spinner-load").hide();
        });
    }


    /**
     * DETAIL DE L'ARTICLE
     */
    if(document.getElementById('blog-single')){
        var restUrl = 'http://wp-headless/wp-json/wp/v2/posts?include='+currId;

        $("#blog-single").show();
        $.getJSON(restUrl, function(posts){
            posts.forEach(function(element){

            var dateFormated = formateDateRestApi(element.date);
            $("#blog-single").append(buildBlogElemenent(element, dateFormated, true));
            });
            $("#spinner-load").hide();
        });
    }


})