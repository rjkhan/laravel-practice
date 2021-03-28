<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <ol style="list-style-type:upper-roman">
                    @foreach ($messages as $message)
                   
                    <li>{{ $message->message }}</li> 
                    <a href="{{ route('messages.edit', ['message' => $message]) }}" >Edit</a> | 
                    <form action="{{ route('messages.destroy',$message->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >Delete</button>
                    </form>
                    @endforeach
                </ol> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
