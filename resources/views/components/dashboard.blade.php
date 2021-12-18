<x-admin-layout>
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> Dashboard </h2>

            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"> All Doctors </h4>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Photo</th>
                                <th class="px-4 py-3">Department</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Phone</th>
                                <th class="px-4 py-3">Speciality</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($doctors as $doctor)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <!-- Avatar with inset shadow -->
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                @if ($doctor['profile_photo_path'])
                                                    <img class="object-cover w-full h-full rounded-full" 
                                                        src="{{ asset('images/'.$doctor['profile_photo_path']) }}"
                                                        alt="{{ $doctor['name'] }}" loading="lazy" 
                                                    />
                                                @else
                                                    <img class="object-cover w-full h-full rounded-full" 
                                                        src="{{ $doctor['profile_photo_url'] }}"
                                                        alt="{{ $doctor['name'] }}" loading="lazy" 
                                                    />
                                                @endif
                                                
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">{{ $doctor['name'] }}</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400"> {{ $doctor['doctor_profession'] }} </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm"> {{ $doctor->department['department_name'] }} </td>
                                    <td class="px-4 py-3 text-sm"> {{ $doctor['email'] }} </td>
                                    <td class="px-4 py-3 text-sm"> {{ $doctor['phone'] }} </td>
                                    <td class="px-4 py-3 text-sm"> {{ $doctor['doctor_speciality'] }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @if (session('success'))
                <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p>{{ session('success') }}</p>
                </div>
            @endif
        </div>
    </main>
</x-admin-layout>