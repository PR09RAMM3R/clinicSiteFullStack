<x-layout.mainAdmin>

    <x-slot:SideBarActiveIn>
        active
    </x-slot:SideBarActiveIn>

    <form action="{{ route("doctors.update", ['shifokor' => $doctor->id]) }}" method="POST" enctype="multipart/form-data" class="w-75 p-3 m-auto">
        @csrf
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputImage">Upload Image</label>
            <input type="file" class="form-control border border-light" id="inputImage" name="photo" value="{{ $doctor->photo }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Ism Familya</label>
            <input type="text" class="form-control border border-light" id="name" name="name" placeholder="John Doe" value="{{ $doctor->name }}">
        </div>
        <div class="mb-3">
            <label for="Tnumber" class="form-label">Telefon Raqam</label>
            <input type="text" class="form-control border border-light" id="Tnumber" name="telefon_raqam" placeholder="911234567" value="{{ $doctor->telefon_raqam }}">
        </div>
        <div class="mb-3">
            <label for="Tnumber" class="form-label">Mutaxasisligi</label>
            <input type="text" class="form-control border border-light" id="Tnumber" name="job" placeholder="Kardiolog" value="{{ $doctor->job }}">
        </div>
        <div class="mb-3">
            <label for="malaka" class="form-label">Malakasi</label>
            <input type="text" class="form-control border border-light" id="malaka" name="malakasi" placeholder="5" value="{{ $doctor->malakasi }}">
        </div>
        <div class="mb-3">
            <label for="JTime" class="form-label">Ish Vaqti</label>
            <input type="text" class="form-control border border-light" id="JTime" name="ish_vaqti" placeholder="8:00-20:00" value="{{ $doctor->ish_vaqti }}">
        </div>
        <div class="mb-3">
            <label for="jDay" class="form-label">Ish Kuni</label>
            <input type="text" class="form-control border border-light" id="jDay" name="ish_kuni" placeholder="6" value="{{ $doctor->ish_kuni }}">
        </div>
        <div class="mb-3">
            <label for="Rnumber" class="form-label">Xona Raqami</label>
            <input type="text" class="form-control border border-light" id="Rnumber" name="xona_raqami" placeholder="10" value="{{ $doctor->xona_raqami }}">
        </div>
        <input type="submit" value="Jo'natish" class="btn btn-light">
    </form>

</x-layout.mainAdmin>