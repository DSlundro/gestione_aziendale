@error("$name")
    <div class="flex p-1 mt-1 mb-4 bg-red-100 rounded-lg">
        <x-message.error-icon />
        <div class="ml-3 text-sm font-medium text-red-700">
            Il campo <b>{{$text}}</b> è obbligatorio!
        </div>
    </div>
@enderror