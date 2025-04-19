<!doctype html>
<title>Formato site</title>
<link rel="stylesheet" href="{{ asset('/css/gridSite.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body>
  <article id="mainArticle">

    <div class="cards">
      <x-card></x-card>
      
    </div>

    <div class="btns">
      <x-btns></x-btns>
    </div>

    
    <div class="grafico">
      <x-graph></x-graph>
    </div>

    
   
    

  </article>
  <nav id="mainNav">
    
    <x-sidebar></x-sidebar>
  </nav>

</body>