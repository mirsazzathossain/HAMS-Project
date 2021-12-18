<x-admin-layout>
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> Update Doctor </h2>
            <!-- General elements -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"> Update doctor informations </h4>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form action="/admin/update-appointment" method="POST">
                    @csrf

                    <input class="hidden" name="id" value="{{$appoinment['id']}}" />
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Name</span>
                        <input name="name" value="{{$appoinment['patient_name']}}" type="text" placeholder="Enter name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Email</span>
                        <input name="email" value="{{$appoinment['patient_email']}}" type="email" placeholder="Enter email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Phone</span>
                        <input name="phone" value="{{$appoinment['patient_phone']}}" type="phone" placeholder="Enter phone" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Date</span>
                        <input name="date" value="{{$appoinment['appointment_date']->format("Y-m-d")}}" type="date" placeholder="Enter Date" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400"> Department </span>
                        <select name="department" id="department" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="none" selected="" disabled="">Department</option>
                            
                            @foreach ($departments as $department)

                                @if (strcmp($appoinment->doctor['department_id'], $department->id) == 0)  
                                    <option value="{{ $department->id }}" selected>{{ $department->department_name }}</option>
                                @else
                                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400"> Doctor </span>
                        <select name="doctor" id="doctor" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            
                        </select>
                    </label>
                    
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Message</span>
                        <textarea name="message" type="text" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content.">{{$appoinment['message']}}</textarea>
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

    <script type="text/javascript">
        $(document).ready(function () {
            $('#department').on('change', function () {
                var departmentId = this.value;
                $('#doctor').html('');
                $.ajax({
                    url: '{{ route('admin.getDoctors') }}?department='+departmentId,
                    type: 'get',
                    success: function (res) {
                        $('#doctor').html('<option value="">Select Doctor</option>');
                        $.each(res, function (key, value) {
                            if ('{{$appoinment['doctor_id']}}' == value.id) {
                                $('#doctor').append('<option value="'+value.id+'" selected>'+value.name+'</option>');
                            } else {
                                $('#doctor').append('<option value="'+value.id+'">'+value.name+'</option>');
                            }
                        });
                    }
                });
            });
            $('#department').trigger('change');
        });
    </script>
</x-admin-layout>