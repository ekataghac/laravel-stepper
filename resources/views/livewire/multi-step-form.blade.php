<div>
    <ul class="stepper">
        <li class="stepper__item complete"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" srcset="" > Intro
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" srcset="" >Disclosure</li>
        <li class="stepper__item current"><img src="{{asset('images/3-blue.png')}}" class="tick" alt="tickimg" srcset="" >Requestor</li>
        <li class="stepper__item"><img src="{{asset('images/4-grey.png')}}" class="tick" alt="tickimg" srcset="" >Subject</li>
        <li class="stepper__item"><img src="{{asset('images/5-grey.png')}}" class="tick" alt="tickimg" srcset="" >Review</li>
      </ul>
      <br>
      <div class="box">
        <p><b>Request Information</b></p>
        <p class="textcss">Contact Information for the person requesting the name check. Results will be sent to the email address below.</p><hr>
        <div class="row">
            <div class="column">
            <form wire:submit.prevent="register">
        @csrf
        {{-- Step 1 --}}

        @if($currentStep == 1 )
        <div class="step-one">
                <div class="card-body">
                    <div class="row">
                        You can click on the next option
                    </div>
                </div>
        </div>
        @endif

        {{-- Step 2 --}}
        @if($currentStep == 2 )
        <div class="step-two">
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
        @endif

        {{-- Step 3 --}}
        @if($currentStep == 3 )
        <div class="step-three">
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
        @endif

        {{-- Step 4 --}}
        @if($currentStep == 4 )
        <div class="step-four">
                <div class="card-body">
                    <div class="row">
                        Subject
                    </div>
                </div>
        </div>
        @endif
        
        {{-- Step 5 --}}
        @if($currentStep == 5 )
        <div class="step-five">
                <div class="card-body">
                    <div class="row">
                        Review
                    </div>
            </div>
        </div>
        @endif
        <!-- adding actions card -->
        <div id="action-buttons-container">
            <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
                @if($currentStep == 1 )
                <div></div>
                @endif

                @if($currentStep == 2 || $currentStep == 3 ||$currentStep == 4 ||$currentStep == 5)
                <button type="button" class="btn btn-sm btn-secondary btncss" wire:click="decreaseStep()">Back</button>
                @endif 

                @if($currentStep == 1 || $currentStep == 2 ||$currentStep == 3 ||$currentStep == 4)
                <button type="button" class="btn btn-sm btn-success btncss" wire:click="increaseStep()">Next</button>
                @endif 

                @if($currentStep == 5 )
                <button type="submit" class="btn btn-sm btn-primary btncss">Submit</button>
                @endif
            </div>
        </div>
    </form>
            </div>
            <div class="column">
              <p><img src="{{asset('images/insyc.svg')}}" alt="" srcset="" class="imgside"></p>
            </div>
          </div>
      </div>
    
</div>
