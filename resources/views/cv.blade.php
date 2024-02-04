@extends('layouts.default')
 
@section('content')
    <h2 class="page-title">CV</h2>

    <div class="page-content">
        <div class="sheet">
            <div class="row">
                <div class="col-12">
                    <div class="block main-title">
                        <div class="image d-blolck"></div>

                        <div class="title d-block">
                            <h2>Görbicz Roland</h2>
                            <h4>FullStack Web-Developer</h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="block bg-alt mb-3">
                        <h4 class="block-title">Alapadatok</h4>
                        <p class="mb-0"><b>Szül.:</b> Pécs, 1992. 01. 28.</p>
                        <p class="mb-0"><b>Lakhely:</b> Pécs</p>
                        <p class="mb-0"><b>Telefon:</b> +36 70/852 0903</p>
                        <p class="mb-0"><b>E-mail:</b> spardasixx@gmail.com</p>
                        <p class="mb-0"><b>Web:</b> https://gorbiczroland.hu</p>
                    </div>

                    <div class="block bg-alt mb-3">
                        <h4 class="block-title">Stack</h4>

                        <b>FrontEnd</b><br>
                        @foreach($frontend as $stack)
                        <p class="stack frontend mb-1 d-inline-block">{{$stack->technology}}</p>
                        @endforeach

                        <br><br>

                        <b>BackEnd</b><br>
                        @foreach($backend as $stack)
                        <p class="stack backend mb-1 d-inline-block">{{$stack->technology}}</p>
                        @endforeach

                        <br><br>

                        <b>Egyéb</b><br>
                        @foreach($other as $stack)
                        <p class="stack other mb-1 d-inline-block">{{$stack->technology}}</p>
                        @endforeach
                    </div>

                    <div class="block bg-alt mb-3">
                        <h4 class="block-title">Egyéb</h4>
                        <p class="mb-0"><b>Nyelvek:</b> Angol felsőfok, Német alapfok</p>
                        <p class="mb-0"><b>Jogosítvány:</b> Nincs</p>
                    </div>
                </div>

                <div class="col-12 col-md-8">
                    <div class="block bg-alt mb-3">
                        <h4 class="block-title">Tanulányok</h4>

                        <table class="w-100">
                            <tr>
                                <td>2012 - 2014</td>
                                <td>PTE-PMMIK</td>
                                <td>Web-programozó</td>
                            </tr>

                            <tr>
                                <td>2011 - 2012</td>
                                <td>PTE-TTK</td>
                                <td>Programtervező informatikus</td>
                            </tr>

                            <tr>
                                <td>2006 - 2011</td>
                                <td>ANK Gimnázium</td>
                                <td>Emelt informatika</td>
                            </tr>
                        </table>
                    </div>

                    <div class="block bg-alt mb-3">
                        <h4 class="block-title">Tapasztalat</h4>

                        <table class="w-100">
                            <tr>
                                <td>2023 - </td>
                                <td>onlinePénztárca</td>
                                <td>FullStack fejlesztő</td>
                            </tr>

                            <tr>
                                <td>2022 - 2023</td>
                                <td>EU Solar</td>
                                <td>PHP fejlesztő</td>
                            </tr>

                            <tr>
                                <td>2022 - 2022</td>
                                <td>Rossmann Magyarország</td>
                                <td>FullStack fejlesztő</td>
                            </tr>

                            <tr>
                                <td>2019 - 2022</td>
                                <td>Ferling</td>
                                <td>Webfejlesztő</td>
                            </tr>
                        </table>
                    </div>

                    <div class="block bg-alt mb-3">
                        <h4 class="block-title">Hobbik</h4>

                        <ul>
                            <li>Whiskey gyűjtemény</li>
                            <li>PlayStation gyűjtemény</li>
                            <li>Zene</li>
                            <li>Kozmológia</li>
                            <li>Webfejlesztés</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="text-center mt-3">
                        <div class="cv-contact text-center d-inline-block mx-3">
                            <i class="fab fa-facebook"></i><br>
                            <a href="https://www.facebook.com/roland.gorbicz" target="_blank" class="contact-data">Görbicz Roland</a>
                        </div>

                        <div class="cv-contact text-center d-inline-block mx-3">
                            <i class="fab fa-instagram"></i><br>
                            <a href="https://www.instagram.com/spardasixx" target="_blank" class="contact-data">spardasixx</a>
                        </div>

                        <div class="cv-contact text-center d-inline-block mx-3">
                            <i class="fab fa-linkedin"></i><br>
                            <a href="https://hu.linkedin.com/in/roland-g%C3%B6rbicz-482b62180" target="_blank" class="contact-data">Görbicz Roland</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
