<x-admin-layout>
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> Dashboard </h2>

            @if (Auth::user()->role == 'admin')
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
            @elseif (Auth::user()->role == 'doctor')
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"> Your Appointments </h4>

                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Name</th>
                                    <th class="px-4 py-3">Email</th>
                                    <th class="px-4 py-3">Phone</th>
                                    <th class="px-4 py-3">Doctor</th>
                                    <th class="px-4 py-3">Date</th>
                                    <th class="px-4 py-3">Message</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @foreach ($appointments as $appointment)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3 text-sm"> {{ $appointment['patient_name'] }} </td>
                                        <td class="px-4 py-3 text-sm"> {{ $appointment['patient_email'] }} </td>
                                        <td class="px-4 py-3 text-sm"> {{ $appointment['patient_phone'] }} </td>
                                        <td class="px-4 py-3 text-sm"> {{ $appointment->doctor['name'] }} </td>
                                        <td class="px-4 py-3 text-sm"> {{ $appointment['appointment_date'] }} </td>   
                                        <td class="px-4 py-3 text-sm truncate"> {{ $appointment['message'] }} </td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </main>
</x-admin-layout>