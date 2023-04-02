<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <a href="{{route('admin_add_user')}}" style="background-color: #2563eb;" class=" bg-blue-400 hover:bg-violet-100 text-white hover:border-violet-600 border
                hover:text-violet-600 px-4 py-2 rounded">
            Создать пользователя
        </a>

        <div class = "h-5"></div>

        @foreach($users as $user)
            <div class="bg-white overflow-hidden mt-10 shadow-sm sm:rounded-lg my-3 grid md:grid-cols-4 grid-cols-1">
                <div class="p-6 text-gray-900">
                    {{$user->first_name}}
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
