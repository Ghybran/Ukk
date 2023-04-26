<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('inventory') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>harga</th>
                                <th colspan="2">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventory as $inv)

                            <tr>
                                <form action="update" method="post">
                                    @csrf
                                    <td><input type="text" name="id" value="{{$inv->id}}"></td>
                                    <td><input type="text" name="name_barang" value="{{$inv->name_barang}}"></td>
                                    <td><input type="text" name="harga_barang" value="{{$inv->harga_barang}}"></td>
                                    <td><button type="submit" class="bg-green-300 px-3 py-2 rounded-lg mt-2" value="{{$inv->id}}">update</button></td>
                                </form>
                                <form action="delete" method="post">
                                    @csrf
                                    <input type="text" name="id" value="{{$inv->id}}" hidden>{{--harus ditambahkan suapaya id yang
                                        mau dihapus diketahui dan dalam inputan tambahkan(hidden)supaya hilang  --}}
                                    <td><button type="submit" class="bg-red-300 px-3 py-2 rounded-lg mt-2">delete</button></td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="px-10 py-30">
                        <form action="insert" method="post">
                            @csrf
                            <div>
                                <label for="name_barang">name barang</label>
                                <input type="text" name="name_barang" class="rounded-lg"><br>
                            </div>
                            <div>

                                <label for="harga_barang">harga barang</label>
                                <input type="text" name="harga_barang" class="rounded-lg">

                                <button type="submit" class="bg-green-300 rounded-md">simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
