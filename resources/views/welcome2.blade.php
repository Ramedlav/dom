<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    .navbar-nav>li>.dropdown-menu {
        margin-top: 20px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }
    .navbar-default .navbar-nav>li>a {
        width: 200px;
        font-weight: bold;
    }
    .mega-dropdown {
        position: static !important;
        width: 100%;
    }
    .mega-dropdown-menu {
        padding: 20px 0px;
        width: 100%;
        box-shadow: none;
        -webkit-box-shadow: none;
    }
    .mega-dropdown-menu:before {
        content: "";
        border-bottom: 15px solid #fff;
        border-right: 17px solid transparent;
        border-left: 17px solid transparent;
        position: absolute;
        top: -15px;
        left: 285px;
        z-index: 10;
    }
    .mega-dropdown-menu:after {
        content: "";
        border-bottom: 17px solid #ccc;
        border-right: 19px solid transparent;
        border-left: 19px solid transparent;
        position: absolute;
        top: -17px;
        left: 283px;
        z-index: 8;
    }
    .mega-dropdown-menu > li > ul {
        padding: 0;
        margin: 0;
    }
    .mega-dropdown-menu > li > ul > li {
        list-style: none;
    }
    .mega-dropdown-menu > li > ul > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.428571429;
        color: #999;
        white-space: normal;
    }
    .mega-dropdown-menu > li ul > li > a:hover,
    .mega-dropdown-menu > li ul > li > a:focus {
        text-decoration: none;
        color: #444;
        background-color: #f5f5f5;
    }
    .mega-dropdown-menu .dropdown-header {
        color: #428bca;
        font-size: 18px;
        font-weight: bold;
    }
    .mega-dropdown-menu form {
        margin: 3px 20px;
    }
    .mega-dropdown-menu .form-group {
        margin-bottom: 3px;
    }
</style>

<div class="container">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">БелоеМегаМеню</a>
        </div>


        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Выбор мебели <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>

                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Новые поступления</li>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img src="https://bootstraptema.ru/snippets/menu/2017/wmm/1.jpg" class="img-responsive" alt="Кухня"></a>
                                            <h4><small>Оригинальный набор кухни</small></h4>
                                            <button class="btn btn-primary" type="button">3999 €</button>
                                            <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> В Избранное</button>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <a href="#"><img src="https://bootstraptema.ru/snippets/menu/2017/wmm/2.jpg" class="img-responsive" alt="Спальня"></a>
                                            <h4><small>Оригинальный набор спальни</small></h4>
                                            <button class="btn btn-primary" type="button">2444 €</button>
                                            <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> В Избранное</button>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <a href="#"><img src="https://bootstraptema.ru/snippets/menu/2017/wmm/3.jpg" class="img-responsive" alt="Кровать"></a>
                                            <h4><small>Оригинальная кровать</small></h4>
                                            <button class="btn btn-primary" type="button">999 €</button>
                                            <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> В Избранное</button>
                                        </div>
                                        <!-- End Item -->
                                    </div>
                                    <!-- End Carousel Inner -->
                                </div>
                                <!-- /.carousel -->
                                <li class="divider"></li>
                                <li><a href="#">Вся коллекция <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                            </ul>
                        </li>
                        <form class="form" role="form" action="{{route('filters')}}" method="post">
                            @csrf
                        <li class="col-sm-3">
                            <ul>
                                <label class="dropdown-header">{{__('time on freebe')}}</label>
                                <fieldset>
                                    <div>
                                        <input type="radio" id="all_days" name="days" value="" checked>
                                        <label for="all_days" style="text-emphasis-style: initial ">{{__('show all')}}</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="today" name="days" value="today" >
                                        <label for="today">{{__('today')}}</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="3_day" name="days" value="3">
                                        <label for="3_day">{{__('3 days ago')}}</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="5_day" name="days" value="5">
                                        <label for="5_day">{{__('5 days ago')}}</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="10_day" name="days" value="10">
                                        <label for="10_day">{{__('10 days ago')}}</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="30_day" name="days" value="30">
                                        <label for="30_day">{{__('30 days ago')}}</label>
                                    </div>
                                </fieldset>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">{{__('number of rooms')}}</li>
                                <div>
                                    <input type="radio" id="all_rooms" name="rooms" value="" checked>
                                    <label for="all_rooms">{{__('show all')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="1_rooms" name="rooms" value="1" >
                                    <label for="1_rooms">{{__('1 room')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="2_rooms" name="rooms" value="2">
                                    <label for="2_rooms">{{__('2 rooms')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="3_rooms" name="rooms" value="3">
                                    <label for="3_rooms">{{__('3 rooms')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="4_rooms" name="rooms" value="4">
                                    <label for="4_rooms">{{__('4 rooms')}}</label>
                                </div>
                                <div>
                                    <input type="radio" id="5_rooms" name="rooms" value="5">
                                    <label for="5_rooms">{{__('5 rooms')}}</label>
                                </div>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">{{__('square')}}</li>
                                <li><input type="radio" id="all_square" name="square" value="" checked>
                                    <label for="all_square">{{__('show all')}}</label></li>
                                <li><input type="radio" id="50_m" name="square" value="50" >
                                    <label for="50_m">{{__('50 м² and more')}}</label></li>
                                <li><input type="radio" id="75_m" name="square" value="75">
                                    <label for="75_m">{{__('75 м² and more')}}</label></li>
                                <li><input type="radio" id="100_m" name="square" value="100">
                                    <label for="100_m">{{__('100 м² and more')}}</label></li>
                                <li><input type="radio" id="150_m" name="square" value="150">
                                    <label for="150_m">{{__('150 м² and more')}}</label></li>
                                <li><input type="radio" id="200_m" name="square" value="200">
                                    <label for="200_m">{{__('200 м² and more')}}</label></li>

                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">{{__('number of bedrooms')}}</li>
                                <li><input type="radio" id="all_bedrooms" name="bedrooms" value="" checked>
                                    <label for="all_bedrooms">{{__('show all')}}</label>
                                </li>
                                <li><input type="radio" id="1_bedrooms" name="bedrooms" value="1" >
                                    <label for="1_bedrooms">{{__('1 bedroom')}}</label>
                                </li>
                                <li><input type="radio" id="2_bedrooms" name="bedrooms" value="2">
                                    <label for="2_bedrooms">{{__('2 bedrooms')}}</label>
                                </li>
                                <li><input type="radio" id="3_rooms" name="bedrooms" value="3">
                                    <label for="3_bedrooms">{{__('3 bedrooms')}}</label>
                                </li>
                                <li><input type="radio" id="4_bedrooms" name="bedrooms" value="4">
                                    <label for="4_bedrooms">{{__('4 bedrooms')}}</label>
                                </li>
                                <li><input type="radio" id="5_bedrooms" name="bedrooms" value="5">
                                    <label for="5_bedrooms">{{__('5 and more bedrooms')}}</label>
                                </li>
                            </ul>
                        </li>
                        </form>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- /.nav-collapse -->
    </nav>
    <!-- /.container -->
</div>

<script>
    jQuery(document).on('click', '.mega-dropdown', function(e) {
        e.stopPropagation()
    });
</script>
