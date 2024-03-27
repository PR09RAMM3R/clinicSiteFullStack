<x-layout.mainAdmin>

    <x-slot:SideBarActiveIn>
        active
    </x-slot:SideBarActiveIn>

    <form action="{{ route("doctors.store") }}" method="POST" enctype="multipart/form-data" class="w-75 p-3 m-auto">
        @csrf
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputImage">Upload Image</label>
            <input type="file" class="form-control border border-light" id="inputImage" name="photo">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Ism Familya</label>
            <input type="text" class="form-control border border-light" id="name" name="name" placeholder="John Doe">
        </div>
        <div class="mb-3">
            <label for="Tnumber" class="form-label">Telefon Raqam</label>
            <input type="text" class="form-control border border-light" id="Tnumber" name="telefon_raqam" placeholder="911234567">
        </div>
        <div class="mb-3">
            <label for="job" class="form-label">Mutaxasisligi</label>
            <input type="text" class="form-control border border-light" id="job" name="job" placeholder="Kardiolog">
        </div>
        <div class="mb-3">
            <label for="malaka" class="form-label">Malakasi</label>
            <input type="text" class="form-control border border-light" id="malaka" name="malakasi" placeholder="5">
        </div>
        <div class="mb-3">
            <label for="JTime" class="form-label">Ish Vaqti</label>
            <input type="text" class="form-control border border-light" id="JTime" name="ish_vaqti" placeholder="8:00-20:00">
        </div>
        <div class="mb-3">
            <label for="jDay" class="form-label mainCheckLabel">Ish Kuni</label>
            <input type="text" class="form-control border border-light" id="jDay" name="ish_kuni" placeholder="6">

            <input type="checkbox" name="" id="dushanba">
            <label for="dushanba" class="cLabel checkLabel1">D</label>

            <input type="checkbox" name="" id="seshanba">
            <label for="seshanba" class="cLabel checkLabel2">S</label>

            <input type="checkbox" name="" id="chorshanba">
            <label for="chorshanba" class="cLabel checkLabel3">Ch</label>

            <input type="checkbox" name="" id="payshanba">
            <label for="payshanba" class="cLabel checkLabel4">P</label>

            <input type="checkbox" name="" id="juma">
            <label for="juma" class="cLabel checkLabel5">J</label>

            <input type="checkbox" name="" id="shanba">
            <label for="shanba" class="cLabel checkLabel6">Sh</label>
        </div>
        <div class="mb-3">
            <label for="Rnumber" class="form-label">Xona Raqami</label>
            <input type="text" class="form-control border border-light" id="Rnumber" name="xona_raqami" placeholder="10">
        </div>
        <input type="submit" value="Jo'natish" class="btn btn-light">
    </form>
    <script src="../adminJs/script.js"></script>

</x-layout.mainAdmin>