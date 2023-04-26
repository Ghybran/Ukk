<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-WHITE dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-yellow-100">
                <div><center>

                    <div class="">
                        <img src="img/wellcome.jpg" alt="" class="h-96 w-10/12">
                    </div><br>
                    <div class="formtgl">
                        <br>
                          <form action="order" method="POST"></form>
                          <table aligin ="center" >
                              <tr>
                                  <td> <h4>Tanggal Cek In</h4></td>
                                  <td> <h4 style="margin-left:50px">Tanggal Cek Out</h4></td>
                                  <td><h4 style="margin-left:50px">Jumlah Kamar</h4></td>
                                  <tr>
                                      <td ><input type="date" class="validate[required]" id="date" name="tglcekin"></td>
                                      <td ><input type="date" class="validate[required]" id="date" name="tglcekout" style="margin-left:50px"></td>
                                      <td ><input type="text" maxlength="20" size="20" style="margin-left:50px" id="Nama" name="qpesan"/></td>

                                        <th><a href="order" class="bg-green-300">open</a></th>
                                      </tr>

                                    </table>
                                </form><br>
                            </div>
                        </center>
                            <div class="tentang">
                                <center>
                                    <b> <h2>Tentang Kami</h2> </b>
                                    <h2>Lepaskan diri anda ke Hotel Hebat,
                                dikelilingi oleh keindahan pegunungan yang indah,
                                danau, dan sawah menghijau.
                                Nikmati sore yang hangat dengan berenang di kolam renang dengan pemandangan
                                 matahari terbenam yang memukau; Kid's Club yang luas - menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000 delegasi. Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun mewujudkan acara pernikahan adat yang mewah.</h2>
                           </center>
                        </div>
                      </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
