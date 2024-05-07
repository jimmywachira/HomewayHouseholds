        @csrf
        <div class="card p-4 m-4 border border-grey shadow">
        <div class="">
            <label for="name">name</label>
            <input class="p-2 m-2 border border-black-600 rounded" type="text" name="name" autocomplete="off"  >
            <div class="text-red-600">
                @error('name') <p>{{ $message }}</p> @enderror
            </div>
        </div>
   
        <div class="rounded">
            <label for="details">details</label>
            <input class="p-2 m-2 border border-black-600 rounded" type="text" name="details" autocomplete="off">
            <div class="text-red-600">
                @error('details') <p>{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="rounded">
            <label for="price">price</label>
            <input class="p-2 m-2 border border-black-600 rounded" type="number" name="price" autocomplete="off">
            <div class="text-red-600">
                @error('price') <p>{{ $message }}</p> @enderror
            </div>
        </div>
    </div>