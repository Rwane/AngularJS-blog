<?php 

/*$liste_article = file_get_contents('http://localhost/angularBlog/angularJS-Blog/php/api.php?action=get_list_articles');*/

// je récupere les articles via l'URL et la stock dans une variable;

/*$liste_article = json_decode($liste_article, true);*/ // je decode le json

?>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
    $.ajax({
        url:"http://localhost/angularBlog/angularJS-Blog/php/api.php?action=get_list_articles",
        method:"GET",
        dataType: "json"
    }).done(function(data){
        for(var i = 0; i < data.length; i++)
            console.log(data[i]);
        
    }).fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
    });
</script>

