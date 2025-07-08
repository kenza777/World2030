<!doctype html>
<html lang="en">
  
  
<!-- Mirrored from oxentictemplates.in/templatemonster/gambolsports/soccer/matches.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Jul 2025 14:01:08 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soccer club - Matches </title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('../../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700;800&amp;family=Cormorant:wght@500&amp;family=Josefin+Sans:wght@400;500;600&amp;family=Merriweather:wght@300;400;700;900&amp;family=Nunito:wght@300;400;500;600&amp;family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Playfair+Display:wght@400;500;600;700;800;900&amp;family=Quicksand:wght@300;400;500;600;700&amp;family=Roboto:wght@300;400;500;700&amp;family=Saira+Condensed:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
   

    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}"/>

    <link rel="stylesheet" href="{{ asset('../../../../cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css') }}"/>
   
    
  </head>

<body>
  
  <header class="float-start w-100">
    
   <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <a class="navbar-brand" href="{{ url('index') }}">
          <img src="{{ asset('images/logo.png') }}" alt="logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('matches') }}">Matches</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="{{ url('about.html') }}">The Club</a>
            </li>

            <li class="nav-item">
               <a class="nav-link " href="{{ url('schedule.html') }}">Schedule</a>
             </li>

             <li class="nav-item">
               <a class="nav-link " href="{{ url('news.html') }}">News</a>
             </li>

             <li class="nav-item">
               <a class="nav-link " href="{{ url('players.html') }}">Players</a>
             </li>

             <li class="nav-item">
               <a class="nav-link " href="{{ url('media.html') }}">Media</a>
             </li>
             <li class="nav-item">
               <a class="nav-link " href="{{ url('shop.html') }}">Shop</a>
             </li>

             <li class="nav-item">
               <a class="nav-link " href="{{ url('contact.html') }}">Contact</a>
             </li>

             <li class="nav-item">
               <a class="nav-link btn join-btn" href="{{ url('#') }}">join Now</a>
             </li>

             <li class="nav-item">
               <a class="nav-link btn bar-btn" href="{{ url('#') }}"><i class="fas fa-bars"></i></a>
             </li>

          </ul>
          
        </div>
      </div>
    </nav>
    
  </header>   
 
<section class="sub-main-banner float-start w-100">
     

            <div class="sub-banner">
                <div class="container">
                    <h1 class="text-center"> Matches</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('#') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Matches</li>
                        </ol>
                    </nav>
               </div>
            </div>

   

     <div class="cart-sec-ban">
      <ul class="list-unstyled">
         <li>
           <a href="{{ url('#') }}" class="btn"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
           </a>
         </li>
         <li>
           <a href="{{ url('#') }}" class="btn"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
           </a>
         </li>
      </ul>
     </div>

</section>

