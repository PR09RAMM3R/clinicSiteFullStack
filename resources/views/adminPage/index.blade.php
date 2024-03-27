<x-layout.mainAdmin>

    <x-slot:SideBarActiveIn>
        active
    </x-slot:SideBarActiveIn>
    <div class="container">
        
        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="navbar-bg text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0 text-dark">Shifokorlar</h4>
                    <a class="btn btn-warning" href="{{ route('doctors.create') }}">Qo'shish</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">ID</th>
                                <th scope="col">Rasm (link)</th>
                                <th scope="col">Ism Familya</th>
                                <th scope="col">Mutaxasisligi</th>
                                <th scope="col">Malakasi</th>
                                <th scope="col">Ish vaqti</th>
                                <th scope="col">Telefon raqam</th>
                                <th scope="col">Xona raqam</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td class="id">{{ $doctor->id }}</td>
                                    <td>
                                        @if ($doctor->photo === null)
                                            Rasm yo'q
                                        @else
                                            <a href="/storage/{{ $doctor->photo }}">Link</a>
                                        @endif
                                    </td>
                                    <td class="uName">{{ $doctor->name }}</td>
                                    <td>{{ $doctor->job }}</td>
                                    <td>{{ $doctor->malakasi }}</td>
                                    <td>{{ $doctor->ish_vaqti }}</td>
                                    <td>{{ $doctor->telefon_raqam }}</td>
                                    <td style="width: 200px !important;overflow:hidden;">{{ $doctor->xona_raqami }}</td>
                                    <td style="display: flex; justify-content: space-evenly;">
                                        <a class="btn btn-sm btn-success" href="{{ route('doctors.edit', ['shifokor' => $doctor->id]) }}">
                                            <img src="./adminImg/edit.png" alt="edit icon" width="20px" height="20px">
                                        </a>
                                        <form action="{{ route('doctors.delete', ['shifokor'=>$doctor->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-primary" onclick="confirm('Rostdan ham ushbu shifokor olib tashlansinmi?')">
                                                <img src="./adminImg/delete.png" alt="delete icon" width="20px" height="20px">
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->
    </div>
    <!-- Content End -->
</x-layout.mainAdmin>