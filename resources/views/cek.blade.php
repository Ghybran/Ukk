<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                        <center>

                        <center>
                            <h1>  <b> BILS </b></h1>
                        </center>


                            @foreach ($orders as $item)


                            @endforeach
                    <ul>
                        <b>
                            <li><b>id boking=</b>[{{$item->id}}]</li><br>
                            <li><b>atas nama=</b>[{{$item->nama_pemesan}}]</li><br>
                            <li><b>tanggal chek in=</b>[{{$item->chek_in}}]</li><br>
                            <li><b>tanggal chek out=</b>[{{$item->chek_out}}]</li><br>
                            <li><b>jumlah kamar=</b>[{{$item->jumlah}}]</li><br>
                            <li><b>email=</b>[{{$item->email}}]</li><br>
                            <li><b>no_hp=</b>[{{$item->no_hp}}]</li><br>
                            <li><b>tipe=</b>[{{$item->tipe}}]</li>
                        </b>

                    </ul>
                        <button onclick="window.print()" class="bg-gray-400">Print bils</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
