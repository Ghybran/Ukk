<x-app-layout>
    <div>
        <div>
            <div class="bg-white px-5 py-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>kegiatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurnal as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->kegiatan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <div>
                        <form action="insert" method="post">
                            @csrf
                            <td>
                                <label for="kegiatan">kegiatan</label>
                                <input type="text" name="kegiatan">
                            </td>
                            <button>tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
