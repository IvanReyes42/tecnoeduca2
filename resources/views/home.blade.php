@extends('app')
@section('content')

 <!-- MAIN -->
 <main id="main">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/img1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/img2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/img3.jpg" class="d-block w-100" alt="...">
          </div>

          <div class="overlay">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-md-6 text-md-right offset-md-6 text-center">
                        <h1>TecnoEduca</h1>
                        <p class="d-none d-md-block">Por Fin disponible en linea, un evento que vale la pena comparti,
                            la primera experiencia online con profesionales que llevan el aprendizaje a otro nivel.
                        </p>
                        <a href="{{route('registro')}}" class="btn btn-outline-light">Quiero ser Alumno</a>
                        <button class="btn btn-tecnoeduca">Más Información</button>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
</main>
<!-- END MAIN -->
<!-- CURSOS -->
    <section class="mt-4" id="cursos">
        <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <small>Conoce Nuestros</small> <h2>cursos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4 col-md-6 col-lg-4 ">
                    <div class="card">
                        <img src="images/html.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">HTML</h5>
                          <p class="card-text">HTML es un lenguaje que se utiliza para el desarrollo de páginas de internet.<br><br></p>
                          <a href="#" class="btn btn-tecnoeduca" data-toggle="modal" data-target="#htmlModal">Ver Curso</a>
                        </div>
                      </div>
                </div>

                <div class="col-12 mb-4 col-md-6 col-lg-4 ">
                    <div class="card">
                        <img src="images/css.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">CSS</h5>
                          <p class="card-text">Hojas de estilo en cascada, es el lenguaje de estilos utilizado para describir la presentación en documentos HTML.</p>
                          <a href="#" class="btn btn-tecnoeduca">Ver Curso</a>
                        </div>
                      </div>
                </div>

                <div class="col-12 mb-4 col-md-6 col-lg-4 ">
                    <div class="card">
                        <img src="images/javascript.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">JavaScript</h5>
                          <p class="card-text">JavaScript es un lenguajede programación ligero interpretado, o compilado con funciones de primera clase.</p>
                          <a href="#" class="btn btn-tecnoeduca">Ver Curso</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
<!-- END CURSOS -->
<!-- CLASE ONLINE -->
  <section id="Clase-online">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-12 p-0">
            <img src="images/Joven.png" alt="">
          </div>
          <div class="col-lg-6 col-12 pb-4 pt-4">
            <h2>Clase de prueba online Agosto 2021</h2>
            <p>
              Registrate a la clase de prueba online, rellena el formulario de contacto para que poedamos tener más Información
              sobre tus necesidades especificas y puedas concretar una clase gratuita de 30 minutos
              con el profesor que mejor se adapte a tus necesidades academicas.
            </p>
            <a href="#" class="btn btn-outline-light">Registrate</a>
          </div>
        </div>
      </div>
  </section>
<!-- END CLASE ONLINE -->

<!-- SE MAESTRO -->
<section  class="pt-4 pb-4" id="se-maestro"> 
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <small class="text-uppercase"> Conviertete en un </small>
        <h2>Maestro</h2>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        Participa en el proceso de deleccion y forma parte del equipo <abb data-toggle="tooltip" title="Es el nombre de tu nueva familia">TecnoEduca</abb> 
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 pt-2">

        <form>
          <div class="form-row row">
            <div class="col-12 col-md-6 form-group">
              <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-12 col-md-6 form-group">
              <input type="text" class="form-control" placeholder="Apellido">
            </div>
          </div>
          
          <div class="form-row row">
            <div class="col form-group">
              <textarea name="Descripción" class="form-control" ></textarea>
              <small>Incluye un titulo en tu descripción</small>
            </div>
          </div>
          
         
          <div class="form-row row">
            <div class="col form-group">
              <button type="button" class="btn btn-tecnoeduca btn-block">Enviar</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
</section>
<!-- END SE MAESTRO -->

@endsection 
