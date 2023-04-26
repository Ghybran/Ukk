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
                                        <table>
                                            <tr>
                                                <th>nama barang</th>
                                                <th colspan="2">aksi</th>
                                            </tr>
                                            <tr>
                                                <form action="update_fasilitas_ad" method="post">
                                                @foreach ($fasilitas_admin as $x)
                                                <td><input type="text" value="{{$x->bg_vip}}"></td>
                                                <td><button type="submit" class="bg-green-300 px-3 py-2 rounded-lg mt-2" value="{{$x->id}}">update</button></td>
                                            </form>
                                            <form action="delete" method="post">
                                                @csrf
                                                <input type="text" name="id" value="{{$x->id}}" hidden>{{--harus ditambahkan suapaya id yang
                                                    mau dihapus diketahui dan dalam inputan tambahkan(hidden)supaya hilang  --}}
                                                <td><button type="submit" class="bg-red-300 px-3 py-2 rounded-lg mt-2">delete</button></td>
                                            </form>

                                                    @endforeach

                                                </tr>

                                                </form>
                                            </p>
                                            <form action="insert_fasilitas_ad" method="POST">
                                                @csrf
                                                barang vip: <input type="text" name="bg_vip">
                                                <br><button class="bg-green-400">tambah</button>
                                            </form>
                                        </table>
                                            {{-- <a href="kepadatan" class="tm-btn text-uppercase">Read More</a> --}}
                                        </div>
                                    </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="tm-content-box">
                                        <img src="img/kamar_reguler.jpg" height="10px" alt="Image" class="tm-margin-b-20 img-fluid">
                                        <h4 class="tm-margin-b-20 tm-gold-text">KAMAR REGULAR</h4>
                                        <p class="tm-margin-b-20">
                                             @foreach ($fasilitas_admin as $x)
                                           <td>
                                               <b>{{$x->bg_regular}}<br>
                                        </td>
                                             @endforeach

                                        </p>
                                        <form action="insert_fasilitas_ad" method="POST">
                                            @csrf
                                            barang vip: <input type="text" name="bg_reguler">
                                            <br><button class="bg-green-400">tambah</button>
                                        </form>
                                        <a href="jumlah" class="tm-btn text-uppercase">Read More</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="tm-content-box">
                                        <img src="img/kamar_standart.jpg" height="10px" alt="Image" class="tm-margin-b-20 img-fluid">
                                        <h4 class="tm-margin-b-20 tm-gold-text">KAMAR STANDAR</h4>
                                        <p class="tm-margin-b-20">


                                                </tbody>
                                            </table>
                                        </p>
                                        <form action="insert_fasilitas_ad" method="POST">
                                            @csrf
                                            barang vip: <input type="text" name="bg_standart">
                                            <br><button class="bg-green-400">tambah</button>
                                        </form>
                                        <a href="jumlah" class="tm-btn text-uppercase">Read More</a>
                                    </div>
                                </div>


</x-app-layout>
