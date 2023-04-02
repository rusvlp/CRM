<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="post" action="">
            <div class="mb-1000 mt-10">
                <div class="h-7"></div>
                <label for="lName" class="block mb-2 text-lg font-medium text-gray-900 ">Фамилия</label>
                <div class="h-3"></div>
                <input type="text" name = "last_name" id="lName" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Сатдаров" required>

                <div class="h-7"></div>
                <label for="fName" class="block mb-2 text-lg font-medium text-gray-900 ">Имя</label>
                <div class="h-3"></div>
                <input type="text" name = "first_name" id="fName" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Михаил" required>

                <div class="h-7"></div>
                <label for="mName" class="block mb-2 text-lg font-medium text-gray-900 ">Отчество</label>
                <div class="h-3"></div>
                <input type="text" name = "middle_name" id="mName" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Романович" required>

                <div class="h-7"></div>
                <label for="username" class="block mb-2 text-lg font-medium text-gray-900 ">Имя пользователя</label>
                <div class="h-3"></div>
                <input type="text" name = "name" id="username" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="m1k3j3sus" required>

                <div class="h-7"></div>
                <label for="password" class="block mb-2 text-lg font-medium text-gray-900 ">Пароль</label>
                <div class="h-3"></div>
                <input type="password" name = "password" id="password" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>

                <div class="h-7"></div>
                <label for="email" class="block mb-2 text-lg font-medium text-gray-900 ">E-Mail</label>
                <div class="h-3"></div>
                <input type="email" name = "email" id="email" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="misha@rusvlp.com" required>

                <div class="h-7"></div>
                <button type="submit" style="background-color: #2563eb;" class=" bg-blue-400 hover:bg-violet-100 text-white hover:border-violet-600 border
                hover:text-violet-600 px-4 py-2 rounded" >
                    Создать
                </button>
            </div>


        </form>
    </div>
</x-app-layout>
