<x-admin-layout>
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> Update Doctor </h2>
            <!-- General elements -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"> Update doctor informations </h4>

            @if (session('success'))
                <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form action="/admin/update-doctor" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <input class="hidden" name="id" value="{{$doctor['id']}}" />
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Photo</span>
                        <input name="image" type="file" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
                    </label>
                    
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Name</span>
                        <input name="name" type="text" value="{{$doctor['name']}}" placeholder="Enter name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        <input name="email" type="email" value="{{$doctor['email']}}" placeholder="Enter email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Phone</span>
                        <input name="phone" type="phone" value="{{$doctor['phone']}}" placeholder="Enter phone" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Address</span>
                        <textarea name="address" type="address" placeholder="Enter address" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content.">{{$doctor['address']}}</textarea>
                    </label>

                    <div class="mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400"> Gender </span>
                        <div class="mt-2">
                            <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                @if (strcmp($doctor['gender'], 'Male') == 0)
                                    <input checked type="radio" class="text-purerple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="gender" value="Male" />
                                @else
                                    <input type="radio" class="text-purerple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="gender" value="Male" />
                                @endif
                                
                                <span class="ml-2">Male</span>
                            </label>
                            <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                @if (strcmp($doctor['gender'], 'Female') == 0)
                                    <input checked type="radio" class="text-purerple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="gender" value="Female" />
                                @else
                                    <input type="radio" class="text-purerple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="gender" value="Female" />
                                @endif
                                <span class="ml-2">Female</span>
                            </label>
                        </div>
                    </div>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400"> Department </span>
                        <select name="department" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="none" selected="" disabled="">Department</option>
                            @foreach ($departments as $department)
                                @if (strcmp($doctor['department_id'], $department->id ) == 0)  
                                    <option value="{{ $department->id }}" selected>{{ $department->department_name }}</option>
                                @else
                                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                @endif
                            @endforeach
                            
                        </select>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Profession</span>
                        <input name="profession" type="text" value="{{$doctor['doctor_profession']}}" placeholder="Enter profession" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Speciality</span>
                        <input name="speciality" type="text" value="{{$doctor['doctor_speciality']}}" placeholder="Enter speciality" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Conditions</span>
                        <input name="conditions" type="text" value="{{$doctor['doctor_conditions']}}" placeholder="Enter Conditions" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Experience</span>
                        <input name="experience" type="text" value="{{$doctor['doctor_experience']}}" placeholder="Enter Experience" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Tagline</span>
                        <input name="tagline" type="text" value="{{$doctor['doctor_tagline']}}" placeholder="Enter Tagline" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>
                    
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Biography</span>
                        <textarea name="biography" type="text"  placeholder="Enter Biography" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content.">{{$doctor['doctor_biography']}}</textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Research Interests</span>
                        <textarea name="research_interests" type="text"  placeholder="Enter Research Interests" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content.">{{$doctor['doctor_research_interests']}}</textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Doctor Memberships (Seperated by comma)</span>
                        <textarea name="doctor_memberships" type="text"  placeholder="Enter Doctor Memberships" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content.">{{implode(', ', $doctor['doctor_memberships'])}}</textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Doctor Awards (Seperated by comma)</span>
                        <textarea name="doctor_awards" type="text"  placeholder="Enter Doctor Awards" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content.">{{implode(', ', $doctor['doctor_awards'])}}</textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Doctor Education (Seperated by comma)</span>
                        <textarea name="doctor_education" type="text"  placeholder="Enter Doctor Education" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content.">{{implode(', ', $doctor['doctor_education'])}}</textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Social Links (Seperated by comma)</span>
                        <textarea name="social_links" type="text"  placeholder="Enter Social Links" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content.">{{implode(', ', $doctor['social_links'])}}</textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Schedule (Seperated by comma. Ex: Mon-Tue 8:30-12:30,Wed-Thu 12:30-20:30, Friday 8:30-12:00 )</span>
                        <textarea name="schedule" type="text" placeholder="Enter Schedule" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content.">{{implode(', ', $doctor['doctor_schedule'])}}</textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Password</span>
                        <input name="password" type="password" placeholder="Enter Password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <div class="block mt-4">
                        <button type="submit" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>    
</x-admin-layout>