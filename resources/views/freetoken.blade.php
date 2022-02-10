<x-app-layout>
    <div class="py-12">
        @if (session('status'))
        <div style="color: green; font-weight: bold;text-align: center;font-size:30px">
            {{ session('status') }}
        </div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hello {{$username}}, je suis généreux aujourd'hui, je vais te des filler jetons gratos &#128523;<br>
                    <form action="{{ route('postfreetoken') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Argent facile</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
