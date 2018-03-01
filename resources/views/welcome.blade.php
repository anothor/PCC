@extends('templates.default')
@section('title', 'Page Title')
@section('keywords', 'keyword')
@section('description', 'Description')
@section('robots', 'index,follow') <!-- noindex -->

@section('fb_og')
<meta property="og:url"                content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="Title" />
<meta property="og:description"        content="Description" />
<meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
@endsection

@section('header')
<div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('https://static.pexels.com/photos/189349/pexels-photo-189349.jpeg');">
    </div>
    <div class="content-center">
        <h1 class="title">This is our great company.</h1>
        <div class="text-center">
            <a href="#pablo" class="btn btn-primary btn-icon  btn-round">
                <i class="fa fa-facebook-square"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                <i class="fa fa-google-plus"></i>
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="section section-basic" id="basic-elements">
    <div class="container">
        <h3 class="title">Basic Elements</h3>
        <h4>Buttons</h4>
        <p class="category">Pick your style</p>
        <div class="row">
            <div class="col-md-10">
                <button class="btn btn-primary" type="button">Default</button>
                <button class="btn btn-primary btn-round" type="button">Round</button>
                <button class="btn btn-primary btn-round" type="button">
                    <i class="now-ui-icons ui-2_favourite-28"></i> With Icon
                </button>
                <button class="btn btn-primary btn-icon btn-round" type="button">
                    <i class="now-ui-icons ui-2_favourite-28"></i>
                </button>
                <button class="btn btn-primary btn-simple btn-round" type="button">Simple</button>
            </div>
        </div>
        <p class="category">Pick your size</p>
        <div class="row">
            <div class="col-md-10">
                <button class="btn btn-primary btn-sm">Small</button>
                <button class="btn btn-primary">Regular</button>
                <button class="btn btn-primary btn-lg">Large</button>
            </div>
        </div>
        <p class="category">Pick your color</p>
        <div class="row">
            <div class="col-md-10">
                <button class="btn">Default</button>
                <button class="btn btn-primary">Primary</button>
                <button class="btn btn-info">Info</button>
                <button class="btn btn-success">Success</button>
                <button class="btn btn-warning">Warning</button>
                <button class="btn btn-danger">Danger</button>
                <button class="btn btn-neutral">Neutral</button>
            </div>
        </div>
        <h4>Links</h4>
        <div class="row">
            <div class="col-md-8">
                <button class="btn btn-link">Default</button>
                <button class="btn btn-link btn-primary ">Primary</button>
                <button class="btn btn-link btn-info">Info</button>
                <button class="btn btn-link btn-success">Success</button>
                <button class="btn btn-link btn-warning">Warning</button>
                <button class="btn btn-link btn-danger">Danger</button>
            </div>
        </div>
        <!--                 social buttons		         -->
        <div id="social-buttons">
            <h4>Social Buttons</h4>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <p class="category">Default</p>
                    <button class="btn btn-twitter">
                        <i class="fa fa-twitter"></i> Connect with Twitter
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <p class="category">&nbsp;</p>
                    <button class="btn btn-icon btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <p class="category">&nbsp;</p>
                    <button class="btn btn-icon btn-round btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <p class="category">Neutral</p>
                    <button class="btn btn-icon btn-neutral btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <p class="category">&nbsp;</p>
                    <button class="btn btn-neutral btn-twitter">
                        <i class="fa fa-twitter"></i> Connect with Twitter
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <button class="btn btn-facebook">
                        <i class="fa fa-facebook-square"></i> Share · 2.2k
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-facebook">
                        <i class="fa fa-facebook"> </i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-round btn-facebook">
                        <i class="fa fa-facebook"> </i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-neutral btn-facebook">
                        <i class="fa fa-facebook-square"> </i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button class="btn btn-neutral btn-facebook">
                        <i class="fa fa-facebook-square"></i> Share · 2.2k
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <button class="btn btn-google">
                        <i class="fa fa-google"></i> Share on Google+
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon  btn-google">
                        <i class="fa fa-google"> </i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-round btn-google">
                        <i class="fa fa-google"> </i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-neutral btn-google">
                        <i class="fa fa-google"> </i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button class="btn btn-neutral btn-google">
                        <i class="fa fa-google"></i> Share on Google+
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <button class="btn btn-linkedin">
                        <i class="fa fa-linkedin-square"></i> Connect with Linkedin
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon  btn-linkedin">
                        <i class="fa fa-linkedin"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-round btn-linkedin">
                        <i class="fa fa-linkedin"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-neutral btn-linkedin">
                        <i class="fa fa-linkedin-square"></i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button class="btn btn-neutral btn-linkedin">
                        <i class="fa fa-linkedin-square"></i> Connect with Linkedin
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <button class="btn btn-pinterest">
                        <i class="fa fa-pinterest"></i> Pint it · 212
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-pinterest">
                        <i class="fa fa-pinterest"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-round btn-pinterest">
                        <i class="fa fa-pinterest"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-neutral btn-pinterest">
                        <i class="fa fa-pinterest"></i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button class="btn btn-neutral btn-pinterest">
                        <i class="fa fa-pinterest"></i> Pint it · 212
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <button class="btn btn-youtube">
                        <i class="fa fa-youtube-play"></i> View on Youtube
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-youtube">
                        <i class="fa fa-youtube"> </i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-round btn-youtube">
                        <i class="fa fa-youtube"> </i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-neutral btn-youtube">
                        <i class="fa fa-youtube"> </i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button class="btn btn-neutral btn-youtube">
                        <i class="fa fa-youtube-play"></i> View on Youtube
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <button class="btn btn-tumblr">
                        <i class="fa fa-tumblr-square"></i> Repost
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon  btn-tumblr">
                        <i class="fa fa-tumblr"> </i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-round btn-tumblr">
                        <i class="fa fa-tumblr"> </i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-neutral btn-tumblr">
                        <i class="fa fa-tumblr-square"> </i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button class="btn btn-neutral btn-tumblr">
                        <i class="fa fa-tumblr-square"></i> Repost
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <button class="btn btn-github">
                        <i class="fa fa-github"></i> Connect with Github
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon  btn-github">
                        <i class="fa fa-github"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-round btn-github">
                        <i class="fa fa-github"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-neutral btn-github">
                        <i class="fa fa-github"></i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button class="btn btn-neutral btn-github">
                        <i class="fa fa-github"></i> Connect with Github
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <button class="btn btn-behance">
                        <i class="fa fa-behance-square"></i> Follow us
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon  btn-behance">
                        <i class="fa fa-behance"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-round btn-behance">
                        <i class="fa fa-behance"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-neutral btn-behance">
                        <i class="fa fa-behance"></i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button class="btn btn-neutral btn-behance">
                        <i class="fa fa-behance-square"></i> Follow us
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <button class="btn btn-dribbble">
                        <i class="fa fa-dribbble"></i> Find us on Dribble
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon  btn-dribbble">
                        <i class="fa fa-dribbble"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-round btn-dribbble">
                        <i class="fa fa-dribbble"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-neutral btn-dribbble">
                        <i class="fa fa-dribbble"></i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button class="btn btn-neutral btn-dribbble">
                        <i class="fa fa-dribbble"></i> Find us on Dribble
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <button class="btn btn-reddit">
                        <i class="fa fa-reddit"></i> Repost · 232
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon  btn-reddit">
                        <i class="fa fa-reddit"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-round btn-reddit">
                        <i class="fa fa-reddit"></i>
                    </button>
                </div>
                <div class="col-md-1 col-sm-1">
                    <button class="btn btn-icon btn-neutral btn-reddit">
                        <i class="fa fa-reddit"></i>
                    </button>
                </div>
                <div class="col-md-3 col-sm-4">
                    <button class="btn btn-neutral btn-reddit">
                        <i class="fa fa-reddit"></i> Repost · 232
                    </button>
                </div>
            </div>
        </div>
        <!--                 end social buttons -->
        <div class="space-70"></div>
        <div id="inputs">
            <h4>Inputs</h4>
            <p class="category">Form Controls</p>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group">
                        <input type="text" value="" placeholder="Regular" class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group has-success">
                        <input type="text" value="Success" class="form-control form-control-success" />
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="form-group has-danger">
                        <input type="email" value="Error Input" class="form-control form-control-danger" />
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user-circle"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Left Font Awesome Icon">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Right Nucleo Icon">
                        <span class="input-group-addon">
                            <i class="now-ui-icons users_single-02"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-70"></div>
        <!--                 select -->
        <div class="select">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        <h4>Customizable Select</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-5">
                            <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round" title="Single Select">
                                <option disabled selected>Single Option</option>
                                <option value="2">Foobar</option>
                                <option value="3">Is great</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-5">
                            <select class="selectpicker" data-style="btn btn-info btn-round" multiple title="Choose City" data-size="7">
                                <option disabled> Multiple Options</option>
                                <option value="2">Paris </option>
                                <option value="3">Bucharest</option>
                                <option value="4">Rome</option>
                                <option value="5">New York</option>
                                <option value="6">Miami </option>
                                <option value="7">Piatra Neamt</option>
                                <option value="8">Paris </option>
                                <option value="9">Bucharest</option>
                                <option value="10">Rome</option>
                                <option value="11">New York</option>
                                <option value="12">Miami </option>
                                <option value="13">Piatra Neamt</option>
                                <option value="14">Paris </option>
                                <option value="15">Bucharest</option>
                                <option value="16">Rome</option>
                                <option value="17">New York</option>
                                <option value="18">Miami </option>
                                <option value="19">Piatra Neamt</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="title">
                        <h4>Dropdown & Dropup</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-8">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-round dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8">
                            <div class="dropup">
                                <button class="btn btn-primary btn-round dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropup
                                </button>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--                 end select -->
        <div class="space-70"></div>
        <!--				 textarea/tags -->
        <div id="textareaTags">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        <h4>Textarea</h4>
                    </div>
                    <textarea class="form-control" name="name" rows="4" cols="80" placeholder="You can write your text here..."></textarea>
                </div>
                <div class="col-md-6">
                    <div class="title">
                        <h4>Tags</h4>
                    </div>
                    <input type="text" value="Amsterdam,Washington,Sydney,Beijing" class="tagsinput" data-role="tagsinput" data-color="danger" />
                    <!-- You can change data-color="rose" with one of our colors primary | warning | info | danger | success -->
                </div>
            </div>
        </div>
        <div class="space-70"></div>
        <div class="row" id="checkRadios">
            <div class="col-sm-6 col-lg-3">
                <p class="category">Checkboxes</p>
                <div class="checkbox">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1">
                        Unchecked
                    </label>
                </div>
                <div class="checkbox">
                    <input id="checkbox2" type="checkbox" checked="">
                    <label for="checkbox2">
                        Checked
                    </label>
                </div>
                <div class="checkbox">
                    <input id="checkbox3" type="checkbox" disabled="">
                    <label for="checkbox3">
                        Disabled unchecked
                    </label>
                </div>
                <div class="checkbox">
                    <input id="checkbox4" type="checkbox" checked="" disabled="">
                    <label for="checkbox4">
                        Disabled checked
                    </label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <p class="category">Radios</p>
                <div class="radio">
                    <input type="radio" name="radio1" id="radio1" value="option1">
                    <label for="radio1">
                        Radio is off
                    </label>
                </div>
                <div class="radio">
                    <input type="radio" name="radio1" id="radio2" value="option2" checked="">
                    <label for="radio2">
                        Radio is on
                    </label>
                </div>
                <div class="radio">
                    <input type="radio" name="radio3" id="radio3" value="option3" disabled="">
                    <label for="radio3">
                        Disabled radio is off
                    </label>
                </div>
                <div class="radio">
                    <input type="radio" name="radio4" id="radio4" value="option4" checked="" disabled="">
                    <label for="radio4">
                        Disabled radio is on
                    </label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <p class="category">Toggle Buttons</p>
                <input type="checkbox" name="checkbox" class="bootstrap-switch" checked/>
                <br>
                <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" />
            </div>
            <div class="col-sm-6 col-lg-3">
                <p class="category">Sliders</p>
                <div id="sliderRegular" class="slider"></div>
                <br>
                <div id="sliderDouble" class="slider slider-primary"></div>
            </div>
        </div>
    </div>
</div>

@endsection