<section class="body-part-total float-start w-100">
   
         <div class="matech-div-main my-5">
              <div class="mn-next-part">
                   <div class="container">
                       <h2 class="comon-heading m-0"> Fixtures </h2>

                       <ul class="nav nav-pills mb-3 mt-4" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" 
                          data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">First Team</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" 
                          data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                          Under 21s</button>
                        </li>
                       
                        
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="comon-mateches">
                                 <h3 class="com-in-head"> Next Matches </h3>
                                 <div class="cmimatch">
                                     <div class="m-date text-center">
                                       <h5>  28
                                         <span class="d-block"> Aug </span> </h5>
                                     </div>
                                     <div class="m-dal d-flex justify-content-between align-items-center">
                                          <figure class="d-flex align-items-center m-0">
                                             <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                             <figcaption class="ms-2">
                                                 France FC
                                             </figcaption>
                                          </figure>
                                          <span> VS </span>
                                          <figure class="d-flex align-items-center m-0">
                                            <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                            <figcaption class="ms-2">
                                                France FC
                                            </figcaption>
                                         </figure>
                                     </div>
                                     <p class="loct">
                                        <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                        /<span> 19:20</span>
                                     </p>
                                   

                                     <a href="{{ url('matches-details.html') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                        <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                      </svg> </a>
                                 </div>
                            </div>


                            <div class="comon-mateches">
                                <h3 class="com-in-head"> Oct-Nov 2022 </h3>

                                <div class="cmimatch">
                                    <div class="m-date text-center">
                                      <h5>  05
                                        <span class="d-block"> Oct </span> </h5>
                                    </div>
                                    <div class="m-dal d-flex justify-content-between align-items-center">
                                         <figure class="d-flex align-items-center m-0">
                                            <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                            <figcaption class="ms-2">
                                                France FC
                                            </figcaption>
                                         </figure>
                                         <span> VS </span>
                                         <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                    </div>
                                    <p class="loct">
                                       <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                       /<span> 19:20</span>
                                    </p>
                                  

                                    <a href="{{ url('#') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                       <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                     </svg> </a>
                                </div>

                                <div class="cmimatch">
                                    <div class="m-date text-center">
                                      <h5>  08
                                        <span class="d-block"> Oct </span> </h5>
                                    </div>
                                    <div class="m-dal d-flex justify-content-between align-items-center">
                                         <figure class="d-flex align-items-center m-0">
                                            <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                            <figcaption class="ms-2">
                                                France FC
                                            </figcaption>
                                         </figure>
                                         <span> VS </span>
                                         <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                    </div>
                                    <p class="loct">
                                       <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                       /<span> 19:20</span>
                                    </p>
                                  

                                    <a href="{{ url('#') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                       <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                     </svg> </a>
                                </div>

                                <div class="cmimatch">
                                    <div class="m-date text-center">
                                      <h5>  12
                                        <span class="d-block"> Oct </span> </h5>
                                    </div>
                                    <div class="m-dal d-flex justify-content-between align-items-center">
                                         <figure class="d-flex align-items-center m-0">
                                            <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                            <figcaption class="ms-2">
                                                France FC
                                            </figcaption>
                                         </figure>
                                         <span> VS </span>
                                         <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                    </div>
                                    <p class="loct">
                                       <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                       /<span> 19:20</span>
                                    </p>
                                  

                                    <a href="{{ url('#') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                       <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                     </svg> </a>
                                </div>

                            </div>

                            <div class="comon-mateches">
                                <h3 class="com-in-head"> Jan-Mar 2023 </h3>

                                <div class="cmimatch">
                                    <div class="m-date text-center">
                                      <h5>  05
                                        <span class="d-block"> Jan </span> </h5>
                                    </div>
                                    <div class="m-dal d-flex justify-content-between align-items-center">
                                         <figure class="d-flex align-items-center m-0">
                                            <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                            <figcaption class="ms-2">
                                                France FC
                                            </figcaption>
                                         </figure>
                                         <span> VS </span>
                                         <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                    </div>
                                    <p class="loct">
                                       <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                       /<span> 19:20</span>
                                    </p>
                                  

                                    <a href="{{ url('#') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                       <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                     </svg> </a>
                                </div>

                                <div class="cmimatch">
                                    <div class="m-date text-center">
                                      <h5>  12
                                        <span class="d-block"> Jan </span> </h5>
                                    </div>
                                    <div class="m-dal d-flex justify-content-between align-items-center">
                                         <figure class="d-flex align-items-center m-0">
                                            <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                            <figcaption class="ms-2">
                                                France FC
                                            </figcaption>
                                         </figure>
                                         <span> VS </span>
                                         <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                    </div>
                                    <p class="loct">
                                       <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                       /<span> 19:20</span>
                                    </p>
                                  

                                    <a href="{{ url('#') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                       <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                     </svg> </a>
                                </div>

                                <div class="cmimatch">
                                    <div class="m-date text-center">
                                      <h5>  20
                                        <span class="d-block"> Mar </span> </h5>
                                    </div>
                                    <div class="m-dal d-flex justify-content-between align-items-center">
                                         <figure class="d-flex align-items-center m-0">
                                            <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                            <figcaption class="ms-2">
                                                France FC
                                            </figcaption>
                                         </figure>
                                         <span> VS </span>
                                         <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                    </div>
                                    <p class="loct">
                                       <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                       /<span> 19:20</span>
                                    </p>
                                  

                                    <a href="{{ url('#') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                       <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                     </svg> </a>
                                </div>

                            </div>


                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="comon-mateches">
                                <h3 class="com-in-head"> Next Matches </h3>
                                <div class="cmimatch">
                                    <div class="m-date text-center">
                                      <h5>  28
                                        <span class="d-block"> Aug </span> </h5>
                                    </div>
                                    <div class="m-dal d-flex justify-content-between align-items-center">
                                         <figure class="d-flex align-items-center m-0">
                                            <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                            <figcaption class="ms-2">
                                                France FC
                                            </figcaption>
                                         </figure>
                                         <span> VS </span>
                                         <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                    </div>
                                    <p class="loct">
                                       <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                       /<span> 19:20</span>
                                    </p>
                                  

                                    <a href="{{ url('#') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                       <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                     </svg> </a>
                                </div>
                           </div>


                           <div class="comon-mateches">
                               <h3 class="com-in-head"> Oct-Nov 2022 </h3>

                               <div class="cmimatch">
                                   <div class="m-date text-center">
                                     <h5>  05
                                       <span class="d-block"> Oct </span> </h5>
                                   </div>
                                   <div class="m-dal d-flex justify-content-between align-items-center">
                                        <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                        <span> VS </span>
                                        <figure class="d-flex align-items-center m-0">
                                          <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                          <figcaption class="ms-2">
                                              France FC
                                          </figcaption>
                                       </figure>
                                   </div>
                                   <p class="loct">
                                      <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                      /<span> 19:20</span>
                                   </p>
                                 

                                   <a href="{{ url('#') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                      <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                    </svg> </a>
                               </div>

                               <div class="cmimatch">
                                   <div class="m-date text-center">
                                     <h5>  08
                                       <span class="d-block"> Oct </span> </h5>
                                   </div>
                                   <div class="m-dal d-flex justify-content-between align-items-center">
                                        <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                        <span> VS </span>
                                        <figure class="d-flex align-items-center m-0">
                                          <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                          <figcaption class="ms-2">
                                              France FC
                                          </figcaption>
                                       </figure>
                                   </div>
                                   <p class="loct">
                                      <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                      /<span> 19:20</span>
                                   </p>
                                 

                                   <a href="{{ url('#') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                      <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                    </svg> </a>
                               </div>

                               <div class="cmimatch">
                                   <div class="m-date text-center">
                                     <h5>  12
                                       <span class="d-block"> Oct </span> </h5>
                                   </div>
                                   <div class="m-dal d-flex justify-content-between align-items-center">
                                        <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                        <span> VS </span>
                                        <figure class="d-flex align-items-center m-0">
                                          <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                          <figcaption class="ms-2">
                                              France FC
                                          </figcaption>
                                       </figure>
                                   </div>
                                   <p class="loct">
                                      <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                      /<span> 19:20</span>
                                   </p>
                                 

                                   <a href="{{ url('#') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                      <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                    </svg> </a>
                               </div>

                           </div>

                           <div class="comon-mateches">
                               <h3 class="com-in-head"> Jan-Mar 2023 </h3>

                               <div class="cmimatch">
                                   <div class="m-date text-center">
                                     <h5>  05
                                       <span class="d-block"> Jan </span> </h5>
                                   </div>
                                   <div class="m-dal d-flex justify-content-between align-items-center">
                                        <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                        <span> VS </span>
                                        <figure class="d-flex align-items-center m-0">
                                          <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                          <figcaption class="ms-2">
                                              France FC
                                          </figcaption>
                                       </figure>
                                   </div>
                                   <p class="loct">
                                      <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                      /<span> 19:20</span>
                                   </p>
                                 

                                   <a href="{{ url('matches-details.html') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                      <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                    </svg> </a>
                               </div>

                               <div class="cmimatch">
                                   <div class="m-date text-center">
                                     <h5>  12
                                       <span class="d-block"> Jan </span> </h5>
                                   </div>
                                   <div class="m-dal d-flex justify-content-between align-items-center">
                                        <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                        <span> VS </span>
                                        <figure class="d-flex align-items-center m-0">
                                          <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                          <figcaption class="ms-2">
                                              France FC
                                          </figcaption>
                                       </figure>
                                   </div>
                                   <p class="loct">
                                      <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                      /<span> 19:20</span>
                                   </p>
                                 

                                   <a href="{{ url('matches-details.html') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                      <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                    </svg> </a>
                               </div>

                               <div class="cmimatch">
                                   <div class="m-date text-center">
                                     <h5>  20
                                       <span class="d-block"> Mar </span> </h5>
                                   </div>
                                   <div class="m-dal d-flex justify-content-between align-items-center">
                                        <figure class="d-flex align-items-center m-0">
                                           <img src="{{ asset('images/fc-1.jpg') }}" alt="ft"/>
                                           <figcaption class="ms-2">
                                               France FC
                                           </figcaption>
                                        </figure>
                                        <span> VS </span>
                                        <figure class="d-flex align-items-center m-0">
                                          <img src="{{ asset('images/fc-2.jpg') }}" alt="ft"/>
                                          <figcaption class="ms-2">
                                              France FC
                                          </figcaption>
                                       </figure>
                                   </div>
                                   <p class="loct">
                                      <i class="fas fa-map-marker-alt"></i> SGF Stadium, London
                                      /<span> 19:20</span>
                                   </p>
                                 

                                   <a href="{{ url('matches-details.html') }}" class="btn details-btn"> View Details  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                                      <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                                    </svg> </a>
                               </div>

                           </div>
                        </div>
                        
                      </div>


                   </div>
              </div>
         </div>


