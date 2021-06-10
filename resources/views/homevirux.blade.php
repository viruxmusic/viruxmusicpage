@extends('appvirux')

@section('content')

 <!-- MAIN -->
 <main id="main">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/vrx1.JPG" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/vrx2.JPG" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/vrx3.JPG" class="d-block w-100" alt="...">
          </div>

          <div class="overlay">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6 offset-md-6 text-md-left text-center">
                  <h1>Virux</h1>
                  <p class="d-none d-md-block">ViruxMusic hoy.
                  </p>
                  <button class="btn btn-outline-light">PressKit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 </main>

 <!-- CARDS -->
 <!-- <section id="cursos" class="mt-4">
   <div class="container">
    <div class="row">
      <div class="col text-center text-uppercase">
        <h5 style="color: white;">Información del artista</h5>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img src="img/vrx4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Información & Trayectoria</h5>
        <p class="card-text">Virux hoy una tendencia y promesa
          mexicana innovadora como
          Dj/Producer mexicano. <br><br>
          
          En su carrera ha compartido escenarios
          con Dj’s nacionales e internacionales
          tales como Carnage, Mr Pig, Modestep,
          Mau Moctezuma, Bonhaus, Noizilla, 
          Alfred Beck, RDHS, Joe Parra,
          Tom & Collins, Mastachi, Cesar Carrillo,
          Kill The Clowns,  y más...
          <br><br>
          Desde sus comienzos obteniedo
          crecimiento y éxito en la industria
          musical acompañado de sus tracks
          originales, remixes, mashups, etc...</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img src="img/vrx5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Contacto</h5>
        <p class="card-text">
          León, Gto <br>
          CP. 37530 <br>
          Oscar López <br>
          477 752 08 09 <br>
          Virux Music Copyright. <br><br><br><br>
        </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img src="img/vrx6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tour</h5>
            <p class="card-text">Tour actual desde marzo 2021 a julio 2021 República mexicana. <br>
              Beach Eve (Los Cabos, B.C.S.) <br>
              Ryu H&R (Los Cabos, B.C.S.) <br>
              Holi Dance of Colours (Leòn) <br>
              Fenix Festival (F. I. Globo) <br>
              I Scream Festival (F. I. Globo) <b></b>
              Heineken Lights Terrace (Guadalajara) <br>
              EME (Arandas, Jalisco) <br>
              Jackie O´ Day Club (León) <br>
              Rhino (Leòn) <br>
              Lap (Dolores Hidalgo) <br>
              Monroe Club (León) <br>
              Borakay (L. M. Jalisco) <br>
              Histórico (San Miguel de Allende) <br>
              Rakau Garden (León) <br>
            </p>  
            <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
   </div>
 </section> -->

 <!-- BOOKERS -->
 <section id="clase-online">
   <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-12 pl-0 pr-0">
        <img src="img/vrx7.jpg" alt="">
      </div>
      <div class="col-lg-6 pt-4 pb-4">
        <h2>Sé parte del equipo de bookers a nivel nacional</h2>
        <p>Registrate al equipo que conforman <br> todos los bookers a nivel nacional <br> para 
          traer exponentes como <br> Virux Music a diferentes estados de la <br> república, obteniendo 
          ingresos por comisión <br> según la fecha y lugar agendados para <br> el beneficio de todo este movimiento.
          <br>
          Da click y enterate como ser parte de esta familia.
        </p>
        <a href="#" class="btn btn-outline-light">Quiero ser Booker</a>
      </div>
    </div>
   </div>
 </section>

 <!-- SÉ BOOKER -->
 <section id="se-maestro" class="pt-4 pb-4">
   <div class="container">
    <div class="row">
      <div class="col text-center">
        <small class="text-uppercase" style="color: white;">Conviertete en un</small>
        <h2 style="color: white;">Booker Oficial</h2>
      </div>
    </div>
    <div class="row">
      <div class=" col text-center" style="color: white;">
        Participa en el proceso de selección y forma parte del equipo 
        <abbr title="Nombre de tu nueva familia">Virux Music</abbr> 
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 pt-2">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-6 form-group">
              <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-12 col-md-6 form-group">
              <input type="text" class="form-control" placeholder="Apellidos">
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <textarea name="descripcion" class="form-control"></textarea>
              <small style="color: white;">Forma parte de la familia</small>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <button type="button" class="btn btn-tecnoeduca btn-block">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
   </div>
 </section>

@endsection