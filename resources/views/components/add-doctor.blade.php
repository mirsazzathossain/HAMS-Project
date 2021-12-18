<x-admin-layout>
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> Add New Doctor </h2>

            <!-- General elements -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"> Insert doctor informations </h4>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form action="/admin/add-doctor" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Photo</span>
                        <input name="image" type="file" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"/>
                    </label>
                    
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Name</span>
                        <input name="name" type="text" placeholder="Enter name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        <input name="email" type="email" placeholder="Enter email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Phone</span>
                        <input name="phone" type="phone" placeholder="Enter phone" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Address</span>
                        <textarea name="address" type="address" placeholder="Enter address" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
                    </label>

                    <div class="mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400"> Gender </span>
                        <div class="mt-2">
                            <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                <input type="radio" class="text-purerple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="gender" value="Male" />
                                <span class="ml-2">Male</span>
                            </label>
                            <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="gender" value="Female" />
                                <span class="ml-2">Female</span>
                            </label>
                        </div>
                    </div>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400"> Department </span>
                        <select name="department" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="none" selected="" disabled="">Department</option>
                            <option value="1">General Surgery</option>
                            <option value="2">Gastroenterology</option>
                            <option value="3">Nutrition &amp; Dietetics</option>
                            <option value="4">Cardiology</option>
                            <option value="5">Neurology</option>
                            <option value="6">Pediatric</option>
                        </select>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Profession</span>
                        <input name="profession" type="text" placeholder="Enter profession" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Speciality</span>
                        <input name="speciality" type="text" placeholder="Enter speciality" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Conditions</span>
                        <input name="conditions" type="text" placeholder="Enter Conditions" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Experience</span>
                        <input name="experience" type="text" placeholder="Enter Experience" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Tagline</span>
                        <input name="tagline" type="text" placeholder="Enter Tagline" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>
                    
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Biography</span>
                        <textarea name="biography" type="text" placeholder="Enter Biography" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Research Interests</span>
                        <textarea name="research_interests" type="text" placeholder="Enter Research Interests" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Doctor Memberships (Seperated by comma)</span>
                        <textarea name="doctor_memberships" type="text" placeholder="Enter Doctor Memberships" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Doctor Awards (Seperated by comma)</span>
                        <textarea name="doctor_awards" type="text" placeholder="Enter Doctor Awards" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Doctor Education (Seperated by comma)</span>
                        <textarea name="doctor_education" type="text" placeholder="Enter Doctor Education" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Social Links (Seperated by comma)</span>
                        <textarea name="social_links" type="text" placeholder="Enter Social Links" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Password</span>
                        <input name="password" type="password" placeholder="Enter Password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <div class="block mt-4">
                        <button type="submit" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>    
</x-admin-layout>