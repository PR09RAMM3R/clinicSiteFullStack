<x-layout.mainAdmin>

    <x-slot:SideBarActiveAt>
        active
    </x-slot:SideBarActiveAt>

    <form action="{{ route("services.store") }}" method="POST" enctype="multipart/form-data" class="w-75 p-3 m-auto">
        @csrf
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputPhoto">Rasm</label>
            <input type="file" class="form-control border border-light" id="inputPhoto" name="photo">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Sarlavha</label>
            <input type="text" class="form-control border border-light" id="title" name="title" placeholder="Kardiolog">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Kontent</label>
            <textarea class="form-control border border-light" id="content" rows="3" name="content"></textarea>
        </div>
        <input type="submit" value="Jo'natish" class="btn btn-light">
    </form>

</x-layout.mainAdmin>