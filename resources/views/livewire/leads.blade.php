<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <a href="/leads/create" class="bg-violet-600 hover:bg-violet-100 text-white hover:border-violet-600 border
                hover:text-violet-600 px-4 py-2 rounded">
            Добавить
        </a>

        @foreach($leads as $lead)
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-3 grid md:grid-cols-4 grid-cols-1">
            <div class="p-6 text-gray-900">
                {{$lead->comment}}
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
