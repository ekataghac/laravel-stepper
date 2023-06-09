<div>
    <form wire:submit.prevent="register">
        {{-- Step 1 --}}

        @if($currentStep == 1 )
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white"> Intro </div>
                <div class="card-body">
                    <div class="row">
                        Bye
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Step 2 --}}
        @if($currentStep == 2 )
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-white"> Disclosures </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group">
                            <label for="disclosures" class="d-block">
                                <br><input type="checkbox" id = "terms" wire:model ="terms"> 
                                You must check the disclosure form <br><a href="#">Terms and Conditions</a><span class="text-danger">*</span>
                                <br>
                                <span class="text-danger"> @error('terms') {{$message}} @enderror</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Step 3 --}}
        @if($currentStep == 3 )
        <div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary text-white"> Requestor </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">Requestor First Name</label><span class="text-danger"> *</span>
                                <input type="text" class="form-control" placeholder = "John" wire:model="first_name">
                                <span class="text-danger"> @error('first_name') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Requestor Last Name</label><span class="text-danger"> *</span>
                                <input type="text" class="form-control" placeholder = "Doe" wire:model="last_name">
                                <span class="text-danger"> @error('last_name') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Requestor Email</label><span class="text-danger"> *</span>
                                <input type="text" class="form-control" placeholder = "johndoe@gmail.com" wire:model="email">
                                <span class="text-danger"> @error('email') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email_confirmation">Email Confirmation</label><span class="text-danger"> *</span>
                                <input type="text" class="form-control" placeholder = "johndoe@gmail.com" wire:model="email_confirmation">
                                <span class="text-danger"> @error('email_confirmation') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_number">Requestor Phone</label><span class="text-danger"> *</span>
                                <div class="input-group">
                                
                                    <select class="form-select form-select-sm selectCss" aria-label=".form-select-sm example" wire:model="phone_type">
                                        <option value="mobile">Mobile</option>
                                        <option value="telephone">Telephone</option>
                                    </select>
                                    <input type="text" class="form-control inputCss" placeholder="Enter phone number" wire:model="phone_number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="text-danger"> @error('phone_number') {{$message}} @enderror</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Step 4 --}}
        @if($currentStep == 4 )
        <div class="step-four">
            <div class="card">
                <div class="card-header bg-secondary text-white"> Subject </div>
                <div class="card-body">
                    <div class="row">
                        Subject
                    </div>
                </div>
            </div>
        </div>
        @endif
        
        {{-- Step 5 --}}
        @if($currentStep == 5 )
        <div class="step-five">
            <div class="card">
                <div class="card-header bg-secondary text-white"> Review </div>
                <div class="card-body">
                    <div class="row">
                        Review
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- adding actions card -->
        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            @if($currentStep == 1 )
            <div></div>
            @endif

            @if($currentStep == 2 || $currentStep == 3 ||$currentStep == 4 ||$currentStep == 5)
            <button type= "button" class = "btn btn-sm btn-secondary" wire:click= "decreaseStep()">Back</button>
            @endif 

            @if($currentStep == 1 || $currentStep == 2 ||$currentStep == 3 ||$currentStep == 4)
            <button type= "button" class = "btn btn-sm btn-success" wire:click= "increaseStep()">Next</button>
            @endif 
            

            @if($currentStep == 5 )
            <button type="submit" class = "btn btn-sm btn-primary">Submit</button>
            @endif
            
        </div>


    </form>
</div>
