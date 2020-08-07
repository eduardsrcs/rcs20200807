@extends('layouts/blog/blog')

@section('title', $initial['header'])
    
@section('header')
    <header class="w3-container w3-center w3-padding-32">
    <h1><b>MY BLOG</b></h1>
    <p>Welcome to the blog of <span class="w3-tag">Eduards</span></p>
@endsection

@section('entries')
  <div class="w3-card-4 w3-margin w3-white">
      <img src="/assets/img/woods.jpg" alt="Nature" style="width:100%">
      <div class="w3-container">
        <h3><b>TITLE HEADING</b></h3>
        <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
      </div>

      <div class="w3-container">
        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
          tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <div class="w3-row">
          <div class="w3-col m8 s12">
            <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE &raquo;</b></button></p>
          </div>
          <div class="w3-col m4 w3-hide-small">
            <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-tag">0</span></span></p>
          </div>
        </div>
      </div>
    </div>
    <hr>

    <!-- Blog entry -->
    <div class="w3-card-4 w3-margin w3-white">
    <img src="/assets/img/bridge.jpg" alt="Norway" style="width:100%">
      <div class="w3-container">
        <h3><b>BLOG ENTRY</b></h3>
        <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE &raquo;</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-badge">2</span></span></p>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('aboutCard')
    <img src="/assets/img/avatar_g.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>My Name</b></h4>
      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
@endsection

@section('popPosts')
    <div class="w3-container w3-padding">
        <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
              <li class="w3-padding-16">
          <img src="/assets/img/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
      </li>
              <li class="w3-padding-16">
          <img src="/assets/img/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
      </li>
              <li class="w3-padding-16">
          <img src="/assets/img/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Dorum</span><br>
          <span>Ultricies conguec</span>
      </li>
              <li class="w3-padding-16">
          <img src="/assets/img/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Mingsum</span><br>
          <span>Lorem ipsum dipsum</span>
      </li>
    </ul>
@endsection

@section('labelsTags')
  <div class="w3-container w3-padding">
        <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
        <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
        </p>
    </div>
@endsection

@section('footer')
    <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
    <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next &raquo;</button>
    <a href="/blog/tm" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">Timer &raquo;</button></a>
    <a href="/cv" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">My cv &raquo;</button></a>
    <p>Powered by <a href="#" target="_blank">Eduards</a></p>
@endsection