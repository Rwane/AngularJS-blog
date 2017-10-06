app.factory('article', [ function(){
	return  $.ajax({
        url:"http://localhost/angularBlog/angularJS-Blog/php/api.php?action=get_list_articles",
        method:"GET",
        dataType: "json"
    }).done(function(data){
       console.log(data);
        return(data);


    }).fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
    });
}]);