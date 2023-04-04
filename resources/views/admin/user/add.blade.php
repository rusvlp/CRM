<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="post" action="{{ route('admin_create_user') }}">
            {{ csrf_field() }}

            <div class="mb-1000 ">
                <div class="h-7"></div>
                <label for="lName" class="block  text-lg font-medium text-gray-900 ">Фамилия</label>
                <div class="h-3"></div>
                <input type="text" name = "last_name" id="lName" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Сатдаров" required>

                <div class="h-7"></div>
                <label for="fName" class="block mb-2 text-lg font-medium text-gray-900 ">Имя</label>
                <div class="h-3"></div>
                <input type="text" name = "first_name" id="fName" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Михаил" required>

                <div class="h-7"></div>
                <label for="mName" class="block  text-lg font-medium text-gray-900 ">Отчество</label>
                <div class="h-3"></div>
                <input type="text" name = "middle_name" id="mName" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Романович" required>

                <div class="h-7"></div>
                <label for="username" class="block  text-lg font-medium text-gray-900 ">Имя пользователя</label>
                <div class="h-3"></div>
                <input type="text" name = "name" id="username" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="m1k3j3sus" required>

                <div class="h-7"></div>
                <label for="password" class="block  text-lg font-medium text-gray-900 ">Пароль</label>
                <div class="h-3"></div>
                <input type="password" name = "password" id="password" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>


                <div class="h-7"></div>
                <label for="password_confirmation" class="block  text-lg font-medium text-gray-900 ">Подтверждение пароля</label>
                <div class="h-3"></div>
                <input type="password" name = "password_confirmation" id="password_confirmation" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>

                @isset($password_error)
                <div class="block mb-2 text-lg font-medium text-red-600">Пароли не совпадают!</div>
                @endisset
                <div class="h-7"></div>
                <label for="email" class="block  text-lg font-medium text-gray-900 ">E-Mail</label>
                <div class="h-3"></div>
                <input type="email" name = "email" id="email" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="misha@rusvlp.com" required>

                @isset($email_error)
                <div class="block mb-2 text-lg font-medium text-red-600">Пользователь с таким E-Mail уже существует!</div>
                @endisset
                <div class="h-7"></div>
                <label for="role" class="block  text-lg font-medium text-gray-900 ">Выберете роль</label>
                <select name="role_id" id="role"
                        class="w-full rounded-md border border-gray-300 bg-white px-[calc(theme(spacing.4)-1px)] py-[calc(theme(spacing[1.5])-1px)] placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                >
                    @foreach($roles as $id => $role)
                        <option value="{{$id}}">{{$role}}</option>
                    @endforeach

                </select>

                <div class="h-7"></div>
                <button type="submit" style="background-color: #2563eb;" class=" bg-blue-400 hover:bg-violet-100 text-white hover:border-violet-600 border
                hover:text-violet-600 px-4 py-2 rounded" >
                    Создать
                </button>

            </div>


        </form>
    </div>
</x-app-layout>
