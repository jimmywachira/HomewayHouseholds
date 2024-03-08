        @csrf
        <div class="p-2 m-2">
            <label for="name">name</label>
            <input class="p-2 m-2 border border-black-600 rounded" type="text" name="name" autocomplete="off" value="{{ old('name') ?? $customer->name }}" >
            <div class="text-red-600">
                @error('name') <p>{{ $message }}</p> @enderror
            </div>  
        </div>
   
        <div class="rounded">
            <label for="email">email</label>
            <input class="p-2 m-2 border border-black-600 rounded" type="email" name="email" autocomplete="off" value="{{ old("email") ?? $customer->email }}">
            <div class="text-red-600">
                @error('email') <p>{{ $message }}</p> @enderror
            </div>
        </div>