@extends('layouts.app')

@section('content')
<br>
<br>
<ul class="nav nav-tabs ">
    <li class="nav-item bg-info">
      <a class="nav-link active" data-toggle="tab" href="#dev">Developer</a>
    </li>
    <li class="nav-item bg-info">
      <a class="nav-link" data-toggle="tab" href="#obj">Objectives</a>
    </li>
    <li class="nav-item bg-info">
        <a class="nav-link" data-toggle="tab" href="#tools">Tools</a>
    </li>

  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active show" id="dev">
      <p style="font-size:21px;">
        &#9679; This website is developed by Alireza Shajari who is a PHP, Python and Javascript programmer. The front-end of this website uses bootstrap to add bells and whistles to UI. The back-end was created by Laravel framework and Mysql database.</p>
    </div>
    <div class="tab-pane fade" id="obj">
      <p style="font-size:21px;">
        &#9679; The objective of this site developement is to Clarify MVC system in Laravel and grasp more information about CRUD actions using Eloquent ORM in Laravel. It is indicated that Laravel is a very handy, fast, clean and powerful framework.</p>
    </div>
    <div class="tab-pane fade" id="tools">
        <p style="font-size:21px;">
            &#9679; First Tool has been used in this website is routing system of Laravel which is powered by very elegant controllers and Request Class.
        </p>
        <p style="font-size:21px;">
            &#9679; Second is blade template engine which makes connection between HTML codes and PHP commands very easy. 
        </p>
        <p style="font-size:21px;">
            &#9679; Third is artisan. A very nice tool in Laravel to work with tinker, create controllers, authentication system, migrations, models, etc.
        </p>
        <p style="font-size:21px;">
            &#9679; Fourth tool is Eloquent ORM. By means of Eloquent ORM, it is possible to make queries simply and also have tables that are related to each other by one-to-one, one-to-many, many-to-one and many-to-many relationships.
        </p>
        <p style="font-size:21px;">
          &#9679; At last, the fifth effective Laravel tool is Authentication modules. They magically simplify the very frustrating process of users authentication and things like password resetting.
      </p>
      </div>
  </div>
@endsection