</section>


<footer class="py-5 float-start w-100">

   <div class="container">
        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col">
                 <div class="comon-footer">
                     <h5> Contact Info </h5>
                     <p class="col-lg-10">We're a professional football club in Kolkata, India, founded in 1990.
                        It is a long established fact.
                     </p>
                     <ul class="list-unstyled d-flex align-items-center mt-2">
                          <li>
                            <a href="{{ url('#') }}"> <i class="fab fa-facebook"></i> </a>
                          </li>
                          <li class="mx-2">
                           <a href="{{ url('#') }}"> <i class="fab fa-twitter"></i> </a>
                         </li>
                         <li>
                           <a href="{{ url('#') }}"><i class="fab fa-instagram"></i> </a>
                         </li>
                     </ul>
                 </div>
            </div>

            <div class="col">
               <div class="comon-footer">
                   <h5> Resources </h5>
                   <ul class="list-unstyled">
                       <li>
                         <a href="{{ url('#') }}"> Matches </a>
                       </li>
                       <li>
                        <a href="{{ url('#') }}"> The Club </a>
                       </li>
                       <li>
                        <a href="{{ url('#') }}"> Member </a>
                       </li>
                       <li>
                        <a href="{{ url('#') }}"> News </a>
                       </li>
                       <li>
                        <a href="{{ url('#') }}"> Players </a>
                       </li>

                       <li>
                        <a href="{{ url('#') }}"> Media </a>
                       </li>

                       <li>
                        <a href="{{ url('#') }}"> Shop </a>
                       </li>

                       <li>
                        <a href="{{ url('#') }}"> Contact </a>
                       </li>
                   </ul>
                   
               </div>
            </div>

            <div class="col">
               <div class="comon-footer">
                   <h5>Newsletter</h5>
                   <p> We'll send updates straight to your Mail. Let's Do stay connected!</p>
                   <div class="d-flex mt-3 align-items-center">
                      <input type="text" class="form-control" placeholder="Enter Email"/>
                      <button type="submit" class="btn scub-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                           <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                         </svg>
                      </button>
                   </div>
                   
               </div>
            </div>

        </div>
        <hr/>
        <p class="text-center copy-t"> Copyright 2020 Soccer FC Club, All Right Reserved</p>
   </div>
</footer>





<script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('js/jquery.min.js') }}" ></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('../../../../unpkg.com/aos%402.3.0/dist/aos.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}" ></script>
<script src="{{ asset('../../../../cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js') }}"></script>

<script>
    AOS.init({
      offset: 100,
      easing: 'ease',
      delay: 0,
      once: true,
      duration: 800,
    
    });
    
</script>

<script>
   $(document).ready(function(){
   var TIMEOUT = 6000;
 
 var interval = setInterval(handleNext, TIMEOUT);
 
 function handleNext() {
   var $radios = $('input[class*="slide-radio"]');
   var $activeRadio = $('input[class*="slide-radio"]:checked');
 
   var currentIndex = $activeRadio.index();
   var radiosLength = $radios.length;
 
   $radios.attr("checked", false);
 
   if (currentIndex >= radiosLength - 1) {
     $radios.first().attr("checked", true);
   } else {
     $activeRadio.next('input[class*="slide-radio"]').attr("checked", true);
   }
 }
 });
 </script>

 

</body>

<!-- Mirrored from oxentictemplates.in/templatemonster/gambolsports/soccer/matches.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Jul 2025 14:01:09 GMT -->
</html>
