<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=IBM+Plex+Serif');
@import url('https://fonts.googleapis.com/css?family=Pacifico');


#banner {
  background-image: url("public/images/banner.jpg");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 580px;
}

.banner-title {
  font-family: 'Pacifico', cursive;
  font-size: 5rem;
  background-image: linear-gradient( 60deg, #FCCF31 15%, #F55555 80%);
  background-image: -webkit-linear-gradient( 60deg, #FCCF31 15%, #F55555 80%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transform: translateY(-100%);
  opacity: 0;
  transition: all .3s;
}

.banner-button {
  transform: translateY(100px);
  opacity: 0;
}
.banner-button > a {
  background: #f7b042;
  color: #fff;
}
.banner-button > a:hover {
  background: #DE4313;
}

</style>

<div id="banner" class="d-flex align-items-center">
  <div class="w-100">
    <h2 class="text-center p-4 banner-title">Welcome to our shop !</h2>
    <p class="text-center banner-button" >
      <a class="btn " href="" >New books</a>
      <a class="btn " href="" >Books on sale</a>
    </p>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function($) {
    $('.banner-title').css({
      'transform': 'translateY(0px)',
      'opacity': '1',
      'transition': 'all 1s'
    });;
    $('.banner-button').css({
      'transform': 'translateY(0)',
      'opacity': '1',
      'transition': 'all 1s'
    });

  });
</script>