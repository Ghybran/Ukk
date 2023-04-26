<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('laporan') }}
        </h2>
    </x-slot>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table id="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>pelapor</th>
                                <th>laporan</th>
                                <th>tanggal</th>
                                <th colspan="2">aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($report as $x )
                            <tr>
                            <form action="update" method="POST">
                                @csrf
                                <td><input type="text" name="id" value="{{$x->id}}"></td>
                                <td><input type="text" name="pelapor" value="{{$x->pelapor}}"></td>
                                <td><input type="text" name="laporan"value="{{$x->laporan}}"></td>
                                <td><input type="date" name="tanggal_melapor" value="{{$x->tanggal_melapor}}"></td>
                                <td class="inline-flex">
                                    <button type="submit"
                                    class="bg-green-300 px-3 py-2 rounded-lg mt-2"
                                    >update</button>
                                </form>
                                <form action="/delete" method="POST" id="delete{{$x->id}}">
                                    @csrf
                                    <input type="text" name="id" value="{{$x->id}}" hidden/>
                                    <button type="submit"
                                    class="bg-red-300 px-3 py-2 rounded-lg mt-2"
                                    >delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <span>Membuat laporan</span>
                        <form action="/create" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="pelapor">pelapor</label>
                                <input type="number" name="pelapor" placeholder="masukan laporan yang ingin dilapor ..." class="border-0" required>
                            </div>
                            <div class="mb-4">
                                <label for="laporan">laporan</label>
                                <input type="text" name="laporan" placeholder="masukan laporan yang ingin dilapor ..." class="border-0" required>
                            </div>
                            <div class="mb-4">
                                <label for="tanggal">Tanggal melapor</label>
                                <input type="date" name="tanggal_melapor" class="border-0" required>
                            </div>

                            <button class="px-4 py-2 rounded-lg bg-sky-400">Tambahkan</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</x-app-layout>
