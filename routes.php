<?php
if( null === $_SESSION['username']){
    $router -> get('','PagesController@login');
    $router -> post('','PagesController@login');

}else{
    $router -> get('','PagesController@home');

    $router -> post("view/offer",'PagesController@view');
    $router -> get("view/offer",'PagesController@view');

    $router -> get('create/offer', 'PagesController@create');
    $router -> post('create/offer', 'PagesController@create');

    $router -> post('delete/offer','PagesController@delete');

    $router -> get('edit/offer','PagesController@update');
    $router -> post('edit/offer','PagesController@update');

    $router -> get('logout','PagesController@logout');
}

