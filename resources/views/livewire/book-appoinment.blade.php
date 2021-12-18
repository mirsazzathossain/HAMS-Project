<div>
    @include('breadcrumbs', ['route' => 'Book Appoinment'])
    <section class="appointment page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">

                    <div class="appointment-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="appointment-title">
                                    <h2>Book An Appointment</h2>
                                    <p>Please feel welcome to contact our friendly reception staff with any general or
                                        medical
                                        enquiry. Our doctors will receive or return any urgent calls.</p>
                                </div>
                            </div>
                        </div>

                        <form class="form" wire:submit.prevent='submit'>
                            @csrf

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <input type="text" wire:model="name" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <input type="email" wire:model="email" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <input type="text" wire:model="phone" id="number" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <select wire:model="department" id="department">
                                            <option value="none" selected>Department</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <select wire:model="doctor" id="doctor">
                                            <option value="none" selected>Doctor</option>
                                            @foreach ($doctors as $doctor)
                                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-input">
                                        <input wire:model="date" type="date" id="date">
                                    </div>
                                </div>
                                <div class="col-12 p-0">
                                    <div class="appointment-input">
                                        <textarea wire:model="message" placeholder="Write Your Message Here....."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 p-0">
                                    <div class="appointment-btn button">
                                        <button class="btn">Get Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>