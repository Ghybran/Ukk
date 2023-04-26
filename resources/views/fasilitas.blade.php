<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-WHITE dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-yellow-100">
                <div>
                    <center>


                <div>
                    <img src="img/wellcome.jpg" class="h-1/2 w-10/12">
                </div><br>
            </center>
                <div class="p-6 text-gray-900 dark:text-yellow-100">

                        <style>
                            .bingkai {
                              border: 3px solid ;
                              }

                              /* Kode margin untuk gambar */
                              .margin-gambar {
                              margin: 30px;
                              }
                              </style>


                        <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                        <div class="tm-content-box">
                                            <img src="img/kamar_vip.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                                            <h4 class="tm-margin-b-20 tm-gold-text">KAMAR VIP</h4>
                                            <p class="tm-margin-b-10">
                                                @foreach ($fa as $x)
                                                <td>
                                                    <b>{{$x->bg_vip}}<br>
                                             </td>
                                                  @endforeach

                                            </p>
                                            <a href="kepadatan" class="tm-btn text-uppercase">Read More</a>
                                        </div>
                                    </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="tm-content-box">
                                        <img src="img/kamar_reguler.jpg" height="10px" alt="Image" class="tm-margin-b-20 img-fluid">
                                        <h4 class="tm-margin-b-20 tm-gold-text">KAMAR REGULAR</h4>
                                        <p class="tm-margin-b-20">
                                             @foreach ($fa as $x)
                                           <td>
                                               <b>{{$x->bg_regular}}<br>
                                        </td>
                                             @endforeach

                                        </p>
                                        <a href="jumlah" class="tm-btn text-uppercase">Read More</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="tm-content-box">
                                        <img src="img/kamar_standart.jpg" height="10px" alt="Image" class="tm-margin-b-20 img-fluid">
                                        <h4 class="tm-margin-b-20 tm-gold-text">KAMAR STANDAR</h4>
                                        <p class="tm-margin-b-20">
                                            @foreach ($fa as $x)
                                            <td>
                                                <b>{{$x->bg_standart}}<br>
                                         </td>
                                              @endforeach


                                        </p>
                                        <a href="jumlah" class="tm-btn text-uppercase">Read More</a>
                                    </div>
                                </div>


</x-app-layout>
