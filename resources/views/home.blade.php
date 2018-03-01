@extends('templates.default')
@section('title', 'Home')
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
    <div class="content-center mt-5">
        <h1 class="title">ศูนย์รวมธุรกิจ ร้านค้า บริการ ในพัทยา</h1>
        <div class="text-center my-5">
            <form id="home-search">
              <fieldset class="form-group">
                <input type="text" class="form-control" id="search-listing" placeholder="คุณกำลังมองหาอะไรอยู่">
              </fieldset>
              <div class="row">
                <div class="col-md-6 offset-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary"><h4 class="my-0">ค้นหา</h4></button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="section section-new-business" id="basic-elements">
    <div class="container">
      <!-- new business -->
        <div class="row text-center">
          <div class="col-md-8 offset-md-2">
              <h2 class="title">ธุรกิจใหม่ล่าสุด</h2>
              <h4 class="description">Here are some pictures from our office. You can see the place looks like a palace and is fully equiped with everything you need to get the job done.</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img rounded" src="https://images.pexels.com/photos/159991/pexels-photo-159991.jpeg?h=350&dpr=2&auto=compress&cs=tinysrgb">
                                </a>
                            </div>
                            <div class="card-block">
                                <h6 class="category text-primary">category</h6>
                                <h5 class="card-title">
                                    That’s One Way To Ditch Your Passenger
                                </h5>
                                <div class="card-footer">
                                  <div class="stats">
                                      <i class="now-ui-icons location_pin"></i> Location
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
          <div class="col-md-3">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img rounded" src="https://images.pexels.com/photos/325876/pexels-photo-325876.jpeg?h=350&dpr=2&auto=compress&cs=tinysrgb">
                                </a>
                            </div>
                            <div class="card-block">
                                <h6 class="category text-primary">category</h6>
                                <h5 class="card-title">
                                    That’s One Way To Ditch Your Passenger
                                </h5>
                                <div class="card-footer">
                                  <div class="stats">
                                      <i class="now-ui-icons location_pin"></i> Location
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
          <div class="col-md-3">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img rounded" src="https://images.pexels.com/photos/159991/pexels-photo-159991.jpeg?h=350&dpr=2&auto=compress&cs=tinysrgb">
                                </a>
                            </div>
                            <div class="card-block">
                                <h6 class="category text-primary">category</h6>
                                <h5 class="card-title">
                                    That’s One Way To Ditch Your Passenger
                                </h5>
                                <div class="card-footer">
                                  <div class="stats">
                                      <i class="now-ui-icons location_pin"></i> Location
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
          <div class="col-md-3">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img rounded" src="https://images.pexels.com/photos/325876/pexels-photo-325876.jpeg?h=350&dpr=2&auto=compress&cs=tinysrgb">
                                </a>
                            </div>
                            <div class="card-block">
                                <h6 class="category text-primary">category</h6>
                                <h5 class="card-title">
                                    That’s One Way To Ditch Your Passenger
                                </h5>
                                <div class="card-footer">
                                  <div class="stats">
                                      <i class="now-ui-icons location_pin"></i> Location
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
      <!-- new business -->
    </div>
</div>
<!-- add new business -->
<div class="section section-add-new" data-background-color="dark-gray">
  <div class="container text-center">
    <h2 class="title">หากคุณเป็นเจ้าของกิจการในพัทยา อย่าลืมเพิ่มข้อมูลของคุณ ฟรี!</h2>
    <h4 class="description">Here are some pictures from our office. You can see the place looks like a palace and is fully equiped with everything you need to get the job done.</h4>
    <a href="/" class="btn btn-primary btn-lg">
      <h3 class="title my-0">เพิ่มข้อมูลของคุณ ฟรี!</h3>
    </a>
  </div>
</div>
<!-- add new business -->

<!-- categories section -->
<div class="section section-categories">
  <div class="container">
      <div class="row">
              <div class="col-md-8 offset-md-2 text-center">
                  <h2 class="title">หมวดหมู่</h2>
              </div>
          </div>
      <div class="row">
              <div class="col-md-3">
                  <div class="card card-background card-raised" data-background-color style="background-image: url('https://images.pexels.com/photos/157213/pexels-photo-157213.jpeg?h=350&dpr=2&auto=compress&cs=tinysrgb')">
                      <div class="info">
                          <div class="icon icon-white">
                              <i class="now-ui-icons business_bulb-63"></i>
                          </div>
                          <div class="description">
                              <h4 class="info-title">Collaborate on ideas</h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-background card-raised" data-background-color style="background-image: url('https://images.pexels.com/photos/192933/pexels-photo-192933.jpeg?h=350&dpr=2&auto=compress&cs=tinysrgb')">
                      <div class="info">
                          <div class="icon icon-white">
                              <i class="now-ui-icons business_badge"></i>
                          </div>
                          <div class="description">
                              <h4 class="info-title">Pick your designer</h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-background card-raised" data-background-color style="background-image: url('https://images.pexels.com/photos/668196/pexels-photo-668196.jpeg?h=350&dpr=2&auto=compress&cs=tinysrgb')">
                      <div class="info">
                          <div class="icon icon-white">
                              <i class="now-ui-icons location_map-big"></i>
                          </div>
                          <div class="description">
                              <h4 class="info-title">Visualize your room</h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card card-background card-raised" data-background-color style="background-image: url('https://images.pexels.com/photos/422197/pexels-photo-422197.jpeg?h=350&auto=compress&cs=tinysrgb')">
                      <div class="info">
                          <div class="icon icon-white">
                              <i class="now-ui-icons location_map-big"></i>
                          </div>
                          <div class="description">
                              <h4 class="info-title">Visualize your room</h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </div>
</div>
<!-- categories section -->

@endsection
