<x-admin-layout>
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> Update Doctor </h2>
            <!-- General elements -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"> Update doctor informations </h4>
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
                            @if (strcmp($doctor['doctor_department'], '1') == 0)  
                                <option value="1" selected>General Surgery</option>
                            @else
                                <option value="1">General Surgery</option>
                            @endif
                            @if (strcmp($doctor['doctor_department'], '2') == 0)  
                                <option value="2" selected>Gastroenterology</option>
                            @else
                                <option value="2">Gastroenterology</option>
                            @endif
                            @if (strcmp($doctor['doctor_department'], '3') == 0)  
                                <option value="3" selected>Nutrition &amp; Dietetics</option>
                            @else
                                <option value="3">Nutrition &amp; Dietetics</option>
                            @endif
                            @if (strcmp($doctor['doctor_department'], '4') == 0)  
                                <option value="4" selected>Cardiology</option>
                            @else
                                <option value="4">Cardiology</option>
                            @endif
                            @if (strcmp($doctor['doctor_department'], '5') == 0)  
                                <option value="5" selected>Neurology</option>
                            @else
                                <option value="5">Neurology</option>
                            @endif
                            @if (strcmp($doctor['doctor_department'], '6') == 0)  
                                <option value="6" selected>Pediatric</option>
                            @else
                                <option value="6">Pediatric</option>
                            @endif
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