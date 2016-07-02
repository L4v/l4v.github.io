<html>
  <head>
    <title>Homepage</title>
    <link rel="stylesheet" href="css/bootstrap-theme.css" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/main.css" media="screen" title="no title" charset="utf-8">
    <!--Credit for icons goes to Freepik @ flaticon.com-->
  </head>
  <body>
    <div class="site-wrapper">

         <div class="site-wrapper-inner">

           <div class="cover-container">

             <div class="masthead clearfix">
               <div class="inner">
               </div>
             </div>

             <div class="inner cover">
               <h1 class="cover-heading" id = 'welcome'></h1>
               <p class="lead"></p>
               <p class="lead" id = 'fang'>
                 <!--<a href="#" class="btn btn-lg btn-default">Learn more</a>
                 <img src="img/fangs.png" alt="" height='10%' width='10%' />-->
               </p>
             </div>

             <div class="mastfoot">
               <div class="inner">
               </div>
             </div>

           </div>

         </div>

       </div>

  <script src='js/jquery-3.0.0.js' charset="utf-8"></script>
  <script src='js/bootstrap.js' charset="utf-8"></script>
  <script type= 'text/javascript'charset="utf-8">
    $(document).ready(function(){
      var date = new Date();
      var hour = date.getHours();
      var header = document.getElementById('welcome');
      var p = document.getElementById('fang');
      var img = document.createElement('img');
      img.src = 'img/fangs.png';

      if(hour >= 6 && hour < 10){
        document.body.className = 'morning';
        header.innerHTML='Good morning!';
        }
      if(hour >= 10 && hour < 18){
        document.body.className = 'afternoon';
        header.innerHTML="Good afternoon!";
        }
      if(hour >= 18 && hour < 22){
        document.body.className = 'evening';
        header.innerHTML='Good evening!';
        $('#fang').append(img);
        $(img).css('width', '10%');
        $(img).css('height', '10%');
        }
      if(hour >= 22 || hour >= 0 && hour < 6){
        document.body.className = 'night';
        header.innerHTML= 'The night is young!';
        $('#fang').append(img);
        $(img).css('width', '10%');
        $(img).css('height', '10%');
        }
    });
  </script>
  </body>
</html>
