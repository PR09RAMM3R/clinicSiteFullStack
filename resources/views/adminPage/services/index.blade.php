<x-layout.mainAdmin>

    <x-slot:SideBarActiveAt>
        active
    </x-slot:SideBarActiveAt>

    <div class="container">

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="navbar-bg text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0 text-dark">Xizmatlar</h4>
                    <a class="btn btn-warning" href="{{ route('services.create') }}">Qo'shish</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">Nomi</th>
                                <th scope="col">Kontent</th>
                                <th scope="col">Rasm</th>
                                <th scope="col" style="width: 120px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td class="uName">{{ $service->title }}</td>
                                    <td>{{ $service->content }}</td>
                                    <td style="width: 200px !important;overflow:hidden;">
                                        @if ($service->photo === null)
                                            Rasm yo'q
                                        @else
                                            <a href="/storage/{{ $service->photo }}">{{ $service->photo }}</a>
                                        @endif
                                    </td>
                                    <td style="display: flex; justify-content: space-evenly;">
                                        <a class="btn btn-sm btn-success" href="{{ route('services.edit',['xizmat'=>$service->id]) }}">
                                            <img src="../adminImg/edit.png" alt="edit icon" width="20px" height="20px">
                                        </a>
                                        <form action="{{ route('services.delete',['xizmat'=>$service->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-primary" onclick="confirm('Rostdan ham ushbu xizmat olib tashlansinmi?')">
                                                <img src="../adminImg/delete.png" alt="delete icon" width="20px" height="20px">
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