<x-app-layout>
    <div id="warp">
        <div class="topmenu">
            </tr>
            </table>

    </div>
    <center>

        <div class="pic">
            <img src="img/wellcome.jpg"  alt="" class="h-1/2 w-10/12">
        </div>
        <div class="formtgl">
            <form action="insert_kamar" method="POST">
                @csrf
                <table>
                    <tr>
                            <td> <h4>Tanggal Cek In</h4></td>
                            <td> <h4 >Tanggal Cek Out</h4></td>
                            <td><h4 style="margin-left:50px">Jumlah Kamar</h4></td>

                        </tr>
                        <tr>
                            <td ><input type="date" name="chek_in"></td>
                            <td ><input type="date" name="chek_out"></td>
                            <td ><input type="number"  size="20"  name="jumlah" /></td>

                        </tr>
                        <br>
                        <tr>
                </table>
                <table>

                            <br> <b><h1>Form Pemesanan</h1><br>
                            </tr>


                        <tr>
                            <td> <h4>Nama Pemesan</h4></td>
                            <td><input type="text" name="nama_pemesan"></td>
                        </tr>
                        <tr>
                            <td> <h4>Email</h4></td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td>
                                <h4>hp</h4>
                            </td>
                                <td>
                                    <input type="number" pattern="[0-13]" name="no_hp">
                                </td>
                        </tr>
                                <tr>
                                    <td> <h4>Nama Tamu</h4></td>
                                    <td><input type="text"   name="nama_tamu"></td>
                                </tr>
                                <tr>
                                    <tr><td><h4>Type Kamar</h4>	</td> <td>
                                        <select class="validate[required]" name="tipe" >
                                            <option value="#">=== Pilih Kamar ===</option>
                                            <option value="vip">vip</option>
                                            <option value="reguler">reguler</option>
                                            <option value="standar">Standar</option>
                                        </select>

                                    </td></tr>

                                </tr>
                                <th></th>

                            </table>
                            <style>

                                .button {
                                    border: none;
                                    color: white;
                                    padding: 15px 32px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    margin: 4px 2px;
                                    cursor: pointer;
                                }

                                .button1 {background-color: #4CAF50;} /* Green */
                                .button2 {background-color: #008CBA;} /* Blue */
                                </style>
                          </style>
                        </head>
                        <body>

                            <button class="button button1">Green</button>

                            <br><br>

                        </div>
                    </form>

                </div>
            </center>

</x-app-layout>
