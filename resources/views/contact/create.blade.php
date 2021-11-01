@extends('layout')

@section('content')

    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="heading">
          <h2>CONTACT <span>US</span></h2>
          <div class="line"></div>
          <p><span><strong>C</strong></span>ontact Us, for your project and question when it's
            nessary</p>
        </div>
      </div>
      <div class="text-center">
        <div class="col-md-6 col-sm-6 contact-sec-1">
          <h4>CONTACT UDev-<span>Tech</span></h4>
          <ul class="contact-form">
            <li><i class="fa fa-map-marker"></i>
              <h6><strong>Address:</strong> Laborex street Akwa Douala </h6>
            </li>
            <li><i class="fa fa-envelope"></i>
              <h6><strong>Mail Us:</strong> <a href="#">udevtechnology@gmail.com</a></h6>
            </li>
            <li><i class="fa fa-phone"></i>
              <h6><strong>Phone:</strong> +237 691-720-048 </h6>
            </li>
            <li><i class="fa fa-wechat"></i>
              <h6><strong>Website:</strong> <a href="#">www.Udevtech.com</a> </h6>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-6">
          <form id="main-contact-form" name="contact-form" method="post" action="/contact">
            @csrf
            <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" class="@error('name') is-invalid @enderror" placeholder="Enter Name">
                        @error('name')
                        <div class="alert alert-danger">
                            {{$errors->first('name')}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email Address" class="@error('email') is-invalid @enderror" placeholder="Enter email Address">
                    @error('email')
                        <div class="alert alert-danger">
                            {{$errors->first('email')}}
                        </div>
                    @enderror
                    </div>
                </div>
            </div>

                <div class="form-group">
                    <input type="text" name="subject" class="form-control" value="{{old('subject')}}" class="@error('subject') is-invalid @enderror" placeholder="Enter Subject">
                    @error('subject')
                    <div class="alert alert-danger">
                        {{$errors->first('subject')}}
                    </div>
                    @enderror
                </div>

            <div class="form-group">
              <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" class="@error('message') is-invalid @enderror">{{old('message')}}</textarea>
            </div>
                @error('message')
                <div class="alert alert-danger">
                    {{$errors->first('message')}}
                </div>
                @enderror
            <button class="btn-send col-md-12 col-sm-12 col-xs-12">Send Now</button>
          </form>
        </div>
      </div>
    </div>
@endsection
